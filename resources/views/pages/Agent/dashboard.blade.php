@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
        <title></title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
        <!-- CSS -->
        <link rel="stylesheet" href="/css/agent/detail.css">
        <script src="/js/agent/detail.js" defer></script>
    </head>

    <body>
        <div class="header__wrapper2">
            <div class="img_detailagent"></div>
            <div class="cols__container">
                <div class="left__col">
                    <div class="img__container">
                        <img src="{{ asset('storage/' . $agent->face) }}" />
                        <span></span>
                    </div>

                    <h2>{{ auth()->user()->name }}</h2>
                    <p style="color: #000">{{ auth()->user()->email }}</p>


                    <ul class="about">
                        <li><span>{{ $agent->properties->flatMap->units->flatMap->statuses->where('name', 'Dijual')->count() }}</span>
                            Dijual
                        </li>
                        <li><span>{{ $agent->properties->flatMap->units->flatMap->statuses->where('name', 'Disewa')->count() }}</span>
                            Disewa
                        </li>
                        {{-- <li><span>20</span>Klient</li> --}}
                    </ul>

                    <div class="content">
                        <p>{{ implode(', ', $agent->regencies()->pluck('name')->toArray()) }}</p>
                        <p>{{ $agent->address }}</p>
                        <p>{{ $agent->telp }}</p>
                        <ul class="abc">
                            <li><i class="fab fa-twitter"></i></li>
                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-whatsapp"></i>
                        </ul>
                    </div>
                </div>
                <div class="right__col">
                    <!-- Images Filter Buttons Section -->
                    <div class=" row mt-5">
                        <div class="col-12" id="filter-buttons">
                            <button class="btn mb-2 me-1 active" data-filter="all">Semuanya</button>
                            <button class="btn mb-2 mx-1" data-filter="apartemen">Apartemen</button>
                            <button class="btn mb-2 mx-1" data-filter="rumah">Rumah</button>
                            <button class="btn mb-2 mx-1" data-filter="ruko">Ruko</button>
                            <button class="btn mb-2 mx-1" data-filter="villa">Villa</button>
                        </div>
                    </div>

                    <!-- <button class="btn-ajukan mb-2 float-end" id="ajukan-button" style="margin-top: -43px; background-color: #0C40E8; color: #fff; cursor: auto;">Ajukan</button> -->

                    <!-- Filterable Images / Cards Section -->
                    <div class="card-detailagent row px-2 mt-4 gap-3" style="width: 770px; margin-bottom: 60px;"
                        id="filterable-cards">
                        @foreach ($agent->properties as $property)
                            <div class="card p-0" data-name="rumah">
                                <a href="{{ route('property.show.agent', $property->id) }}" class="stretched-link"></a>
                                <img src="{{ asset('storage/' . $property->image) }}" alt="img" />
                                <div class="card-body">
                                    <h6 class="card-title">{{ $property->title }}</h6>
                                    <h6>
                                        {{ implode(', ',$property->regencies()->pluck('name')->toArray()) }}
                                    </h6>
                                </div>
                                @if (Auth::user()->role == 'developer')
                                <div class="labeledit" style="z-index: 100">
                                    <a class="linkedit" href="{{ route('property.edit.agent', $property->id) }}"><i
                                            class="fas fa-edit edit-icon"></i></a>
                                </div>x
                                <div class="labeldelete" style="z-index: 100">
                                    <form action="{{ route('property.destroy.agent', $property->id) }}" method="get"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="linkdelete"
                                            onclick="return confirm('Apakah Anda Yakin {{ $property->id }} ')"><i
                                                class="fas fa-trash delete-icon"></i></button>
                                        {{-- <a class="linkdelete" href=""><i class="fas fa-trash delete-icon"></i></a> --}}
                                    </form>
                                </div>
                                @endif



                                
                                <span class="label sold">Terjual</span>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
        </div>

    </body>

    </html>
@endsection
