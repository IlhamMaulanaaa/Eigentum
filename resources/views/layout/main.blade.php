<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <title>eigentum</title>
    <link rel="stylesheet" href="/css/Home/home.css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/Lib/swiper-bundle.min.css">

    <!-- Icon -->
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/your_kit_code.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-...your_integrity_code..." crossorigin="anonymous" />
  
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/Lib/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="/css/Dijual/dijual.css">
    <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>

    

    
</head>

<body>
        @if (Auth::check())
        @endif
            
            {{-- @include('partial.nav')
            @include('partial.footer') --}}
            @include('partial.nav')
            @yield('content')
            


    {{-- <div class="container py-1">
        @if (Auth::check())
        @endif
        @include('partial.nav')
        <div class="container">
            @yield('container')
        </div>
        @include('page.Home.home')
    </div> --}}

</body>


<script src="/js/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
<!-- JavaScript -->
<script src="/js/home.js"></script>
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
</html>
