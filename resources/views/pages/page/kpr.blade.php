@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            integrity="sha512-HM/HrlGg/OUdNf9yjUVHc7L8Y1ICJf7gZkPwZb5M5J5D5X1Q2e5C5n7Qmbt3DqV7kACtIwPLIXfJ8GLzaILoXw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Eigentum</title>
        <link rel="stylesheet" href="/css/pages/kpr.css">
    </head>

    <body>
        <div class="loan-calculator" style="margin-top: 90px;">
            <div class="top">
                <h2 style="color: #fff">Simulasi Kalkulator KPR</h2>

                <form action="#">
                    <div class="group">
                        <div class="title">Pinjaman</div>
                        <input type="text" value="30.000.00" class="loan-amount" />
                    </div>

                    <div class="group">
                        <div class="title">Tingkat Bunga / %</div>
                        <input type="text" value="8.5" class="interest-rate" />
                    </div>

                    <div class="group">
                        <div class="title">Waktu/bulan</div>
                        <input type="text" value="12" class="loan-tenure" />
                    </div>
                </form>
            </div>

            <div class="result">
                <div class="left">
                    <div class="loan-emi">
                        <h3>Cicilan/bulan</h3>
                        <div class="value">123</div>
                    </div>

                    <div class="total-interest">
                        <h3>Bunga Yang Dibayar</h3>
                        <div class="value">1234</div>
                    </div>

                    <div class="total-amount">
                        <h3>Total Jumlah</h3>
                        <div class="value">12345</div>
                    </div>

                    <button class="calculate-btn">Calculate</button>
                </div>

                <div class="right">
                    <canvas id="myChart" width="200" height="200"></canvas>
                </div>
            </div>
        </div>





        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>

        <script src="/js/pages/kpr.js"></script>
    </body>

    </html>
@endsection
