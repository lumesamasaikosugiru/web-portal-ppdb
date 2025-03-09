<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB | WEB APP REGISTRATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .hero-section {
            background: url('{{ asset('imgs/bg.png') }}') no-repeat center center/cover;
            padding: 80px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .logo {
            max-height: 80px;
        }

        .hero-image {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-light bg-white shadow-sm">
        <div class="container justify-content-center">
            <a href="#">
                <img src="{{ asset('imgs/logo.png') }}" alt="SDNPU Schools" class="img-fluid logo">
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="container mt-3 mb-5">
        <div class="row align-items-center bg-white p-5 rounded shadow-lg hero-section">
            <!-- Text Content -->
            <div class="col-md-6 text-dark">
                <h5 class="text-secondary">Selamat datang di</h5>
                <h1 class="fw-bold">Portal Pendaftaran Peserta Didik Baru (PPDB)</h1>
                <h3 class="text-danger mt-2">WEB APLICATION REGISTRATION</h3>
                <p class="text-muted mt-3">Menuntun anak anda menuju gerbang pendidikan yang cemerlang!</p>
                <a href="{{ route('daftar') }}" class="btn btn-primary mt-3">Mulai Mencari Sekolah!</a>
            </div>

            <!-- Hero Image -->
            <div class="col-md-5 text-center">
                <img src="{{ asset('imgs/hero.png') }}" alt="PPDB Illustration" class="img-fluid hero-image">
            </div>
        </div>
    </section>

</body>

</html>