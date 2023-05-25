{{-- <div class="navbar-GDD" id="4:8937">
    <div class="group-154-311" id="I4:8937;365:23863">
    <img class="logo-1-mBu" src="Logo.png" id="I4:8937;365:23865"/>
    <p class="eigentum-rz3" id="I4:8937;365:23864">Eigentum</p>
    </div>
    <div class="frame-140-imM" id="I4:8937;365:23854">
    <div class="frame-139-4qD" id="I4:8937;365:23855">
    <div class="text-PMh" id="I4:8937;365:23856"><a href="/dijual" style="color: #B2B2B2;" onclick="this.style.color='blue';">Dijual</a></div>
    <div class="text-PMh" id="I4:8937;365:23857">Disewa</div>
    <div class="text-PMh" id="I4:8937;365:23858">Properti Baru</div>
    <div class="text-PMh" id="I4:8937;566:45875">Cari Agen</div>
    <div class="text-PMh" id="I4:8937;566:48794">Panduan</div>
    <div class="text-PMh" id="I4:8937;365:23860"><a href="/kpr" style="color: #B2B2B2;" onclick="this.style.color='blue';">KPR</a>
    </div>
    </div>
    <div class="component-2-hHq" id="I4:8937;365:23862">
        <a href="session/signin" style="text-decoration: none; color: white;">Masuk</a>
    
    
        @auth
                <li class="nav-link dropdown">
                    <a class="text-light nav-link dropdown-toggle bg-primary" href="#" role="button"
                        data-bs-toggle="dropdown">
                        Hi, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/logout" method="get">
                                @csrf
                                <button type="submit" class="dropdown-item"><i
                                        class="bi bi-box-arrow-right">Logout</i></button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
        <a href="/login/all" style="text-decoration: none; color: white;">Masuk</a>
        @endauth
    
    </div>
</div>
</div> --}}

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



<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5" style="margin-left: 48px;">
        <img src="/assets/logo.svg" alt="" style="height: 46px; width: 46px; margin-right: 4px;">
        <h2 class="m-0" style="font-size: 30px; color: #0C40E8; font-weight: 600;">Eigentum</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/dijual" class="nav-item nav-link" style="color: #000">Dijual</a>
            <a href="/disewa" class="nav-item nav-link" style="color: #000">Disewa</a>
            <a href="/propertibaru" class="nav-item nav-link" style="color: #000">Properti Baru</a>
            <a href="/cariagen" class="nav-item nav-link" style="color: #000">Cari agen</a>
            <a href="/panduan" class="nav-item nav-link" style="color: #000">Panduan</a>
            <a href="/kpr" class="nav-item nav-link" style="color: #000">KPR</a>
        </div>
        <a href="" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block" style="background-color: #0C40E8; color: #ffffff; border: none;">Masuk<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
    
</nav>






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