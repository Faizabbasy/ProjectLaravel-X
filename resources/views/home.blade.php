 @extends('template.nav')

 @section('content')
     <style>
         body {
             color: rgb(0, 0, 0);
             font-family: 'Poppins', sans-serif;
             margin: 0;
             padding: 0;
         }

         .container {
             max-width: 100%;
             height: auto;
             padding-left: 0 !important;
             padding-right: 0 !important;
         }

         .container-fluid {
             max-width: 100%;
             height: auto;
             padding-left: 0 !important;
             padding-right: 0 !important;
         }



         .client-logos {
             white-space: nowrap;
             width: max-content;
             gap: 40px;
         }


         .client-logo {
             max-height: 120px;
             max-width: 180px;
             object-fit: contain;
             scroll-snap-align: center;
             flex-shrink: 0;
             transition: transform 0.3s ease;

         }

         .client-logo:hover {
             transform: scale(1.1);
         }

         .client-logos-animation {
             display: flex;
             animation: scroll 30s linear infinite;
             width: max-content;
         }

         @keyframes scroll {
             0% {
                 transform: translateX(0);
             }

             100% {
                 transform: translateX(-50%);
             }
         }

         .slide {
             overflow: hidden;
             width: 100%;
         }


         .img-fluid {
             max-width: 100%;
             height: auto;
             transition: transform 0.4s ease;
         }

         .img-fluid:hover {
             transform: scale(1.10);
         }
     </style>

     {{--
 //tampilan awal --}}

     <div class="container py-5 text-white text-center d-flex justify-content-center align-items-center"
         style="background: linear-gradient(135deg, #049f29ec 60%, #52b95b 100%); min-height: 90vh; position: relative;">

         <div class="d-flex flex-column justify-content-center align-items-start w-90 h-100 text-start ms-5"
             style="min-height: 40vh;">

             <a class="btn btn-upgrade text-white fw-bold "
                 style="align-self: flex-start;border: 1px solid white; border-radius: 25px; font-weight: bold; padding:10px 20px;">UPGRADE
                 WEBSITE ANDA</a>

             <h1 class="display-4 mt-4" style="font-size: xx-larger; align-self: flex-start;">Layanan Website <br>
                 Development</h1>
             <p class="lead fs-5" style="align-self: flex-start;">Kami merancang website yang tidak hanya tampil
                 menarik, <br>
                 tapi juga selaras dengan
                 identitas brand Anda</p>

             <a class="btn btn-warning text-white fw-bold fs-5 mt-3 border border-white rounded-2 px-4 py-2"
                 style="align-self: flex-start; font-weight: bold; height: 6vh; width: 60%; transition: background 0.3s, color 0.3s, border 0.3s;"
                 href="#">
                 Lihat Selengkapnya ->
             </a>
         </div>

         <div class="d-flex justify-content-center align-items-center gap-5 mt-5 position-relative" style="z-index: 2;">
             <span
                 style="position: absolute; left: 20%; top: 70%; width: 20%; height: 40%; background: rgb(234, 234, 6); border-radius: 50%; z-index: 1;"></span>
             <img style="position: absolute; left: 20%; top: -17%; width: 15%; height: 30%; background: rgba(234, 234, 6, 0.108); border-radius: 50%; z-index: 1;"
                 src="{{ asset('images/cdg-removebg-preview.png') }}" alt="">
             <img class="mt-5 position-relative" style="border-radius: 40px; height: 45vh; width: 30%; z-index: 2;"
                 src="{{ asset('images/asdf.jpg') }}" alt="Logo">
             <img class="position-relative" style="border-radius: 40px; height: 45vh; width: 30%; z-index: 2;"
                 src="{{ asset('images/image2.jpg') }}" alt="Logo">
             <span
                 style="position: absolute; left: 70%; top: 2px; width: 20%; height: 40%; background: rgba(240, 32, 171, 0.884); border-radius: 60px; z-index: 1;"></span>
         </div>
     </div>



     {{-- tampilan kedua --}}
     <h3 class="d-flex flex-column justify-content-center align-items-center mt-4 text-bold" style="font-size:30px">Klien Kami</h3>
     <div class="slide d-flex justify-content-center align-items-center overflow-hidden mt-4 mb-5">
         <div class="client-logos-animation">
             <div class="client-logos d-flex align-items-center">
                 <img src="{{ asset('klien/aero.jpg') }}" alt="Logo 1" class="client-logo mx-3">
                 <img src="{{ asset('klien/bataa.jpg') }}" alt="Logo 2" class="client-logo mx-3">
                 <img src="{{ asset('klien/compas.jpg') }}" alt="Logo 3" class="client-logo mx-3">
                 <img src="{{ asset('klien/donat.png') }}" alt="Logo 4" class="client-logo mx-3">
                 <img src="{{ asset('klien/eiger.jpg') }}" alt="Logo 5" class="client-logo mx-3">
                 <img src="{{ asset('klien/erigo.jpg') }}" alt="Logo 6" class="client-logo mx-3">
                 <img src="{{ asset('klien/rough.jpg') }}" alt="Logo 7" class="client-logo mx-3">

                 <img src="{{ asset('klien/aero.jpg') }}" alt="Logo 1" class="client-logo mx-3">
                 <img src="{{ asset('klien/bataa.jpg') }}" alt="Logo 2" class="client-logo mx-3">
                 <img src="{{ asset('klien/compas.jpg') }}" alt="Logo 3" class="client-logo mx-3">
                 <img src="{{ asset('klien/donat.png') }}" alt="Logo 4" class="client-logo mx-3">
                 <img src="{{ asset('klien/eiger.jpg') }}" alt="Logo 5" class="client-logo mx-3">
                 <img src="{{ asset('klien/erigo.jpg') }}" alt="Logo 6" class="client-logo mx-3">
                 <img src="{{ asset('klien/rough.jpg') }}" alt="Logo 7" class="client-logo mx-3">
             </div>
         </div>
     </div>



     {{-- tampilan ketiga --}}
     <div class="container">
         <div class="d-flex flex-column justify-content-center align-items-center text-center py-5">
             <a class="btn btn-upgrade text-dark fw-bold"
                 style="display: inline-flex; justify-content: center; align-items: center;
                        border: 1px solid rgb(34, 255, 60); border-radius: 25px;
                        padding: 10px 20px; font-weight: bold; text-align: center;">
                 LAYANAN KAMI
             </a>
             <h1 class="text-bold text-center mb-4">
                 Bangun Website Impian Anda Bersama Kami
             </h1>

         </div>

         <div class="d-flex justify-content-center align-items-start gap-3 mb-5 flex-wrap">

             <div class="card text-center p-4 col-12 col-md-6 col-lg-4 mx-2"
                 style="border: 1px solid #19a1ae; border-radius: 12px; width: 22%;">
                 <h4 class="fw-bold mb-3 text-dark">Company Profile</h4>
                 <p class="text-muted mb-4" style="font-size: 0.95rem;">
                     Website profesional untuk menampilkan <br>
                     profil bisnis secara ringkas dan jelas
                 </p>
                 <a href="#" class="btn text-white fw-bold d-flex justify-content-center align-items-center gap-2"
                     style="background-color: #19a1ae; border-radius: 6px; height: 45px;">
                     COMPANY PROFILE
                     <span>&#10140;</span>
                 </a>
                 <a href="" class="mt-5"><i class="fa-solid fa-laptop-file mt-4" style="font-size: 200px;"></i></a>
             </div>

             <!-- Card ke-2 -->
             <div class="card text-center p-4 col-12 col-md-6 col-lg-4 mx-2"
                 style="border: 1px solid #e62f2f; border-radius: 12px; width: 22%;">
                 <h4 class="fw-bold mb-3 text-dark">E-Commerce</h4>
                 <p class="text-muted mb-4" style="font-size: 0.95rem;">
                     Website profesional untuk menampilkan <br>
                     profil bisnis secara ringkas dan jelas
                 </p>
                 <a href="#" class="btn text-white fw-bold d-flex justify-content-center align-items-center gap-2"
                     style="background-color: #e62f2f; border-radius: 6px; height: 45px;">
                     E-Commerce
                     <span>&#10140;</span>
                 </a>
                 <a href="" class="mt-5"><i class="fa-solid fa-store mt-4" style="font-size: 200px;"></i></a>
             </div>

             <!-- Card ke-3 -->
             <div class="card text-center p-4 col-12 col-md-6 col-lg-4 mx-2"
                 style="border: 1px solid #ffa600; border-radius: 12px; width: 22%;">
                 <h4 class="fw-bold mb-3 text-dark">Custom Website</h4>
                 <p class="text-muted mb-4" style="font-size: 0.95rem;">
                     Website profesional untuk menampilkan <br>
                     profil bisnis secara ringkas dan jelas
                 </p>
                 <a href="#" class="btn text-white fw-bold d-flex justify-content-center align-items-center gap-2"
                     style="background-color: #ffa600; border-radius: 6px; height: 45px;">
                     CUSTOM WEBSITE
                     <span>&#10140;</span>
                 </a>
                 <a href="" class="mt-5"><i class="fa-solid fa-laptop-file mt-4"
                         style="font-size: 200px;"></i></a>
             </div>

         </div>



         {{-- tampilan ke empat --}}

         <div class="d-flex justify-content-center align-items-center text-center py-5 gap-5">
             <div>
                 <a class="btn btn-upgrade text-dark fw-bold"
                     style="display: inline-flex; justify-content: center; align-items: center;
                        border: 1px solid rgb(74, 202, 0); border-radius: 25px;
                        padding: 10px 20px; font-weight: bold; text-align: center;">
                     PENDEKATAN KAMI
                 </a>

                 <h1 class="text-bold mb-4 mt-4">Strategi Branding <br> yang Tepat untuk <br> Berbagai Industri</h1>
             </div>


             <div>
                 <div class="d-flex justify-content-center align-items-center text-start gap-3">
                     <a href=""><i class="fa-regular fa-handshake" style="font-size: 75px;"></i>
                         </i></a>
                     <h3 style="color: #19a1ae">Dipercara Lebih <br> Dari 100 Brand</h3>
                 </div>

                 <div class="d-flex justify-content-center align-items-center text-start gap-4">
                     <a href=""><i class="fa-solid fa-industry" style="font-size: 75px;"></i></a>
                     <h3 style="color: #ff2b2b">Pengalaman Di <br> Berbagai Industri </h3>
                 </div>

                 <div class="d-flex justify-content-center align-items-center text-start gap-4">
                     <a href=""><i class="fa-solid fa-laptop-code" style="font-size: 75px;"></i></a>
                     <h3 style="color: #e7dc0f">Wawasan <br> Yang Membentuk <br> Visual</h3>
                 </div>
             </div>


             <div class="">
                 <div class="d-flex text-start">
                     <p class="fs-5">Lebih dari 100 brand telah mempercayakan <br> proses branding mereka kepada kami</p>
                 </div>

                 <div class="d-flex text-start">
                     <p class="fs-5">Kami telah menangani proyek di berbagai <br> bidang, mulai dari arsitektur,
                         kesehatan, <br>
                         manufaktur, hingga
                         teknologi</p>
                 </div>

                 <div class="d-flex text-start">
                     <p class="fs-5">Setiap proyek kami mulai dari riset hingga <br> identitas brand, semuanya dirancang
                         untuk <br>
                         menjangkau
                         audiens yang tepat</p>
                 </div>
             </div>

         </div>



         <div class="d-flex flex-column justify-content-center align-items-center text-center py-5">
             <a class="btn btn-upgrade text-dark fw-bold"
                 style="display: inline-flex; justify-content: center; align-items: center;
                        border: 1px solid rgb(74, 202, 0); border-radius: 25px;
                        padding: 10px 20px; font-weight: bold; text-align: center;">
                 SOLUSI TEPAT
             </a>
             <h1 class="text-bold mt-3">Jasa Website Development</h1>

             <div class="container mt-5">

             </div>



             <div class="row gx-2 gy-5 justify-content-center">
                 <!-- Arsitektur -->
                 <div class="col-12 col-md-6 text-center">
                     <h5 class="fw-bold mb-2">Arsitektur dan Properti</h5>
                     <img src="{{ asset('contoh_web/arsitek.jpg') }}" alt="Arsitektur"
                         class="img-fluid rounded shadow-sm w-75 px-1" style="max-height: 350px; object-fit: cover;">
                 </div>

                 <!-- Kesehatan -->
                 <div class="col-12 col-md-6 text-center">
                     <h5 class="fw-bold mb-2">Kesehatan</h5>
                     <img src="{{ asset('contoh_web/kesehatan.jpg') }}" alt="Kesehatan"
                         class="img-fluid rounded shadow-sm w-75 px-1" style="max-height: 350px; object-fit: cover;">
                 </div>

                 <!-- sport -->
                 <div class="col-12 col-md-6 text-center">
                     <h5 class="fw-bold mb-2">Sport</h5>
                     <img src="{{ asset('contoh_web/sport.jpg') }}" alt="Manufaktur"
                         class="img-fluid rounded shadow-sm w-75 px-1" style="max-height: 350px; object-fit: cover;">
                 </div>

                 <!-- Teknologi -->
                 <div class="col-12 col-md-6 text-center">
                     <h5 class="fw-bold mb-2">Teknologi</h5>
                     <img src="{{ asset('contoh_web/tekno.jpg') }}" alt="Teknologi"
                         class="img-fluid rounded shadow-sm w-75 px-1" style="max-height: 350px; object-fit: cover;">
                 </div>

                 <!-- Fashion -->
                 <div class="col-12 col-md-6 text-center">
                     <h5 class="fw-bold mb-2">Fashion dan Kecantikan</h5>
                     <img src="{{ asset('contoh_web/fashion.jpg') }}" alt="Fashion"
                         class="img-fluid rounded shadow-sm w-75 px-1" style="max-height: 350px; object-fit: cover;">
                 </div>

                 <!-- Lainnya -->
                 <div class="col-12 col-md-6 text-center">
                     <h5 class="fw-bold mb-2">Lainnya</h5>
                     <img src="{{ asset('contoh_web/lain.jpg') }}" alt="Lainnya"
                         class="img-fluid rounded shadow-sm w-75 px-1" style="max-height: 350px; object-fit: cover;">
                 </div>
             </div>

         </div>
     </div>



     {{-- tampilan ke 5 --}}
     <div class="container-fluid px-0 py-5 d-flex justify-content-center align-items-center gap-5">
         <div>
             <span
                 style="position: absolute; left: 30%;  width: 9%; height: 18%; background: rgb(234, 234, 6); border-radius: 50%; z-index: 1;"><i
                     class="fa-solid fa-rocket "
                     style="position: absolute; left: 21%; top: 27%; font-size: 95px;  "></i></span>
             <img src="{{ asset('images/image1.jpg') }}" alt=""
                 style="width: 100%; height: 100%; object-fit: cover; border-radius: 50% 50% 50% 50ex;">
         </div>


         <div class="col-md-6">
             <span class="badge rounded-pill border border-success text-success mb-2 fs-5">WEBSITE UNTUK BISNIS</span>
             <h2 class="fw-bold">Mari Bangun Website Sesuai Kebutuhan Anda</h2>
             <p>Website yang kami buat bukan hanya soal tampilan, tapi soal bagaimana ia bisa bekerja efektif untuk
                 mendukung pertumbuhan bisnis Anda</p>
             <p class="fw-semibold">Tertarik untuk Memulai?<br>
                 Konsultasikan kebutuhan website Anda secara gratis bersama tim kami</p>
             <a href="#" class="btn btn-warning fw-semibold mt-2 px-4 py-2">
                 Konsultasi Gratis Sekarang →
             </a>
         </div>
     </div>





     {{--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
        integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous">
    </script>
</body>

</html> --}}
 @endsection
