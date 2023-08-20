<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    @if (Auth::user()->role == 'agent')
        <title>Eigentum Agent</title>
    @elseif (Auth::user()->role == 'developer')
        <title>Eigentum Developer</title>
    @elseif (Auth::user()->role == 'admin')
        <title>Eigentum Admin</title>
    @endif

    {{-- <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon"> --}}

    <!-- Google Web Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
        rel="stylesheet"> --}}

    <!-- Icon Font Stylesheet -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> --}}

    <!-- Libraries Stylesheet -->
    {{-- <link href="/css/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/css/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/lib/lightbox/css/lightbox.min.css" rel="stylesheet"> --}}

    <!-- Customized Bootstrap Stylesheet -->
    {{-- <link href="/css/Lib/bootstrap.min.css" rel="stylesheet"> --}}

    <!-- Template Stylesheet -->
    {{-- <link href="/css/pages/guide.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/Partial/nav.css">
    <link rel="stylesheet" href="/css/Partial/footer.css"> --}}


    <!-- ===== CSS ===== -->
    {{-- <link href="/css/Partial/footer.css" rel="stylesheet">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="/css/Partial/nav.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'> --}}

</head>

<body>
    @if (Auth::check())
    @endif

    @include('layout.partial.nav')
    @yield('content')
    @include('layout.partial.footer')


</body>

<script>
    // // Function to check if the navbar should be active based on scroll position
    // function toggleNavbarBackground() {
    //     const nav = document.getElementById('mainNav');
    //     const scrollY = window.scrollY || window.pageYOffset;

    //     if (scrollY > 5) {
    //         nav.classList.add('active');
    //     } else {
    //         nav.classList.remove('active');
    //     }
    // }

    // // Check the initial scroll position
    // toggleNavbarBackground();

    // // Attach event listener to the scroll event
    // window.addEventListener('scroll', toggleNavbarBackground);
</script>


{{-- <script src="/js/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
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
<script src="/js/pages/panduan.js"></script> --}}

</html>
