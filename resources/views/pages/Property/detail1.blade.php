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
                <div class="u-s-p-t-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">

                                <!--====== Product Breadcrumb ======-->
                                <div class="pd-breadcrumb u-s-m-b-30">
                                    <ul class="pd-breadcrumb__list">
                                        <li class="has-separator">

                                            <a href="/">Home</a>
                                        </li>
                                        <li class="is-marked">

                                            <a href="#">Detail</a>
                                        </li>
                                    </ul>
                                </div>
                                <!--====== End - Product Breadcrumb ======-->


                                <!--====== Product Detail Zoom ======-->
                                <div class="pd u-s-m-b-30">
                                        <div id="pd-o-initiate">
                                            <div>

                                                <img class="u-img-fluid"  src="{{ asset('storage/' . $property->image) }}" alt="{{ $property->image }}">
                                            </div>
                                            
                                        </div>
                                </div>
                                <!--====== End - Product Detail Zoom ======-->
                            </div>
                            <div class="col-lg-7">

                                <!--====== Product Right Side Details ======-->
                                <div class="pd-detail">
                                    <div>

                                        <span class="pd-detail__name">{{ $property->title }}</span>
                                    </div>
                                    <div>
                                        <div class="pd-detail__inline">
                                            <span class="pd-detail__name1">Mulai Dari :</span>
                                            <span class="pd-detail__price">{{ $property->price_range }}</span>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-detail__inline">

                                                <span class="pd-detail__stock">{{ $property->types->name }}</span>

                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <span class="pd-detail__preview-desc">{{ $property->description }}</span>
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
                                                        href="#pd-desc">DESKRIPSI</a>
                                                </li>
                                                <li class="nav-item" style="z-index: 5;">
                                                    @if (Auth::user()->role == 'developer' && Auth::user()->id == $property->developers->users->pluck('id')->first())
                                                    <a class="nav-link"
                                                        href="{{ route('unit.create.developer', $property->id) }}">
                                                        <i class="fas fa-plus"></i> TAMBAH UNIT
                                                    </a>
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content">

                                            <!--====== Tab 1 ======-->
                                            <div class="tab-pane fade show active" id="pd-desc">
                                                <div class="pd-tab__desc">
                                                    <div class="u-s-m-b-15">
                                                        <p>{{ $property->description }}</p>
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
                                                                        <td>Nama Pemilik</td>
                                                                        <td>{{ auth()->user()->name }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tipe Properti</td>
                                                                        <td>{{ $property->types->name }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Lokasi</td>
                                                                        <td>{{ implode(', ',$property->regencies()->pluck('name')->toArray()) }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Unit Tersedia</td>
                                                                        <td>{{ $property->units->count() }}</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Harga Mulai :</td>
                                                                        <td>{{ $property->price_range }}</td>
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
                                            <h1 class="section__heading u-c-secondary u-s-m-b-12">List Unit dari Properti {{ $property->title }}</h1>

                                            <span class="section__span u-c-grey">DAFTAR UNIT</span>
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
                                                                        <form  action="{{ route('favorite.add', $unit->id) }}" method="POST">
                                                                            @csrf

                                                                                    <button class="btnfav" style="cursor: pointer, color: #000;, text-color: #000" data-tooltip="tooltip" type="submit"
                                                                                        data-placement="top" 
                                                                                        title="Tambahkan Ke Favorite">
                                                                                        <i class="fas fa-heart"></i></button>
                                                                                
                                                                        </form>
                                                                        </li>
                                                                        <li>

                                                                            <a href="{{ route('unit.show.user', $unit->id) }}" data-tooltip="tooltip"
                                                                                data-placement="top"
                                                                                title="Lihat lebih detail"><i
                                                                                    class="fas fa-eye"></i></a>
                                                                        </li>

                                                                        
                                                                        @if (Auth::user()->role == 'developer' && Auth::user()->id == $property->developers->users->pluck('id')->first())
                                                                            <li>
                                                                                <form action="{{ route('unit.destroy.developer', $unit->id) }}" method="get" class="d-inline">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button class="btnfav" data-modal="modal" data-modal-id="#add-to-cart" 
                                                                                    data-tooltip="tooltip" data-placement="top"
                                                                                    title="Hapus Unit" onclick="return confirm('Apakah Anda Yakin {{ $property->id }} ')">
                                                                                    <i class="fas fa-trash-alt"></i></button>
                                                                                </form>
                                                                            </li>
                                                                            <li>
                                                                                <a data-modal="modal" href="{{ route('unit.edit.developer', $unit->id) }}" data-modal-id="#quick-look"
                                                                                            data-tooltip="tooltip" data-placement="top"
                                                                                            title="Edit Unit">
                                                                                            <i class="fas fa-edit"></i></a>
                                                                                
                                                                            </li>
                                                                        @endif
                                                                    </ul>
                                                                </div>
                                                    </div>

                                                    <span class="product-o__category">

                                                        <a href="#">{{ $unit->properties->types->name }}</a></span>

                                                    <span class="product-o__name">

                                                        <a
                                                            href="{{ route('unit.show.user', $unit->id) }}">{{ $unit->title }}</a></span>


                                                    <span class="product-o__price">Rp. {{ $unit->price }}</span>
                                                </div>
                                            </div>
                                        @endforeach
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
