@extends('template.nav')

@section('content')
    <style>
        .img-fluid {
            max-width: 100%;
            height: auto;
            transition: transform 0.4s ease;
        }

        .img-fluid:hover {
            transform: scale(1.10);
            box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>


    <div class="container py-5">
        <div class="row align-items-center justify-content-center">

            <div class="col-md-5 mb-4">
                <h5>Kontak</h5>
                <h1 style="font-size: 60px;">Hubungi Kami & <br> Temukan Potensimu <br> Bersama Melon <br> Branding</h1>

                <div class="d-flex align-items-start mt-4">
                    <i class="fa-solid fa-location-dot me-2 mt-1 fs-5"></i>
                    <span>Jl. Sindang Sari Kota Bogor</span>
                </div>

                <div class="d-flex align-items-start mt-2">
                    <i class="fa-solid fa-envelope me-2 mt-1 fs-5"></i>
                    <span>hello@Melonbranding.com</span>
                </div>

                <div class="d-flex align-items-start mt-2">
                    <i class="fa-solid fa-phone me-2 mt-1 fs-5"></i>
                    <span>0812-3456-7890</span>
                </div>
            </div>


            <div class="col-md-6">
                <h2 class="mb-4 text-center fw-bold">Hubungi Kami</h2>
                <form class="bg-success p-4 rounded shadow-sm text-white">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Anda">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Alamat Email</label>
                        <input type="email" class="form-control" id="email" placeholder="email">
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan Anda di sini..."></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-light text-success fw-bold">Kirim Pesan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="container my-5 text-center">
        <h3 class="fs-3">Lokasi</h3>
        <img class="img-fluid" src="{{ asset('images/lok.png') }}" alt="">
    </div>
@endsection
