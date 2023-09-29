@extends('layout.main')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eigentum</title>
    <!-- css -->
        <link href="/css/pages/notification.css" rel="stylesheet">
    <!-- icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper" style="margin-top: 90px;">
        <div class="top">
            <div class="day">
                Hari Ini
            </div>
            <div class="date">

            </div>
        </div>
        <header>
            <div class="notification_box">
                <h2 class="title">Notifikasi</h2>
                <span id="notifications">4</span>
            </div>
            <p id="mark_as_all">Tandai semua telah dibaca</p>
        </header>

        <section class="hero">
            <div class="notification_card unseen">
                <img src="/storage/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg" alt="">
                <div class="notification_info">
                    <p class="user_activity">
                        <strong style="margin-right: 5px;">Nama</strong>isi notifikasi<strong style="margin-left: 5px;" class="link">link notifikasi</strong>!
                    </p>
                    <p class="time">1 jam yang lalu</p>
                    <p class="seen">terkirim
                        <span><i class='bx bx-check'></i></span>
                    </p>
                </div>
                <div class="bell"><i class='bx bx-bell'></i></div>
            </div>
            <div class="notification_card unseen">
                <img src="/storage/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg" alt="">
                <div class="notification_info">
                    <p class="user_activity">
                        <strong style="margin-right: 5px;">Nama</strong> isi notifikasi
                    </p>
                    <p class="time">2 jam yang lalu</p>
                    <p class="seen">terkirim
                        <span><i class='bx bx-check'></i></span>
                    </p>
                </div>
                <div class="bell"><i class='bx bx-bell'></i></div>

            </div>
            <div class="notification_card unseen">
                <img src="/storage/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg" alt="">
                <div class="notification_info">
                    <p class="user_activity">
                        <strong style="margin-right: 5px;">Nama</strong>isi notifikasi<strong style="margin-left: 5px;" class="link">link notifikasi</strong>!
                    </p>
                    <p class="time">3 jam yang lalu</p>
                    <p class="seen">terkirim
                        <span><i class='bx bx-check'></i></span>
                    </p>
                </div>
                <div class="bell"><i class='bx bx-bell'></i></div>

            </div>
            <div class="notification_card unseen">
                <div class="message_card">
                    <img src="/storage/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg" alt="">
                    <div class="notification_info">
                        <p class="user_activity">
                            <strong style="margin-right: 5px;">Nama</strong> isi notifikasi
                        </p>
                        <p class="time">4 jam yang lalu</p>
                        <p class="seen">terkirim
                            <span><i class='bx bx-check'></i></span>
                        </p>
                    </div>
                </div>
                <div class="bell"><i class='bx bx-bell'></i></div>
            </div>
            <div class="message">
                <div class="day">
                    Kemarin
                </div>
                <div class="date-yesterday">

                </div>
            </div>
            <div class="notification_card">
                <img src="/storage/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg" alt="">
                <div class="notification_info">
                    <p class="user_activity">
                        <strong style="margin-right: 5px;">Nama</strong> isi notifikasi
                    </p>
                    <p class="time">1 hari yang lalu</p>
                    <p class="seen">terlihat
                        <span><i class='bx bx-check-double'></i></span>
                    </p>
                </div>
            </div>
            <div class="notification_card">
                <img src="/storage/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg" alt="">
                <div class="notification_info">
                    <p class="user_activity">
                        <strong style="margin-right: 5px;">Nama</strong>isi notifikasi<strong style="margin-left: 5px;" class="link">link notifikasi</strong>!
                    </p>
                    <p class="time">2 hari yang lalu</p>
                    <p class="seen ">terlihat
                        <span><i class='bx bx-check-double'></i></span>
                    </p>
                </div>
            </div>
            <div class="notification_card">
                <img src="/storage/houcine-ncib-B4TjXnI0Y2c-unsplash.jpg" alt="">
                <div class="notification_info">
                    <p class="user_activity">
                        <strong style="margin-right: 5px;">Nama</strong>isi notifikasi
                    </p>
                    <p class="time">2 hari yang lalu</p>
                    </p>
                    <p class="seen">terlihat
                        <span><i class='bx bx-check-double'></i></span>
                    </p>
                </div>
            </div>
        </section>
    </div>


<!-- script link -->
    <script src="/js/pages/notification.js"></script>
</body>

</html>

@endsection