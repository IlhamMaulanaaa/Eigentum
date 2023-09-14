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
                <div class="u-s-p-y-90">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="shop-p">
                                    <div class="shop-p__toolbar u-s-m-b-30">

                                        <div class="shop-p__tool-style">
                                            <div class="tool-style__group u-s-m-b-8">

                                                <span class="js-shop-filter-target" data-side="#side-filter">Filters</span>

                                                <span class="js-shop-grid-target is-active">Grid</span>

                                                <span class="js-shop-list-target">List</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="shop-p__collection">
                                        <div class="row is-grid-active">
                                            @foreach ($filteredUnits as $unit)
                                                <a href="{{ route('unit.show.user', $unit->id) }}" class="stretched-link">
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <div class="product-m">
                                                            <div class="product-m__thumb">

                                                                <a class="aspect aspect--bg-grey aspect--square u-d-block"
                                                                    href="{{ route('unit.show.user', $unit->id) }}">

                                                                    <img class="aspect__img"
                                                                        src="{{ asset('storage/' . $unit->image) }}"
                                                                        alt=""></a>

                                                                <div class="product-m__add-cart">

                                                                    <a class="btn--e-brand" data-modal="modal"
                                                                        data-modal-id="#add-to-cart">Lihat Selengkapnya</a>
                                                                </div>
                                                            </div>
                                                            <div class="product-m__content">
                                                                <div class="product-m__category">

                                                                    <a
                                                                        href="shop-side-version-2.html">{{ $unit->properties->types->name }}</a>
                                                                </div>
                                                                <div class="product-m__name">

                                                                    <a
                                                                        href="{{ route('unit.show.user', $unit->id) }}">{{ $unit->title }}</a>
                                                                </div>

                                                                <div class="product-m__price">Rp.
                                                                    {{ number_format($unit->price, 2) }}jt</div>
                                                                <div class="product-m__hover">
                                                                    <div class="product-m__preview-description">

                                                                        <span>{{ $unit->description }}</span>
                                                                    </div>
                                                                    <div class="product-m__wishlist">

                                                                        <a class="far fa-heart" href="#"
                                                                            data-tooltip="tooltip" data-placement="top"
                                                                            title="Add to Wishlist"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endforeach
                                            {{-- {{ $filteredUnits->links() }} --}}


                                        </div>
                                    </div>
                                    <div class="u-s-p-y-60">

                                        <!--====== Pagination ======-->
                                        <ul class="shop-p__pagination">
                                            <li class="is-active">

                                                {{-- <a href="shop-grid-full.html">{{$units->links()}}</a> --}}
                                            </li>
                                            <li>

                                                <a href="shop-grid-full.html">2</a>
                                            </li>
                                            <li>

                                                <a href="shop-grid-full.html">3</a>
                                            </li>
                                            <li>

                                                <a href="shop-grid-full.html">4</a>
                                            </li>
                                            <li>

                                                <a class="fas fa-angle-right" href="shop-grid-full.html"></a>
                                            </li>
                                        </ul>
                                        <!--====== End - Pagination ======-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--====== End - Section 1 ======-->
            </div>
            <!--====== End - App Content ======-->



            <!--====== Side Filters ======-->
            <div class="shop-a" id="side-filter">
                <div class="shop-a__wrap">
                    <div class="shop-a__inner gl-scroll">
                        <form action="{{ route('unit.search.user') }}" method="GET" role="search">
                            <div class="shop-w-master">
                                <h1 class="shop-w-master__heading u-s-m-b-30"><i class="fas fa-filter u-s-m-r-8"></i>

                                    <span>FILTERS</span>
                                </h1>
                                <div class="shop-w-master__sidebar">

                                    <div class="u-s-m-b-30">
                                        <div class="blog-w">
                                            {{-- <form class="blog-search-form" action="{{ route('unit.search.user') }}" method="GET" role="search"> --}}

                                            <label for="post-search"></label>

                                            <input class="input-text input-text--primary-style" type="text"
                                                id="post-search" placeholder="Search" value="{{ request('search') }}">

                                            <button class="btn btn--icon fas fa-search" type="submit"></button>
                                            {{-- </form> --}}
                                        </div>
                                    </div>

                                    <div class="u-s-m-b-30">
                                        <div class="shop-w">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">STATUS</h1>

                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-shipping"
                                                    data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-shipping">

                                                @foreach ($statuses as $status)
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="status{{ $status->id }}" name="status[]"
                                                            value="{{ $status->id }}"
                                                            {{ in_array($status->id, request('status', [])) ? 'checked' : '' }}>
                                                        <label class="form-check-label">{{ $status->name }}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-30">
                                        <div class="shop-w">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">HARGA</h1>

                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-price"
                                                    data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-price">
                                                <form class="shop-w__form-p">
                                                    <div class="shop-w__form-p-wrap">
                                                        <div>
                                                            <label for="price-min"></label>

                                                            <input class="input-text input-text--primary-style"
                                                                type="number"name="min_price" id="price-min"
                                                                placeholder="Min"value="{{ request('min_price') }}">
                                                        </div>
                                                        <div>

                                                            <label for="price-max"></label>

                                                            <input class="input-text input-text--primary-style"
                                                                type="number" id="price-max"name="max_price"
                                                                placeholder=" Max"value="{{ request('max_price') }}">
                                                        </div>
                                                        <div>

                                                            <button
                                                                class="btn btn--icon fas fa-angle-right btn--e-transparent-platinum-b-2"
                                                                type="submit"></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="u-s-m-b-30">
                                        <div class="shop-w">
                                            <div class="shop-w__intro-wrap">
                                                <h1 class="shop-w__h">TIPE</h1>

                                                <span class="fas fa-minus shop-w__toggle" data-target="#s-shipping"
                                                    data-toggle="collapse"></span>
                                            </div>
                                            <div class="shop-w__wrap collapse show" id="s-shipping">

                                                <ul class="shop-w__list gl-scroll">
                                                    @foreach ($types as $type)
                                                        <div class="check-box__state check-box__state--primary">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="type{{ $type->id }} small" name="types[]"
                                                                value="{{ $type->id }}"
                                                                {{ in_array($type->id, request('types', [])) ? 'checked' : '' }}>
                                                            <label class="check-box__label">{{ $type->name }}</label>
                                                        </div>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--====== End - Side Filters ======-->


            <!--====== Modal Section ======-->


            <!--====== Quick Look Modal ======-->
            <div class="modal fade" id="quick-look">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content modal--shadow">

                        <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-5">

                                    <!--====== Product Breadcrumb ======-->
                                    <div class="pd-breadcrumb u-s-m-b-30">
                                        <ul class="pd-breadcrumb__list">
                                            <li class="has-separator">

                                                <a href="index.hml">Home</a>
                                            </li>
                                            <li class="has-separator">

                                                <a href="shop-side-version-2.html">Electronics</a>
                                            </li>
                                            <li class="has-separator">

                                                <a href="shop-side-version-2.html">DSLR Cameras</a>
                                            </li>
                                            <li class="is-marked">

                                                <a href="shop-side-version-2.html">Nikon Cameras</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--====== End - Product Breadcrumb ======-->


                                    <!--====== Product Detail ======-->
                                    <div class="pd u-s-m-b-30">
                                        <div class="pd-wrap">
                                            <div id="js-product-detail-modal">
                                                <div>

                                                    <img class="u-img-fluid" src="images/product/product-d-1.jpg"
                                                        alt="">
                                                </div>
                                                <div>

                                                    <img class="u-img-fluid" src="images/product/product-d-2.jpg"
                                                        alt="">
                                                </div>
                                                <div>

                                                    <img class="u-img-fluid" src="images/product/product-d-3.jpg"
                                                        alt="">
                                                </div>
                                                <div>

                                                    <img class="u-img-fluid" src="images/product/product-d-4.jpg"
                                                        alt="">
                                                </div>
                                                <div>

                                                    <img class="u-img-fluid" src="images/product/product-d-5.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="u-s-m-t-15">
                                            <div id="js-product-detail-modal-thumbnail">
                                                <div>

                                                    <img class="u-img-fluid" src="images/product/product-d-1.jpg"
                                                        alt="">
                                                </div>
                                                <div>

                                                    <img class="u-img-fluid" src="images/product/product-d-2.jpg"
                                                        alt="">
                                                </div>
                                                <div>

                                                    <img class="u-img-fluid" src="images/product/product-d-3.jpg"
                                                        alt="">
                                                </div>
                                                <div>

                                                    <img class="u-img-fluid" src="images/product/product-d-4.jpg"
                                                        alt="">
                                                </div>
                                                <div>

                                                    <img class="u-img-fluid" src="images/product/product-d-5.jpg"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--====== End - Product Detail ======-->
                                </div>
                                <div class="col-lg-7">

                                    <!--====== Product Right Side Details ======-->
                                    <div class="pd-detail">
                                        <div>

                                            <span class="pd-detail__name">Nikon Camera 4k Lens Zoom Pro</span>
                                        </div>
                                        <div>
                                            <div class="pd-detail__inline">

                                                <span class="pd-detail__price">$6.99</span>

                                                <span class="pd-detail__discount">(76% OFF)</span><del
                                                    class="pd-detail__del">$28.97</del>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                                <span class="pd-detail__review u-s-m-l-4">

                                                    <a href="{{ route('unit.show.user', $unit->id) }}">23
                                                        Reviews</a></span>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-detail__inline">

                                                <span class="pd-detail__stock">200 in stock</span>

                                                <span class="pd-detail__left">Only 2 left</span>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <span class="pd-detail__preview-desc">Deskripsi Properti Anda disini Deskripsi
                                                Properti Anda disini Deskripsi Properti Anda disini Deskripsi Properti Anda
                                                disini Deskripsi Properti Anda disini Deskripsi Properti Anda
                                                disiniDeskripsi Properti Anda disiniDeskripsi Properti Anda disiniDeskripsi
                                                Properti Anda disiniDeskripsi Properti Anda disiniDeskripsi Properti Anda
                                                disini</span>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-detail__inline">

                                                <span class="pd-detail__click-wrap"><i class="far fa-heart u-s-m-r-6"></i>

                                                    <a href="signin.html">Add to Wishlist</a>

                                                    <span class="pd-detail__click-count">(222)</span></span>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <div class="pd-detail__inline">

                                                <span class="pd-detail__click-wrap"><i
                                                        class="far fa-envelope u-s-m-r-6"></i>

                                                    <a href="signin.html">Email me When the price drops</a>

                                                    <span class="pd-detail__click-count">(20)</span></span>
                                            </div>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <ul class="pd-social-list">
                                                <li>

                                                    <a class="s-fb--color-hover" href="#"><i
                                                            class="fab fa-facebook-f"></i></a>
                                                </li>
                                                <li>

                                                    <a class="s-tw--color-hover" href="#"><i
                                                            class="fab fa-twitter"></i></a>
                                                </li>
                                                <li>

                                                    <a class="s-insta--color-hover" href="#"><i
                                                            class="fab fa-instagram"></i></a>
                                                </li>
                                                <li>

                                                    <a class="s-wa--color-hover" href="#"><i
                                                            class="fab fa-whatsapp"></i></a>
                                                </li>
                                                <li>

                                                    <a class="s-gplus--color-hover" href="#"><i
                                                            class="fab fa-google-plus-g"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="u-s-m-b-15">
                                            <form class="pd-detail__form">
                                                <div class="pd-detail-inline-2">
                                                    <div class="u-s-m-b-15">

                                                        <!--====== Input Counter ======-->
                                                        <div class="input-counter">

                                                            <span class="input-counter__minus fas fa-minus"></span>

                                                            <input
                                                                class="input-counter__text input-counter--text-primary-style"
                                                                type="text" value="1" data-min="1"
                                                                data-max="1000">

                                                            <span class="input-counter__plus fas fa-plus"></span>
                                                        </div>
                                                        <!--====== End - Input Counter ======-->
                                                    </div>
                                                    <div class="u-s-m-b-15">

                                                        <button class="btn btn--e-brand-b-2" type="submit">Lihat
                                                            Selengkapnya</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="u-s-m-b-15">

                                            <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
                                            <ul class="pd-detail__policy-list">
                                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                    <span>Buyer Protection.</span>
                                                </li>
                                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                    <span>Full Refund if you don't receive your order.</span>
                                                </li>
                                                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                                                    <span>Returns accepted if product not as described.</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--====== End - Product Right Side Details ======-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Quick Look Modal ======-->


            <!--====== Lihat Selengkapnya Modal ======-->
            <div class="modal fade" id="add-to-cart">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content modal-radius modal-shadow">

                        <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="success u-s-m-b-30">
                                        <div class="success__text-wrap"><i class="fas fa-check"></i>

                                            <span>Item is added successfully!</span>
                                        </div>
                                        <div class="success__img-wrap">

                                            <img class="u-img-fluid" src="images/product/electronic/product1.jpg"
                                                alt="">
                                        </div>
                                        <div class="success__info-wrap">

                                            <span class="success__name">Beats Bomb Wireless Headphone</span>

                                            <span class="success__quantity">Quantity: 1</span>

                                            <span class="success__price">$170.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="s-option">

                                        <span class="s-option__text">1 item (s) in your cart</span>
                                        <div class="s-option__link-box">

                                            <a class="s-option__link btn--e-white-brand-shadow"
                                                data-dismiss="modal">CONTINUE SHOPPING</a>

                                            <a class="s-option__link btn--e-white-brand-shadow" href="cart.html">VIEW
                                                CART</a>

                                            <a class="s-option__link btn--e-brand-shadow" href="checkout.html">PROCEED TO
                                                CHECKOUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====== End - Lihat Selengkapnya Modal ======-->
            <!--====== End - Modal Section ======-->
        </div>

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
        <script>
            // Dapatkan elemen checkbox berdasarkan ID
            const statusCheckboxes = document.querySelectorAll('input[name="status[]"]');
            const typeCheckboxes = document.querySelectorAll('input[name="types[]"]');


            statusCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    this.form.submit(); // Kirim form saat checkbox diubah
                });
            });

            typeCheckboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    this.form.submit(); // Kirim form saat checkbox diubah
                });
            });
        </script>

        <script>
            document.addEventListener('blur', function() {
                // Menangkap elemen input
                var inputMin = document.getElementById('inputMin');
                var inputMax = document.getElementById('inputMax');

                // Fungsi untuk memicu pencarian
                function performSearch() {
                    var minPrice = inputMin.value;
                    var maxPrice = inputMax.value;

                    // Lakukan redirect atau AJAX request ke URL pencarian dengan parameter min_price dan max_price
                    var searchURL = '{{ route('unit.search.user') }}' + '?min_price=' + minPrice + '&max_price=' +
                        maxPrice;
                    window.location.href = searchURL;
                }

                // Menambahkan event listener pada input
                inputMin.addEventListener('blur', function() {
                    performSearch();
                });

                inputMax.addEventListener('blur', function() {
                    performSearch();
                });
            });
        </script>



        <script src="/css/Lib/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
        <script src="/css/Lib/assets/vendor/jquery-circle-progress/circle-progress.min.js"></script>
        <script src="/css/Lib/assets/vendor/popper/popper.min.js"></script>
        <script src="/css/Lib/assets/vendor/WOW-master/dist/wow.min.js"></script>
        <script src="/css/Lib/assets/vendor/loadscreen/js/ju-loading-screen.js"></script>
        <script src="/css/Lib/assets/vendor/range-slider/range-slider.js"></script>
        <script src="/css/Lib/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="/css/Lib/assets/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
        <script src="/css/Lib/assets/vendor/timeline/jquery.timelify.js"></script>
        <script src="/css/Lib/assets/vendor/owlcarousel/owl.carousel.min.js"></script>
        <script src="/css/Lib/assets/custom/js/custom.js"></script>

    </body>

    </html>
@endsection
