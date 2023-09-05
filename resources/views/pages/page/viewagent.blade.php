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
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
            rel="stylesheet">

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
        <link href="/css/pages/searchAgent.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/pages/home.css">
    </head>

    <body>
        <!-- Facts Start -->
        <div class="container-fluid facts py-5 pt-lg-0" style="margin-top: 120px;">


            <div class="container py-5 pt-lg-0">
                <div class="row gx-0">
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                        <div class=" shadow d-flex align-items-center justify-content-center p-4"
                            style="height: 150px; background-color: #0C40E8;">
                            <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-users " style="color: #0C40E8;"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-white mb-0">Klien Puas</h5>
                                <h1 class="text-white mb-0" data-toggle="counter-up">{{ $countuser }}
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                        <div class=" shadow d-flex align-items-center justify-content-center p-4"
                            style="height: 150px; background-color:#fff;">
                            <div class=" d-flex align-items-center justify-content-center rounded mb-2"
                                style="width: 60px; height: 60px; background-color: #0C40E8;">
                                <i class="fa fa-check text-white"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class=" mb-0" style="color: #0C40E8;">Proyek Selesai</h5>
                                <h1 class="mb-0" data-toggle="counter-up">12345</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                        <div class=" shadow d-flex align-items-center justify-content-center p-4"
                            style="height: 150px; background-color: #0C40E8;">
                            <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                                style="width: 60px; height: 60px;">
                                <i class="fa fa-user-tie " style="color: #0C40E8;"></i>
                            </div>
                            <div class="ps-4">
                                <h5 class="text-white mb-0">Agen Berpengalaman</h5>
                                <h1 class="text-white mb-0" data-toggle="counter-up">{{ $agents->count() }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ route('agent.search.user') }}" method="GET" role="search">
                <div class="satuinsearch row">

                    <div class="input-box col-md-6" style="border-radius: 15px;">
                        <i class="uil uil-search"></i>
                        <input type="text" name="search" placeholder="Cari Agen" value="{{ request('search') }}" />
                        <button class="button1" id="searchButton" type="submit">Search</button>
                    </div>
                    <div class="input-box col-md-6" style="border-radius: 15px;">
                        <i class="uil uil-search"></i>
                        <input type="text" name="search" placeholder="Cari Agen" value="{{ request('search') }}" />
                        <button class="button1" id="searchButton" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Facts Start -->


        <!-- Agent Populer Start -->
        <div class="container mt-5">
            <div class="row">
                @foreach ($agents as $agent)
                    <div class="col-md-5 mb-4 mx-5">
                        <div class="row p-2 bg-white border rounded">
                            <div class="col-md-4 mt-1">
                                <img class="img-fluid img-responsive rounded product-image"
                                    style="height: 160px; width: 130px;" src="{{ asset('storage/' . $agent->face) }}">
                            </div>
                            <div class="col-md-8 mt-1">
                                @foreach ($agent->users as $user)
                                    <h5 style="font-weight: 900; font-size: 20px;">{{ $user->name }}</h5>
                                @endforeach
                                <h6 style="font-size: 14px;">
                                    {{ implode(', ',$agent->regencies()->pluck('name')->toArray()) }}</h6>
                                <p class="text-justify text-truncate para mb-0" style="font-size: 14px;">
                                    {{ Str::limit($agent->address, 60) }}<br><br>
                                </p>
                                <a href="{{ route('agent.show.user', $agent->id) }}">
                                    <button class="btn btn-primary btn-sm col-md-12" type="button">Details</button>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>





        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"
            style="background-color: #0C40E8;"><i class="bi bi-arrow-up"></i></a>


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
        <script src="js/swiper-bundle.min.js"></script>

        <!-- Template Javascript -->
        {{-- <script src="/js/CariAgent/cariagent.js"></script> --}}
        <script src="js/guide/home.js"></script>
        <!-- Swiper JS -->
        <script src="/js/swiper-bundle.min.js"></script>
    </body>

    </html>
@endsection
