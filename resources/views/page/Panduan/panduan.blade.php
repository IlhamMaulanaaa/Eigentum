@extends('layout.main')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Solartec - Renewable Energy Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    {{-- <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon"> --}}

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

    <!-- Template Stylesheet -->
    <link href="/css/Panduan/panduan.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border " style="width: 3rem; height: 3rem; color:#0C40E8" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    


    
    
    
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/'>">
                <img class="img-fluid" src="img/" alt="" style="width: 2012px; height: 900px;">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8" style="margin-top: -190px; margin-left : -220px">
                                <h1 class="display-2 text-white animated slideInDown" style=" width: 900px; font-family: 'Lato', sans-serif;">Pelajari Tentang KPR</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3"  style="font-family: 'Lato', sans-serif;" >KPR memungkinkan individu atau keluarga untuk memiliki rumah sendiri tanpa harus membayar secara tunai. KPR memberikan fasilitas pembiayaan jangka panjang dengan pembayaran secara berkala, sehingga memudahkan masyarakat untuk memiliki rumah dengan cicilan yang terjangkau.</p>
                                <a href="#oi" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft" style="background-color: #0C40E8; border: none;">Lihat Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='img/'>">
                <img class="img-fluid" src="img/" alt="" style="width: 2012px; height: 900px;">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8" style="margin-top: -190px; margin-left : -220px">
                                <h1 class="display-2 text-white animated slideInDown"style="width: 900px; font-family: 'Lato', sans-serif;">Pahami Tentang Cara Menjual Properti</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3"style="font-family: 'Lato', sans-serif;">Pelajari dengan baik produk atau layanan yang ingin Anda jual. Ketahui keunggulan, fitur, manfaat, dan nilai tambah yang ditawarkan. Pahami juga siapa target pasar Anda dan apa kebutuhan serta masalah yang dapat dipecahkan oleh produk atau layanan tersebut.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft" style="background-color: #0C40E8; border: none;">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative" data-dot="<img src='/assets/coba.svg'>">
                <img class="img-fluid" src="/assets/coba.svg" alt="" style="width: 2012px; height: 900px;">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8" style="margin-top: -190px; margin-left : -220px">
                                <h1 class="display-2 text-white animated slideInDown"style=" font-family: 'Lato', sans-serif;">Pelajari Cara Menyewa Properti</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3"style="font-family: 'Lato', sans-serif;">Pelajari jenis-jenis properti yang umum disewakan, seperti rumah, apartemen, kantor, atau ruang komersial lainnya. Pahami karakteristik dan persyaratan khusus untuk masing-masing jenis properti tersebut.</p>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft" style="background-color: #0C40E8; border: none; ">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


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




    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="" style="font-family: 'Lato', sans-serif; color:#0C40E8">Kategori</h6>
                <h1 class="mb-4" style="font-family: 'Lato', sans-serif;">Tips Tentang Properti</h1>
            </div>

            
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/coba.svg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-home fa-3x"></i>
                            </div>
                                                                                  
                            <h4 class="mb-3" style="font-family: 'Lato', sans-serif;">Beli Properti</h4>
                            <p style="font-family: 'Lato', sans-serif;">pppppppppppppppppp</p>
                            <a class="small fw-medium" style="color: #0C40E8; font-family: 'Lato', sans-serif;" href="#oi">Read More<i class="fa fa-arrow-right ms-2" style="color: #0C40E8;""></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/coba.svg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-shopping-cart fa-3x"></i>
                            </div>                            
                            <h4 style="font-family: 'Lato', sans-serif;" class="mb-3">Jual Properti</h4>
                            <p style="font-family: 'Lato', sans-serif;">pppppppppppppppppp</p>
                            <a  class="small fw-medium" style="color: #0C40E8; font-family: 'Lato', sans-serif;" href="">Read More<i class="fa fa-arrow-right ms-2" style="color: #0C40E8;""></i></a>
                        </div>
                    </div>
                </div>
                <div  class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/coba.svg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-key fa-3x"></i>
                            </div>                                                        
                            <h4 style="font-family: 'Lato', sans-serif;" class="mb-3">Sewa Properti</h4>
                            <p style="font-family: 'Lato', sans-serif;">pppppppppppppppppp</p>
                            <a  class="small fw-medium" style="color: #0C40E8; font-family: 'Lato', sans-serif;" href="">Read More<i class="fa fa-arrow-right ms-2" style="color: #0C40E8;""></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/coba.svg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-balance-scale fa-3x"></i>
                            </div>
                            
                            <h4 style="font-family: 'Lato', sans-serif;" class="mb-3">Hukum Properti</h4>
                            <p style="font-family: 'Lato', sans-serif;">pppppppppppppppppp</p>
                            <a class="small fw-medium" style="color: #0C40E8; font-family: 'Lato', sans-serif;" href="">Read More<i class="fa fa-arrow-right ms-2" style="color: #0C40E8;""></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/coba.svg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-user-tie fa-3x"></i>
                            </div>
                            
                            <h4 style="font-family: 'Lato', sans-serif;" class="mb-3">Pemilihan Agen Properti</h4>
                            <p style="font-family: 'Lato', sans-serif;">pppppppppppppppppp</p>
                            <a  class="small fw-medium" style="color: #0C40E8; font-family: 'Lato', sans-serif;" href="">Read More<i class="fa fa-arrow-right ms-2" style="color: #0C40E8;""></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="/assets/coba.svg" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-file-invoice-dollar fa-3x"></i>
                            </div>
                            
                            <h4 style="font-family: 'Lato', sans-serif;" class="mb-3">Perpajakan Properti</h4>
                            <p style="font-family: 'Lato', sans-serif;">pppppppppppppppppp</p>
                            <a  class="small fw-medium" style="color: #0C40E8; font-family: 'Lato', sans-serif;" href="">Read More<i class="fa fa-arrow-right ms-2" style="color: #0C40E8;""></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    


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
            </div>
        <div class="pagination">
            <ul>  </ul>
        </div>
        
    </div>
    <!-- Projects End -->


    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top" style="background-color: #0C40E8;"><i class="bi bi-arrow-up"></i></a>


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
</body>

</html>

@endsection