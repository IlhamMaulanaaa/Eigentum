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

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border " style="width: 3rem; height: 3rem; color:#0C40E8" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    


    



    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 " style="color:#0C40E8"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">Maaf, halaman yang Anda cari tidak ada di situs web kami! Mungkin buka beranda kami?</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 animated slideInLeft" style=" background-color: #0C40E8; border: none;" href="">Go Back To Home</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
        

    


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