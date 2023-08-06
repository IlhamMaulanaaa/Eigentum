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
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Feature</th>
                                <th scope="col">Feature</th>
                                <th scope="col">Feature</th>
                                <th scope="col">Feature</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($subscribes->count())
                                @foreach ($subscribes as $key => $subscribe)
                                    <tr align="center">
                                        <td class="text-start">{{ ++$key }}</td>
                                        <td class="text-start">{{ $subscribe->title }}</td>
                                        <td class="text-start">{{ Str::limit($subscribe->description, 20) }}</td>
                                        <td class="text-start">Rp. {{ $subscribe->price }}</td>
                                        <td class="text-start">{{ $subscribe->feature_1 }}</td>
                                        <td class="text-start">{{ $subscribe->feature_2 }}</td>
                                        <td class="text-start">{{ $subscribe->feature_3 }}</td>
                                        <td class="text-start">{{ $subscribe->feature_4 }}</td>
                                        <td class="text-end">
                                            <a type="button" class="btn btn-outline-warning"
                                                href="{{ route('subscribe.edit', $subscribe->id) }}">Detail</a>


                                        </td>
                                    </tr>
                                @endforeach
                                {{-- @elseif ($subscribes->count())
                                    <div class="form-group">
                                        <a type="button" class="btn btn-warning" href="/admin/subscribe/all">Back</a>
                                    </div> --}}
                            @else
                                <tr>
                                    <td colspan="100" align="center">Data Tidak Ditemukan</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div>
                        {{-- {{ $subscribes->links() }} --}}
                    </div>
                </div>
            </div>
        </div>

        
    </body>

    </html>
@endsection
