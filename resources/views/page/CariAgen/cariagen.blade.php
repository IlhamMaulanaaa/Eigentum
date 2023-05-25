@extends('layout.main')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/css/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/css/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/Lib/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    

    <!-- Template Stylesheet -->
    <link href="/css/CariAgent/cariagent.css" rel="stylesheet">
</head>

<body>


    

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 550px;">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 1200px; margin-top: -100px; font-family: 'Lato', sans-serif;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown" style="font-family: 'Lato', sans-serif;"">Agen Terpercaya</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn" style="font-family: 'Lato', sans-serif; font-size: 54px;">Layanan Pencarian Agen Properti Profesional</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="height: 550px;">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 1200px; margin-top: -100px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown" style="font-family: 'Lato', sans-serif;">Expertise dan Kemudahan</h5>
                            <h2 class="display-1 text-white mb-md-4 animated zoomIn" style="font-family: 'Lato', sans-serif; font-size: 54px;">Temukan Agen Properti yang Mengerti Kebutuhan Anda</h2>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            
        </div>
    </div>
    <!-- Navbar & Carousel End -->
    

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0" style="margin-top: -200px;">
        <div class="position-relative w-50 mx-auto animated slideInDown" style="margin-bottom: 70px;">
            <input class="form-control border-0 rounded-0 w-100 py-3 ps-4 pe-5" type="text" style="height: 55px" placeholder="Cari Nama Agent Atau Lokasi">
            <button type="button" class="btn  rounded-0 py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px; background-color: #0C40E8; color: #fff;">Search</button>
        </div>
        
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class=" shadow d-flex align-items-center justify-content-center p-4" style="height: 150px; background-color: #0C40E8;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users " style="color: #0C40E8;"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Klien Puas</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class=" shadow d-flex align-items-center justify-content-center p-4" style="height: 150px; background-color:#fff;">
                        <div class=" d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px; background-color: #0C40E8;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class=" mb-0" style="color: #0C40E8;">Proyek Selesai</h5>
                            <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class=" shadow d-flex align-items-center justify-content-center p-4" style="height: 150px; background-color: #0C40E8;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-user-tie " style="color: #0C40E8;"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Agen Berpengalaman</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">12345</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- Facts Start -->


    <!-- Agent Populer Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Teratas</h6>
                <h1 class="mb-5">Agent Profesional</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Agent End -->


    <!-- Card Agent -->
    <h1 class="subtitle-agent" >Agent Terpercaya</h1>
    <div class="cardagent">
    <div class="wrapper" >
        <ul class="carousel11">
          <li class="card">
            <div class="img"><img src="images/img-1.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
          <li class="card">
            <div class="img"><img src="images/img-2.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
          <li class="card">
            <div class="img"><img src="images/img-3.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
          <li class="card">
            <div class="img"><img src="images/img-4.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
          <li class="card">
            <div class="img"><img src="images/img-5.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
          <li class="card">
            <div class="img"><img src="images/img-6.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
        </ul>
      </div>
    </div>
    <!-- End Card Agent -->

    <!-- Card Agent -->
    <h1 class="subtitle-agent1" >Agent Terbaik</h1>
    <div class="cardagent1">
    <div class="wrapper1" >
        <ul class="carousel12">
          <li class="card1" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
            <div class="img"><img src="images/img-1.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
          <li class="card1" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
            <div class="img"><img src="images/img-2.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
          <li class="card1" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
            <div class="img"><img src="images/img-3.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
          <li class="card1" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
            <div class="img"><img src="images/img-4.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
          <li class="card1" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
            <div class="img"><img src="images/img-5.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
          <li class="card1" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
            <div class="img"><img src="images/img-6.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
        </ul>
      </div>
    </div>
    <!-- End Card Agent -->

    <!-- Card Agent -->
    <h1 class="subtitle-agent2" >Agent Berpengalaman</h1>
    <div class="cardagent2">
    <div class="wrapper2" >
        <ul class="carousel13">
          <li class="card2" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
            <div class="img"><img src="images/img-1.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
          <li class="card2" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
            <div class="img"><img src="images/img-2.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
          <li class="card2" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
            <div class="img"><img src="images/img-3.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
          <li class="card2" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
            <div class="img"><img src="images/img-4.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
          <li class="card2" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
            <div class="img"><img src="images/img-5.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
          <li class="card2" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
            <div class="img"><img src="images/img-6.jpg" alt="img" draggable="false"></div>
            <h2>Bambang Yudoyono</h2>
            <span>Agent Independen</span>
          </li>
        </ul>
      </div>
    </div>
    <!-- End Card Agent -->


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
    <script src="/js/CariAgent/cariagent.js"></script>
    <!-- Swiper JS -->
    <script src="/js/swiper-bundle.min.js"></script>
</body>

</html>


@endsection