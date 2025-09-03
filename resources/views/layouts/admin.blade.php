<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans antialiased">

    <!-- Topbar -->
    <header class="fixed top-0 left-0 right-0 bg-white shadow z-50 w-full">
        <div class="container-fluid px-4 py-3 d-flex justify-content-between align-items-center">
            <!-- Left Branding -->
            <div class="d-flex align-items-center">
                <span class="text-blue-600 text-2xl font-bold">🧾</span>
                <h1 class="ms-2 text-xl sm:text-2xl font-semibold text-gray-800">Dashboard Admin</h1>
            </div>

            <!-- Right User Info -->
            <div class="d-flex align-items-center text-sm text-gray-600">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-link text-red-600 hover:text-red-700 transition">
                        <i class="fa fa-arrow-left"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        @yield('content')
    </main>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chart.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>