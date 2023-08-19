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

        <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{ config('midtrans.client_key') }}"></script>
    </head>

    <body>


        <div class="fables-header fables-after-overlay">
            <div class="container">
                <h2 class="fables-page-title fables-second-border-color">Konfimasi Pembayaran</h2>
            </div>
        </div>
        <div class="fables-light-gary-background">
            <div class="container">
                <div aria-label="breadcrumb">
                    <ol class="fables-breadcrumb breadcrumb px-0 py-3">
                        <li class="breadcrumb-item"><a href="#" class="fables-second-text-color"
                                style="text-decoration: none;">Langganan</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="text-decoration: none;">Konfirmasi
                            Pembayaran</li>
                    </ol>
                </div>
            </div>
        </div>

        <section class="order_details section_gap">
            <div class="container">
                @if ($order->payment_status == 1)
                    {{-- <button class="btn btn-primary" id="pay-button">Pay Now</button> --}}
                @else
                    <h3 class="title_confirmation">Terima kasih telah melakukan pembelian langganan kami.</h3>
                @endif

                <div class="row order_d_inner">
                    <div class="col-lg-4">
                        <div class="details_item">
                            <h4>Info Pembayaran</h4>
                            <ul class="list">
                                <li><a href="#"><span>Nama</span> : {{ auth()->user()->name }}</a></li>
                                <li><a href="#"><span>Tanggal</span> : {{ $order->created_at->todatestring() }}</a>
                                </li>
                                <li><a href="#"><span>Total</span> : Rp {{ $order->total_price }}</a></li>
                                {{-- <li><a href="#"><span>Payment method</span> : Gopay</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-lg-4">
					<div class="details_item">
						<h4>Alamat</h4>
						<ul class="list">
							<li><a href="#"><span>Perusahaan</span> : PT Properti Indonesia</a></li>
							<li><a href="#"><span>Provinsi</span> : Jawa Barat</a></li>
							<li><a href="#"><span>Kota</span> : Jakarta</a></li>
							<li><a href="#"><span>Kecamatan</span> : Jakarta Pusat</a></li>
							<li><a href="#"><span>Desa</span> : Menteng</a></li>
						</ul>
					</div>
				</div> --}}
                </div>
                <div class="order_details_table">
                    {{-- @foreach ($order as $order) --}}
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <h2>Detail Pembayaran</h2>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Langganan</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>{{ $order->invoice }}</p>
                                        </td>
                                        <td>
                                            <h6>
                                                @switch($order->payment_status)
                                                    @case('1')
                                                        Menunggu pembayaran
                                                    @break

                                                    @case('2')
                                                        Sudah dibayar
                                                    @break

                                                    @case('3')
                                                        Kadaluarsa
                                                    @break

                                                    @case('4')
                                                        Batal
                                                    @break

                                                    @default
                                                        Undefined
                                                @endswitch
                                            </h6>
                                        </td>
                                        <td>
                                            <p>Rp. {{ $order->total_price }}</p>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <h4>Total</h4>
                                        </td>
                                        <td>
                                            <h5></h5>
                                        </td>
                                        <td>
                                            <p>Rp. {{ $order->total_price }}</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group text-end">
                            <a type="button" class="btn btn-warning" href="{{ route('developer.dashboard') }}">Back</a>
                            {{-- <a type="button" class="btn btn-primary"
						href="{{ route('order.edit', $order->id) }}">Edit</a> --}}
                            @if ($order->payment_status == 1)
                                <button class="btn btn-primary" id="pay-button">Pay Now</button>
                            @else
                                Payment successful
                            @endif
                        </div>
                    </form>
                    {{-- @endforeach --}}
                </div>
            </div>
        </section>

        <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}">
        </script>
        <script>
            const payButton = document.querySelector('#pay-button');
            payButton.addEventListener('click', function(e) {
                e.preventDefault();

                snap.pay('{{ $snapToken }}', {
                    // Optional
                    onSuccess: function(result) {
                        /* You may add your own js here, this is just example */
                        // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        console.log(result)
                    },
                    // Optional
                    onPending: function(result) {
                        /* You may add your own js here, this is just example */
                        // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        console.log(result)
                    },
                    // Optional
                    onError: function(result) {
                        /* You may add your own js here, this is just example */
                        // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                        console.log(result)
                    }
                });
            });
        </script>


    </body>

    </html>
@endsection
