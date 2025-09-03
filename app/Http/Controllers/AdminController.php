<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\StatusBooking;
use App\Models\ServiceType;
use App\Models\AdditionalType;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BookingExport;

class AdminController extends Controller
{
    public function index(Request $request) {
        $tglAwal = $request->input('tglAwal') ?? now()->toDateString();
        $tglAkhir = $request->input('tglAkhir') ?? now()->toDateString();
        $statusbookings = $request->input('statusbookings'); // status dari form

        // Query dasar
        $query = Booking::with(['serviceTypes', 'additionalTypes', 'statusBooking'])
            ->whereBetween('date', [$tglAwal, $tglAkhir]);

        // Jika statusbookings diisi, tambahkan filter
        if (!empty($statusbookings)) {
            $query->where('statusbookings', $statusbookings);
        }

        $bookings = $query->orderBy('date', 'ASC')->paginate(10);

        // Statistik tetap dihitung dari semua booking dalam range tanggal (bukan hasil filter status)
        $allBookingsInRange = Booking::whereBetween('date', [$tglAwal, $tglAkhir])->get();

        $totalBookings = $allBookingsInRange->count();
        $totalPending = $allBookingsInRange->where('statusbookings', 1)->count();
        $totalCompleted = $allBookingsInRange->where('statusbookings', 2)->count();
        $totalCanceled = $allBookingsInRange->where('statusbookings', 3)->count();

        // Statistik global
        $statusCounts = [
            'Menunggu' => Booking::where('statusbookings', 1)->count(),
            'Selesai' => Booking::where('statusbookings', 2)->count(),
            'Dibatalkan' => Booking::where('statusbookings', 3)->count(),
        ];

        $monthlyData = Booking::select(DB::raw('MONTH(date) as month'), DB::raw('COUNT(*) as count'))
            ->groupBy('month')->orderBy('month')->get();

        $monthlyCounts = array_fill(0, 12, 0);
        foreach ($monthlyData as $data) {
            $monthlyCounts[$data->month - 1] = $data->count;
        }

        $recentBookings = Booking::with(['serviceTypes', 'additionalTypes', 'statusBooking'])
            ->orderby('date', 'ASC')->limit(5)->get();

        $services = ServiceType::where('statusenabled', true)->get();
        $additionals = AdditionalType::where('statusenabled', true)->get();

        return view('dashboard', compact(
            'bookings',
            'totalBookings',
            'totalPending',
            'totalCompleted',
            'totalCanceled',
            'statusCounts',
            'monthlyCounts',
            'recentBookings',
            'services',
            'additionals',
            'tglAwal',
            'tglAkhir',
            'statusbookings'
        ));
    }

    public function update(Request $request, $id) {
        $booking = Booking::findOrFail($id);
        $booking->statusbookings = $request->input('statusbookings');
        $booking->save();

        return redirect()->route('dashboard')->with('success', 'Status pemesanan berhasil diperbarui!');
    }

    public function export(Request $request)
    {
        $tglAwal = $request->input('tglAwal') ?? now()->toDateString();
        $tglAkhir = $request->input('tglAkhir') ?? now()->toDateString();
        $statusbookings = $request->input('statusbookings');

        return Excel::download(new BookingExport($tglAwal, $tglAkhir, $statusbookings), 'pemesanan_'.now()->format('Ymd_His').'.xlsx');
    }


    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'alamat' => 'required',
            'alamatmaps' => 'required',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'notes' => 'nullable|string',
            'service_types' => 'required|array|min:1',
            'service_types.*' => 'exists:servicetype,id',
            'additional_types' => 'nullable|array',
            'additional_types.*' => 'exists:additionaltypes,id',
        ]);
        
        DB::beginTransaction();
        try {
            $total = $request->input('totalharga');

            // Buat booking utama
            $booking = Booking::create([
                'name' => $validated['name'],
                'phone' => $validated['phone'],
                'alamat' => $validated['alamat'],
                'alamatmaps' => $validated['alamatmaps'],
                'date' => $validated['date'],
                'time' => $validated['time'],
                'notes' => $validated['notes'] ?? null,
                'statusenabled' => true,
                'statusbookings' => 1,
                'totalharga' => $total,
            ]);

            // Simpan layanan yang dipilih
            $booking->serviceTypes()->attach($validated['service_types']);

            // Simpan tambahan jika ada
            if (!empty($validated['additional_types'])) {
                $booking->additionalTypes()->attach($validated['additional_types']);
            }

            DB::commit();
            return redirect()->route('dashboard')->with('success', 'Booking berhasil dibuat!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors('Terjadi kesalahan saat menyimpan booking: ' . $e->getMessage());
        }
    }
}
