<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Models\StatusBooking;
use App\Models\ServiceType;
use App\Models\AdditionalType;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function create()
    {
        $services = ServiceType::where('statusenabled', true)->get();
        $additionals = AdditionalType::where('statusenabled', true)->get();

        return view('bookings.create', compact('services', 'additionals'));
    }
    
    public function store(Request $request) {
        $validated = $request->validate([
            'name'             => 'required|string',
            'phone'            => 'required|string',
            'alamat'           => 'required|string',
            'alamatmaps'       => 'nullable|string',
            'date'             => 'nullable|date',
            'time'             => 'required',
            'notes'            => 'nullable|string',
            'service_types'    => 'required|array|min:1',
            'service_types.*'  => 'exists:servicetype,id',
            'additional_types' => 'nullable|array',
            'additional_types.*' => 'exists:additionaltypes,id',
        ]);

        DB::beginTransaction();
        try {
            $total = $request->input('totalharga', 0);

            // Buat booking utama
            $booking = Booking::create([
                'name'           => $validated['name'],
                'phone'          => $validated['phone'],
                'alamat'         => $validated['alamat'],
                'alamatmaps'     => $validated['alamatmaps'] ?? null,
                'date'           => $validated['date'],
                'time'           => $validated['time'],
                'notes'          => $validated['notes'] ?? null,
                'statusenabled'  => true,
                'statusbookings' => 1, // default status booking awal
                'totalharga'     => $total,
            ]);

            $booking->serviceTypes()->attach($validated['service_types']);

            // Simpan tambahan jika ada
            if (!empty($validated['additional_types'])) {
                $booking->additionalTypes()->attach($validated['additional_types']);
            }

            DB::commit();

            return response()->json([
                'success'    => true,
                'message'    => 'Booking berhasil dibuat!',
                'booking_id' => $booking->id,
                'total'      => $booking->totalharga,
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menyimpan booking: ' . $e->getMessage(),
            ], 500);
        }
    }
}