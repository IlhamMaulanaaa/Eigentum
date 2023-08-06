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
                {{-- <li><a href="/pages/kpr">FAQ</a></li> --}}
            </ul>
        </div>

        <div class="darkLight-searchBoxq">
            @if (Auth::check())
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
                            <span class="material-icons icons-size">person</span>
                            <a href="/favorite">yang di sukai</a>
                        </li>
                        <li>
                            <span class="material-icons icons-size">person</span>
                            <a href="/session/auth/developer/signin/">developer</a>
                        </li>
                        <li>
                            <span class="material-icons icons-size">person</span>
                            <a href="/session/auth/user/signout">Logout</a>
                        </li>
                    </ul>
                </div>
            @elseif (!Auth::check())
                <a href="/session/auth/user/signin" class="btnq">Masuk</a>
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
</script>
