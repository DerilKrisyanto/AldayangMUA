<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function getSnapToken(Request $request)
    {
        // AMBIL dari services.midtrans.*, jangan 'midtrans.*'
        \Midtrans\Config::$serverKey    = config('services.midtrans.serverKey');
        \Midtrans\Config::$isProduction = (bool) config('services.midtrans.isProduction');
        \Midtrans\Config::$isSanitized  = (bool) config('services.midtrans.isSanitized');
        \Midtrans\Config::$is3ds        = (bool) config('services.midtrans.is3ds');

        // (Opsional) deteksi null lebih awal biar error jelas
        if (empty(\Midtrans\Config::$serverKey)) {
            return response()->json([
                'status'  => false,
                'message' => 'ServerKey kosong. Pastikan .env dan config sudah terbaca (jalankan php artisan config:clear).'
            ], 500);
        }

        $request->validate([
            'booking_id'  => 'required',
            'name'        => 'required',
            'phone'       => 'required',
            'totalharga'  => 'required|numeric|min:1000',
        ]);
        $orderId = $request->input('booking_id');

        $params = [
            'transaction_details' => [
                'order_id'     => $orderId,
                'gross_amount' => (int) $request->input('totalharga'),
            ],
            'customer_details' => [
                'first_name' => $request->input('name'),
                'phone'      => $request->input('phone'),
            ],
        ];

        try {
            $snapToken = \Midtrans\Snap::getSnapToken($params);

            return response()->json([
                'status'    => true,
                'snapToken' => $snapToken,
                'order_id'  => $orderId,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status'  => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
