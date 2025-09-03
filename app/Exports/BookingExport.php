<?php

namespace App\Exports;

use App\Models\Booking;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BookingExport implements FromView
{
    protected $tglAwal;
    protected $tglAkhir;
    protected $statusbookings;

    public function __construct($tglAwal, $tglAkhir, $statusbookings)
    {
        $this->tglAwal = $tglAwal;
        $this->tglAkhir = $tglAkhir;
        $this->statusbookings = $statusbookings;
    }

    public function view(): View
    {
        $query = Booking::with(['serviceTypes', 'additionalTypes', 'statusBooking'])
            ->whereBetween('date', [$this->tglAwal, $this->tglAkhir]);

        if (!empty($this->statusbookings)) {
            $query->where('statusbookings', $this->statusbookings);
        }

        $bookings = $query->orderBy('date')->get();

        return view('exports.bookings', [
            'bookings' => $bookings
        ]);
    }
}
