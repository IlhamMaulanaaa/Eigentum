<nav>
    <div class="header">
        <div class="logo">
            <img src="assets/logo.png" class="img-logo" style="height:200%;
            ">
            <a href="/home" class="stretched-link"></a>
            {{-- <ul class="title-logo">
                <li><a href="/home" class="active">Eigentum</a></li>
            </ul> --}}
        </div>

        <ul class="menu">
            <li><a href="/dijual" class="active">Dijual</a></li>
            <li><a href="/disewa" class="active">Disewa</a></li>
            <li><a href="/newroperti" class="active">Properti baru</a></li>
            <li><a href="/searchagen" class="active">Cari Agen</a></li>
            <li><a href="/panduan" class="active">Panduan</a></li>
            <li><a href="/kpr" class="active">KPR</a></li>
            {{-- <a href="/login/all" class="user"><i class="ri-user-fill"></i>Sign In</a> --}}
            <li>
                <form action="/logout" method="get">
                    @csrf
                    <button type="submit" class="dropdown-item"><i
                            class="bi bi-box-arrow-right">Logout</i></button>
                </form>
                </li>
        </ul>
        <div class="masuk">
            <a href="/login/masuk">Masuk</a>
        </div>

    </div>
</nav>
