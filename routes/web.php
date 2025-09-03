<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PaymentController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

Route::post('/payments/snap-token', [PaymentController::class, 'getSnapToken'])->name('payments.snapToken');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
Route::post('/bookings/{id}/update', [AdminController::class, 'update'])->name('bookings.update');
Route::get('/dashboard/export', [AdminController::class, 'export'])->name('dashboard.export');


require __DIR__.'/auth.php';