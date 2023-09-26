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

                                                                {{-- <div class="product-m__add-cart">

                                                                    <a class="btn--e-brand" data-modal="modal"
                                                                        data-modal-id="#add-to-cart">Lihat Selengkapnya</a>
                                                                </div> --}}
                                                            </div>
                                                            <div class="product-m__content">
                                                                <div class="product-m__category">

                                                                    <a
                                                                        href="shop-side-version-2.html">{{ $unit->properties->types->name }}</a>

                                                                    <a
                                                                        href="shop-side-version-2.html">{{ $unit->statuses->pluck('name')->implode(' ') }}</a>
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
                                                                        <form
                                                                            action="{{ route('favorite.add', $unit->id) }}"
                                                                            method="POST">
                                                                            @csrf

                                                                            <button class="btnfavfil"
                                                                                style="cursor: pointer"
                                                                                data-tooltip="tooltip" type="submit"
                                                                                data-placement="top"
                                                                                title="Tambahkan Ke Favorite">
                                                                                <i class="fas fa-heart"></i></button>

                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endforeach


                                        </div>
                                    </div>
                                    <div class="u-s-p-y-60 pagination">

                                        <!--====== Pagination ======-->
                                        <ul class="pagination shop-p__pagination">
                                            @php
                                                $filteredUnitsPagination = $filteredUnits->appends(request()->query());
                                            @endphp
                                            <li
                                                class="page-item{{ $filteredUnitsPagination->onFirstPage() ? ' disabled' : '' }}">
                                                <a class="page-link"
                                                    href="{{ $filteredUnitsPagination->previousPageUrl() }}"
                                                    rel="prev">Previous</a>
                                            </li>

                                            {{-- Pagination Links --}}
                                            @php
                                                $numPagesToShow = 5;
                                                $half = floor($numPagesToShow / 2);
                                                $start = max($filteredUnitsPagination->currentPage() - $half, 1);
                                                $end = min($start + $numPagesToShow - 1, $filteredUnitsPagination->lastPage());
                                            @endphp

                                            @for ($page = $start; $page <= $end; $page++)
                                                <li
                                                    class="page-item{{ $page == $filteredUnitsPagination->currentPage() ? ' active' : '' }}">
                                                    <a class="page-link"
                                                        href="{{ $filteredUnitsPagination->url($page) }}">{{ $page }}</a>
                                                </li>
                                            @endfor

                                            {{-- Next Page Link --}}
                                            <li
                                                class="page-item{{ !$filteredUnitsPagination->hasMorePages() ? ' disabled' : '' }}">
                                                <a class="page-link" href="{{ $filteredUnitsPagination->nextPageUrl() }}"
                                                    rel="next">Next</a>
                                            </li>


                                        </ul>
                                        {{-- {{$filteredUnits->links()}} --}}
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
                                                id="post-search" placeholder="Search" name="search"
                                                value="{{ request('search') }}">

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
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="types{{ $type->id }}" name="types[]"
                                                                value="{{ $type->id }}"
                                                                {{ in_array($type->id, request('types', [])) ? 'checked' : '' }}>
                                                            <label class="form-check-label">{{ $type->name }}</label>
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
