<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
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
        <img class="nav navLogoqu" src="/assets/skins/logo.svg" style="width:160px; height:80px; margin:0; padding: 0;"
            alt="">

        <div class="menuq">
            <div class="logo-toggleq">
                <span class="logoq"><img class="nav navLogoq" src="/assets/skins/logo.svg" alt=""></span>
                <i class='bx bx-x siderbarCloseq'></i>
            </div>

            <ul class="nav-linksq" style="margin: 0; padding:0;">
                <li><a href="/beranda">Beranda</a></li>
                <li><a href="/pages/searchagent">Cari Agen</a></li>
                <li><a href="/pages/guide">Panduan</a></li>
                <li><a href="/pages/kpr">KPR</a></li>
            </ul>
        </div>

        
        <div class="darkLight-searchBoxq">
            
            @if (Auth::check())

            <div class="notif_nav">
                <div class="notifications">
                    <div class="icon_wrap"><i class="far fa-bell"></i></div>
                    
                    {{-- <div class="notification_dd" style="margin: 0; padding:0;">
                        <ul class="notification_ul" style="margin: 0; padding:0;">
                            <li class="kfc success">
                                <div class="notify_icon">
                                    <span class="icon"><img src="/storage/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg" alt="Icon"></span>  
                                </div>
                                <div class="notify_data">
                                    <div class="title">
                                        Judul  
                                    </div>
                                    <div class="sub_title">
                                        Isi Notifikasi
                                    </div>
                                </div>
                            </li>
                            <li class="kfc success">
                                <div class="notify_icon">
                                    <span class="icon"><img src="/storage/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg" alt="Icon"></span>  
                                </div>
                                <div class="notify_data">
                                    <div class="title">
                                        Judul  
                                    </div>
                                    <div class="sub_title">
                                        Isi Notifikasi
                                    </div>
                                </div>
                            </li>
                            <li class="kfc success">
                                <div class="notify_icon">
                                    <span class="icon"><img src="/storage/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg" alt="Icon"></span>  
                                </div>
                                <div class="notify_data">
                                    <div class="title">
                                        Judul  
                                    </div>
                                    <div class="sub_title">
                                        Isi Notifikasi
                                    </div>
                                </div>
                            </li>
                            <!-- ... Daftar notifikasi lainnya ... -->
                            <li class="show_all" >
                                <p class="link" style="margin: 0; padding:0;"><a href="/pages/notifikasi" style="color:black; text-decoration: none;">Tampilkan Semua Notifikasi</a></p>
                            </li> 
                        </ul>
                    </div> --}}
                    
                </div>
            </div>
                

                <div class="profileq" style="cursor: pointer;">
                    <img src="/storage/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg" alt="">
                </div>

                {{ Auth()->user()->name }}

                <div class="menu-profileq">
                    <h3>
                        {{ Auth()->user()->email }}
                        <div>
                            {{-- sesuai nama role --}}
                            {{-- {{ session('role') }} --}}
                        </div>
                    </h3>
                    <ul style="margin: 0; padding:0;">
                        <li>
                            <span class="material-icons icons-size">person</span>
                            <a href="/profile">Pengaturan Profile</a>
                        </li>
                        <li>
                            <span class="material-icons icons-size">monetization_on</span>
                            <a href="/pages/langganan">Langganan</a>
                        </li>
                        <li>
                            <span class="material-icons icons-size">favorite</span>
                            <a href="/favorite">yang di sukai</a>
                        </li>
                        <li>
                            <span class="material-icons icons-size">business_center</span>
                            <a href="/session/auth/developer/signin/">developer</a>
                        </li>
                        <li>
                            <span class="material-icons icons-size">exit_to_app</span>
                            <a href="/session/auth/user/signout">Logout</a>
                        </li>
                    </ul>
                </div>
            @elseif (!Auth::check())
                <a href="/" class="btnq">Masuk</a>
            @endif

        </div>
    </div>
</nav>

<script>
    const menuWrap = document.querySelector('.darkLight-searchBoxq');
    const menuProfile = document.querySelector('.profileq');
    const menu = document.querySelector('.menu-profileq');

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

    const body = document.querySelector("body"),
        nav = document.querySelector("nav"),
        modeToggle = document.querySelector(".dark-lightq"),
        searchToggle = document.querySelector(".searchToggleq"),
        sidebarOpenq = document.querySelector(".sidebarOpenq"),
        siderbarClose = document.querySelector(".siderbarCloseq");

    let getMode = localStorage.getItem("mode");
    if (getMode && getMode === "dark-mode") {
        body.classList.add("dark");
    }






    //   js code to toggle sidebar
    sidebarOpenq.addEventListener("click", () => {
        nav.classList.add("active");
    });


    body.addEventListener("click", e => {
        let clickedElm = e.target;

        if (!clickedElm.classList.contains("sidebarOpenq") && !clickedElm.classList.contains("menuq")) {
            nav.classList.remove("active");
        }
    });


    $(document).ready(function(){
            $(".notifications .icon_wrap").click(function(event){
                $(this).parent().toggleClass("active");
                $(".profileq").removeClass("active");
                event.stopPropagation();
            });
    
            $(document).click(function(event){
                if (!$(event.target).closest('.notifications').length) {
                    $('.notifications').removeClass("active");
                }
            });
        });

    
</script>
</body>
</html>