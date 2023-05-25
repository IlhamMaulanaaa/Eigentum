@extends('layout.main')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    {{-- <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon"> --}}
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/Lib/swiper-bundle.min.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!-- Libraries Stylesheet -->
    <link href="/css/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/css/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/Lib/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="/css/Panduan/panduan.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    {{-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border " style="width: 3rem; height: 3rem; color:#0C40E8" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> --}}
    <!-- Spinner End -->


    


    {{-- <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5" style="margin-left: 48px;">
            <img src="/assets/logo.svg" alt="" style="height: 46px; width: 46px; margin-right: 4px;">
            <h2 class="m-0" style="font-size: 30px; color: #0C40E8; font-weight: 600;">Eigentum</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/dijual" class="nav-item nav-link" style="color: #000">Dijual</a>
                <a href="about.html" class="nav-item nav-link" style="color: #000">Disewa</a>
                <a href="service.html" class="nav-item nav-link" style="color: #000">Properti Baru</a>
                <a href="project.html" class="nav-item nav-link" style="color: #000">Cari agen</a>
                <a href="/panduan" class="nav-item nav-link" style="color: #000">Panduan</a>
                <a href="/kpr" class="nav-item nav-link" style="color: #000">KPR</a>
            </div>
            <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block" style="background-color: #0C40E8; color: #ffffff; border: none;">Masuk<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
        
    </nav> --}}
    



    <section class="home" id="home" style="">
        <div class="home-text container">
            <h2 class="home-title">Panduan Eigentum</h2>
            <span class="home-subtitle" style="color: #000">Panduan properti yang dapat dipercaya untuk Anda</span>
        </div>
    </section>
    
    


    <!-- Feature Start -->
    <div class="container-xxl py-5" style="text-align: left;">
    <div class="container" style="margin: 0 auto;">
        <div class="row g-5" style="text-align: center; justify-content: center;">
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-4" style="text-align: center; justify-content: center;">
                    <div class="btn-lg-square rounded-circle me-3" style="background-color: #0C40E8;">
                        <i class="fa fa-users" style="color: #fff;"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up" style="font-family: 'Lato', sans-serif;">3453</h1>
                </div>
                <h5 class="mb-3" style="font-family: 'Lato', sans-serif;">Customers</h5>
                <span style="font-family: 'Lato', sans-serif;">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-4" style="text-align: center; justify-content: center;">
                    <div class="btn-lg-square rounded-circle me-3" style="background-color: #0C40E8;">
                        <i class="fa fa-users" style="color: #fff;"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up" style="font-family: 'Lato', sans-serif;">3453</h1>
                </div>
                <h5 class="mb-3" style="font-family: 'Lato', sans-serif;">Agen</h5>
                <span style="font-family: 'Lato', sans-serif;">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center mb-4" style="text-align: center; justify-content: center;">
                    <div class="btn-lg-square rounded-circle me-3" style="background-color: #0C40E8;">
                        <i class="fa fa-users" style="color: #fff;"></i>
                    </div>
                    <h1 class="mb-0" data-toggle="counter-up" style="font-family: 'Lato', sans-serif;">3453</h1>
                </div>
                <h5 class="mb-3" style="font-family: 'Lato', sans-serif;">Developer</h5>
                <span style="font-family: 'Lato', sans-serif;">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit</span>
            </div>
        </div>
    </div>
</div>

    <!-- Feature Start -->




    <!-- Category Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h6 id="" class="" style="font-family: 'Lato', sans-serif; color:#0C40E8">Kategori Panduan</h6>
                <h1>Lihat Panduan Teratas</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="/assets/Panduan/eksplore.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Jual Properti</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="/assets/Panduan/eksplore.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Sewa Properti</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="/assets/Panduan/eksplore.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Beli Properti</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="/assets/Panduan/eksplore.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Developer</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="/assets/Panduan/eksplore.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">KPR</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="/assets/Panduan/eksplore.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Hukum Properti</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="/assets/Panduan/eksplore.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Perpajakan Properti</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="/assets/Panduan/eksplore.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Jadi Agent</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category Start -->


    


    <!-- Projects Start -->
    <div class="container-xxl py-5"  id="oi">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 id="" class="" style="font-family: 'Lato', sans-serif; color:#0C40E8">Daftar Panduan</h6>
                <h1 class="mb-4">Panduan Tentang Properti</h1>
            </div>
            <div class="container-search-panduan">
                <div class="search_wrap search_wrap_1">
                  <div class="search_box">
                    <input type="text" class="input" placeholder="search...">
                    <div class="btn btn_common">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="post-filter container">
                <span class="filter-item active-filter" data-filter="all">Semua</span>
                <span class="filter-item" data-filter="kpr">KPR</span>
                <span class="filter-item" data-filter="properti">Properti</span>
                <span class="filter-item" data-filter="agen">Agen</span>
                <span class="filter-item" data-filter="news">Terbaru</span>
            </div>
            
            <div class="post container">
                <!-- Post 1 -->
                <div class="post-box kpr">
                    <img src="images/img1.jpg" alt="" class="post-img">
                    <h2 class="category">KPR</h2>
                    <a href="#" class="post-title">Cara Melakukan KPR dengan benar</a>
                    <span class="post-date">12 Mei 2023</span>
                    <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
                    
                </div>
                <!-- Post 2 -->
                <div class="post-box properti">
                    <img src="images/img2.jpg" alt="" class="post-img">
                    <h2 class="category">Properti</h2>
                    <a href="#" class="post-title">Cara Melakukan KPR dengan benar</a>
                    <span class="post-date">12 Mei 2023</span>
                    <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
                    
                </div>
                <!-- Post 3 -->
                <div class="post-box properti">
                    <img src="images/img3.jpg" alt="" class="post-img">
                    <h2 class="category">Properti</h2>
                    <a href="#" class="post-title">Cara Melakukan KPR dengan benar</a>
                    <span class="post-date">12 Mei 2023</span>
                    <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
                    
                </div>
                <!-- Post 4 -->
                <div class="post-box news">
                    <img src="images/img4.jpg" alt="" class="post-img">
                    <h2 class="category">Terbaru</h2>
                    <a href="#" class="post-title">Cara Melakukan KPR dengan benar</a>
                    <span class="post-date">12 Mei 2023</span>
                    <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
                    
                </div>
                <!-- Post 5 -->
                <div class="post-box kpr">
                    <img src="images/img5.jpg" alt="" class="post-img">
                    <h2 class="category">KPR</h2>
                    <a href="#" class="post-title">Cara Melakukan KPR dengan benar</a>
                    <span class="post-date">12 Mei 2023</span>
                    <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
                    
                </div>
                <!-- Post 6 -->
                <div class="post-box news">
                    <img src="images/img4.jpg" alt="" class="post-img">
                    <h2 class="category">Terbaru</h2>
                    <a href="#" class="post-title">Cara Melakukan KPR dengan benar</a>
                    <span class="post-date">12 Mei 2023</span>
                    <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
                    
                </div>
                <!-- Post 7 -->
                <div class="post-box kpr">
                    <img src="images/img7.jpg" alt="" class="post-img">
                    <h2 class="category">KPR</h2>
                    <a href="#" class="post-title">Cara Melakukan KPR dengan benar</a>
                    <span class="post-date">12 Mei 2023</span>
                    <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
                    
                </div>
                <!-- Post 1 -->
                <div class="post-box news">
                    <img src="images/img8.jpg" alt="" class="post-img">
                    <h2 class="category">Terbaru</h2>
                    <a href="#" class="post-title">Cara Melakukan KPR dengan benar</a>
                    <span class="post-date">12 Mei 2023</span>
                    <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
                    
                </div>
                <!-- Post 9 -->
                <div class="post-box properti">
                    <img src="images/img10.jpg" alt="" class="post-img">
                    <h2 class="category">Properti</h2>
                    <a href="#" class="post-title">Cara Melakukan KPR dengan benar</a>
                    <span class="post-date">12 Mei 2023</span>
                    <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
                    
                </div>
                <div class="post-box agen">
                    <img src="images/img10.jpg" alt="" class="post-img">
                    <h2 class="category">Agen</h2>
                    <a href="#" class="post-title">Cara Melakukan KPR dengan benar</a>
                    <span class="post-date">12 Mei 2023</span>
                    <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
                    
                </div>
                <div class="post-box agen">
                    <img src="images/img10.jpg" alt="" class="post-img">
                    <h2 class="category">Agen</h2>
                    <a href="#" class="post-title">Cara Melakukan KPR dengan benar</a>
                    <span class="post-date">12 Mei 2023</span>
                    <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
                    
                </div>
                <div class="post-box agen">
                    <img src="images/img10.jpg" alt="" class="post-img">
                    <h2 class="category">Agen</h2>
                    <a href="#" class="post-title">Cara Melakukan KPR dengan benar</a>
                    <span class="post-date">12 Mei 2023</span>
                    <p class="post-description">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, similique, rerum excepturi harum, vitae facilis corrupti vel modi debitis est perferendis aut quasi ea unde repudiandae iste architecto. Corporis, voluptates.</p>
                    
                </div>
                <div class="pagination-panduan">
                    <ul>  </ul>
                </div>
            </div>
        
    </div>
    <!-- Projects End -->


    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg  btn-lg-square rounded-circle back-to-top" style="background-color: #0C40E8; color:#fff;"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/css/lib/wow/wow.min.js"></script>
    <script src="/css/lib/easing/easing.min.js"></script>
    <script src="/css/lib/waypoints/waypoints.min.js"></script>
    <script src="/css/lib/counterup/counterup.min.js"></script>
    <script src="/css/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/css/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/css/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/Panduan/panduan.js"></script>
    <!-- Swiper JS -->
    <script src="/js/swiper-bundle.min.js"></script>

</body>

</html>

@endsection