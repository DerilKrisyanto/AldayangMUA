<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AldayangMUA - Makeup Artist Profesional</title>
    <link rel="icon" href="/images/logo.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-papKI5/9Yw4C3jU9K3sUTrEV9yfwbEzPljQVu3m3YoEMTbt6BFl+O74ycx0qeq8LJhVXxGp5sQmXEuc7E0KJ3A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Midtrans -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/v1/transactions" data-client-key="Mid-client-UvrqSwdNIasOb8XD"></script>
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
                <div class="hidden md:flex items-center space-x-10">
                    <a href="#home" class="text-gray-800 hover:text-pink-500">Beranda</a>
                    <a href="#services" class="text-gray-800 hover:text-pink-500">Layanan</a>
                    <a href="#gallery" class="text-gray-800 hover:text-pink-500">Galeri</a>
                    <a href="#pricing" class="text-gray-800 hover:text-pink-500">Harga</a>
                    <a href="#contact" class="text-gray-800 hover:text-pink-500">Kontak</a>
                    <a href="#booking" class="bg-pink-500 text-white px-4 py-2 rounded-md hover:bg-pink-600 transition">Pesan Sekarang</a>
                </div>
                <div class="md:hidden">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Menu mobile -->
        <div class="hidden mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#home" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 hover:text-pink-500">Beranda</a>
                <a href="#services" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 hover:text-pink-500">Layanan</a>
                <a href="#gallery" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 hover:text-pink-500">Galeri</a>
                <a href="#pricing" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 hover:text-pink-500">Harga</a>
                <a href="#contact" class="block px-3 py-2 rounded-md text-base font-medium text-gray-800 hover:text-pink-500">Kontak</a>
                <a href="#booking" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-pink-500 hover:bg-pink-600">Pesan Sekarang</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section pt-24 pb-20 md:pt-32 md:pb-28">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">Kecantikan Anda, Menjadi Passion Kami</h1>
                    <p class="text-lg text-gray-700 mb-8">Layanan makeup profesional untuk meningkatkan kecantikan alami Anda untuk setiap kesempatan. Biarkan kami mengeluarkan cahaya dalam diri Anda.</p>
                    <div class="flex space-x-4">
                        <a href="#booking" class="bg-pink-500 text-white px-6 py-3 rounded-md hover:bg-pink-600 transition">Pesan Janji Temu</a>
                        <a href="#services" class="border-2 border-pink-500 text-pink-500 px-6 py-3 rounded-md hover:bg-pink-50 transition">Layanan Kami</a>
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="relative w-80 h-80 md:w-96 md:h-96 rounded-full overflow-hidden shadow-2xl">
                        <img src="/images/profile.jpeg" alt="Makeup artist profesional sedang bekerja" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Layanan Spesialis Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami menawarkan berbagai layanan makeup yang disesuaikan dengan kebutuhan, kesempatan dan hari spesial Anda.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Service 1 -->
                <div class="service-card bg-white rounded-lg shadow-lg overflow-hidden transition duration-500">
                    <div class="overflow-hidden cursor-pointer h-[600px]" onclick="openModal('/images/graduation.jpeg')">
                        <img src="/images/graduation.jpeg" alt="Makeup Graduation dengan nuansa pink lembut" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Makeup Graduation</h3>
                        <p class="text-gray-600 mb-4">Sempurna untuk hari istimewa Anda dengan hasil yang tahan lama dan siap difoto.</p>
                        <button class="text-pink-500 font-medium hover:text-pink-600 transition" onclick="openModal('/images/graduation.jpeg')">Lihat detail gambar →</button>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-card bg-white rounded-lg shadow-lg overflow-hidden transition duration-500">
                    <div class="overflow-hidden cursor-pointer h-[600px]" onclick="openModal('/images/yudisium.jpeg')">
                        <img src="/images/yudisium.jpeg" alt="Makeup Yudisium dengan nuansa pink lembut" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Makeup Yudisium</h3>
                        <p class="text-gray-600 mb-4">Tampilan kreatif dan artistik yang sempurna untuk pemotretan atau acara khusus.</p>
                        <button class="text-pink-500 font-medium hover:text-pink-600 transition" onclick="openModal('/images/yudisium.jpeg')">Lihat detail gambar →</button>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="service-card bg-white rounded-lg shadow-lg overflow-hidden transition duration-500">
                    <div class="overflow-hidden cursor-pointer h-[600px]" onclick="openModal('/images/party.jpeg')">
                        <img src="/images/party.jpeg" alt="Makeup party dengan nuansa pink lembut" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Makeup Party</h3>
                        <p class="text-gray-600 mb-4">Peningkatan halus yang menonjolkan kecantikan alami Anda untuk penggunaan sehari-hari.</p>
                        <button class="text-pink-500 font-medium hover:text-pink-600 transition" onclick="openModal('/images/party.jpeg')">Lihat detail gambar →</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Gambar -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-lg overflow-hidden max-w-3xl max-h-[90vh]">
            <button onclick="closeModal()" class="absolute top-4 right-6 text-white text-2xl">&times;</button>
            <img id="modalImage" src="" alt="Preview" class="w-full h-auto object-contain">
        </div>
    </div>

    <!-- Gallery Section -->
    <section id="gallery" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Galeri Karya Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Jelajahi portofolio transformasi makeup yang menakjubkan dari kami.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Gallery Item 1 -->
                <div class="gallery-item overflow-hidden rounded-lg shadow-md bg-white">
                    <img src="/images/pernikahan.jpeg" class="w-full h-[600px] object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800">Glam Lembut</h3>
                        <p class="text-sm text-gray-600">Makeup Pernikahan</p>
                    </div>
                </div>
                
                <!-- Gallery Item 2 -->
                <div class="gallery-item overflow-hidden rounded-lg shadow-md bg-white">
                    <img src="/images/smokey.jpeg" class="w-full h-[600px] object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800">Mata Smokey</h3>
                        <p class="text-sm text-gray-600">Makeup Malam</p>
                    </div>
                </div>
                
                <!-- Gallery Item 3 -->
                <div class="gallery-item overflow-hidden rounded-lg shadow-md bg-white">
                    <img src="/images/festival.jpeg" class="w-full h-[600px] object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800">Acara Khusus</h3>
                        <p class="text-sm text-gray-600">Tampilan Festival</p>
                    </div>
                </div>
                
                <!-- Gallery Item 4 -->
                <div class="gallery-item overflow-hidden rounded-lg shadow-md bg-white">
                    <img src="/images/makeupparty.jpeg" class="w-full h-[600px] object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800">Bridesmaid</h3>
                        <p class="text-sm text-gray-600">Tampilan Lebih Menawan</p>
                    </div>
                </div>
                
                <!-- Gallery Item 5 -->
                <div class="gallery-item overflow-hidden rounded-lg shadow-md bg-white">
                    <img src="/images/mother.jpeg" class="w-full h-[600px] object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800">Mother / Sister Bride</h3>
                        <p class="text-sm text-gray-600">Tampilan Abadi</p>
                    </div>
                </div>
                
                <!-- Gallery Item 6 -->
                <div class="gallery-item overflow-hidden rounded-lg shadow-md bg-white">
                    <img src="/images/tematik.jpeg" class="w-full h-[600px] object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800">Hari Spesial</h3>
                        <p class="text-sm text-gray-600">Makeup Tematik</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Daftar Harga</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Paket harga transparan untuk semua layanan makeup kami.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Package 1 -->
                <div class="border rounded-lg overflow-hidden shadow-lg transition hover:shadow-xl">
                    <div class="bg-pink-100 py-6 px-8 text-center">
                        <h3 class="text-xl font-bold text-gray-800">Paket Party</h3>
                        <div class="mt-4 flex justify-center items-baseline">
                            <span class="text-4xl font-bold text-pink-500">Rp 230K</span>
                            <span class="ml-1 text-gray-600">/orang</span>
                        </div>
                    </div>
                    <div class="px-8 py-6">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Bulumata</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Softlens</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Home Service / Visit wilayah makassar</span>
                            </li>
                        </ul>
                        <button class="w-full bg-pink-500 text-white py-2 rounded-md hover:bg-pink-600 transition mt-6"
                                onclick="document.querySelector('#booking').scrollIntoView({ behavior: 'smooth' });">Pesan Sekarang
                        </button>
                    </div>
                </div>
                
                <!-- Package 2 -->
                <div class="border rounded-lg overflow-hidden shadow-lg transition hover:shadow-xl transform scale-105 z-10 relative">
                    <div class="bg-pink-500 py-6 px-8 text-center">
                        <h3 class="text-xl font-bold text-white">Paket Graduation</h3>
                        <div class="mt-4 flex justify-center items-baseline">
                            <span class="text-4xl font-bold text-white">Rp 500K</span>
                            <span class="ml-1 text-pink-100">/orang</span>
                        </div>
                        <div class="mt-2">
                            <span class="inline-block bg-white text-pink-500 text-xs px-2 py-1 rounded-full">Paling Populer</span>
                        </div>
                    </div>
                    <div class="px-8 py-6">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Bulumata</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Softlens</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Hair Do</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Home Service / Visit wilayah makassar</span>
                            </li>
                        </ul>
                        <button class="w-full bg-pink-500 text-white py-2 rounded-md hover:bg-pink-600 transition mt-6"
                                onclick="document.querySelector('#booking').scrollIntoView({ behavior: 'smooth' });">Pesan Sekarang
                        </button>
                    </div>
                </div>
                
                <!-- Package 3 -->
                <div class="border rounded-lg overflow-hidden shadow-lg transition hover:shadow-xl">
                    <div class="bg-pink-100 py-6 px-8 text-center">
                        <h3 class="text-xl font-bold text-gray-800">Paket Bridesmaid</h3>
                        <div class="mt-4 flex justify-center items-baseline">
                            <span class="text-4xl font-bold text-pink-500">Rp 400K</span>
                            <span class="ml-1 text-gray-600">/orang</span>
                        </div>
                    </div>
                    <div class="px-8 py-6">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Bulumata</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Softlens</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Hair Do</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-700">Home Service / Visit wilayah makassar</span>
                            </li>
                        </ul>
                        <button class="w-full bg-pink-500 text-white py-2 rounded-md hover:bg-pink-600 transition mt-6"
                            onclick="document.querySelector('#booking').scrollIntoView({ behavior: 'smooth' });">Pesan Sekarang
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section id="booking" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Pesan Janji Temu</h2>
                    <p class="text-gray-600">Isi formulir di bawah ini untuk menjadwalkan sesi makeup Anda.</p>
                </div>

                <div class="booking-form rounded-xl shadow-lg p-8">
                    <form id="appointment-form" action="{{ route('bookings.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            @if (session('success'))
                                <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
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
                                    <button type="button" onclick="addService()" class="px-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600 transition">+</button>
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
                                    <button type="button" onclick="addAdditional()" class="px-4 py-2 bg-pink-500 text-white rounded-md hover:bg-pink-600 transition">+</button>
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
                            <h4 class="font-semibold text-lg mb-2">Ringkasan Layanan :</h4>
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

                        <button type="submit" class="w-full bg-pink-500 text-white py-3 rounded-md hover:bg-pink-600 transition font-medium">
                            Buat Janji Temu
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Pop-up Pilih Metode Pembayaran -->
    <div id="paymentPopup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
        <div class="bg-white rounded-2xl shadow-lg p-8 w-96 max-w-[90%] text-center">
            <h3 class="text-xl font-semibold mb-6">Pilih Metode Pembayaran</h3>
            <div class="flex flex-col gap-4">
                <button id="btnBayarDisini" 
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg">
                    Bayar Disini
                </button>
                <button id="btnBayarWA"
                    class="w-full px-4 py-3 bg-gray-700 text-white rounded-lg hover:bg-gray-800 transition">
                    Bayar via WhatsApp Admin
                </button>
            </div>
        </div>
    </div>
    <script type="text/javascript" >
        document.addEventListener("DOMContentLoaded", function () {
            const bookingForm = document.getElementById("appointment-form");
            const popup = document.getElementById("paymentPopup");
            const btnBayarDisini = document.getElementById("btnBayarDisini");
            const btnBayarWA = document.getElementById("btnBayarWA");

            let lastBookingId = null;
            let lastTotal = 0;

            bookingForm.addEventListener("submit", function (e) {
                e.preventDefault();

                const formData = new FormData(bookingForm);

                // simpan booking ke DB
                fetch(bookingForm.action, {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                        "Accept": "application/json"
                    }
                })
                .then(async (res) => {
                    const data = await res.json().catch(() => ({}));
                    if (!res.ok) {
                        const msg = data.message || "Gagal menyimpan booking.";
                        alert(msg);
                        throw new Error(msg);
                    }
                    return data;
                })
                .then(data => {
                    if (data.success) {
                        // simpan untuk dipakai saat createTransaction
                        lastBookingId = data.booking_id;
                        lastTotal = data.total;

                        // tampilkan popup setelah booking tersimpan
                        popup.classList.remove("hidden");
                    } else {
                        alert(data.message || "Gagal menyimpan booking.");
                    }
                })
                .catch(err => console.error(err));
            });

            // Bayar Disini (Midtrans)
            btnBayarDisini.addEventListener("click", function(e) {
                e.preventDefault();
                popup.classList.add("hidden"); // tutup popup pilih metode

                fetch("{{ route('payments.snapToken') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                        "Content-Type": "application/json",
                        "Accept": "application/json"
                    },
                    body: JSON.stringify({
                        booking_id: lastBookingId,
                        name: document.getElementById("name").value,
                        phone: document.getElementById("phone").value,
                        totalharga: lastTotal
                    }),
                })
                .then(async (res) => {
                    const data = await res.json().catch(() => ({}));
                    if (!res.ok) {
                        const msg = data.message || "Gagal dapat token.";
                        alert(msg);
                        throw new Error(msg);
                    }
                    return data;
                })
                .then(data => {
                    if (data.status && data.snapToken) {
                        snap.pay(data.snapToken, {
                            onSuccess: function(result){
                                alert("Pembayaran sukses!");
                                console.log(result);
                            },
                            onPending: function(result){
                                alert("Menunggu pembayaran...");
                                console.log(result);
                            },
                            onError: function(result){
                                alert("Pembayaran gagal!");
                                console.log(result);
                            },
                            onClose: function(){
                                alert("Anda menutup popup tanpa menyelesaikan pembayaran");
                            }
                        });
                    } else {
                        alert("Gagal dapat token: " + (data.message ?? "-"));
                    }
                })
                .catch(err => console.error(err));
            });

            // Bayar via WhatsApp
            btnBayarWA.addEventListener("click", function () {
                popup.classList.add("hidden");
                const noAdmin = "6281343524470";
                const pesan = encodeURIComponent(
                    "Halo Admin, saya ingin konfirmasi janji temu. Kode booking: " + (lastBookingId ?? "-")
                );
                window.open(`https://wa.me/${noAdmin}?text=${pesan}`, "_blank");
            });
        });
    </script>

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

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Hubungi Kami</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Ada pertanyaan? Hubungi kami langsung.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-5xl mx-auto">
                <!-- Contact Method 1 -->
                <div class="text-center">
                    <div class="bg-pink-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-pink-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.004 2.003c-5.523 0-10 4.477-10 10 0 1.773.464 3.51 1.345 5.037L2 22l5.152-1.332A9.953 9.953 0 0 0 12.004 22c5.523 0 10-4.477 10-10s-4.477-9.997-10-9.997zm0 18a7.95 7.95 0 0 1-4.062-1.106l-.291-.172-3.055.791.805-2.982-.189-.305A7.953 7.953 0 0 1 4.004 12c0-4.411 3.589-8 8-8 4.411 0 8 3.589 8 8s-3.589 8.003-8 8.003zm4.317-5.528c-.236-.118-1.393-.688-1.609-.768-.216-.08-.373-.118-.53.118s-.61.768-.748.926c-.137.157-.275.177-.511.059-.236-.118-.997-.366-1.897-1.168-.701-.624-1.175-1.396-1.313-1.633-.137-.236-.015-.364.104-.482.106-.105.236-.275.354-.413.118-.138.157-.236.236-.393.079-.157.04-.295-.02-.413-.059-.118-.53-1.275-.727-1.748-.191-.456-.384-.394-.53-.402l-.452-.008c-.157 0-.413.059-.63.295-.216.236-.826.807-.826 1.968s.846 2.282.964 2.438c.118.157 1.664 2.539 4.038 3.558.564.243 1.004.389 1.347.498.566.18 1.08.155 1.487.094.454-.068 1.393-.569 1.59-1.118.197-.55.197-1.02.138-1.118-.059-.098-.216-.157-.452-.275z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">WhatsApp</h3>
                    <p class="text-gray-600">+62 813-4352-4470</p>
                </div>
                
                <!-- Contact Method 2 -->
                <div class="text-center">
                    <div class="bg-pink-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Email</h3>
                    <p class="text-gray-600">aldayang23@gmail.com</p>
                </div>
                
                <!-- Contact Method 3 -->
                <div class="text-center">
                    <div class="bg-pink-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Lokasi Studio</h3>
                    <p class="text-gray-600">Jalan Bakti No.12, Tamamaung, Kec. Panakukang, Kota Makassar</p>
                </div>
            </div>
            
            <div class="mt-16 max-w-3xl mx-auto">
                <div class="rounded-lg overflow-hidden shadow-lg">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3975.6964382642047!2d119.4326998!3d-5.1452313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee322c1dd045d%3A0xa656a08bfb8c48cc!2sAldayang%20Makeup!5e0!3m2!1sen!2sid!4v1720584960000!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white pt-16 pb-8">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                <div class="md:col-span-2">
                    <h3 class="text-2xl font-bold mb-4">AldayangMUA</h3>
                    <p class="text-gray-300 mb-6">Layanan makeup artist profesional untuk meningkatkan kecantikan alami Anda dalam berbagai kesempatan.</p>
                    <div class="flex items-center space-x-4">
                        <!-- WhatsApp -->
                        <a href="https://wa.me/6281343524470" target="_blank" class="hover:opacity-80 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-green-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.004 2.003c-5.523 0-10 4.477-10 10 0 1.773.464 3.51 1.345 5.037L2 22l5.152-1.332A9.953 9.953 0 0 0 12.004 22c5.523 0 10-4.477 10-10s-4.477-9.997-10-9.997zm0 18a7.95 7.95 0 0 1-4.062-1.106l-.291-.172-3.055.791.805-2.982-.189-.305A7.953 7.953 0 0 1 4.004 12c0-4.411 3.589-8 8-8 4.411 0 8 3.589 8 8s-3.589 8.003-8 8.003zm4.317-5.528c-.236-.118-1.393-.688-1.609-.768-.216-.08-.373-.118-.53.118s-.61.768-.748.926c-.137.157-.275.177-.511.059-.236-.118-.997-.366-1.897-1.168-.701-.624-1.175-1.396-1.313-1.633-.137-.236-.015-.364.104-.482.106-.105.236-.275.354-.413.118-.138.157-.236.236-.393.079-.157.04-.295-.02-.413-.059-.118-.53-1.275-.727-1.748-.191-.456-.384-.394-.53-.402l-.452-.008c-.157 0-.413.059-.63.295-.216.236-.826.807-.826 1.968s.846 2.282.964 2.438c.118.157 1.664 2.539 4.038 3.558.564.243 1.004.389 1.347.498.566.18 1.08.155 1.487.094.454-.068 1.393-.569 1.59-1.118.197-.55.197-1.02.138-1.118-.059-.098-.216-.157-.452-.275z"/>
                            </svg>
                        </a>
                        
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/aldayang.mua?igsh=MXdoOG54emk0Ymg2dg==" target="_blank" class="hover:opacity-80 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-pink-500" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2.2c3.2 0 3.6.01 4.9.07 3.3.15 4.8 1.7 4.9 4.9.06 1.3.07 1.6.07 4.9s-.01 3.6-.07 4.9c-.15 3.2-1.6 4.7-4.9 4.9-1.3.06-1.6.07-4.9.07s-3.6-.01-4.9-.07c-3.3-.15-4.7-1.6-4.9-4.9C2.21 15.6 2.2 15.3 2.2 12s.01-3.6.07-4.9c.15-3.2 1.6-4.7 4.9-4.9C8.4 2.21 8.8 2.2 12 2.2m0-2.2C8.7 0 8.3.01 7 .07 2.6.27.2 2.7.07 7 .01 8.3 0 8.7 0 12c0 3.3.01 3.7.07 5 .2 4.3 2.6 6.8 6.9 6.9 1.3.06 1.7.07 5 .07s3.7-.01 5-.07c4.3-.2 6.8-2.6 6.9-6.9.06-1.3.07-1.7.07-5 0-3.3-.01-3.7-.07-5-.2-4.3-2.6-6.8-6.9-6.9C15.7.01 15.3 0 12 0z"/>
                                <path d="M12 5.8a6.2 6.2 0 1 0 0 12.4 6.2 6.2 0 0 0 0-12.4zm0 10.2a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
                                <circle cx="18.4" cy="5.6" r="1.44"/>
                            </svg>
                        </a>

                        <!-- TikTok -->
                        <a href="https://www.tiktok.com/@aldayang.mua?_t=ZS-8y2d1dK3TIm&_r=1" target="_blank" class="hover:opacity-80 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16.5 1c.7 2.3 2.4 4 4.6 4.5v4.4c-1.7 0-3.4-.5-4.6-1.4v7.6c0 5.3-5.7 8.5-10.3 5.9-1.8-1.1-3-3-3.1-5.1-.1-3.4 2.5-6.2 5.9-6.2.6 0 1.1.1 1.7.3v4.6c-.5-.2-1-.3-1.5-.2-1.3.2-2.3 1.4-2.2 2.8.1 1.1.9 2 2 2.2 1.6.3 3-1 3-2.6V1h4.5z"/>
                            </svg>
                        </a>

                        <!-- Email -->
                        <a href="mailto:aldayang23@gmail.com" class="hover:opacity-80 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-blue-500" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20 4H4C2.897 4 2 4.897 2 6v12c0 1.104.897 2 2 2h16c1.103 0 2-.896 2-2V6c0-1.103-.897-2-2-2zM4 6h16l-8 5-8-5zm0 12V8l8 5 8-5v10H4z"/>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Daftar Menu</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-300 hover:text-white transition">Beranda</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-white transition">Layanan</a></li>
                        <li><a href="#gallery" class="text-gray-300 hover:text-white transition">Galeri</a></li>
                        <li><a href="#pricing" class="text-gray-300 hover:text-white transition">Harga</a></li>
                        <li><a href="#contact" class="text-gray-300 hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Jam Pelayanan Studio</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li class="flex justify-between"><span>Senin</span> <span>10:00 - 18:00</span></li>
                        <li class="flex justify-between"><span>Selasa</span> <span>10:00 - 18:00</span></li>
                        <li class="flex justify-between"><span>Rabu</span> <span>10:00 - 18:00</span></li>
                        <li class="flex justify-between"><span>Kamis</span> <span>10:00 - 18:00</span></li>
                        <li class="flex justify-between"><span>Jumat</span> <span>10:00 - 18:00</span></li>
                        <li class="flex justify-between"><span>Sabtu</span> <span>12:00 - 16:00</span></li>
                        <li class="flex justify-between"><span>Minggu</span> <span>Tutup</span></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2024 AldayangMUA. Hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>

    <script>
        // Toggle menu mobile
        const mobileMenuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Smooth scrolling untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', async function(e) {
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
        appointmentForm.addEventListener('submit', async function(e) {
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
        document.getElementById('termsModal').addEventListener('click', async function(e) {
            if (e.target === this) {
                closeTermsModal();
            }
        });

    </script>
</body>
</html>
