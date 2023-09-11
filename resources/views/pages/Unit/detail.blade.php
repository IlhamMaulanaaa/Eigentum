@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                <div class="u-s-p-t-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">

                                <!--====== Product Breadcrumb ======-->
                                <div class="pd-breadcrumb u-s-m-b-30">
                                    <ul class="pd-breadcrumb__list">
                                        <li class="has-separator">

                                            <a href="{{ route('beranda') }}">Home</a>
                                        </li>
                                        <li class="is-marked">

                                            <a href="">Detail</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--====== End - Product Breadcrumb ======-->


                                <!--====== Product Detail Zoom ======-->
                                <div class="pd u-s-m-b-30">
                                    <div class="slider-fouc pd-wrap">
                                        <div id="pd-o-initiate">
                                            @if ($images && $images['etcimg'])
                                                @php
                                                    $imageArray = explode('|', $images['etcimg']);
                                                @endphp
                                                @foreach ($imageArray as $key => $image)
                                                    @php
                                                        $key += 2;
                                                    @endphp
                                                    <div class="pd-o-img-wrap" data-src="{{ asset('storage/' . $image) }}">

                                                        <img class="u-img-fluid" src="{{ asset('storage/' . $image) }}"
                                                            data-zoom-image="{{ asset('storage/' . $image) }}"
                                                            alt="">
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>

                                        <span class="pd-text">Klik untuk zoom lebih besar</span>
                                    </div>
                                    <div class="u-s-m-t-15">
                                        <div class="slider-fouc">
                                            <div id="pd-o-thumbnail">
                                                @if ($images && $images['etcimg'])
                                                    @php
                                                        $imageArray = explode('|', $images['etcimg']);
                                                    @endphp
                                                    @foreach ($imageArray as $key => $image)
                                                        @php
                                                            $key += 2;
                                                        @endphp
                                                        <div>

                                                            <img style="height: 90px; width: 120px; " class="u-img-fluid"
                                                                src="{{ asset('storage/' . $image) }}" alt="">
                                                        </div>
                                                    @endforeach
                                                @endif


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--====== End - Product Detail Zoom ======-->
                            </div>
                            <div class="col-lg-7">

                                <!--====== Product Right Side Details ======-->
                                <div class="pd-detail">
                                    <div>

                                        <span class="pd-detail__name">{{ $unit->title }}</span>
                                    </div>
                                    <div>
                                        <div class="pd-detail__inline">

                                            <span class="pd-detail__price">Rp.{{ number_format($unit->price, 2) }}jt</span>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-detail__inline">

                                                <span class="pd-detail__stock">{{ $unit->properties->types->name }}</span>

                                                @foreach ($unit->statuses as $status)
                                                    <h2 class="btn-status" style="">{{ $status->name }}</h2>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <span class="pd-detail__preview-desc">{{ $unit->description }}</span>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-detail__inline">

                                                <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                                    <a href="signin.html">Tambahkan Ke Favorite</a>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <form class="pd-detail__form">
                                                <div class="pd-detail-inline-2">
                                                    <div class="u-s-m-b-15">
                                                        @switch(Auth::user()->role)
                                                            @case('agent')
                                                                <form action="{{ route('accept.unit', ['unitId' => $unit->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button hidden type="submit">request</button>
                                                                </form>
                                                                <form action="{{ route('offer.submit', ['unitId' => $unit->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button type="submit">request</button>
                                                                </form>
                                                            @break

                                                            @case('developer')
                                                                <form action="{{ route('reject.unit', ['unitId' => $unit->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button hidden type="submit">reject</button>
                                                                </form>
                                                                <form action="{{ route('reject.unit', ['unitId' => $unit->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button type="submit">reject</button>
                                                                </form>
                                                                <form action="{{ route('accept.unit', ['unitId' => $unit->id]) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <button type="submit">accept</button>
                                                                </form>
                                                            @break

                                                            @default
                                                                <a href="https://web.whatsapp.com/">
                                                                    <div class="group-12-pM3" id="3:50">Tanya Agent</div>
                                                                </a>
                                                        @endswitch


                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <span class="pd-detail__label u-s-m-b-8">Kebijakan Produk:</span>
                                            <ul class="pd-detail__policy-list">
                                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                    <span>Keamanan Properti.</span>
                                                </li>
                                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                    <span>Informasi Properti.</span>
                                                </li>
                                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                    <span>Hak Cipta dan Penggunaan Materi.</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--====== End - Product Right Side Details ======-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--====== Product Detail Tab ======-->
                    <div class="u-s-p-y-90">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pd-tab">
                                        <div class="u-s-m-b-30">
                                            <ul class="nav pd-tab__list">
                                                <li class="nav-item">

                                                    <a class="nav-link active" data-toggle="tab"
                                                        href="#pd-desc">DESCRIPTION</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#pd-desc">
                                                        <i class="fas fa-plus"></i> TAMBAH UNIT
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="tab-content">

                                            <!--====== Tab 1 ======-->
                                            <div class="tab-pane fade show active" id="pd-desc">
                                                <div class="pd-tab__desc">
                                                    <div class="u-s-m-b-15">
                                                        <p>{{ $unit->description }}</p>
                                                    </div>
                                                    <!-- <div class="u-s-m-b-30"><iframe src="https://www.youtube.com/embed/qKqSBm07KZk" allowfullscreen></iframe></div> -->
                                                    <div class="u-s-m-b-30">
                                                        <ul>
                                                            <li><i class="fas fa-check u-s-m-r-8"></i>

                                                                <span>Keamanan Properti.</span>
                                                            </li>
                                                            <li><i class="fas fa-check u-s-m-r-8"></i>

                                                                <span>Informasi Properti.</span>
                                                            </li>
                                                            <li><i class="fas fa-check u-s-m-r-8"></i>

                                                                <span>Hak Cipta dan Penggunaan Materi.</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="u-s-m-b-15">
                                                        <h4>INFORMASI PRODUK</h4>
                                                    </div>
                                                    <div class="u-s-m-b-15">
                                                        <div class="pd-table gl-scroll">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>Perusahaan</td>
                                                                        <td>{{ Str::limit($unit->properties->developers->company, 15) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tipe Properti</td>
                                                                        <td>{{ $unit->properties->types->name }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Lokasi</td>
                                                                        <td>{{ implode(', ',$unit->properties->regencies()->pluck('name')->toArray()) }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Luas Bangunan</td>
                                                                        <td>
                                                                            {{ $unit->specifications->building_area }} m²
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Luas Tanah</td>
                                                                        <td>
                                                                            {{ $unit->specifications->surface_area }} m²
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Kamar Tidur</td>
                                                                        <td>{{ $unit->specifications->bedroom }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Kamar Mandi</td>
                                                                        <td>{{ $unit->specifications->bathroom }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Fasilitas</td>
                                                                        <td>Kolam Renang, Gym</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tahun Dibangun</td>
                                                                        <td>2020</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Harga</td>
                                                                        <td>Rp.{{ number_format($unit->price, 2) }}jt</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!--====== End - Tab 1 ======-->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Product Detail Tab ======-->
                    <div class="u-s-p-b-90">

                        <!--====== Section Intro ======-->
                        <div class="section__intro u-s-m-b-46">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section__text-wrap">
                                            <h1 class="section__heading u-c-secondary u-s-m-b-12">UNIT YANG DI
                                                REKOMENDASIKAN</h1>

                                            <span class="section__span u-c-grey">DAFTAR UNIT YANG TERCANTUM</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--====== End - Section Intro ======-->


                        <!--====== Section Content ======-->
                        <div class="section__content">
                            <div class="container">
                                <div class="slider-fouc">
                                    <div class="owl-carousel product-slider" data-item="4">
                                        @foreach ($units as $unit)
                                            <div class="u-s-m-b-30">
                                                <div class="product-o product-o--hover-on">
                                                    <div class="product-o__wrap">

                                                        <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                            href="{{ route('unit.show.user', $unit->id) }}">

                                                            <img class="aspect__img"
                                                                src="{{ asset('storage/' . $unit->image) }}"
                                                                alt=""></a>
                                                        <div class="product-o__action-wrap">
                                                            <ul class="product-o__action-list">
                                                                <li>

                                                                    <a data-modal="modal" data-modal-id="#quick-look"
                                                                        data-tooltip="tooltip" data-placement="top"
                                                                        title="Quick View"><i
                                                                            class="fas fa-search-plus"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a data-modal="modal" data-modal-id="#add-to-cart"
                                                                        data-tooltip="tooltip" data-placement="top"
                                                                        title="Add to Cart"><i
                                                                            class="fas fa-plus-circle"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html" data-tooltip="tooltip"
                                                                        data-placement="top"
                                                                        title="Tambahkan Ke Favorite"><i
                                                                            class="fas fa-heart"></i></a>
                                                                </li>
                                                                <li>

                                                                    <a href="signin.html" data-tooltip="tooltip"
                                                                        data-placement="top"
                                                                        title="Email me When the price drops"><i
                                                                            class="fas fa-envelope"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <span class="product-o__category">

                                                        <a
                                                            href="shop-side-version-2.html">{{ $unit->properties->types->name }}</a>
                                                    </span>

                                                    <span class="product-o__name">

                                                        <a
                                                            href="{{ route('unit.show.user', $unit->id) }}">{{ $unit->title }}</a></span>

                                                    <span
                                                        class="product-o__price">Rp.{{ number_format($unit->price, 2) }}jt</span>
                                                </div>
                                            </div>
                                        @endforeach

                                        {{-- <div class="product-o product-o--hover-on">
                                            <div class="product-o__wrap">

                                                <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                    href="product-detail.html">

                                                    <img class="aspect__img" src="/assets/pages/home/kota.jpg"
                                                        alt=""></a>
                                                <div class="product-o__action-wrap">
                                                    <ul class="product-o__action-list">
                                                        <li>

                                                            <a data-modal="modal" data-modal-id="#quick-look"
                                                                data-tooltip="tooltip" data-placement="top"
                                                                title="Quick View"><i class="fas fa-search-plus"></i></a>
                                                        </li>
                                                        <li>

                                                            <a data-modal="modal" data-modal-id="#add-to-cart"
                                                                data-tooltip="tooltip" data-placement="top"
                                                                title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
                                                        </li>
                                                        <li>

                                                            <a href="signin.html" data-tooltip="tooltip"
                                                                data-placement="top" title="Tambahkan Ke Favorite"><i
                                                                    class="fas fa-heart"></i></a>
                                                        </li>
                                                        <li>

                                                            <a href="signin.html" data-tooltip="tooltip"
                                                                data-placement="top"
                                                                title="Email me When the price drops"><i
                                                                    class="fas fa-envelope"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <span class="product-o__category">

                                                <a href="shop-side-version-2.html">Rumah</a></span>

                                            <span class="product-o__name">

                                                <a href="product-detail.html">Rumah Minimalis</a></span>

                                            <span class="product-o__price">Rp. 1.300.000.000</span>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====== End - Section Content ======-->
                </div>
                <!--====== End - Section 1 ======-->
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

                                <span class="app-setting__text">Aktifkan JavaScript di browser Anda atau tingkatkan ke
                                    browser yang mendukung JavaScript.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </noscript>
    </body>

    </html>
@endsection
