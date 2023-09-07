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
        <link rel="stylesheet" href="/css/Lib/fix/css/vendor.css">

        <!--====== Utility-Spacing ======-->
        <link rel="stylesheet" href="/css/Lib/fix/css/utility.css">

        <!--====== App ======-->
        <link href="/css/Lib/fix/css/app.css" rel="stylesheet">
    </head>

    <body class="config">
        <!-- Start Header -->
        <div class="fables-header fables-after-overlay">
            <div class="container">
                <h2 class="fables-page-title fables-second-border-color">Filter Unit</h2>
            </div>
        </div>
        <!-- /End Header -->

        <!-- Start Breadcrumbs -->
        <div class="fables-light-gary-background">
            <div class="container">
                <div aria-label="breadcrumb">
                    <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                        <li class="breadcrumb-item"><a href="/beranda" class="fables-second-text-color"
                                style="text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="text-decoration: none;">Filter
                            Unit</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /End Breadcrumbs -->

        <!-- Start page content -->
        <div class="container">
            <div class="row my-4 my-md-5">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="fables-store-search mb-4">
                        <form action="{{ route('unit.search.user') }}" method="GET" role="search">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search name.."
                                    aria-label="Search username" aria-describedby="basic-addon2"
                                    value="{{ request('search') }}">
                                <button class="btn btn-outline-secondary" id="searchButton"
                                    type="submit">Search</button>
                            </div>
                            <br>
                            <div class="col-md-2">
                                <label>Status:</label>
                                @foreach ($statuses as $status)
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="status{{ $status->id }}"
                                            name="status[]" value="{{ $status->id }}"
                                            {{ in_array($status->id, request('status', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label">{{ $status->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-md-2">
                                <label>Type</label>
                                @foreach ($types as $type)
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="type{{ $type->id }}"
                                            name="types[]" value="{{ $type->id }}"
                                            {{ in_array($type->id, request('types', [])) ? 'checked' : '' }}>
                                        <label class="form-check-label">{{ $type->name }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="rage-slider">
                                <label>Price</label>
                                <div class="price-input">
                                    <div class="field">
                                        <span>Rp.</span>
                                        <input type="number" name="min_price" placeholder="Min" class="input-min"
                                            id="inputMin" value="{{ request('min_price') }}">
                                    </div>
                                    <div class="field">
                                        {{-- <span></span> --}}
                                        <input type="number" name="max_price" placeholder="Max" class="input-max"
                                            id="inputMax" value="{{ request('max_price') }}">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    {{-- <h2 class="col-md-12">Kategori
                        Properti</h2>
                    <ul class="nav fables-forth-text-color fables-forth-before fables-store-left-list">
                        <li><input type="checkbox" id="Rumah">
                            <label style="margin-left: 5px;" for="rumah">Rumah</label>
                        </li>
                        <li><input type="checkbox" id="ruko">
                            <label style="margin-left: 5px;" for="ruko">Ruko</label>
                        </li>
                        <li><input type="checkbox" id="villa"><label style="margin-left: 5px;"
                                for="villa">Villa</label></li>
                    </ul>
                    <label style="margin-left: 40px;" for="kamarTidur">Kamar Tidur</label>

                    <label style="margin-left: 45px;" for="kamarmandi">Kamar Mandi</label>
                    <div class="col-12 col-lg-4">
                        <form class="form-container" style="margin-left: 0px;">
                            <div class="form-group mb-0">
                                <select id="kamarTidur" class="form-control rounded-0">
                                    <option value="" selected>Kamar Tidur</option>
                                    <option value="harga-terendah">1</option>
                                    <option value="harga-tertinggi" selected>2</option>
                                    <option value="luas-terkecil">3</option>
                                    <option value="luas-terbesar">4</option>
                                </select>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div class="form-group mb-0">
                                <select id="kamarMandi" class="form-control rounded-0">
                                    <option value="" selected>Kamar Mandi</option>
                                    <option value="harga-terendah" selected>1</option>
                                    <option value="harga-tertinggi">2</option>
                                    <option value="luas-terkecil">3</option>
                                    <option value="luas-terbesar">4</option>
                                </select>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                        </form>
                    </div> --}}
                    {{-- <button type="submit"
                        class="btn btn-block fables-second-background-color rounded-0 white-color white-color-hover p-2 font-15 "
                        style="color: #000; margin-bottom: 0;">Filter</button> --}}

                    {{-- <h2 class="font-16 semi-font fables-forth-text-color fables-light-gary-background  p-3 my-4">Top
                        Properti</h2>
                    <div class="row mb-3">
                        <div class="col-4 pr-0">
                            <a href="#"><img src="/assets/pages/Home/unit7.jpg" alt="" class="w-100"></a>
                        </div>
                        <div class="col-8">
                            <a href="#"
                                class="fables-main-text-color font-14 semi-font fables-second-hover-color store-card-text"
                                style="text-decoration: none;">Perumahan Inti Sari</a>
                            <p class="font-weight-bold fables-second-text-color ">Rp. 280 JT</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 pr-0">
                            <a href="#"><img src="/assets/pages/Home/unit1.jpg" alt="" class="w-100"></a>
                        </div>
                        <div class="col-8">
                            <a href="#"
                                class="fables-main-text-color font-14 semi-font fables-second-hover-color store-card-text"
                                style="text-decoration: none;">Perumahan Inti Sari</a>
                            <p class="font-weight-bold fables-second-text-color ">Rp. 350 JT</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 pr-0">
                            <a href="#"><img src="/assets/pages/Home/unit2.jpg" alt="" class="w-100"></a>
                        </div>
                        <div class="col-8">
                            <a href="#"
                                class="fables-main-text-color font-14 semi-font fables-second-hover-color store-card-text"
                                style="text-decoration: none;">Perumahan Inti Sari</a>
                            <p class="font-weight-bold fables-second-text-color ">Rp. 280 JT</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 pr-0">
                            <a href="#"><img src="/assets/pages/Home/unit3.jpg" alt="" class="w-100"></a>
                        </div>
                        <div class="col-8">
                            <a href="#"
                                class="fables-main-text-color font-14 semi-font fables-second-hover-color store-card-text"
                                style="text-decoration: none;">Perumahan Inti Sari</a>
                            <p class="font-weight-bold fables-second-text-color ">Rp. 350 JT</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 pr-0">
                            <a href="#"><img src="/assets/pages/Home/unit4.jpg" alt="" class="w-100"></a>
                        </div>
                        <div class="col-8">
                            <a href="#"
                                class="fables-main-text-color font-14 semi-font fables-second-hover-color store-card-text"
                                style="text-decoration: none;">Perumahan Inti Sari</a>
                            <p class="font-weight-bold fables-second-text-color ">Rp. 280 JT</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-4 pr-0">
                            <a href="#"><img src="/assets/pages/Home/unit5.jpg" alt="" class="w-100"></a>
                        </div>
                        <div class="col-8">
                            <a href="#"
                                class="fables-main-text-color font-14 semi-font fables-second-hover-color store-card-text"
                                style="text-decoration: none;">Perumahan Inti Sari</a>
                            <p class="font-weight-bold fables-second-text-color ">Rp. 350 JT</p>
                        </div>
                    </div> --}}
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="row">
                        @foreach ($filteredUnits as $unit)
                            <div class="col-12 col-sm-6 col-lg-3 fables-product-block" style="margin-bottom: 20px;">
                                <div class="property-item rounded overflow-hidden"
                                    style="margin-right: 0; width: 240px; border: 1px solid #c0c0c0;">
                                    <div class="position-relative overflow-hidden">
                                        <a href="{{ route('unit.show.user', $unit->id) }}" class="stretched-link"></a>
                                        <img class="img-fluid" style="width: 300px; height:180px;"
                                            src="{{ asset('storage/' . $unit->image) }}" alt="">
                                        <div class=" rounded text-white position-absolute start-0 top-0 m-3 py-1 px-2"
                                            style="background-color: #0C40E8">
                                            @foreach ($unit->statuses as $status)
                                                <li>
                                                    {{ $status->name }}
                                                </li>
                                            @endforeach
                                        </div>
                                        <div class="bg-white rounded-top  position-absolute start-0 bottom-0 mx-3 pt-1 px-2"
                                            style="color: #0C40E8">{{ $unit->properties->types->name }}</div>
                                    </div>
                                    <div class="p-0 pb-0" style="margin-left: 10px;">
                                        <h5 class="mb-1 mt-3">Rp. {{ $unit->price }}</h5>
                                        <p>{{ $unit->title }}</p>
                                        <p><i
                                                class="fa fa-map-marker-alt me-2"></i>{{ implode(', ',$unit->properties->regencies()->pluck('name')->toArray()) }}
                                        </p>
                                    </div>
                                    <div class="d-flex border-top" style="width: 240px;">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bath me-2"></i>{{ $unit->specifications->bathroom }}</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-bed me-2"></i>{{ $unit->specifications->bedroom }}</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-ruler-combined me-2"></i>{{ $unit->specifications->surface_area }}</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-square me-2"></i>{{ $unit->specifications->building_area }}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- <div aria-label="Page-navigation">
                    {{ $filteredUnits->links() }}
                </div> --}}
            </div>
        </div>
        </div>
        <!-- /End page content -->

        {{-- <script>
            // Fungsi untuk menambahkan format angka dengan tanda titik
            function formatNumberWithCommas(number) {
                return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }

            // Ambil elemen input dengan id "inputMin" dan "inputMax"
            const inputMin = document.getElementById("inputMin");
            const inputMax = document.getElementById("inputMax");

            // Fungsi untuk mengatur nilai input dengan format angka tanda titik saat user mengetik
            function updateValueWithCommas(event) {
                const input = event.target;
                const valueWithoutCommas = input.value.replace(/\./g, ""); // Hilangkan tanda titik dari nilai saat ini
                const formattedValue = formatNumberWithCommas(valueWithoutCommas);
                input.value = formattedValue;
            }

            // Tambahkan event listener untuk event "input"
            inputMin.addEventListener("input", updateValueWithCommas);
            inputMax.addEventListener("input", updateValueWithCommas);
        </script> --}}

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

        {{-- <script>
            document.addEventListener('DOMContentLoaded', function() {
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
                inputMin.addEventListener('input', function() {
                    performSearch();
                });

                inputMax.addEventListener('input', function() {
                    performSearch();
                });
            });
        </script> --}}



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
