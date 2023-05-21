@extends('layout.main')

@section('content')
    <style>
        .Rectangle-14 {
            width: 100%;
            height: 440px;
            flex-grow: 0;
            background-color: rgba(34, 34, 34, 0.2);
        }

        .Rectangle-131 {
            width: 100%;
            height: 100px;
            flex-grow: 0;
            margin: 0 0 80px;
            padding: 20px 984px 20px 148px;
            box-shadow: 0 4px 100px 0 rgba(0, 0, 0, 0.25);
            background-color: #f4f4f4;
        }

        .Frame-231 {
            width: 180px;
            height: 60px;
            flex-grow: 0;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 10px;
            margin: 0 20px 0 130px;
            padding: 13px 67px;
            border-radius: 40px;
            background-color: #0c40e8;
        }

        .Unit {
            width: 46px;
            height: 34px;
            flex-grow: 0;
            font-family: Lato;
            font-size: 24px;
            font-weight: 600;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.4;
            letter-spacing: 0.12px;
            text-align: left;
            color: #fff;
        }

        .Frame-232 {
            width: 180px;
            height: 60px;
            flex-grow: 0;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 10px;
            margin: 0 0 0 20px;
            padding: 13px 58px;
            border-radius: 40px;
            background-color: #303f49;
        }

        .Detail {
            width: 64px;
            height: 34px;
            flex-grow: 0;
            font-family: Lato;
            font-size: 24px;
            font-weight: 600;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.4;
            letter-spacing: 0.12px;
            text-align: left;
            color: #fff;
        }
    </style>

    <body>
        {{-- hero banner --}}
        <div class="Rectangle-14"></div>
        {{-- unit and detail --}}
        <div class=" row Rectangle-131">
            <div class="Frame-231" id="button1">
                <span class="Unit">
                    Unit
                </span>
            </div>
            <div class="Frame-232" id="button2">
                <span class="Detail">
                    Detail
                </span>
            </div>
        </div>
        @yield('container')
    </body>
@endsection
