@extends('layout.main')

@section('content')

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="" rel="shortcut icon">

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="{{ asset('css/Lib/fix/css/vendor.css') }}">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="{{ asset('css/Lib/fix/css/utility.css') }}">

    <!--====== App ======-->
    <link rel="stylesheet" href="{{ asset('css/Lib/fix/css/app.css') }}">
</head>
<body class="config">
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="" alt=""></div>
    </div>

    <div id="app">

        <div class="app-content">

            <div class="s-skeleton s-skeleton--h-600 s-skeleton--bg-grey">
                <div class="owl-carousel primary-style-1" id="hero-slider">
                    <div class="hero-slide hero-slide--1">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">

                                        <span class="content-span-1 u-c-secondary">Properti Impian Anda</span>

                                        <span class="content-span-2 u-c-secondary">Eksplorasi Properti Berkualitas</span>

                                        <span class="content-span-3 u-c-secondary">Jelajahi Pilihan Luas Properti di Lokasi Premium untuk Gaya Hidup Modern Anda</span>

                                        <span class="content-span-4 u-c-secondary">Mulai Dari

                                            <span class="u-c-brand">Rp. 100 Juta</span></span>

                                        <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">Lihat Sekarang</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide--2">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">

                                        <span class="content-span-1 u-c-white">Agen Properti</span>

                                        <span class="content-span-2 u-c-white">Agen Terpercaya dalam Mencari Properti Ideal</span>

                                        <span class="content-span-3 u-c-white">Dapatkan panduan dan nasihat terbaik dari tim agen properti kami yang berpengalaman.</span>

                                        <span class="content-span-4 u-c-white">Mulai Perjalanan Properti Anda</span>

                                        <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">Lihat Sekarang</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slide hero-slide--3">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="slider-content slider-content--animation">

                                        <span class="content-span-1 u-c-white">Panduan Properti</span>

                                        <span class="content-span-2 u-c-white">Jelajahi Panduan tentang Properti</span>

                                        <span class="content-span-3 u-c-white">Dengan panduan kami, Anda akan memahami bagaimana mencari dan menilai properti yang sesuai dengan kebutuhan dan gaya hidup Anda.</span>

                                        <span class="content-span-4 u-c-white">Mulai Belajar Mengenai Properti</span>

                                        <a class="shop-now-link btn--e-brand" href="shop-side-version-2.html">Lihat Sekarang</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Primary Slider ======-->

            <div class="u-s-p-y-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="service u-h-100">
                                    <div class="service__icon"><i class="fas fa-search"></i></div>
                                    <div class="service__info-wrap">

                                        <span class="service__info-text-1">Kemudahan Pencarian properti</span>

                                        <span class="service__info-text-2">Pengguna bisa dengan mudah mencari properti yang diinginkan dengan fitur pencarian yang lengkap</span></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="service u-h-100">
                                    <div class="service__icon"><i class="fas fa-align-justify"></i></div>
                                    <div class="service__info-wrap">

                                        <span class="service__info-text-1">Lebih Banyak Pilihan</span>

                                        <span class="service__info-text-2">lebih banyak pilihan properti yang bisa dipilih, mulai dari rumah, apartemen, hingga properti komersial.</span></div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 u-s-m-b-30">
                                <div class="service u-h-100">
                                    <div class="service__icon"><i class="fas fa-book"></i></div>
                                    <div class="service__info-wrap">

                                        <span class="service__info-text-1">Informasi Lengkap</span>

                                        <span class="service__info-text-2">Informasi lengkap tentang properti yang dijual, mulai dari harga, lokasi, ukuran, fasilitas, dan lain sebagainya.</span></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>

            <!--====== Section 1 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">PRODUK KAMI</h1>

                                    <span class="section__span u-c-silver">PROPERTI YANG KAMI TAWARKAN</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 u-s-m-b-30">

                                <a class="collection" href="shop-side-version-2.html">
                                    <div class="aspect aspect--bg-grey aspect--square">

                                        <img class="aspect__img collection__img" src="/assets/pages/banner/apartemen1.jpg" alt=""></div>
                                </a></div>
                            <div class="col-lg-7 col-md-7 u-s-m-b-30">

                                <a class="collection" href="shop-side-version-2.html">
                                    <div class="aspect aspect--bg-grey aspect--1286-890">

                                        <img class="aspect__img collection__img" src="/assets/pages/banner/home2.jpg" alt=""></div>
                                </a></div>
                            <div class="col-lg-7 col-md-7 u-s-m-b-30">

                                <a class="collection" href="shop-side-version-2.html">
                                    <div class="aspect aspect--bg-grey aspect--1286-890">

                                        <img class="aspect__img collection__img" src="/assets/pages/banner/ruko1.jpg" alt=""></div>
                                </a></div>
                            <div class="col-lg-5 col-md-5 u-s-m-b-30">

                                <a class="collection" href="shop-side-version-2.html">
                                    <div class="aspect aspect--bg-grey aspect--square">

                                        <img class="aspect__img collection__img" src="/assets/pages/banner/villa1.jpg" alt=""></div>
                                </a></div>
                        </div>
                    </div>
                </div>

                <!--====== Section Content ======-->
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-16">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">PROPERTI TERATAS</h1>

                                    <span class="section__span u-c-silver">PILIH PROPERTI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="filter-category-container">
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1 js-checked" type="button" data-filter="*">ALL</button></div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".headphone">APARTEMEN</button></div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".smartphone">RUMAH</button></div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".sportgadget">RUKO</button></div>
                                    <div class="filter__category-wrapper">

                                        <button class="btn filter__btn filter__btn--style-1" type="button" data-filter=".dslr">VILLA</button></div>
                                </div>
                                <div class="filter__grid-wrapper u-s-m-t-30">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                            <div class="product-o product-o--hover-on product-o--radius">
                                                <div class="product-o__wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a>
                                                    <div class="product-o__action-wrap">
                                                        <ul class="product-o__action-list">
                                                            
                                                            <li>

                                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Tambahkan Ke Favorite"><i class="fas fa-heart"></i></a></li>
                                                            <li>

                                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Lihat lebih detail"><i class="fas fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <span class="product-o__category">

                                                    <a href="shop-side-version-2.html">Rumah</a></span>

                                                <span class="product-o__name">

                                                    <a href="product-detail.html">Rumah Minimalis</a></span>
                                                

                                                <span class="product-o__price">Rp. 900.000.000

                                                    </span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item headphone">
                                            <div class="product-o product-o--hover-on product-o--radius">
                                                <div class="product-o__wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a>
                                                    <div class="product-o__action-wrap">
                                                        <ul class="product-o__action-list">
                                                            
                                                            <li>

                                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Tambahkan Ke Favorite"><i class="fas fa-heart"></i></a></li>
                                                            <li>

                                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Lihat lebih detail"><i class="fas fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <span class="product-o__category">

                                                    <a href="shop-side-version-2.html">Rumah</a></span>

                                                <span class="product-o__name">

                                                    <a href="product-detail.html">Rumah Minimalis</a></span>
                                                

                                                <span class="product-o__price">Rp. 900.000.000

                                                    </span>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item sportgadget">
                                            <div class="product-o product-o--hover-on product-o--radius">
                                                <div class="product-o__wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                        <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a>
                                                    <div class="product-o__action-wrap">
                                                        <ul class="product-o__action-list">
                                                            
                                                            <li>

                                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Tambahkan Ke Favorite"><i class="fas fa-heart"></i></a></li>
                                                            <li>

                                                                <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Lihat lebih detail"><i class="fas fa-eye"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <span class="product-o__category">

                                                    <a href="shop-side-version-2.html">Rumah</a></span>

                                                <span class="product-o__name">

                                                    <a href="product-detail.html">Rumah Minimalis</a></span>
                                                

                                                <span class="product-o__price">Rp. 900.000.000

                                                    </span>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->


            


            <!--====== Section 4 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">PROPERTI TERBARU</h1>

                                    <span class="section__span u-c-silver">PILIH PROPERTI TERBARU KAMI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <h5 style="text-align: right; color: #000;">Lihat Semua</h5>
                        <div class="slider-fouc">
                            <div class="owl-carousel product-slider" data-item="4">
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Tambahkan Ke Favorite"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Lihat lebih detail"><i class="fas fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Rumah</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Rumah Minimalis</a></span>
                                        

                                        <span class="product-o__price">Rp. 900.000.000

                                            </span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Tambahkan Ke Favorite"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Lihat lebih detail"><i class="fas fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Rumah</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Rumah Minimalis</a></span>
                                        

                                        <span class="product-o__price">Rp. 900.000.000

                                            </span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 4 ======-->


            <!--====== Section 5 ======-->
            <div class="banner-bg">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-bg__countdown">
                                    <div class="countdown countdown--style-banner" data-countdown="2023/09/1"></div>
                                </div>
                                <div class="banner-bg__wrap">
                                    <div class="banner-bg__text-1">

                                        <span class="u-c-white">Jadilah</span>

                                        <span class="u-c-white">Developer</span></div>
                                    <div class="banner-bg__text-2">

                                        <span class="u-c-white">Kami Memiliki</span>

                                        <span class="u-c-white">Diskon Terbaik Untuk Anda!</span></div>

                                    <span class="banner-bg__text-block banner-bg__text-3 u-c-white">Merencanakan strategi pemasaran untuk properti yang akan dijual.</span>

                                    <a class="banner-bg__shop-now btn--e-secondary" href="shop-side-version-2.html">Daftar Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 5 ======-->


            <!--====== Section 6 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">PROPERTI LAINNYA</h1>

                                    <span class="section__span u-c-silver">TEMUKAN PROPERTI YANG ANDA BUTUHKAN</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <h5 style="text-align: right; color: #000;">Lihat Semua</h5>
                        <div class="slider-fouc">
                            <div class="owl-carousel product-slider" data-item="4">
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Tambahkan Ke Favorite"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Lihat lebih detail"><i class="fas fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Rumah</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Rumah Minimalis</a></span>
                                        

                                        <span class="product-o__price">Rp. 900.000.000

                                            </span>
                                    </div>
                                </div>
                                <div class="u-s-m-b-30">
                                    <div class="product-o product-o--hover-on">
                                        <div class="product-o__wrap">

                                            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

                                                <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a>
                                            <div class="product-o__action-wrap">
                                                <ul class="product-o__action-list">
                                                    
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Tambahkan Ke Favorite"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Lihat lebih detail"><i class="fas fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                        <span class="product-o__category">

                                            <a href="shop-side-version-2.html">Rumah</a></span>

                                        <span class="product-o__name">

                                            <a href="product-detail.html">Rumah Minimalis</a></span>
                                        

                                        <span class="product-o__price">Rp. 900.000.000

                                            </span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 6 ======-->


            


            <!--====== Section 8 ======-->
            <div class="u-s-p-b-60">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                <div class="column-product">

                                    <span class="column-product__title u-c-secondary u-s-m-b-25">PRODUK SPECIAL</span>
                                    <ul class="column-product__list">
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link" href="product-detail.html">

                                                        <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a></div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Rumah</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">Rumah Minimalis</a></span>

                                                    <span class="product-l__price">Rp. 900.000.000</span></div>
                                            </div>
                                        </li>
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link" href="product-detail.html">

                                                        <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a></div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Rumah</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">Rumah Minimalis</a></span>

                                                    <span class="product-l__price">Rp. 900.000.000</span></div>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                <div class="column-product">

                                    <span class="column-product__title u-c-secondary u-s-m-b-25">PRODUK PILIHAN</span>
                                    <ul class="column-product__list">
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link" href="product-detail.html">

                                                        <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a></div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Rumah</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">Rumah Minimalis</a></span>

                                                    <span class="product-l__price">Rp. 900.000.000</span></div>
                                            </div>
                                        </li>
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link" href="product-detail.html">

                                                        <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a></div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Rumah</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">Rumah Minimalis</a></span>

                                                    <span class="product-l__price">Rp. 900.000.000</span></div>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
                                <div class="column-product">

                                    <span class="column-product__title u-c-secondary u-s-m-b-25">PRODUK FLASH</span>
                                    <ul class="column-product__list">
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link" href="product-detail.html">

                                                        <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a></div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Rumah</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">Rumah Minimalis</a></span>

                                                    <span class="product-l__price">Rp. 900.000.000</span></div>
                                            </div>
                                        </li>
                                        <li class="column-product__item">
                                            <div class="product-l">
                                                <div class="product-l__img-wrap">

                                                    <a class="aspect aspect--bg-grey aspect--square u-d-block product-l__link" href="product-detail.html">

                                                        <img class="aspect__img" src="/assets/pages/home/kota.jpg" alt=""></a></div>
                                                <div class="product-l__info-wrap">

                                                    <span class="product-l__category">

                                                        <a href="shop-side-version-2.html">Rumah</a></span>

                                                    <span class="product-l__name">

                                                        <a href="product-detail.html">Rumah Minimalis</a></span>

                                                    <span class="product-l__price">Rp. 900.000.000</span></div>
                                            </div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 8 ======-->


            <!--====== Section 9 ======-->
            
            <!--====== End - Section 9 ======-->


            


            <!--====== Section 11 ======-->
            <div class="u-s-p-b-90 u-s-m-b-30">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">TESTIMONI KLIEN</h1>

                                    <span class="section__span u-c-silver">WHAT OUR CLIENTS SAY</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Intro ======-->


                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">

                        <!--====== Testimonial Slider ======-->
                        <div class="slider-fouc">
                            <div class="owl-carousel" id="testimonial-slider">
                                <div class="testimonial">
                                    <div class="testimonial__img-wrap">

                                        <img class="testimonial__img" src="/assets/pages/testimoni/testimoni1.jpg" alt=""></div>
                                    <div class="testimonial__content-wrap">

                                        <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                        <blockquote class="testimonial__block-quote">
                                            <p>"Saya mengakui Eigentum adalah platform yang sangat bagus untuk menemukan properti."</p>
                                        </blockquote>

                                        <span class="testimonial__author">Ramadhan Syarif / Customer</span>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="testimonial__img-wrap">

                                        <img class="testimonial__img" src="/assets/pages/testimoni/testimoni2.jpg" alt=""></div>
                                    <div class="testimonial__content-wrap">

                                        <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                        <blockquote class="testimonial__block-quote">
                                            <p>"Saya percaya Eigentum adalah tempat yang luar biasa untuk menemukan properti."</p>
                                        </blockquote>

                                        <span class="testimonial__author">Bambang Narjo / Customer</span>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="testimonial__img-wrap">

                                        <img class="testimonial__img" src="/assets/pages/testimoni/testimoni3.jpg" alt=""></div>
                                    <div class="testimonial__content-wrap">

                                        <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                        <blockquote class="testimonial__block-quote">
                                            <p>"Saya yakin Eigentum adalah solusi terbaik untuk menemukan properti yang Anda cari."</p>
                                        </blockquote>

                                        <span class="testimonial__author">Jono Tarjo / Customer</span>
                                    </div>
                                </div>
                                <div class="testimonial">
                                    <div class="testimonial__img-wrap">

                                        <img class="testimonial__img" src="/assets/pages/testimoni/testimoni4.jpg" alt=""></div>
                                    <div class="testimonial__content-wrap">

                                        <span class="testimonial__double-quote"><i class="fas fa-quote-right"></i></span>
                                        <blockquote class="testimonial__block-quote">
                                            <p>"Menurut saya, Eigentum adalah opsi yang luar biasa untuk mencari properti yang tepat"</p>
                                        </blockquote>

                                        <span class="testimonial__author">David / Customer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Testimonial Slider ======-->
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 11 ======-->


            <!--====== Section 12 ======-->
            <div class="u-s-p-b-60">

                <div class="section__intro u-s-m-b-46">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary u-s-m-b-12">TEMUKAN KOTA ANDA</h1>

                                    <span class="section__span u-c-silver">CARI KOTA YANG TERDAFTAR DISINI</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">

                        <!--====== Brand Slider ======-->
                        <div class="slider-fouc">
                            <div class="owl-carousel" id="brand-slider" data-item="5">
                                <div class="brand-slide">

                                    <a href="shop-side-version-2.html">

                                        <img src="/assets/pages/fix/jakarta1.jpg" alt="Jakarta">
                                        <div class="image-caption">Jakarta</div>
                                    </a>
                                    </div>
                                <div class="brand-slide">

                                    <a href="shop-side-version-2.html">

                                        <img src="/assets/pages/fix/surabaya.jpg" alt="">
                                        <div class="image-caption">Surabaya</div>
                                    </a></div>
                                <div class="brand-slide">

                                    <a href="shop-side-version-2.html">

                                        <img src="/assets/pages/fix/bandung.jpg" alt="">
                                        <div class="image-caption">Bandung</div></a></div>
                                <div class="brand-slide">

                                    <a href="shop-side-version-2.html">

                                        <img src="/assets/pages/fix/jogja.jpg" alt="">
                                        <div class="image-caption">Yogyakarta</div></a></div>
                                <div class="brand-slide">

                                    <a href="shop-side-version-2.html">

                                        <img src="/assets/pages/fix/jogja.jpg" alt="">
                                        <div class="image-caption">Yogyakarta</div></a></div>
                                        <div class="brand-slide">

                                    <a href="shop-side-version-2.html">

                                        <img src="/assets/pages/fix/jogja.jpg" alt="">
                                        <div class="image-caption">Yogyakarta</div></a></div>
                                <div class="brand-slide">

                                    <a href="shop-side-version-2.html">

                                        <img src="/assets/pages/fix/surabaya.jpg" alt=""></a></div>
                                        <div class="image-caption">Surabaya</div></a></div>
                            </div>
                        </div>
                        <!--====== End - Brand Slider ======-->
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 12 ======-->
        </div>
        <!--====== End - App Content ======-->



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
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="{{ asset('css/Lib/fix/js/vendor.js') }}"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="{{ asset('css/Lib/fix/js/jquery.shopnav.js') }}"></script>

    <!--====== App ======-->
    <script src="{{ asset('css/Lib/fix/js/app.js') }}"></script>

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