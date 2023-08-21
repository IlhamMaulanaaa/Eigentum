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
    <div class="abcd1">
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
                <h2 class="title">Histori</h2>
                <span id="notifications">4</span>
            </div>
        </header>

        <section class="hero">
            <div class="notification_card unseen">
                <img id="image1" src="/assets/pages/home/apartemen1.jpg" alt="">
                <div class="notification_info">
                    <p class="user_activity">
                        <strong style="margin-right: 5px;">Unit 1</strong>
                    </p>
                    <p class="user_activity" style="margin-bottom: 10px;">
                        <strong style="margin-right: 5px;">Rp. 4.0000.00</strong>
                    </p>
                    <p class="time">1 jam yang lalu</p>
                    <p class="seen">Dijual dan Disewa
                    <p class="perusahaan">CV Mandasari Hutasoit Tbk</p>
                    </p>
                </div>
                <div class="bell"><i class='bx bx-history'></i></div>
            </div>
            <div class="notification_card unseen">
                <img id="image1" src="/assets/pages/home/apartemen1.jpg" alt="">
                <div class="notification_info">
                    <p class="user_activity">
                        <strong style="margin-right: 5px;">Unit 1</strong>
                    </p>
                    <p class="user_activity" style="margin-bottom: 10px;">
                        <strong style="margin-right: 5px;">Rp. 4.0000.00</strong>
                    </p>
                    <p class="time">1 jam yang lalu</p>
                    <p class="seen">Dijual dan Disewa
                    <p class="perusahaan">CV Mandasari Hutasoit Tbk</p>
                    </p>
                </div>
                <div class="bell"><i class='bx bx-history'></i></div>
            </div>
            <div class="notification_card unseen">
                <img id="image1" src="/assets/pages/home/apartemen1.jpg" alt="">
                <div class="notification_info">
                    <p class="user_activity">
                        <strong style="margin-right: 5px;">Unit 1</strong>
                    </p>
                    <p class="user_activity" style="margin-bottom: 10px;">
                        <strong style="margin-right: 5px;">Rp. 4.0000.00</strong>
                    </p>
                    <p class="time">1 jam yang lalu</p>
                    <p class="seen">Dijual dan Disewa
                    <p class="perusahaan">CV Mandasari Hutasoit Tbk</p>
                    </p>
                </div>
                <div class="bell"><i class='bx bx-history'></i></div>
            </div>
            <div class="notification_card unseen">
                <img id="image1" src="/assets/pages/home/apartemen1.jpg" alt="">
                <div class="notification_info">
                    <p class="user_activity">
                        <strong style="margin-right: 5px;">Unit 1</strong>
                    </p>
                    <p class="user_activity" style="margin-bottom: 10px;">
                        <strong style="margin-right: 5px;">Rp. 4.0000.00</strong>
                    </p>
                    <p class="time">1 jam yang lalu</p>
                    <p class="seen">Dijual dan Disewa
                    <p class="perusahaan">CV Mandasari Hutasoit Tbk</p>
                    </p>
                </div>
                <div class="bell"><i class='bx bx-history'></i></div>
            </div>
            <div class="notification_card unseen">
                <img id="image1" src="/assets/pages/home/apartemen1.jpg" alt="">
                <div class="notification_info">
                    <p class="user_activity">
                        <strong style="margin-right: 5px;">Unit 1</strong>
                    </p>
                    <p class="user_activity" style="margin-bottom: 10px;">
                        <strong style="margin-right: 5px;">Rp. 4.0000.00</strong>
                    </p>
                    <p class="time">1 jam yang lalu</p>
                    <p class="seen">Dijual dan Disewa
                    <p class="perusahaan">CV Mandasari Hutasoit Tbk</p>
                    </p>
                </div>
                <div class="bell"><i class='bx bx-history'></i></div>
            </div>
            
        </section>
    </div>
</div>

<!-- script link -->
    <script src="/js/pages/notification.js"></script>
</body>

</html>

@endsection