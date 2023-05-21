@extends('page.unit.main')

@section('container')

    <head>
        <style>
            /* new */
            .Frame-238 {
                width: 1290px;
                height: 1405px;
                flex-grow: 0;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: flex-start;
                gap: 10px;
                padding: 10px;
                margin-right: 40px;
            }

            .Frame-234 {
                width: 210px;
                height: 146px;
                margin: 12px 0px 12px 0px;
                flex-grow: 0;
                padding: 16px 62px 15px 63px;
                border-radius: 3px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.25);
                background-color: #f5f5f5;
            }

            .Rectangle-15 {
                width: 904px;
                height: 297.4px;
                flex-grow: 0;
                margin: 0 0 48.3px;
                padding: 0 37.2px 0 0;
                border-radius: 10px;
                background-color: #fff;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.25);
            }



            .Rectangle-15-1 {
                width: 297.4px;
                height: 297.4px;
                flex-grow: 0;
                margin: 0 42.6px 0 0;
                border-radius: 10px;
                background-color: black;
            }
        </style>
    </head>

    <body>
        <div class="row d-flex justify-content-center" id="content_unit">
            {{-- unit --}}
            <div class="Frame-238">
                <div class="blok col-md-2">
                    <div class="Frame-234"></div>
                    <div class="Frame-234"></div>
                    <div class="Frame-234"></div>
                </div>
                {{-- white space --}}
                <div class="white-space col-md-1"></div>
                {{-- bagian list unit dari property --}}
                <div id="scroll-container" class="listUnit col-md-8">
                    <div class="row Rectangle-15">
                        <div class="Rectangle-15-1 col-md-4">
                            <img src="/assets/unit/loading_image.jpg" alt="">
                        </div>
                        <div class="little-information col-md-7">
                            <h4>Rumah Impianmu Menanti: Pergi ke tempat yang Lebih Baik!</h4>
                        </div>
                    </div>
                    <div class="Rectangle-15">
                        <div class="Rectangle-15-1">
                            <img src="/assets/unit/loading_image.jpg" alt="">
                        </div>
                    </div>
                    <div class="Rectangle-15">
                        <div class="Rectangle-15-1">
                            <img src="/assets/unit/loading_image.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="white-space col-md-1"></div>
            </div>
        </div>
    </body>

    </html>
@endsection
