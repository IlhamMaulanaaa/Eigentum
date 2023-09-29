@extends('admin.layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{ config('midtrans.client_key') }}"></script>
        <title>Document</title>
    </head>

    <body>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <h2 class="card-title fs-2 text-primary col-md-8 text-uppercase">
                            {{ $tables }}
                        </h2>
                        {{-- <div class="col-md-4 text-end px-0">
                        <a type="button" class="btn btn-primary" href="create">Tambah Data Baru</a>
                    </div> --}}
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table mb-2 ">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Invoive</th>
                                <th scope="col">Number</th>
                                <th scope="col">Price</th>
                                <th scope="col">Status</th>
                                <th scope="col">User</th>
                                <th scope="col">Subscribe</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($orders->count())
                                @foreach ($orders as $key => $order)
                                    <tr align="center">
                                        <td class="text-start">{{ ++$key }}</td>
                                        <td class="text-start">{{ $order->invoice }}</td>
                                        <td class="text-start">{{ $order->number }}</td>
                                        <td class="text-start">Rp. {{ $order->total_price }}</td>
                                        <td class="text-start">
                                            @switch($order->payment_status)
                                                @case('1')
                                                    <p>Menunggu pembayaran</p>
                                                @break

                                                @case('2')
                                                    <p>Sudah dibayar</p>
                                                @break

                                                @case('3')
                                                    <p>Kadaluarsa</p>
                                                @break

                                                @case('4')
                                                    <p>Batal</p>
                                                @break

                                                @default
                                                    <p>Undefined</p>
                                            @endswitch
                                        </td>
                                        <td class="text-start">{{ $order->user->name }}</td>
                                        <td class="text-start">{{ $order->subscribe->title }}</td>
                                        <td class="text-end">
                                            <a type="button" class="btn btn-outline-warning"
                                                href="{{ route('order.show', $order->id) }}">Detail</a>
                                        </td>
                                    </tr>
                                @endforeach
                                {{-- @elseif ($orders->count())
                                    <div class="form-group">
                                        <a type="button" class="btn btn-warning" href="/admin/order/all">Back</a>
                                    </div> --}}
                            @else
                                <tr>
                                    <td colspan="100" align="center">Data Tidak Ditemukan</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div>
                        {{-- {{ $orders->links() }} --}}
                    </div>
                </div>
            </div>
        </div>


    </body>

    </html>
@endsection
