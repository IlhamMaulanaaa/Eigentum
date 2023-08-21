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
        <div class="container-fluid facts py-5 pt-lg-0" style="margin-top: 200px;">


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
                <div class="satuinsearch">
                    <div class="input-box">
                        <i class="uil uil-search"></i>
                        <input type="text" name="search" placeholder="Cari Agen" value="{{ request('search') }}" />
                        <button class="button1" id="searchButton" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Facts Start -->


        <!-- Agent Populer Start -->
        <div class="container-xxl py-5">
            <div class="container">

                <div class="row g-4">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center px-3" style="color: #0C40E8">Teratas</h6>
                        <h1 style="font-size:30px;" class="mb-5">Agent Profesional</h1>
                    </div>
                    @foreach ($agents as $agent)
                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="team-item">
                                <a href="{{ route('agent.show.user', $agent->id) }}">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid" style="width: 200px; height: 260px;"
                                            src="{{ asset('storage/' . $agent->face) }}" alt="">
                                    </div>
                                </a>
                                <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                                @foreach ($agent->users as $user)
                                    <h5 class="mb-0">{{ $user->name }}</h5>
                                @endforeach
                                <small style="color: #0c40e8">Agent Rumah</small>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Agent End -->


        <!-- Card Agent -->
        <h1 class="subtitle-agent">Agent Terpercaya</h1>
        <div class="cardagent">
            <div class="wrapper">
                <ul class="carousel11">
                    {{-- @foreach ($agents as $agent)
                        <li class="card">
                            <div class="img">
                                <img src="{{ $agent->face }}" alt="img" draggable="false">
                            </div>
                            <h2>{{ $agent->name }}</h2>
                            <span>{{ $agent->locations->name }}, {{ Str::limit($agent->address) }}</span>
                        </li>
                    @endforeach --}}
                    @foreach ($agents as $agent)
                        <a href="{{ route('agent.dashboard', $agent->id) }}">
                            <li class="card">
                                <div class="img"><img src="{{ asset('storage/' . $agent->face) }}" alt="img"
                                        draggable="false"></div>
                                @foreach ($agent->users as $user)
                                    <h2>{{ $user->name }}</h2>
                                @endforeach
                                <span>Agent Independen</span>
                            </li>
                        </a>
                    @endforeach
                    <a href="/agent/dashboard">
                        <li class="card">
                            <div class="img"><img src="/assets/pages/Home/testimoni2-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card">
                            <div class="img"><img src="/assets/pages/Home/testimoni3-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card">
                            <div class="img"><img src="/assets/pages/Home/testimoni4-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card">
                            <div class="img"><img src="/assets/pages/Home/testimoni-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card">
                            <div class="img"><img src="/assets/pages/Home/testimoni1-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card">
                            <div class="img"><img src="/assets/pages/Home/testimoni2-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card">
                            <div class="img"><img src="/assets/pages/Home/testimoni3-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    {{-- @foreach ($agents as $agent)
                    <li class="card">
                        <div class="img">
                            <img src="images/img-1.jpg" alt="img" draggable="false">
                        </div>
                        <h2>{{ $agent->name }}</h2>
                        <span>{{ $agent->position }}</span>
                    </li>
                    @endforeach --}}
                </ul>


            </div>
        </div>
        <!-- End Card Agent -->

        <!-- Card Agent -->
        <h1 class="subtitle-agent1">Agent Terbaik</h1>
        <div class="cardagent1">
            <div class="wrapper1">
                <ul class="carousel12">
                    <a href="/agent/dashboard">
                        <li class="card1" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
                            <div class="img"><img src="/assets/pages/Home/testimoni4-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card1" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
                            <div class="img"><img src="/assets/pages/Home/testimoni3-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card1" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
                            <div class="img"><img src="/assets/pages/Home/testimoni1-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card1" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
                            <div class="img"><img src="/assets/pages/Home/testimoni2-home.svg" alt="img"
                                    draggable="false">
                            </div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card1" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
                            <div class="img"><img src="/assets/pages/Home/testimoni-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card1" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
                            <div class="img"><img src="/assets/pages/Home/testimoni4-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        <!-- End Card Agent -->

        <!-- Card Agent -->
        <h1 class="subtitle-agent2">Agent Berpengalaman</h1>
        <div class="cardagent2">
            <div class="wrapper2">
                <ul class="carousel13">
                    <a href="/agent/dashboard">
                        <li class="card2" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
                            <div class="img"><img src="/assets/pages/Home/testimoni1-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card2" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
                            <div class="img"><img src="/assets/pages/Home/testimoni4-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card2" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
                            <div class="img"><img src="/assets/pages/Home/testimoni2-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card2" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
                            <div class="img"><img src="/assets/pages/Home/testimoni3-home.svg" alt="img"
                                    draggable="false">
                            </div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card2" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
                            <div class="img"><img src="/assets/pages/Home/testimoni-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                    <a href="/agent/dashboard">
                        <li class="card2" style="border: 1px solid #ccc; border-radius: 8px; padding: 10px;">
                            <div class="img"><img src="/assets/pages/Home/testimoni3-home.svg" alt="img"
                                    draggable="false"></div>
                            <h2>Bambang Yudoyono</h2>
                            <span>Agent Independen</span>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
        <!-- End Card Agent -->


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
