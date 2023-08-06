@extends('admin.layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>


        <div class="container">
            <div class="row">
                <div class="col-ad-12">
                    <h3 class=" text-dark">Detail Order</h3>
                    <br>
                    <div class="card bg-light">
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="form-label">Invoice</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $order->invoice }}" readonly disabled>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="" class="form-label">Number</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $order->number }}" readonly disabled>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $order->total_price }}" readonly disabled>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="" class="form-label">User</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $order->user->name }}" readonly disabled>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="" class="form-label">Status</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="@switch($order->payment_status)
                                        @case('1')Menunggu pembayaran
                                            @break
                                        @case('2')Sudah dibayar
                                            @break
                                        @case('3')Kadaluarsa
                                            @break
                                        @case('4')Batal
                                            @break
                                        @default Undefined
                                    @endswitch"
                                        readonly disabled>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="" class="form-label">Subscribe</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $order->subscribe->title }}" readonly disabled>
                                </div>
                                <br>
                                <div class="form-group text-end">
                                    <a type="button" class="btn btn-warning" href="{{ route('order.index') }}">Back</a>
                                    {{-- <a type="button" class="btn btn-primary"
                                        href="{{ route('order.edit', $order->id) }}">Edit</a> --}}
                                    @if ($order->payment_status == 1)
                                        <button class="btn btn-primary" id="pay-button">Pay Now</button>
                                    @else
                                        Payment successful
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
