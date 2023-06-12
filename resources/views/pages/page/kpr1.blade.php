@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="/css/pages/kpr.css">
    </head>

    <body>

        <div class="container">
            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-heading">Simulasi Kredit Bank Mandiri</div>
                    <div class="panel-body">
                        <!--<div class="col-md-12">-->
                        <form name="calc" method="GET">
                            <div class="form-group">
                                <label for="loan">Harga rumah</label>
                                <input type="number" name="loan" class="form-control" size=10 placeholder="Harga Rumah">
                            </div>
                            <div class="form-group">
                                <label for="month">Lama Kredit</label>
                                <select class="form-control" name="months">
                                    <option value="60">5 Tahun</option>
                                    <option value="120">10 Tahun</option>
                                    <option value="180">15 Tahun</option>
                                    <option value="240">20 Tahun</option>
                                    <option value="300">25 Tahun</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="rate">Suku bunga</label>
                                <input type="number" name="rate" class="form-control"
                                    placeholder="Suku Bunga Bank yang Berlaku">
                            </div>
                            <div class="form-group">
                                <label for="pay">Cicilan Perbulan:</label>
                                <input type=text name="pay" class="form-control" disabled>
                            </div>
                            <button type="button" class="btn btn-primary" onClick='showpay()'>Hitung Cicilan</button>
                            <input type="reset" value="Reset" class="btn btn-basic">
                        </form>
                        <!--    </div>-->
                    </div>
                </div>
            </div>
        </div>
        <script src="/js/pages/kpr.js"></script>
    </body>

    </html>
    <!--<h2>Panels with Contextual Classes</h2>-->
@endsection
