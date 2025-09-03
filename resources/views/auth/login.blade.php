<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - AldayangMUA</title>
    <link rel="icon" href="/images/logo.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body, html {
            height: 100%;
            margin: 0;
            overflow: hidden;
        }
        .bg-video {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
            object-fit: cover;
        }
        .auth-box {
            width: 100%;
            max-width: 450px;
            margin: 60px auto;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }

        .footer-link {
            font-size: 14px;
        }
        .title-with-bullets {
            font-size: 5rem;
            color: white;
            font-weight: bold;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .title-with-bullets::before,
        .title-with-bullets::after {
            content: "•";
            font-size: 3rem;
            color: white;
            margin: 0 20px;
        }

    </style>
</head>
<body>
    <!-- Video Background -->
    <video autoplay muted loop class="bg-video">
        <source src="{{ asset('videos/background-login-web.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <!-- Login Form -->
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <h1 class="title-with-bullets mb-4">AldayangMUA</h1>
        <div class="auth-box text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 144px; height: 144px;">
            <h3 class="mb-3">Login</h3>

            @if(session('success'))
                <div class="alert alert-success py-1">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger py-1">{{ session('error') }}</div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3 text-start">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3 text-start">
                    <label class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" required>
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <button type="submit" class="btn btn-success w-100"><i class="fa fa-sign-in" aria-hidden="true"></i>
                    Login
                </button>
            </form>

            <hr class="my-4">

            <div class="footer-link">
               <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Belum punya akun? Daftar di sini</a>
            </div>
        </div>
    </div>
</body>
</html>