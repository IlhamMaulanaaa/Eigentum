@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en" dir="ltr">

    <head>
        <meta charset="UTF-8">
        <title>Eigentum</title>
        <link rel="stylesheet" href="/css/pages/subscribe.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <div class="oii">
            <div class="content">
                @foreach ($subscribes as $key => $subscribe)
                    <div class="card one">
                        <div class="top">
                            <div class="title">{{ $subscribe->title }}</div>
                            <div class="price-sec">
                                <span class="dollar">Rp.</span>
                                <span class="price">{{ $subscribe->price }}</span>
                                <span class="decimal">/bln</span>
                            </div>
                        </div>
                        <div class="info">{{ $subscribe->feature_1 }}</div>
                        <div class="details">
                            <div class="one">
                                <span>{{ $subscribe->feature_1 }}</span>
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="one">
                                <span>{{ $subscribe->feature_2 }}</span>
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="one">
                                <span>{{ $subscribe->feature_3 }}</span>
                                <i class="fas fa-times"></i>
                            </div>
                            <div class="one">
                                <span>{{ $subscribe->feature_4 }}</span>
                                <i class="fas fa-times"></i>
                            </div>
                            <a href="{{ route('subscribe.lihat', $subscribe->id) }}">
                                <button class="btn-primary">Langganan</button>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </body>

    </html>
@endsection
