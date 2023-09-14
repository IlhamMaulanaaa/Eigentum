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
    <link rel="stylesheet" href="{{ asset('css/Lib/fix/css/vendor.css') }}">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="{{ asset('css/Lib/fix/css/utility.css') }}">

    <!--====== App ======-->
    <link rel="stylesheet" href="{{ asset('css/Lib/fix/css/app.css') }}">
</head>
<body class="config">
    
    <div id="app">


        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-t-100">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="breadcrumb">
                            <div class="breadcrumb__wrap">
                                <ul class="breadcrumb__list">
                                    <li class="has-separator">

                                        <a href="index.html">Home</a></li>
                                    <li class="is-marked">

                                        <a href="wishlist.html">Favorit</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Section 1 ======-->


            <!--====== Section 2 ======-->
            <div class="u-s-p-y-60">

                <!--====== Section Intro ======-->
                <div class="section__intro u-s-m-b-60">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section__text-wrap">
                                    <h1 class="section__heading u-c-secondary">Favorit</h1>
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
                            <div class="col-lg-12 col-md-12 col-sm-12">

                            <!--====== Wishlist Product ======-->
                            @foreach ($favorites as $unit)
                                <div class="w-r u-s-m-b-30">
                                    <div class="w-r__container">
                                        <div class="w-r__wrap-1">
                                            <div class="w-r__img-wrap">
                                                <img class="u-img-fluid" src="{{ asset('storage/' . $unit->image) }}" style="width: 120px; height:120px;" alt=""></div>
                                            <div class="w-r__info">

                                                <span class="w-r__name">
                                                    <a href="product-detail.html">{{ $unit->title }}</a></span>
                                                <span class="w-r__category">
                                                    <a href="shop-side-version-2.html">{{ $unit->properties->types->name }}</a></span>
                                                    
                                                <span class="w-r__price">
                                                    {{ $unit->price }}
                                                </span></div>
                                            </div>
                                        <div class="w-r__wrap-2">

                                            

                                            <a class="w-r__link btn--e-transparent-platinum-b-2" href="{{route('unit.show.user', $unit->id)}}">LIHAT</a>

                                            <a class="w-r__link btn--e-transparent-platinum-b-10" href="{{route('favorite.remove', $unit->id)}}">HAPUS</a></div>
                                    </div>
                                </div>
                            @endforeach



                                

                                <!--====== End - Wishlist Product ======-->

                            </div>
                            <div class="col-lg-12" style="justify-content: center; align-items: center; display: flex; margin-bottom: 140px; ">
                                <div class="route-box">
                                    <div class="route-box__g">

                                        <a class="route-box__link" href="{{route('favorite.removeall')}}"><i class="fas fa-trash" style="margin-right: 10px;"></i>

                                            <span>CLEAR WISHLIST</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
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
        ga('send', 'pageLIHAT')
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