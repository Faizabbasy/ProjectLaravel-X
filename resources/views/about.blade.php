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
        }
    </style>


    <div class="container my-5">
        <div class="d-flex flex-column align-items-center gap-4 text-center">
            <h1 class="fw-bold">Tentang Kami</h1>

            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center gap-5">
                <div>
                    <img src="{{ asset('images/log-removebg-preview.png') }}" alt="Logo" class="img-fluid"
                        style="max-width: 300px;">
                </div>

                <div>
                    <h2 class="fw-bold text-lg-start text-center">Perusahaan Branding Terbaik Di Jakarta Yang Akan Optimalkan
                        Bisnis Anda</h2>
                    <p class="fs-5 text-lg-start text-center mt-3">
                        ApelBranding merupakan mitra bagi korporasi dan bisnis, yang siap membantu pertumbuhan bisnis Anda
                        dalam aspek branding. Dengan pengalaman lebih dari 10 tahun dan pengetahuan yang selalu relevan,
                        Melon Branding akan memberdayakan setiap klien sebagai mitra yang dapat memperkenalkan merek dengan
                        strategi yang tepat.
                    </p>
                    <p class="fs-5 text-lg-start text-center">
                        Ketika Anda bekerja dengan Melon Branding, Anda dapat menciptakan brand identity yang lebih legit,
                        memiliki brand strategy yang terukur, dan eksekusi branding yang matang sehingga brand Anda semakin
                        dikenal masyarakat dan akan memenangkan market yang lebih besar.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center g-4">
            <div class="col-12 col-md-6">
                <div class="p-4 rounded shadow-sm text-center bg-light">
                    <h3 class="fw-bold">Visi Kami</h3>
                    <p class="fs-5 mt-3">
                        Menjadi penyedia layanan branding terkemuka <br> dalam pertumbuhan dan keberlanjutan perusahaan dan
                        segala jenis bisnis.
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="p-4 rounded shadow-sm text-center bg-light">
                    <h3 class="fw-bold">Misi Kami</h3>
                    <p class="fs-5 mt-3">
                        Membantu perusahaan dan bisnis dalam membangun dan mengembangkan merek mereka untuk mencapai tujuan
                        yang diinginkan.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <hr class="m-5">

    <div>
        <div>
            <h1 class="text-bold ">Layanan Kami</h1>
            <p class="fs-4">Sebagai perusahaan branding terbaik di Jakarta, Melon Branding bekerja sama dengan klien untuk
                memahami visi,
                nilai, dan tujuan yang unik, sehingga kami dapat menciptakan solusi yang disesuaikan yang efektif dalam
                menyampaikan cerita merek Anda.</p>
        </div>

        <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-5 my-5">
            <div class="img-fluid d-flex flex-column text-white bg-danger p-4" style="border-radius: 20px;">
                <a href=""></a>
                <h3>Brand Identity</h3>
                <p class="fs-5">Kembangkan identitas merek unik yang <br> mewakili nilai dan kepribadian bisnis <br> Anda.
                </p>
            </div>

            <div class="img-fluid d-flex flex-column text-white bg-primary p-4" style="border-radius: 20px;">
                <a href=""></a>
                <h3>Brand Strategy</h3>
                <p class="fs-5">Ciptakan strategi merek yang kuat yang dapat <br> diterima oleh audiens dan mendorong <br>
                    pertumbuhan bisnis.</p>
            </div>

            <div class="img-fluid d-flex flex-column text-white bg-warning p-4" style="border-radius: 20px;">
                <a href=""></a>
                <h3>Brand Management</h3>
                <p class="fs-5">Manajemen merek melibatkan pengembangan <br> dan pemeliharaan identitas, reputasi, dan
                    nilai <br> merek secara strategis.</p>
            </div>
        </div>
    </div>

    <div class="container my-5 text-center">
        <h2 class="fw-bold">Tim Kami</h2>
        <img src="{{ asset('images/me.jpg')}}" alt="" class="img-fluid rounded-circle" style="width: 200px; height: 200px; object-fit: cover;">
        <hr class="fs-5 text-bold w-25 mx-auto my-4">
        <p class="">Muhamad Faiz Abbasy <br>
        CEO</p>
    </div>
@endsection
