<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register - AldayangMUA</title>
    <link rel="icon" href="/images/logo.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap & Font Awesome -->
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
            max-width: 600px;
            margin: 30px auto;
            padding: 40px;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
        }
        .footer-link {
            font-size: 0.9rem;
        }
        .title-with-bullets {
            font-size: 4rem;
            color: white;
            font-weight: bold;
            text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .title-with-bullets::before,
        .title-with-bullets::after {
            content: "•";
            font-size: 2.5rem;
            color: white;
            margin: 0 20px;
        }

        @media (max-width: 768px) {
            .auth-box {
                padding: 30px 20px;
            }
            .title-with-bullets {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- Video Background -->
    <video autoplay muted loop class="bg-video">
        <source src="{{ asset('videos/background-login-web.mp4') }}" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    
    <div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">
        <h1 class="title-with-bullets mb-4">AldayangMUA</h1>

        <div class="auth-box">
            <div class="text-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 144px; height: 144px;">
                <h4>Buat Akun</h4>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="form-control" required value="{{ old('name') }}">
                    @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required value="{{ old('email') }}">
                    @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                    @error('password') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-user-plus me-1"></i> Daftar
                    </button>
                </div>

                <div class="text-center footer-link">
                    Sudah punya akun? <a href="{{ route('login') }}" class="text-decoration-none text-primary">Login di sini</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

