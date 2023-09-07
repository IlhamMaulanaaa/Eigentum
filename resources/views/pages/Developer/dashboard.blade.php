@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
        <title>Responsive Profile Page</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <!-- CSS -->
        <link rel="stylesheet" href="/css/agent/detail.css">
        <script src="/js/agent/detail.js" defer></script>
        <style>
            .tambah {
                justify-content: flex-end;
                margin-left: 1700px;
                margin-bottom: 100px;
                margin-top: -100px;
            }

            .sticky-button {

                bottom: 20px;
                /* Jarak dari bawah */
                right: 20px;
                /* Jarak dari kanan */
                width: 50px;
                height: 50px;
                background-color: #3498db;
                color: white;
                border: none;
                border-radius: 50%;
                cursor: pointer;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 20px;
                transition: background-color 0.3s;
            }

            .sticky-button:hover {
                background-color: #2980b9;
            }

            .options {
                margin-top: -220px;
                bottom: 90px;
                /* Jarak dari bawah */
                right: 20px;
                /* Jarak dari kanan */
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
                display: none;
                flex-direction: column;
                align-items: flex-start;
                padding: 10px;

                font-size: 16px;
            }

            .options.show {
                display: flex;
            }

            .option {
                padding: 5px 10px;
                cursor: pointer;
                transition: background-color 0.3s;
                display: flex;
                align-items: center;
            }

            .option i {
                margin-right: 10px;
            }

            .option:hover {
                background-color: #f2f2f2;
            }
        </style>

    </head>

    <body>
        <div class="header__wrapper2">
            <div class="img_detailagent"></div>
            <div class="cols__container">
                <div class="left__col">
                    <div class="img__container">
                        <img src="{{ asset('storage/' . $developer->face) }}" alt="Bambang" />
                        <span></span>
                    </div>
                    <h2>{{ auth()->user()->name }}</h2>
                    <p style="color: #000">{{ $developer->company }}</p>
                    <p>{{ $developer->company_company }}</p>

                    <ul class="about" style="">
                        <li class="dashboardli"><span>3</span> Aktif</li>
                        <li class="dashboardli">
                            <span>{{ $developer->properties->flatMap->units->flatMap->statuses->where('name', 'Dijual')->count() }}

                            </span> Dijual
                        </li>
                        <li class="dashboardli">
                            <span>{{ $developer->properties->flatMap->units->flatMap->statuses->where('name', 'Disewa')->count() }}
                            </span> Disewa
                        </li>
                    </ul>

                    <div class="content">
                        <p>Pengembangan proyek perumahan, ruko, apartemen, dan villa</p>

                        <ul class="about" style="text-align: center; justify-content:center">
                            <li class="dashboardli"><i class="fab fa-twitter"></i></li>
                            <li class="dashboardli"><i class="fab fa-instagram"></i></li>
                            <li class="dashboardli"><i class="fab fa-facebook"></i></li>
                            <li class="dashboardli"><i class="fab fa-whatsapp"></i></li>
                        </ul>
                    </div>
                    <a href="{{ route('property.create.developer') }}">
                        <div class="btnAddProperty btn btn-primary border border-success col-md-10 mt-2">Tambah Property
                        </div>
                    </a>
                </div>
                <div class="right__col">
                    <!-- Images Filter Buttons Section -->
                    <div class=" row mt-5">
                        <div class="col-12" id="filter-buttons">
                            <button class="btn mb-2 me-1 active" data-filter="all">Semua</button>
                            {{-- <button class="btn mb-2 mx-1" data-filter="aktif">Aktif</button> --}}
                            {{-- <button class="btn mb-2 mx-1" data-filter="pasif">Pasif</button> --}}
                            <button class="btn mb-2 mx-1" data-filter="dijual">Dijual</button>
                            <button class="btn mb-2 mx-1" data-filter="Disewa">DIsewa</button>
                            <button class="btn mb-2 mx-1" data-filter="disewa">penawaran</button>
                            <button class="btn mb-2 mx-1" data-filter="disewa">History</button>
                        </div>
                    </div>


                    <!-- <button class="btn-ajukan mb-2 float-end" id="ajukan-button" style="margin-top: -43px; background-color: #0C40E8; color: #fff; cursor: auto;">Ajukan</button> -->

                    <!-- Filterable Images / Cards Section -->
                    <div class="card-detailagent row px-2 mt-4 gap-3" style="width: 770px; margin-bottom: 60px;"
                        id="filterable-cards">
                        @foreach ($developer->units as $property)
                            <div class="card p-0" data-name="disewa">
                                <a href="{{ route('property.show.developer', $property->id) }}" class="stretched-link"></a>
                                <img style="height: 180px;" src="{{ asset('storage/' . $property->image) }}"
                                    alt="img" />
                                <div class="card-body">
                                    <h6 class="card-title">
                                        {{ $property->title }}</h6>
                                </div>
                                <div class="labeledit" style="z-index: 100">
                                    <a class="linkedit" href="{{ route('property.edit.developer', $property->id) }}"><i
                                            class="fas fa-edit edit-icon"></i></a>
                                </div>
                                <div class="labeldelete" style="z-index: 100">
                                    <form action="{{ route('property.destroy.developer', $property->id) }}" method="get"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="linkdelete"
                                            onclick="return confirm('Apakah Anda Yakin {{ $property->id }} ')"><i
                                                class="fas fa-trash delete-icon"></i></button>
                                        {{-- <a class="linkdelete" href=""><i class="fas fa-trash delete-icon"></i></a> --}}
                                    </form>
                                </div>
                                <span class="label sold">Terjual</span>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>


        </div>
        <div class="tambah" style="z-index: 200">

            <a href="{{ route('property.create.developer') }}">
                <button id="addButton" class="sticky-button">+</button>
                <p style="margin-left: -30px; color:#000; margin-top:10px;">Tambah Properti</p>
            </a>

        </div>
        <script>
            const addButton = document.getElementById("addButton");
            const options = document.getElementById("options");

            addButton.addEventListener("click", function() {
                options.classList.toggle("show");
            });
        </script>
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
        <script>
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('89c847f5725f13be7343', {
                cluster: 'ap1'
            });

            var channel = pusher.subscribe('my-channel');
            channel.bind('my-event', function(data) {
                alert(JSON.stringify(data));
            });
        </script>

    </body>

    </html>
@endsection
