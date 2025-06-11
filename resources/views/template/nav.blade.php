<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap & Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Custom Styles -->
    <style>
        .navbar-custom {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: #ffffff;
            box-shadow: 0 13px 20px rgba(0, 0, 0, 0.1);
            height: 100px;
        }

        .nav-link {
            font-size: 10px;
            color: black !important;
        }

        .nav-link:hover {
            color: #259b2f !important;
        }

        .logo-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom px-4 py-3">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/log-removebg-preview.png') }}" alt="Logo" class="logo-img me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item">
                        <a class="nav-link fs-5 text-bold" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="{{ route('kontak') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container my-4">
        @yield('content')
    </div>


    <footer class="bg-black text-white pt-4 pb-5">
        <div class="container text-center text-md-start ">
            <h5 class="fw-bold mb-4 fs-2">Kontak Kami</h5>

            <div class="d-flex flex-column gap-2">
                <div class="d-flex align-items-start">
                    <i class="fa-solid fa-location-dot me-2 mt-1 fs-1"></i>
                    <span class="fs-4">Jl. Sindang Sari Kota Bogor</span>
                </div>

                <div class="d-flex align-items-start">
                    <i class="fa-solid fa-envelope me-2 mt-1 fs-1"></i>
                    <span class="fs-4">hello@apelbranding.com</span>
                </div>

                <div class="d-flex align-items-start">
                    <i class="fa-solid fa-phone me-2 mt-1 fs-1"></i>
                    <span class="fs-4.">0812-3456-7890</span>
                </div>
            </div>

            <div class="d-flex justify-content-center gap-4 mt-4">
                <a href="#" class="text-white fs-5"><i class="fab fa-instagram fs-1"></i></a>
                <a href="#" class="text-white fs-5"><i class="fab fa-linkedin fs-1"></i></a>
                <a href="#" class="text-white fs-5"><i class="fab fa-youtube fs-1"></i></a>
                <a href="#" class="text-white fs-5"><i class="fab fa-spotify fs-1 "></i></a>
            </div>


        </div>




        <a href="https://api.whatsapp.com/send/?phone=62811251725&text=Halo+Melon+Branding!+Saya+ada+Pertanyaan.."
            target="_blank" class="whatsapp-float">
            <img src="{{ asset('images/whatsapp-removebg-preview.png') }}" alt="WhatsApp" style="width: 60px;">
        </a>
    </footer>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
