@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Eigentum</title>
        <!-- css -->
        <link href="/css/pages/notification.css" rel="stylesheet">
        <!-- icons -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>



    </head>

    <body>
        <div class="abcd1">
            <div class="wrapper" style="margin-top: 90px;">
                <div class="top">
                    <div class="day">
                        Hari Ini
                    </div>
                    <div class="date">

                    </div>
                </div>
                <header>
                    <div class="notification_box">
                        <h2 class="title">Histori</h2>
                        <span id="notifications">{{ $filteredUnits->count() }}</span>
                    </div>
                </header>

                <section class="hero">
                    @foreach ($developerProperties as $property)
                        @foreach ($property->units as $unit)
                            @if ($unit->statuscode == 'terjual')
                                <div class="notification_card unseen">
                                    <img id="image1" src="/assets/pages/home/apartemen1.jpg" alt="">
                                    <div class="notification_info">
                                        <p class="user_activity">
                                            <strong style="margin-right: 5px;">{{ $unit->title }}</strong>
                                        </p>
                                        <p class="user_activity" style="margin-bottom: 10px;">
                                            <strong style="margin-right: 5px;">Rp. {{ $unit->price }}</strong>
                                        </p>
                                        <p class="time">
                                            {{-- Calculate the time difference and format it --}}
                                            {{ \Carbon\Carbon::parse($unit->updated_at)->diffForHumans() }}
                                        </p>
                                        <p class="seen">
                                            @foreach ($unit->statuses as $status)
                                                {{ $status->name }}
                                            @endforeach
                                        </p>
                                        <p class="perusahaan">{{ $property->title }}</p>
                                    </div>
                                    <div class="bell"><i class='bx bx-history'></i></div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach


                </section>
            </div>
        </div>

        <!-- script link -->
        <script src="/js/pages/notification.js"></script>
    </body>

    </html>
@endsection
