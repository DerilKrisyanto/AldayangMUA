<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - AldayangMUA</title>
    <link rel="icon" href="/images/logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-papKI5/9Yw4C3jU9K3sUTrEV9yfwbEzPljQVu3m3YoEMTbt6BFl+O74ycx0qeq8LJhVXxGp5sQmXEuc7E0KJ3A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --primary: #FF9F9F;
            --secondary: #FFD6D6;
            --accent: #FF6B6B;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
        
        .hero-section {
            background: linear-gradient(135deg, #FFD6D6 0%, #FF9F9F 100%);
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .gallery-item {
            transition: all 0.3s ease;
        }
        
        .gallery-item:hover {
            transform: scale(1.03);
        }
        
        .booking-form {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body>
    <!-- Navigasi -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="container mx-auto px-6 py-3">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <span class="text-2xl font-bold text-pink-500">AldayangMUA</span>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#dashboard" class="text-base font-medium text-gray-800 hover:text-pink-500">Monitoring</a>
                    <a href="#pesanan" class="text-base font-medium text-gray-800 hover:text-pink-500">Order List</a>
                    <a href="#tambah" class="text-base font-medium text-gray-800 hover:text-pink-500">Booking</a>
                    
                    <!-- Form Logout -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-base font-medium text-white bg-pink-500 hover:bg-pink-600 px-3 py-1 rounded-md"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button>
                    </form>
                </div>
                <!-- Tombol Mobile Menu -->
                <div class="md:hidden">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Menu mobile -->
        <div class="hidden mobile-menu px-6 pb-4">
            <a href="#dashboard" class="text-base font-medium text-gray-800 hover:text-pink-500">Dashboard</a>
            <a href="#pesanan" class="text-base font-medium text-gray-800 hover:text-pink-500">Order List</a>
            <a href="#tambah" class="text-base font-medium text-gray-800 hover:text-pink-500">Booking</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-left py-1 text-base font-medium text-white bg-pink-500 hover:bg-pink-600 px-3 rounded-md"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</button>
            </form>
        </div>
    </nav>
    
    <div class="container mx-auto px-4 pt-24 pb-6">
        <!-- Notifikasi Section -->
        @if (session('success'))
            <div 
                id="toast-success" 
                class="fixed top-4 right-4 z-50 bg-green-100 text-green-800 px-4 py-3 rounded shadow-lg transition-opacity duration-300 opacity-100"
                role="alert"
            >
                <div class="flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 00-1.414 0L9 11.586 5.707 8.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l7-7a1 1 0 000-1.414z" clip-rule="evenodd" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            </div>

            <script>
                setTimeout(() => {
                    const toast = document.getElementById('toast-success');
                    if (toast) {
                        toast.classList.add('opacity-0');
                        setTimeout(() => toast.remove(), 500); // Hapus elemen setelah transisi selesai
                    }
                }, 3000); // 3 detik
            </script>
        @endif

        <!-- Booking Section -->
        <section id="dashboard" class="py-20 bg-gray-50">
            <!-- Header Section -->
            <div class="mb-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <!-- Sisi Kiri: Teks -->
                    <div class="flex-1">
                        <h1 class="text-2xl md:text-3xl font-bold text-gray-800 leading-tight">
                            Selamat datang, {{ Auth::user()->name ?? 'Guest' }}
                        </h1>
                        <p class="text-sm text-gray-600 mt-1">
                            Dashboard Admin memudahkan kamu melihat data Statistik dan Manajemen bisnis AldayangMUA.
                        </p>
                    </div>

                    <!-- Sisi Kanan: Filter -->
                    <div class="relative">
                        <form method="GET" action="{{ route('dashboard') }}" class="flex flex-wrap gap-2 items-center">
                            <input type="date" name="tglAwal" value="{{ $tglAwal }}" class="border border-gray-300 rounded-md px-2 py-1 text-xs focus:ring-1 focus:ring-blue-500"" />
                            <input type="date" name="tglAkhir" value="{{ $tglAkhir }}" class="border border-gray-300 rounded-md px-2 py-1 text-xs focus:ring-1 focus:ring-blue-500"" />

                            <select name="statusbookings" class="border border-gray-300 rounded-md px-2 py-1 text-xs focus:ring-1 focus:ring-blue-500"">
                                <option value="">Semua Status</option>
                                <option value="1" {{ request('statusbookings') == 1 ? 'selected' : '' }}>Menunggu</option>
                                <option value="2" {{ request('statusbookings') == 2 ? 'selected' : '' }}>Selesai</option>
                                <option value="3" {{ request('statusbookings') == 3 ? 'selected' : '' }}>Dibatalkan</option>
                            </select>

                            <div class="flex gap-2">
                                <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white px-2 py-1 rounded-md text-sm shadow">
                                    <i class="fa fa-search mr-1"></i> Cari
                                </button>
                                <a href="{{ route('dashboard') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-2 py-1 rounded-md text-sm shadow">
                                    <i class="fa fa-refresh mr-1"></i> Reset
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Summary Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                @foreach ([
                    ['title' => 'Total Pemesanan', 'value' => $totalBookings, 'color' => 'blue', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2'],
                    ['title' => 'Menunggu Konfirmasi', 'value' => number_format($totalPending, 0, ',', '.'), 'color' => 'amber', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
                    ['title' => 'Selesai', 'value' => number_format($totalCompleted, 0, ',', '.'), 'color' => 'green', 'icon' => 'M5 13l4 4L19 7'],
                    ['title' => 'Dibatalkan', 'value' => number_format($totalCanceled, 0, ',', '.'), 'color' => 'red', 'icon' => 'M6 18L18 6M6 6l12 12']
                ] as $card)
                <div class="bg-white rounded-xl shadow-sm p-6 border-l-4 border-{{ $card['color'] }}-500">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-gray-500">{{ $card['title'] }}</p>
                            <p class="text-2xl font-bold text-gray-800 mt-1">{{ $card['value'] }}</p>
                        </div>
                        <div class="bg-{{ $card['color'] }}-100 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-{{ $card['color'] }}-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $card['icon'] }}" />
                            </svg>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Charts Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                <!-- Status Distribution Chart -->
                <div class="bg-white rounded-xl shadow-sm p-6 lg:col-span-1">
                    <h2 class="text-lg font-semibold mb-4 text-gray-800">Status Pemesanan</h2>
                    <div class="h-64">
                        <canvas id="statusChart"></canvas>
                    </div>
                </div>
                
                <!-- Recent Bookings -->
                <div class="bg-white rounded-xl shadow-sm p-6 lg:col-span-2">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-semibold text-gray-800">Pemesanan Terbaru</h2>
                        <a href="#" class="text-sm text-blue-500 hover:underline">Lihat Semua</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($recentBookings as $index => $booking)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">{{ $index + 1 }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $booking->name }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $booking->date }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">Rp {{ number_format($booking->totalharga, 0, ',', '.') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 py-1 rounded-full text-xs font-semibold {{ $statusClasses[$booking->statusbookings] ?? 'bg-gray-100 text-gray-800' }}">
                                            {{ $booking->statusBooking->nama ?? 'Menunggu' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <form method="POST" action="{{ route('bookings.update', $booking->id) }}">
                                            @csrf
                                            <select name="statusbookings" onchange="this.form.submit()" class="border border-gray-300 rounded-md px-2 py-1 text-xs focus:ring-1 focus:ring-blue-500">
                                                <option value="1" {{ $booking->statusbookings == 1 ? 'selected' : '' }}>Menunggu</option>
                                                <option value="2" {{ $booking->statusbookings == 2 ? 'selected' : '' }}>Selesai</option>
                                                <option value="3" {{ $booking->statusbookings == 3 ? 'selected' : '' }}>Batal</option>
                                            </select>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Full Bookings Table -->
        <section id="pesanan" class="py-20 bg-gray-50">
            <div class="bg-white rounded-xl shadow-sm overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <h2 class="text-lg font-semibold text-gray-800">Semua Pemesanan</h2>
                        <div class="relative">
                            <div class="flex gap-2">
                                <a href="{{ route('dashboard.export', request()->query()) }}" class="bg-pink-500 hover:bg-pink-600 text-white px-3 py-1 rounded text-sm shadow">
                                    <i class="fa fa-download mr-1"></i> Export to Excel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kontak</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Layanan</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tambahan</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($bookings as $index => $booking)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-2 whitespace-nowrap text-sm">{{ $index + 1 }}</td>
                                <td class="px-4 py-2">
                                    <div class="text-sm font-medium text-gray-900">{{ $booking->name }}</div>
                                </td>
                                <td class="px-4 py-2">
                                    <div class="text-sm text-gray-900">{{ $booking->phone }}</div>
                                    <!-- <div class="text-sm text-gray-500">{{ $booking->email ?? '-' }}</div> -->
                                </td>
                                <td class="px-4 py-2 text-sm">
                                    @php
                                        $groupedServices = $booking->serviceTypes
                                            ->groupBy('nama')
                                            ->map(function($items) {
                                                return count($items);
                                            });
                                    @endphp
                                    @foreach($groupedServices as $serviceName => $count)
                                        <div class="text-gray-900">
                                            - {{ $serviceName }}{{ $count > 1 ? ' (' . $count . ')' : '' }}
                                        </div>
                                    @endforeach
                                </td>
                                <td class="px-4 py-2 text-sm">
                                    @forelse($booking->additionalTypes as $add)
                                        <div class="text-gray-500">+ {{ $add->nama }}</div>
                                    @empty
                                        <div class="text-gray-400">-</div>
                                    @endforelse
                                </td>
                                <td class="px-4 py-2">
                                    <div class="text-sm font-medium text-gray-900">{{ $booking->alamat }}</div>
                                </td>
                                <td class="px-4 py-2">
                                    <div class="text-sm text-gray-900">{{ $booking->date }}</div>
                                    <div class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($booking->time)->format('H:i') }}</div>
                                </td>
                                <td class="px-4 py-2 whitespace-nowrap text-sm">Rp {{ number_format($booking->totalharga, 0, ',', '.') }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">
                                    <span class="px-2 py-1 rounded-full text-xs font-semibold {{ $statusClasses[$booking->statusbookings] ?? 'bg-gray-100 text-gray-800' }}">
                                        {{ $booking->statusBooking->nama ?? 'Menunggu' }}
                                    </span>
                                </td>
                                <td class="px-4 py-2 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <a href="#" class="text-blue-500 hover:text-blue-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <form method="POST" action="{{ route('bookings.update', $booking->id) }}">
                                            @csrf
                                            <select name="statusbookings" onchange="this.form.submit()" class="border border-gray-300 rounded-md px-2 py-1 text-xs focus:ring-1 focus:ring-blue-500">
                                                <option value="1" {{ $booking->statusbookings == 1 ? 'selected' : '' }}>Menunggu</option>
                                                <option value="2" {{ $booking->statusbookings == 2 ? 'selected' : '' }}>Selesai</option>
                                                <option value="3" {{ $booking->statusbookings == 3 ? 'selected' : '' }}>Batal</option>
                                            </select>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="px-6 py-4 border-t border-gray-200">
                    {{ $bookings->links() }}
                </div>
            </section>
            <!-- Tambah Pesanan -->
            <section id="tambah" class="py-20 bg-gray-50">
                <div class="container mx-auto px-6">
                    <div class="max-w-4xl mx-auto">
                        <div class="text-center mb-12">
                            <h2 class="text-3xl font-bold text-gray-800 mb-4">Buat Janji Temu</h2>
                            <p class="text-gray-600">Isi formulir pemesanan dibawah ini untuk menjadwalkan sesi makeup.</p>
                        </div>

                        <div class="booking-form rounded-xl shadow-lg p-8">
                            <form id="appointment-form" action="{{ route('bookings.store') }}" method="POST" class="space-y-6">
                                @csrf
                                <!-- Nama & Telepon -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                        <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-md" required>
                                    </div>
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor WhatsApp</label>
                                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border rounded-md" required>
                                    </div>
                                </div>

                                <!-- Alamat -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                                        <input id="alamat" name="alamat" class="w-full px-4 py-2 border rounded-md" required>
                                    </div>
                                    <div>
                                        <label for="alamatmaps" class="block text-sm font-medium text-gray-700 mb-1">Link Google Maps</label>
                                        <input type="url" id="alamatmaps" name="alamatmaps" class="w-full px-4 py-2 border rounded-md">
                                    </div>
                                </div>

                                <!-- Pilih layanan -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Jenis Layanan</label>
                                        <div class="flex space-x-2">
                                            <select id="serviceSelect" class="w-full px-4 py-2 border rounded-md">
                                                <option value=""> Pilih Layanan </option>
                                                @foreach ($services as $service)
                                                    <option value="{{ $service->id }}" data-harga="{{ $service->harga }}">
                                                        {{ $service->nama }} - IDR {{ number_format($service->harga, 0, ',', '.') }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <button type="button" onclick="addService()" class="px-4 py-2 bg-pink-500 text-white rounded">+</button>
                                        </div>
                                        <div id="selectedServices" class="mt-2 text-sm text-gray-700"></div>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Layanan Tambahan</label>
                                        <div class="flex space-x-2">
                                            <select id="additionalSelect" class="w-full px-4 py-2 border rounded-md">
                                                <option value=""> Pilih Layanan Tambahan </option>
                                                @foreach ($additionals as $additional)
                                                    <option value="{{ $additional->id }}" data-harga="{{ $additional->harga }}">
                                                        {{ $additional->nama }} - IDR {{ number_format($additional->harga, 0, ',', '.') }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <button type="button" onclick="addAdditional()" class="px-4 py-2 bg-pink-500 text-white rounded">+</button>
                                        </div>
                                        <div id="selectedAdditionals" class="mt-2 text-sm text-gray-700"></div>
                                    </div>
                                </div>

                                <!-- Tanggal dan Waktu -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Temu</label>
                                        <input type="date" id="date" name="date" class="w-full px-4 py-2 border rounded-md" value="{{ \Carbon\Carbon::now()->toDateString() }}" required>
                                    </div>
                                    <div>
                                        <label for="time" class="block text-sm font-medium text-gray-700 mb-1">Waktu Temu (WITA)</label>
                                        <input type="time" id="time" name="time" class="w-full px-4 py-2 border rounded-md"
                                            value="{{ \Carbon\Carbon::now('Asia/Makassar')->format('H:i') }}" required>
                                    </div>
                                </div>

                                <!-- Permintaan Khusus -->
                                <div>
                                    <label for="notes" class="block text-sm font-medium text-gray-700 mb-1">Permintaan Khusus</label>
                                    <textarea id="notes" name="notes" rows="3" class="w-full px-4 py-2 border rounded-md"></textarea>
                                </div>

                                <!-- Preview dan Total -->
                                <div class="bg-gray-100 p-4 rounded mt-4">
                                    <h4 class="font-semibold text-lg mb-2">Ringkasan Pilihan</h4>
                                    <ul id="summaryList" class="text-sm space-y-1 text-gray-800"></ul>
                                    <div class="mt-2 font-bold">Total Harga: <span id="totalHarga">Rp 0</span></div>
                                </div>

                                <!-- Hidden inputs untuk data -->
                                <div id="hiddenFields">
                                    <input type="hidden" id="totalHargaInput" name="totalharga" value="0">
                                </div>

                                <!-- Persetujuan -->
                                <div class="flex items-center">
                                    <input id="terms" name="terms" type="checkbox" class="h-4 w-4 text-pink-500 border-gray-300 rounded" required>
                                    <label for="terms" class="ml-2 block text-sm text-gray-700">Saya menyetujui <a href="javascript:void(0)" onclick="openTermsModal()" class="text-pink-500 hover:underline">syarat dan ketentuan</a></label>
                                </div>

                                <button type="submit" class="w-full bg-pink-500 text-white py-3 rounded-md hover:bg-pink-600 transition font-medium">Buat Janji Temu</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Modal Syarat dan Ketentuan -->
            <div id="termsModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center hidden">
                <div class="bg-white rounded-lg shadow-xl p-6 max-w-xl w-full relative">
                    <button onclick="closeTermsModal()" class="absolute top-2 right-4 text-gray-600 text-xl hover:text-black">&times;</button>
                    <h3 class="text-lg font-bold mb-4">Syarat dan Ketentuan :</h3>
                    <ol class="list-decimal list-inside text-sm text-gray-700 space-y-2">
                        <li>Formulir pemesanan wajib diisi dengan data yang lengkap dan benar sesuai identitas pelanggan.</li>
                        <li>Setelah formulir dikirim, admin akan menghubungi Anda melalui nomor WhatsApp yang telah Anda cantumkan untuk konfirmasi jadwal dan detail layanan.</li>
                        <li>Pemesanan dianggap *fix booking* setelah pelanggan melakukan pembayaran uang muka (DP) sesuai nominal yang disepakati dan mengirimkan bukti transfer kepada admin melalui WhatsApp.</li>
                        <li>Pembayaran DP hanya dilakukan ke rekening resmi atas nama <strong>Alda Eka Putri</strong>. Kami tidak bertanggung jawab atas transaksi ke rekening selain nama tersebut.</li>
                        <li>Kesalahan transfer (jumlah tidak sesuai, salah tujuan rekening, atau kesalahan teknis lainnya) menjadi tanggung jawab penuh pelanggan.</li>
                        <li>Setelah pembayaran DP dilakukan dan booking dikonfirmasi, maka pelanggan dianggap telah menyetujui seluruh syarat dan ketentuan yang berlaku.</li>
                        <li>Pembatalan pemesanan (*cancel booking*) oleh pelanggan setelah melakukan DP akan menyebabkan DP dianggap hangus dan tidak dapat dikembalikan dalam bentuk apa pun.</li>
                        <li>Perubahan waktu atau lokasi layanan setelah konfirmasi akan disesuaikan dengan ketersediaan tim dan tidak dijamin dapat dipenuhi.</li>
                        <li>Harga layanan seperti hairdo, softlens, dan tambahan lainnya dapat berubah sewaktu-waktu dan akan diinformasikan terlebih dahulu melalui WhatsApp.</li>
                        <li>Layanan tambahan di luar paket makeup (seperti softlens, touch-up tambahan, atau styling rambut spesifik) akan dikenakan biaya sesuai ketentuan yang berlaku.</li>
                        <li>Pelanggan wajib menyiapkan tempat yang cukup terang dan bersih untuk proses makeup. Jika lokasi dianggap tidak memadai, maka tim berhak menolak memberikan layanan tanpa pengembalian biaya.</li>
                        <li>Kami berkomitmen menjaga waktu dengan tepat, namun keterlambatan karena faktor di luar kendali (kemacetan, force majeure, dsb.) akan dikomunikasikan sebaik mungkin kepada pelanggan.</li>
                        <li>Seluruh dokumentasi (foto/video) hasil makeup dapat digunakan untuk portofolio dan media sosial, kecuali jika pelanggan menyampaikan permintaan khusus untuk tidak dipublikasikan.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Status Distribution Pie Chart
        const statusCtx = document.getElementById('statusChart').getContext('2d');
        const statusChart = new Chart(statusCtx, {
            type: 'doughnut',
            data: {
                labels: ['Menunggu', 'Selesai', 'Dibatalkan'],
                datasets: [{
                    data: [{{ $totalPending }}, {{ $totalCompleted }}, {{ $totalCanceled }}],
                    backgroundColor: [
                        '#F59E0B',
                        '#10B981',
                        '#EF4444'
                    ],
                    borderWidth: 0,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                const label = context.label || '';
                                const value = context.raw || 0;
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const percentage = Math.round((value / total) * 100);
                                return `${label}: ${value} (${percentage}%)`;
                            }
                        }
                    }
                },
                cutout: '70%',
            }
        });
    });
    // Toggle menu mobile
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
    
    // Smooth scrolling untuk anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if(targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if(targetElement) {
                const offset = 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - offset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
                
                // Tutup menu mobile jika terbuka
                if(!mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                }
            }
        });
    });
    
    // Set tanggal minimal untuk booking ke hari ini
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('date').min = today;
    
    // Validasi form
    const appointmentForm = document.getElementById('appointment-form');
    appointmentForm.addEventListener('submit', function(e) {
        const terms = document.getElementById('terms');
        if (!terms.checked) {
            e.preventDefault();
            alert('Silakan setujui syarat dan ketentuan terlebih dahulu');
        }
    });


    //Pop-up Gambar
    function openModal(imageSrc) {
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        modalImg.src = imageSrc;
        modal.classList.remove('hidden');
    }

    function closeModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
        document.getElementById('modalImage').src = '';
    }

    //Form buat jadwal
    let total = 0;
    let count = 0;

    function formatRupiah(number) {
        return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(number);
    }

    function addService() {
        const select = document.getElementById('serviceSelect');
        const selected = select.options[select.selectedIndex];
        if (!selected.value) return;

        const id = selected.value;
        const label = selected.text;
        const harga = parseInt(selected.getAttribute('data-harga'));

        addToSummary(`Jenis Layanan: ${label}`);
        addHiddenField('service_types[]', id);
        addToTotal(harga);
    }

    function addAdditional() {
        const select = document.getElementById('additionalSelect');
        const selected = select.options[select.selectedIndex];
        if (!selected.value) return;

        const id = selected.value;
        const label = selected.text;
        const harga = parseInt(selected.getAttribute('data-harga'));

        addToSummary(`Layanan Tambahan: ${label}`);
        addHiddenField('additional_types[]', id);
        addToTotal(harga);
    }

    function addToSummary(text) {
        const list = document.getElementById('summaryList');
        const item = document.createElement('li');
        item.textContent = text;
        list.appendChild(item);
    }

    function addHiddenField(name, value) {
        const container = document.getElementById('hiddenFields');
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = name;
        input.value = value;
        container.appendChild(input);
    }

    function addToTotal(amount) {
        total += amount;
        document.getElementById('totalHarga').textContent = formatRupiah(total);
        document.getElementById('totalHargaInput').value = total;
    }

    //Syarat dan Ketentuan
    function openTermsModal() {
        document.getElementById('termsModal').classList.remove('hidden');
    }

    function closeTermsModal() {
        document.getElementById('termsModal').classList.add('hidden');
    }

    // Tutup modal jika klik di luar kotak konten
    document.getElementById('termsModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeTermsModal();
        }
    });

</script>
</body>
</html>