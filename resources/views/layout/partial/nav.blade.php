<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="/css/Partial/nav.css" rel="stylesheet">
    <link href="/css/Partial/notif.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Eigentum</title>
</head>

<body>
    <nav id="mainNav">
        <div class="nav-barq">
            <i class='bx bx-menu sidebarOpenq'></i>
            <img class="nav navLogoqu" src="/assets/skins/logo.svg"
                style="width:160px; height:80px; margin:0; padding: 0;" alt="">

            <div class="menuq">
                <div class="logo-toggleq">
                    <span class="logoq"><img class="nav navLogoq" src="/assets/skins/logo.svg" alt=""></span>
                    <i class='bx bx-x siderbarCloseq'></i>
                </div>

                <ul class="nav-linksq" style="margin: 0; padding:0;">
                    <li class="navbar"><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="navbar"><a href="{{ route('unit.search.user') }}">Properti</a></li>
                    <li class="navbar"><a href="{{ route('agent.search.user') }}">Cari Agen</a></li>
                    <li class="navbar"><a href="/pages/guide">Panduan</a></li>
                    <li class="navbar"><a href="/pages/kpr">KPR</a></li>
                </ul>
            </div>


            <div class="darkLight-searchBoxq">


                <div class="searchBox">
                    <div class="searchToggle">
                        <i class='bx bx-x cancel'></i>
                        <i class='bx bx-search search'></i>
                    </div>
                    <div class="search-field">
                        <form action="{{ route('unit.search.user') }}" method="GET" role="search">
                            <input id="searchnav" type="text" name="search" placeholder="Search.."
                                aria-label="Search username" aria-describedby="basic-addon2"
                                value="{{ request('search') }}">
                            <i class='bx bx-search' type="submit"></i>
                        </form>
                    </div>
                </div>


                @if (Auth::check())
                    <div class="profileq" style="cursor: pointer;">

                        {{-- <img src="{{ Auth()->user()->avatar }}" alt=""> --}}
                        @if (Auth::user()->role == 'agent')
                            <img src="{{ asset('storage/' .Auth()->user()->agents->pluck('face')->first()) }}" />
                        @elseif (Auth::user()->role == 'developer')
                            <img src="{{ asset('storage/' .Auth()->user()->developers->pluck('face')->first()) }}" />
                        @elseif (Auth::user()->role == 'admin')
                            <img src="{{ Auth()->user()->avatar }}" alt="">
                        @elseif (Auth::user()->role == 'user')
                            {{-- <img src="{{ Auth()->user()->avatar }}" alt=""> --}}
                            <img src="{{ asset('/assets/nav/defaultPhotoProfile.jpg') }}" alt="Default Profile Picture">
                        @else
                        @endif
                    </div>
                    {{ Auth()->user()->name }}
                    <div class="menu-profileq">
                        <h3>
                            {{ Str::limit(Auth()->user()->email, 18) }}
                            {{-- {{ Str::limit(Auth()->user()->developers->pluck('company_email')->first(), 18) }} --}}
                            <div>
                                {{ Str::limit(Auth()->user()->role, 18) }}
                                {{-- {{ Str::limit(Auth()->user()->developers->pluck('company')->first(),18) }} --}}
                            </div>
                        </h3>
                        @if (Auth::user()->role == 'agent')
                            <ul class="navbar" style="margin: 0; padding:0;">
                                <li class="navbar">
                                    <span class="material-icons icons-size">person</span>
                                    <a href="{{ route('agent.profile') }}">Profile</a>
                                </li>
                                <li class="navbar">
                                    <span class="material-icons icons-size">favorite</span>
                                    <a href="{{ route('favorite.index') }}">disukai</a>
                                </li>
                                <li class="navbar">
                                    <span class="material-icons icons-size">business_center</span>
                                    <a href="/agent/dashboard/">Agent</a>
                                </li>
                                <li class="navbar">
                                    <span class="material-icons icons-size">exit_to_app</span>
                                    <a href="{{ route('logout') }}">Logout</a>
                                </li>
                            </ul>
                        @elseif (Auth::user()->role == 'developer')
                            <ul class="navbar" style="margin: 0; padding:0;">
                                <li>
                                    <span class="material-icons icons-size">person</span>
                                    <a href="{{ route('developer.profile') }}">Profile</a>
                                </li>
                                <li>
                                    <span class="material-icons icons-size">favorite</span>
                                    <a href="{{ route('favorite.index') }}">Disukai</a>
                                </li>
                                @if (Auth::user()->developers->pluck('subscribe')->first() == 'already')
                                    <li>
                                        <span class="material-icons icons-size">business_center</span>
                                        <a href="{{ route('developer.dashboard') }}">Developer</a>
                                    </li>
                                @elseif (Auth::user()->developers->pluck('subscribe')->first() == 'pending')
                                    <li>
                                        <span class="material-icons icons-size">business_center</span>
                                        <a href="{{ route('langganan.index') }}">Developer</a>
                                    </li>
                                @endif
                                <li>
                                    <span class="material-icons icons-size">history</span>
                                    <a href="/developer/history">Riwayat</a>
                                </li>
                                {{-- <li>
                                    <span class="material-icons icons-size">monetization_on</span>
                                    <a href="/pages/langganan">Langganan</a>
                                </li>
                                <li>
                                    <span class="material-icons icons-size">business_center</span>
                                    <a href="{{ route('developer.dashboard') }}">Developer</a>
                                </li> --}}
                                <li>
                                    <span class="material-icons icons-size">exit_to_app</span>
                                    <a href="{{ route('logout') }}">Logout</a>
                                </li>
                            </ul>
                        @elseif (Auth::user()->role == 'admin')
                            <ul style="margin: 0; padding:0;">
                                <li>
                                    <span class="material-icons icons-size">person</span>
                                    <a href="{{ route('profile.show') }}">Admin</a>
                                </li>
                                {{-- <li>
                                    <span class="material-icons icons-size">favorite</span>
                                    <a href="{{route('favorite.index')}}">disukai</a>
                                </li> --}}
                                <li>
                                    <span class="material-icons icons-size">business_center</span>
                                    <a href="{{ route('admin.dashboard') }}">Admin</a>
                                </li>
                                <li>
                                    <span class="material-icons icons-size">exit_to_app</span>
                                    <a href="{{ route('logout') }}">Logout</a>
                                </li>
                            </ul>
                        @else
                            <ul style="margin: 0; padding:0;">
                                <li>
                                    <span class="material-icons icons-size">person</span>
                                    <a href="{{ route('user.profile') }}">Profile</a>
                                </li>
                                <li>
                                    <span class="material-icons icons-size">favorite</span>
                                    <a href="{{ route('favorite.index') }}">disukai</a>
                                </li>
                                <li>
                                    <span class="material-icons icons-size">exit_to_app</span>
                                    <a href="{{ route('logout') }}">Logout</a>
                                </li>
                            </ul>
                        @endif
                    </div>
                @elseif (!Auth::check())
                    <a href="{{ route('login.index') }}" class="btnq">Masuk</a>
                @endif


            </div>
        </div>
        @if (session('rejected'))
            <div class="alert alert-danger text-center smooth-alert"style="width: 100%; ;">
                perbarui data anda, data ditolak
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                    onclick="hideAlert();">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if (session('pending'))
            <div class="alert alert-danger text-center smooth-alert" style="width: 100%; text-align: center;">
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <div style="flex-grow: 1;">
                        Akun Anda masih ditangguhkan. Mohon tunggu selama 24 jam.
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"
                        onclick="hideAlert();">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        @endif


    </nav>
    <script>
        // Fungsi untuk menampilkan alert dengan animasi turun dari atas
        function showAlert() {
            var alertElement = document.querySelector('.alert');
            if (alertElement) {
                alertElement.classList.add('smooth-alert');
                setTimeout(function() {
                    alertElement.style.transform = 'translateY(-20px)';
                    alertElement.style.opacity = '1';
                }, 100); // Waktu dalam milidetik (0.1 detik dalam contoh ini)
            }
        }

        // Fungsi untuk menghilangkan alert dengan animasi mengecil dan naik
        function hideAlert() {
            var alertElement = document.querySelector('.alert');
            if (alertElement) {
                alertElement.style.transform = 'translateY(-80%)';
                alertElement.style.opacity = '0';
                setTimeout(function() {
                    alertElement.style.width = '100%';
                    alertElement.remove();
                }, 500); // Waktu dalam milidetik (0.5 detik dalam contoh ini)
            }
        }

        // Fungsi untuk mengatur timer penutupan otomatis
        function autoCloseAlert() {
            showAlert(); // Tampilkan alert dengan animasi turun dari atas
        }

        // Panggil fungsi autoCloseAlert saat halaman dimuat
        window.onload = autoCloseAlert;
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuProfile = document.querySelector('.profileq');
            const menu = document.querySelector('.menu-profileq');
            const body = document.querySelector("body");
            const nav = document.querySelector("nav");
            const sidebarOpenq = document.querySelector(".sidebarOpenq");

            if (menuProfile && menu) {
                menuProfile.addEventListener('click', function(event) {
                    event.stopPropagation();
                    menu.classList.toggle('active');
                });

                document.addEventListener('click', function() {
                    menu.classList.remove('active');
                });

                menu.addEventListener('click', function(event) {
                    event.stopPropagation();
                });
            }

            if (body && nav && sidebarOpenq) {
                sidebarOpenq.addEventListener("click", () => {
                    nav.classList.add("active");
                });

                body.addEventListener("click", e => {
                    let clickedElm = e.target;

                    if (!clickedElm.classList.contains("sidebarOpenq") && !clickedElm.classList.contains(
                            "menuq")) {
                        nav.classList.remove("active");
                    }
                });
            }

            // Continue with your other code...

            $(document).ready(function() {
                $(".notifications .icon_wrap").click(function(event) {
                    $(this).parent().toggleClass("active");
                    $(".profileq").removeClass("active");
                    event.stopPropagation();
                });

                $(document).click(function(event) {
                    if (!$(event.target).closest('.notifications').length) {
                        $('.notifications').removeClass("active");
                    }
                });
            });
        });
    </script>
    <script>
        const body = document.querySelector("body"),
            nav = document.querySelector("nav"),
            searchToggle = document.querySelector(".searchToggle"),
            sidebarOpen = document.querySelector(".sidebarOpen"),
            siderbarClose = document.querySelector(".siderbarClose");

        // js code to toggle search box
        searchToggle.addEventListener("click", () => {
            searchToggle.classList.toggle("active");
        });


        //   js code to toggle sidebar
        sidebarOpen.addEventListener("click", () => {
            nav.classList.add("active");
        });
        body.addEventListener("click", e => {
            let clickedElm = e.target;
            if (!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")) {
                nav.classList.remove("active");
            }
        });
    </script>
</body>

</html>
