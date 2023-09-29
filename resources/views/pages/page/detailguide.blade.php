@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Fables">
        <meta name="author" content="Enterprise Development">
        <link rel="shortcut icon" href="css/Lib/panduan/assets/custom/images/shortcut.png">


        <!-- animate.css-->
        <link href="css/Lib/panduan/assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
        <!-- Load Screen -->
        <link href="css/Lib/panduan/assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
        <!-- GOOGLE FONT -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
            rel="stylesheet">
        <!-- Font Awesome 5 -->
        <link href="css/Lib/panduan/assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
        <!-- Fables Icons -->
        <link href="css/Lib/panduan/assets/custom/css/fables-icons.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link href="css/Lib/panduan/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/Lib/panduan/assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
        <!-- FANCY BOX -->
        <link href="css/Lib/panduan/assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
        <!-- OWL CAROUSEL  -->
        <link href="css/Lib/panduan/assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
        <link href="css/Lib/panduan/assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
        <!-- FABLES CUSTOM CSS FILE -->
        <link href="css/Lib/panduan/assets/custom/css/custom.css" rel="stylesheet">
        <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
        <link href="css/Lib/panduan/assets/custom/css/custom-responsive.css" rel="stylesheet">
        <link href="css/Lib/panduan/assets/custom/css/timeline.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </head>


    <body>

        <!-- Start Header -->
        <div class="fables-header fables-after-overlay bg-rules" style="margin-top: 70px;">
            <div class="container">
                <h2 class="fables-page-title fables-second-border-color wow fadeInLeft" data-wow-duration="1.5s">Panduan SP3K
                </h2>
            </div>
        </div>
        <!-- /End Header -->

        <!-- Start Breadcrumbs -->
        <div class="fables-light-background-color">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div aria-label="breadcrumb">
                            <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                                <li class="breadcrumb-item"><a href="#" class="fables-second-text-color">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Panduan</li>
                                <li class="breadcrumb-item active" aria-current="page">Panduan SP3K</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /End Breadcrumbs -->

        <!-- Start page content -->
        <div class="container">
            <div class="my-4 my-lg-5">
                {{-- <div class="owl-carousel owl-theme default-carousel absolute-dots inside-text-carousel nav-0 mr-4 mb-3"> 
              <div class="image-container rotateOut-effect">
                    <img src="assets/custom/images/img.jpg" alt="" class="w-100">
              </div>
              <div class="image-container rotateOut-effect">
                    <img src="assets/custom/images/img.jpg" alt="" class="w-100">
              </div> 
              <div class="image-container rotateOut-effect">
                  <img src="assets/custom/images/img.jpg" alt="" class="w-100">
            </div>   
         </div> --}}
                <h2 class="fables-second-text-color font-20 semi-font my-3 mt-md-0">Cara Mengurus SP3K</h2>
                <p class="fables-forth-text-color font-14">
                    Ketika Anda ingin membeli rumah dengan pembayaran KPR, Anda akan menyerahkan sejumlah dokumen
                    persyaratan kepada pihak bank. Setelah itu, bank akan melakukan analisis terhadap data dan keuangan
                    Anda. Hal ini termasuk wawancara, survei keabsahan diri seperti alamat rumah, pekerjaan, dan referensi
                    keluarga. Pihak bank juga akan melakukan proses penilaian dan kalkulasi harga properti yang Anda ajukan.
                </p>
                <p class="fables-forth-text-color font-14">
                    Setelah proses analisis selesai, bank akan memutuskan persetujuan pengajuan KPR Anda. Jika KPR Anda
                    disetujui, maksimal dalam 14 hari kerja, bank akan memberikan Surat Penegasan Persetujuan Penyediaan
                    Kredit atau disingkat SP3K.
                </p>
            </div>





            <div class="wrappertimeline">
                <div class="center-line">
                </div>
                <div class="row row-1">
                    <section>
                        <i class="icon fas fa-dollar-sign"></i>
                        <div class="details">
                            <span class="title">Memilih Bank</span>

                        </div>
                        <p>Pertama, pilihlah bank atau lembaga keuangan yang akan Anda ajukan KPR. Pastikan Anda
                            membandingkan berbagai pilihan bank untuk mendapatkan suku bunga dan persyaratan pinjaman yang
                            sesuai dengan kebutuhan Anda.</p>

                    </section>
                </div>
                <div class="row row-2">
                    <section>
                        <i class="icon fas fa-file-alt"></i>
                        <div class="details">
                            <span class="title">Persiapan Dokumen</span>
                        </div>
                        <p>Siapkan dokumen-dokumen yang diperlukan oleh bank untuk mengajukan KPR, termasuk:

                        </p>
                        <P>1. Fotokopi KTP dan NPWP (Nomor Pokok Wajib Pajak) Anda dan pasangan (jika ada).
                        </P>
                        <p>2. Fotokopi Kartu Keluarga.
                        </p>
                        <p>3. Slip gaji atau bukti penghasilan.
                        </p>
                        <p>4. Rekening koran atau laporan keuangan pribadi.
                        </p>
                        <p> 5. Surat keterangan kerja atau surat usaha (untuk pekerja mandiri atau pengusaha).
                        </p>
                        <p>6. Surat pernyataan kredit dari kreditur lain (jika ada).
                        </p>
                        <p>7. Surat perjanjian jual beli rumah (untuk KPR pembelian rumah).
                        </p>
                        <p>8. Rencana anggaran biaya pembangunan rumah (untuk KPR pembangunan rumah).</p>

                    </section>
                </div>
                <div class="row row-1">
                    <section>
                        <i class="icon fas fa-phone"></i>
                        <div class="details">
                            <span class="title">Ajukan KPR</span>
                        </div>
                        <p>Setelah Anda menyiapkan semua dokumen yang diperlukan, ajukan KPR ke bank yang Anda pilih. Bank
                            akan mengevaluasi aplikasi Anda berdasarkan kelayakan kredit dan kemampuan pembayaran Anda.</p>

                    </section>
                </div>
                <div class="row row-2">
                    <section>
                        <i class="icon fas fa-check"></i>
                        <div class="details">
                            <span class="title">Penilaian Properti</span>
                        </div>
                        <p>Jika Anda mengajukan KPR untuk pembelian properti, bank akan melakukan penilaian properti untuk
                            menentukan nilai riil properti yang akan dijadikan jaminan KPR.</p>

                    </section>
                </div>
                <div class="row row-1">
                    <section>
                        <i class="icon fas fa-chart-line"></i>
                        <div class="details">
                            <span class="title">Proses Analisis Kredit</span>
                        </div>
                        <p>Bank akan melakukan analisis kredit untuk menilai risiko pemberian kredit kepada Anda. Mereka
                            akan memeriksa profil kredit, kestabilan keuangan, dan kapasitas pembayaran Anda.</p>

                    </section>
                </div>
                <div class="row row-2">
                    <section>
                        <i class="icon fas fas fa-check-circle"></i>
                        <div class="details">
                            <span class="title">Persetujuan Prinsip Kredit (SP3K)</span>
                        </div>
                        <p>Jika aplikasi Anda disetujui, Anda akan mendapatkan Surat Persetujuan Prinsip Kredit (SP3K). SP3K
                            berisi persetujuan awal dari bank untuk memberikan kredit dengan jumlah tertentu berdasarkan
                            analisis kredit awal. SP3K ini seringkali menjadi syarat utama untuk memproses selanjutnya,
                            seperti akta notaris atau pembebasan hak tanggungan.</p>

                    </section>
                </div>
                <div class="row row-1">
                    <section>
                        <i class="icon fas fa-flag"></i>
                        <div class="details">
                            <span class="title">Finalisasi KPR</span>
                        </div>
                        <p>Bank akan melakukan analisis kredit untuk menilai risiko pemberian kredit kepada Anda. Mereka
                            akan memeriksa profil kredit, kestabilan keuangan, dan kapasitas pembayaran Anda.</p>

                    </section>
                </div>
            </div>



            <div class="row overflow-hidden mb-4 mt-md-4 my-lg-5">
                <div class="col-12 col-md-6 col-lg-4 wow fadeInLeft" data-wow-delay=".8s">
                    <div class="latest-news-img-block"
                        style="background-image:url(assets/custom/images/post-1.jpg);background-size: cover">
                        <p
                            class="latest-news-text fables-testimonial-detail fables-main-color-transparent italic text-white font-14 text-center p-6">
                            Di balik setiap SP3K terdapat kisah perjuangan dan kerja keras untuk meraih tujuan finansial
                            yang lebih baik.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-8 wow fadeInRight" data-wow-delay=".8s">
                    <p class="fables-forth-text-color font-14 mt-4 mt-sm-0">
                        Itu dia seluk beluk soal SP3K yang perlu Anda ketahui. Kini, Anda sudah tahu ya betapa pentingnya
                        istilah satu ini. Tidak perlu khawatir lagi jika Anda hendak mengajukan KPR dan tidak tahu hasil apa
                        yang harus diharapkan. Jika Anda sudah memegang SP3K, niscaya proses pencairan KPR Anda juga akan
                        berjalan mulus.
                    </p>
                    <hr>
                    <div class="row">
                        <div class="col-3 col-sm-2 col-md-3 col-lg-1">
                            <span class="fables-forth-text-color underline  mt-2 font-18 d-inline-block">Share</span>
                        </div>
                        <div class="col-8 col-sm-5  col-md-7 col-lg-8">
                            <ul class="nav mt-2">
                                <li><a href=""
                                        class="fables-forth-text-color fables-single-link fables-second-hover-color"><span
                                            class="fables-icongooglePlus"></span></a></li>
                                <li><a href=""
                                        class="fables-forth-text-color fables-single-link fables-second-hover-color"><span
                                            class="fables-iconfacebook"></span></a></li>
                                <li><a href=""
                                        class="fables-forth-text-color fables-single-link fables-second-hover-color"><span
                                            class="fables-iconinstagram"></span></a></li>
                                <li><a href=""
                                        class="fables-forth-text-color fables-single-link fables-second-hover-color"><span
                                            class="fables-iconpinterest"></span></a></li>
                                <li><a href=""
                                        class="fables-forth-text-color fables-single-link fables-second-hover-color"><span
                                            class="fables-icontwitter"></span></a></li>
                                <li><a href=""
                                        class="fables-forth-text-color fables-single-link fables-second-hover-color"><span
                                            class="fables-iconlinkedIn"></span></a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-sm-5 col-md-12 col-lg-3">
                            <span class="float-sm-right font-14 italic fables-second-text-color mt-3">09 November,
                                2018</span>
                        </div>
                    </div>

                </div>
            </div>
            



        </div>
        <!-- /End page content -->



        <script src="css/Lib/panduan/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <script src="css/Lib/panduan/assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
        <script src="css/Lib/panduan/assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
        <script src="css/Lib/panduan/assets/vendor/popper/popper.min.js"></script>
        <script src="css/Lib/panduan/assets/vendor/WOW-master/dist/wow.min.js"></script>
        <script src="css/Lib/panduan/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="css/Lib/panduan/assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
        <script src="css/Lib/panduan/assets/vendor/fancybox-master/jquery.fancybox.min.js"></script>
        <script src="css/Lib/panduan/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
        <script src="css/Lib/panduan/assets/vendor/timeline/jquery.timelify.js"></script>
        <script src="css/Lib/panduan/assets/custom/js/custom.js"></script>

    </body>

    </html>
@endsection
