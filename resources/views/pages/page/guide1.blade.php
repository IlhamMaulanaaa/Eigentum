@extends('layout.main')

@section('content')


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="LIHATport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.png" rel="shortcut icon">

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="css/Lib/fix/css/vendor.css">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="css/Lib/fix/css/utility.css">

    <!--====== App ======-->
    <link rel="stylesheet" href="css/Lib/fix/css/app.css">
</head>
<body class="config">
    
    <div id="app">


        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-y-90">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-12">
                            <div class="shop-w-master">
                                <h1 class="shop-w-master__heading u-s-m-b-30"><i class="fas fa-filter u-s-m-r-8"></i>

                                    <span>FILTERS</span></h1>
                                <div class="shop-w-master__sidebar">
                                    <div class="u-s-m-b-30">
                                        <div class="blog-w">
                                            <form class="blog-search-form">
    
                                                <label for="post-search"></label>
    
                                                <input class="input-text input-text--primary-style" type="text" id="post-search" placeholder="Search">
    
                                                <button class="btn btn--icon fas fa-search" type="submit"></button></form>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-30">
                                        <div class="shop-w shop-w--style">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">TYPE</h1>

                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-shipping" data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-shipping">
                                                <ul class="shop-w__list gl-scroll">
                                                    <li>

                                                        <!--====== Check Box ======-->
                                                        <div class="check-box">

                                                            <input type="checkbox" id="free-shipping">
                                                            <div class="check-box__state check-box__state--primary">

                                                                <label class="check-box__label" for="free-shipping">Apartemen</label></div>
                                                        </div>
                                                        <!--====== End - Check Box ======-->
                                                    </li>
                                                    <li>

                                                        <!--====== Check Box ======-->
                                                        <div class="check-box">

                                                            <input type="checkbox" id="free-shipping">
                                                            <div class="check-box__state check-box__state--primary">

                                                                <label class="check-box__label" for="free-shipping">Rumah</label></div>
                                                        </div>
                                                        <!--====== End - Check Box ======-->
                                                    </li>
                                                    <li>

                                                        <!--====== Check Box ======-->
                                                        <div class="check-box">

                                                            <input type="checkbox" id="free-shipping">
                                                            <div class="check-box__state check-box__state--primary">

                                                                <label class="check-box__label" for="free-shipping">Ruko</label></div>
                                                        </div>
                                                        <!--====== End - Check Box ======-->
                                                    </li>
                                                    <li>

                                                        <!--====== Check Box ======-->
                                                        <div class="check-box">

                                                            <input type="checkbox" id="free-shipping">
                                                            <div class="check-box__state check-box__state--primary">

                                                                <label class="check-box__label" for="free-shipping">Villa</label></div>
                                                        </div>
                                                        <!--====== End - Check Box ======-->
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-30">
                                        <div class="shop-w shop-w--style">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">PANDUAN</h1>

                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-manufacturer" data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-manufacturer">
                                                <ul class="shop-w__list-2">
                                                    <li>
                                                        <div class="list__content">

                                                            <input type="checkbox" checked>

                                                            <span>User</span></div>

                                                        <span class="shop-w__total-text">(23)</span>
                                                    </li>
                                                    <li>
                                                        <div class="list__content">

                                                            <input type="checkbox">

                                                            <span>Agen</span></div>

                                                        <span class="shop-w__total-text">(2)</span>
                                                    </li>
                                                    <li>
                                                        <div class="list__content">

                                                            <input type="checkbox">

                                                            <span>Developer</span></div>

                                                        <span class="shop-w__total-text">(2)</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-30">
                                        <div class="shop-w shop-w--style">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">KATEGORI</h1>

                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-category" data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-category">
                                                <ul class="shop-w__category-list gl-scroll">
                                                    <li class="has-list">

                                                        <a href="#">Jual</a>

                                                        <span class="category-list__text u-s-m-l-6">(4)</span>

                                                        <span class="js-shop-category-span is-expanded fas fa-plus u-s-m-l-6"></span>
                                                        <ul style="display:block">
                                                            <li class="has-list">
                                                                <a href="#">Cara jual Apartemen</a>
                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">Persiapan Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penilaian Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Pemasaran Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penawaran dan Negosiasi</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">
                                                                <a href="#">Cara jual Rumah</a>
                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">Persiapan Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penilaian Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Pemasaran Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penawaran dan Negosiasi</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">
                                                                <a href="#">Cara jual Ruko</a>
                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">Persiapan Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penilaian Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Pemasaran Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penawaran dan Negosiasi</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">
                                                                <a href="#">Cara jual Villa</a>
                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">Persiapan Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penilaian Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Pemasaran Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penawaran dan Negosiasi</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-list">

                                                        <a href="#">Sewa</a>

                                                        <span class="category-list__text u-s-m-l-6">(4)</span>

                                                        <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                        <ul>
                                                            <li class="has-list">

                                                                <a href="#">Cara sewa Apartemen</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">Persiapan Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penilaian Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Pemasaran Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penawaran dan Negosiasi</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">Cara sewa Rumah</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">Persiapan Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penilaian Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Pemasaran Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penawaran dan Negosiasi</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">Cara sewa Ruko</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">Persiapan Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penilaian Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Pemasaran Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penawaran dan Negosiasi</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">

                                                                <a href="#">Cara sewa Villa</a>

                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">Persiapan Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penilaian Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Pemasaran Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">Penawaran dan Negosiasi</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-list">

                                                        <a href="#">Agen</a>

                                                        <span class="category-list__text u-s-m-l-6">(2)</span>

                                                        <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                        <ul>
                                                            <li class="has-list">
                                                                <a href="#">Panduan Menjadi Agen Properti</a>
                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">1. Langkah 1: Registrasi sebagai Agen</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">2. Langkah 2: Pelajari Pasar Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">3. Langkah 3: Mempromosikan Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">4. Langkah 4: Menjalani Transaksi</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">
                                                                <a href="#">Keuntungan Menjadi Agen Properti</a>
                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">- Pendapatan yang Menjanjikan</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">- Fleksibilitas Jadwal Kerja</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">- Akses ke Informasi Pasar</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="has-list">

                                                        <a href="#">Developer</a>

                                                        <span class="category-list__text u-s-m-l-6">(2)</span>

                                                        <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                        <ul>
                                                            <li class="has-list">
                                                                <a href="#">Panduan Menjadi Developer Properti</a>
                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">1. Langkah 1: Registrasi sebagai Developer</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">2. Langkah 2: Pelajari Pasar Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">3. Langkah 3: Mempromosikan Properti</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">4. Langkah 4: Menjalani Transaksi</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-list">
                                                                <a href="#">Keuntungan Menjadi Developer Properti</a>
                                                                <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>
                                                                <ul>
                                                                    <li>
                                                                        <a href="#">- Pendapatan yang Menjanjikan</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">- Fleksibilitas Jadwal Kerja</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#">- Akses ke Informasi Pasar</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12">
                            <div class="bp bp--img u-s-m-b-30">
                                <div class="bp__wrap">
                                    <div class="bp__thumbnail">

                                        <!--====== Image Code ======-->

                                        <a class="aspect aspect--bg-grey aspect--1366-768 u-d-block" href="blog-detail.html">

                                            <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a>
                                        <!--====== End - Image Code ======-->
                                    </div>
                                    <div class="bp__info-wrap">
                                        <div class="bp__stat">

                                            <span class="bp__stat-wrap">

                                                <span class="bp__publish-date">

                                                    <a href="blog-left-sidebar.html">

                                                        <span>25 February 2018</span></a></span></span>

                                            </div>

                                        <span class="bp__h1">

                                            <a href="blog-detail.html">Bagaimana cara membeli properti dengan benar?</a></span>

                                        <span class="bp__h2">Cara membeli properti</span>
                                        <div class="blog-t-w">

                                            <a class="gl-tag btn--e-transparent-hover-brand-b-2" href="blog-left-sidebar.html">Rumah</a>

                                            <a class="gl-tag btn--e-transparent-hover-brand-b-2" href="blog-left-sidebar.html">User</a></div>
                                        <p class="bp__p">Beginilah caranya membeli properti Beginilah caranya membeli propertiBeginilah caranya membeli propertiBeginilah caranya membeli propertiBeginilah caranya membeli propertiBeginilah caranya membeli propertiBeginilah caranya membeli propertiBeginilah caranya membeli propertiBeginilah caranya membeli propertiBeginilah caranya membeli propertiBeginilah caranya membeli propertiBeginilah caranya membeli propertiBeginilah caranya membeli propertiBeginilah caranya membeli properti</p>
                                        <div class="gl-l-r">
                                            <div>

                                                <span class="bp__read-more">

                                                    <a href="blog-detail.html">READ MORE</a></span></div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-center-wrap u-s-p-y-60">

                                <!--====== Pagination ======-->
                                <ul class="blog-pg">
                                    <li class="blog-pg--active">

                                        <a href="blog-left-sidebar.html">1</a></li>
                                    <li>

                                        <a href="blog-left-sidebar.html">2</a></li>
                                    <li>

                                        <a href="blog-left-sidebar.html">3</a></li>
                                    <li>

                                        <a href="blog-left-sidebar.html">4</a></li>
                                    <li>

                                        <a class="fas fa-angle-right" href="blog-left-sidebar.html"></a></li>
                                </ul>
                                <!--====== End - Pagination ======-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->
        </div>


    </div>
    <!--====== End - Main App ======-->


    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageLIHAT')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="css/Lib/fix/js/vendor.js"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="css/Lib/fix/js/jquery.shopnav.js"></script>

    <!--====== App ======-->
    <script src="css/Lib/fix/js/app.js"></script>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript dinonaktifkan di browser Anda.</h1>

                            <span class="app-setting__text">Aktifkan JavaScript di browser Anda atau tingkatkan ke browser yang mendukung JavaScript.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
</body>
</html>

@endsection