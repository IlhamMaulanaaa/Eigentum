@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/pages/subscribe.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    </head>

    <body>
        <div class="card">
            <div class="left-side">
                @foreach ($subscribes as $key => $subscribe)
                    <div class="title">
                        <h2>{{ $subscribe->title }}</h2>
                    </div>
                    <div class="info">
                        <p>{{ $subscribe->description }}</p>
                    </div>
                    <div class="feature-1">
                        <i class="fa-solid fa-check"></i>
                        <span class="feat-1"><b>Visibilitas Luas: </b>{{ $subscribe->feature_1 }}</span>
                    </div>
                    <div class="feature-2">
                        <i class="fa-solid fa-check"></i>
                        <span class="feat-2"><b>Pemasaran Efektif: </b>{{ $subscribe->feature_2 }}</span>

                    </div>
                    <div class="feature-4">
                        <i class="fa-solid fa-check"></i>
                        <span class="feat-4"><b>Kemudahan Kelola Properti: </b>{{ $subscribe->feature_4 }}</span>

                    </div>
                    <div class="feature-3">
                        <i class="fa-solid fa-check"></i>
                        <span class="feat-3"><b>Tampilan Properti yang Menarik: </b>{{ $subscribe->feature_3 }}</span>
                    </div>
                    <div class="cta-langganan">
                        <form action="{{ route('subscribeid.store', $subscribe->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="btn-primary">Langganan</button>
                        </form>
                        <div class="price-sec">
                            <span class="dollar">Rp.</span>
                            <span class="price">{{ number_format($subscribe->price, 0, ',', '.') }}</span>
                            <span class="decimal">/bln</span>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="right-side">
                <img src="/assets/pages/langganan/tuturu.png" alt="" style="height: 100%; width: 100%;">
            </div>
        </div>
    </body>

    </html>
@endsection
