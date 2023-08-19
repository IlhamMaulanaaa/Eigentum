@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="zxx" class="no-js">

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="author" content="CodePixar">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="UTF-8">
        <link rel="stylesheet" href="/css/Lib/assets/custom/css/bootstrap.css">
        <link rel="stylesheet" href="/css/Lib/assets/custom/css/main.css">

        <link rel="shortcut icon" href="/css/Lib/assets/custom/images/shortcut.png">


        <link href="/css/Lib/assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">

        <link href="/css/Lib/assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
            rel="stylesheet">

        <link href="/css/Lib/assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">

        <link href="/css/Lib/assets/custom/css/fables-icons.css" rel="stylesheet">

        <link href="/css/Lib/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/Lib/assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">

        <link href="/css/Lib/assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">

        <link href="/css/Lib/assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">

        <link href="/css/Lib/assets/vendor/range-slider/range-slider.css" rel="stylesheet">

        <link href="/css/Lib/assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
        <link href="/css/Lib/assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">

        <link href="/css/Lib/assets/custom/css/custom.css" rel="stylesheet">
        <link href="/css/Lib/assets/custom/css/custom-responsive.css" rel="stylesheet">
    </head>

    <body>


        <div class="fables-header fables-after-overlay">
            <div class="container">
                <h2 class="fables-page-title fables-second-border-color">Detail
                    Langganan</h2>
            </div>
        </div>
        <div class="fables-light-gary-background">
            <div class="container">
                <div aria-label="breadcrumb">
                    <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                        <li class="breadcrumb-item"><a href="#" class="fables-second-text-color"
                                style="text-decoration: none;">Langganan</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="text-decoration: none;">Detail
                            Langganan</li>
                    </ol>
                </div>
            </div>
        </div>
        <form action="{{ route('subscribeid.store', $subscribe->id) }}" method="post" enctype="multipart/form-data">
            <section class="order_details section_gap">
                <div class="container">
                    {{-- <h3 class="title_confirmation">Terima kasih telah melakukan pembelian langganan kami.</h3> --}}
                    <div class="row order_d_inner">
                        <div class="col-lg-4">
                            <div class="details_item">
                                <h4>Info Pembayaran</h4>
                                <ul class="list">
                                    <li>
                                        <span>Tittel</span> {{ $subscribe->title }}
                                    </li>
                                    <li>
                                        <span>Price</span> Rp. {{ $subscribe->price }}
                                    </li>
                                </ul>
                            </div>
                            <button type="submit" class="btn btn-primary">Checkout</button>

                        </div>
                    </div>
                </div>
            </section>
        </form>





    </body>

    </html>
@endsection
