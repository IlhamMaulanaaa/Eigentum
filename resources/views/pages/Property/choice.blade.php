@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            .row {
                display: flex;
                justify-content: center;
            }

            .rumah,
            .vila,
            .apartement {
                border: 1px solid black;
                width: 140px;
                height: 140px;
                margin: auto;
            }

            button {
                margin: auto;
                display: block;
                justify-content: flex-end;
            }
        </style>
    </head>

    <body>

        <body>
            <img class="imageHero" src="/assets/properti/imgHero.svg" alt="">
            <h4 class="text">Mau upload properti apa hari ini?</h4>
            <div class="row">
                <div class="rumah">
                    {{-- home icon --}}
                    {{-- text Rumah --}}
                </div>
                <div class="vila">
                    {{-- home icon --}}
                    {{-- text Rumah --}}
                </div>
                <div class="apartement">
                    {{-- home icon --}}
                    {{-- text Rumah --}}
                </div>
            </div>
            <button style="height: 44px; width: 120px; background-color: #2951A3; color:white;">Button</button>

        </body>

    </body>

    </html>
@endsection
