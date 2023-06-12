@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            integrity="sha512-HM/HrlGg/OUdNf9yjUVHc7L8Y1ICJf7gZkPwZb5M5J5D5X1Q2e5C5n7Qmbt3DqV7kACtIwPLIXfJ8GLzaILoXw=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Document</title>
        {{-- <link href="/css/pages/guide.css" rel="stylesheet"> --}}

    </head>

    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .Rectangle-128 {
            margin-right: 5px;
            width: 620px;
            height: 453px;
            margin-top: 98px;
            margin-bottom: 135px;
            padding: 37px 33.1px 49.3px 33px;
            box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.25);
            background-color: #fff;
        }

        .Kalkulator-KPR {
            width: 174.9px;
            height: 33px;
            margin: 0 207px 22.6px 5px;
            font-family: Lato;
            font-size: 24px;
            font-weight: bold;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.65;
            letter-spacing: normal;
            text-align: left;
            color: #1a2258;
        }

        .dropdown {
            margin-top: 98px;
            color: #f4f4f6;
            width: 50px;
        }




        .eigentumkprdrpdnw {
            width: 620px;
            text-align: left;
        }

        .divstyle_ui-section-mortgage-program__w4KnT {
            width: 1160px;
            height: 409.7px;
            display: flex;
            flex-direction: column;
            k justify-content: flex-start;
            align-items: center;
            gap: 24px;
            margin: 40px auto;
            padding: 0;
        }

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        #alertBox {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
            z-index: 2;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        .close:hover {
            color: red;
        }


        .Program-Kredit-Terbaru {
            width: 355px;
            height: 40px;
            margin-bottom: -30px;
            flex-grow: 0;
            font-family: Inter;
            font-size: 31px;
            font-weight: bold;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.29;
            letter-spacing: normal;
            text-align: center;
            color: #222b45;
        }

        .divstyle_programs__TLWft {
            width: 1129px;
            height: 345.7px;
            flex-grow: 0;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 14px;
            padding: 10px 0;
        }

        .col {
            display: flex;
            justify-content: center;
            flex-direction: column;
            gap: 10px;
        }

        .sectionkpr-bank {
            /* display: flex; */
            width: 1144px;
            height: 613px;
            margin: auto;
            padding: 48px 0 84px;
        }

        .Pilihan-Bank {
            width: 180px;
            height: 40px;
            margin: auto;
            flex-grow: 0;
            font-family: Inter;
            font-size: 30px;
            font-weight: bold;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.33;
            letter-spacing: normal;
            text-align: center;
            color: #0d1a35;
        }

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
        }

        .popup {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            position: relative;
            max-width: 80%;
            max-height: 80%;
            overflow-y: auto;
        }

        .cuks {
            width: 80%;
            height: 40.2px;
            bottom: 10px;
        }

        .close-popup-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }

        .close-popup-button:hover {
            background-color: #555;
        }

        .p-tag {
            margin-bottom: 20px;
        }


        .btn-fix-floating {
            margin-right: 24px;
            margin-left: 60px;
        }

        .divbg-white {
            width: 364.9px;
            height: 182px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 12px;
            margin: 0 11px 24px 11px;
            padding: 10px 1px 13px 10px;
            border-radius: 8px;
            border: solid 1px #cfd1d7;
            background-color: #fff;
        }

        .input-group-text {
            background-color: #e4e9f2;
            /* height: 50px; */
        }

        .BNI {
            height: 25px;
            margin: 0px 0px 10px 0px;
            font-family: Inter;
            font-size: 18px;
            font-weight: bold;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.33;
            letter-spacing: normal;
            text-align: center;
            color: #1a2258;
        }

        .nchan {
            width: 101px;
            height: 44px;
            margin-bottom: 10px;
            font-family: Inter;
            font-size: 32px;
            font-weight: bold;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.65;
            letter-spacing: normal;
            text-align: center;
            color: #1a2258;
        }

        .BNII {
            margin-top: 0px;
            height: 22px;
            margin: -10px 0px 10px 0px;
            font-family: Inter;
            font-size: 14px;
            font-weight: 600;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.65;
            letter-spacing: normal;
            text-align: center;
            color: #1a2258;
        }

        .npc {
            margin: auto;
            margin-bottom: 200px;
        }

        .helper {
            align-items: center;
            margin-bottom: 0px;

        }

        .lph {
            align-items: center;
            margin-top: 40px;
            margin-bottom: 0px;
        }

        .kosongan::before {
            content: "";
            display: block;
            width: 1px;
            height: 40px;
            margin: auto;
            opacity: 50%;
            background-color: darkgray;
        }

        .gabungan {
            margin-left: 5px;
        }

        .northem {
            align-items: center;
            margin-bottom: 0px;

        }

        .cdcdcd {
            font-size: 12px;
            margin-top: -2px;
        }

        .yuhuuu {
            width: 82px;
            height: 42px;
        }

        .npmren {
            margin: auto;
        }

        .logo {
            font-size: 12px;
            margin-right: 10px;
            font-weight: 600w;
        }

        .divsection-calculator-result {
            width: 620px;
            height: 219px;
            margin: auto;
            flex-grow: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex;
            align-items: center;
            padding: 1px 1px 25px;
            border-radius: 12px;
            border: solid 1px #f4f4f6;
            background-color: #f3f7ff;
        }

        .card-body {
            width: 320px;
            height: 230px;
            border: none;
            padding: -60px 0px 0px 0px;
        }

        .img-non-class {
            display: block;
            margin: 0 auto;
        }

        .Angsuranbulan-Fix {
            height: 24px;
            margin: 0px;
            margin-bottom: -30px;
            font-family: Inter;
            font-size: 15px;
            font-weight: 600;
            font-stretch: normal;
            width: 175px;
            font-style: normal;
            line-height: 1.8;
            letter-spacing: normal;
            text-align: center;
            color: #0d1a35;
        }

        .Tahun-ke {
            width: 47px;
            height: 16px;
            flex-grow: 0;
            display: flex;
            flex-direction: column;
            font-family: Inter;
            font-size: 11px;
            justify-content: left;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.45;
            letter-spacing: normal;
            text-align: left;
            color: #868d9a;
        }

        .Bunga-0- {
            width: 67px;
            height: 24px;
            flex-grow: 0;
            font-family: Inter;
            font-size: 13px;
            font-weight: bold;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.85;
            letter-spacing: normal;
            text-align: left;
            color: #0d1a35;
        }

        .divflex {
            width: 30.2px;
            height: 24px;
            flex-grow: 0;
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: flex-start;
            gap: 2.2px;
            padding: 0;
        }

        .Bunga {
            font-size: 14px;
            margin-top: 10px;
        }

        .ini {
            margin-top: 10px;
            margin-left: -400px;
        }

        .rowin {
            display: flex;
            flex-direction: row;
        }

        .custom-line {
            height: 2px;
            width: 560px;
            background-color: black;
            border: 8px;
        }


        .popup {
            width: 1200px;
            margin: auto;
            transform: translate(-50%, -100%) scale(1);
            text-align: center;
            padding: auto;
            color: #333;
        }

        /* .result-calculator-end {
                                                width: 13px;
                                                height: 24px;
                                                flex-grow: 0;
                                                font-family: Inter;
                                                font-size: 18px;
                                                font-weight: bold;
                                                font-stretch: normal;
                                                font-style: normal;
                                                line-height: 1.33;
                                                letter-spacing: normal;
                                                text-align: left;
                                                color: #0d1a35;
                                            } */
    </style>

    <body>
        <div class="row justify-content-center">
            {{-- kalkulator --}}
            <div class="Rectangle-128 col-md-6">
                <span class="Kalkulator-KPR">
                    Kalkulator KPR
                </span>
                <div class="mb-3">
                    <label for="hargaproperti" class="form-label">Harga Properti</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">Rp.</span>
                        <input type="number" class="form-control" id="hargaproperti" aria-describedby="inputGroupPrepend"
                            required>
                        <div class="invalid-feedback">
                            Harga Properti.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-8">
                        <label for="jumlahdp" class="form-label">Jumlah DP</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">Rp.</span>
                            <input type="number" class="form-control" id="jumlahdp" aria-describedby="inputGroupPrepend"
                                required>
                            <div class="invalid-feedback">
                                Jumlah DP.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="jumlahdp" class="form-label">% DP</label>
                        <div class="input-group has-validation">
                            <input type="number" class="form-control" id="jumlahdp" aria-describedby="inputGroupPrepend"
                                required>
                            <span class="input-group-text" id="inputGroupPrepend">%</span>
                            <div class="invalid-feedback">
                                % DP.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-3">
                        <label for="jumlahdp" class="form-label">Bunga Fixed</label>
                        <div class="input-group has-validation">
                            <input type="number" class="form-control" id="jumlahdp" aria-describedby="inputGroupPrepend"
                                required>
                            <span class="input-group-text" id="inputGroupPrepend">%</span>
                            <div class="invalid-feedback">
                                Bunga Fixed.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="jumlahdp" class="form-label">Fix Year</label>
                        <div class="input-group has-validation">
                            <input type="number" class="form-control" id="jumlahdp" aria-describedby="inputGroupPrepend"
                                required>
                            <div class="invalid-feedback">
                                Fix Year.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-md-3">
                        <label for="jumlahdp" class="form-label">Floating Rate</label>
                        <div class="input-group has-validation">
                            <input type="number" class="form-control" id="jumlahdp" aria-describedby="inputGroupPrepend"
                                required>
                            <span class="input-group-text" id="inputGroupPrepend">%</span>
                            <div class="invalid-feedback">
                                Floating Rate.
                            </div>
                        </div>
                    </div>
                    <div class="mb-5 col-md-3">
                        <label for="jumlahdp" class="form-label">Tenor</label>
                        <div class="input-group has-validation">
                            <input type="number" class="form-control" id="jumlahdp" aria-describedby="inputGroupPrepend"
                                required>
                            <span class="input-group-text" id="inputGroupPrepend">thn</span>
                            <div class="invalid-feedback">
                                Tenor.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex align-items-center">
                    <a href="#" class="text-primary col-md-6  text-start">Lihat Syarat & Ketentuan KPR</a>
                    <div class="col-md-6 text-end">
                        <button class="btn btn-primary py-2 px-4 " type="submit">Hitung KPR</button>
                    </div>
                </div>
            </div>
            {{-- end kalkulator --}}
            <div class="gabungann col-md-4 justify-content-start d-flex">
                <div class="dropdown ">
                    <button class="eigentumkprdrpdnw open-popup-button btn bg-light dropdown-toggle" onclick="showAlert()"
                        type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="true">
                        Dropdown Button
                    </button>
                    <div id="overlay" onclick="closeAlert()"></div>
                    <div id="alertBox">
                        <span onclick="closeAlert()" class="close">&times;</span>
                        <p class="p-tag">Ini adalah alert.</p>
                    </div>

                    <div class="  divsection-calculator-result mt-3 ">
                        <span class=" Angsuranbulan-Fix ">
                            Angsuran/bulan Fix
                        </span>
                        <br>
                        <hr class="custom-line ">
                        <div class="rowin">
                            <div class="ini column">
                                {{-- start --}}
                                <span class="Tahun-ke">
                                    Tahun ke
                                </span>
                                <span class="Bunga-0-">
                                    Bunga 0 %
                                </span>
                            </div>
                            {{-- end --}}
                            <div class="divflex">
                                <rp>
                                    Rp
                                </rp>
                                <span class="result-calculator-end">
                                    0
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="dropdown-menu dropdown-menu-fixed dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Option 1 Lorem, ipsum dolor sit amet consectetur adipisicing
                    elit. Eveniet dolorem assumenda quo, neque accusamus, ducimus sit, possimus reiciendis recusandae
                    consequuntur quaerat aut! Impedit sunt atque eos nemo explicabo quaerat facere?</a>
            </div> --}}
            </div>

        </div>

        <div class="divstyle_ui-section-mortgage-program__w4KnT">
            <span class="Program-Kredit-Terbaru">
                Program Kredit Terbaru
            </span>
            <div class="divstyle_programs__TLWft">
                <div class="npmren row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 shadow bg-body rounded border-0">
                            <span class="input-group-text border-0" id="inputGroupPrepend">
                                <img class="img-non-class"src="/assets/kpr/Frame 481.png" alt="">
                            </span>
                            <div class="card-body border-0"
                                style="display: flex; flex-direction: column;  align-items: center; padding-top: -100px;">
                                <span class="BNI">BNI</span>
                                <span class="BNII">BNI</span>
                                <span class="Bunga">Bunga</span>
                                <span class="nchan">3.76%</span>
                                <button class="cuks btn btn-primary pt-2 px-4 " type="submit">AJUKAN</button>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 shadow bg-body rounded border-0">
                            <span class="input-group-text border-0" id="inputGroupPrepend">
                                <img class="img-non-class"src="/assets/kpr/mandiray.png" alt="">
                            </span>
                            <div class="card-body border-0"
                                style="display: flex; flex-direction: column;  align-items: center; padding-top: -100px;">
                                <span class="BNI">Mandiri</span>
                                <span class="BNII">KPR Bunga Special Secondary</span>
                                <span class="Bunga">Bunga</span>
                                <span class="nchan">3.65%</span>
                                <button class="cuks btn btn-primary pt-2 px-4 " type="submit">AJUKAN</button>
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 shadow bg-body rounded border-0">
                            <span class="input-group-text border-0" id="inputGroupPrepend">
                                <img class="img-non-class"src="/assets/kpr/Frame 479.png" alt="">
                            </span>
                            <div class="card-body border-0"
                                style="display: flex; flex-direction: column;  align-items: center; padding-top: -100px;">
                                <span class="BNI">BTN</span>
                                <span class="BNII">KPR BTN Platinum Secondary</span>
                                <span class="Bunga">Bunga</span>
                                <span class="nchan">1.99%</span>
                                <button class="cuks btn btn-primary pt-2 px-4 " type="submit">AJUKAN</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sectionkpr-bank">
            <div class="row helper">
                <div class="northem col-md-6">
                    <span class="Pilihan-Bank">Pilihan Bank</span>
                    <p class="cdcdcd p-tag col-md-7  text-start">Daftar bank dengan bunga KPR terbaik.</p>
                </div>
                <div class="lph row justify-content-left align-items-center mb-5 col-md-6">
                    <button class="btn-fix-floating btn btn-primary py-1 col-md-5" type="submit">Bunga Fix &
                        Floating</button>
                    <button class="btn-fix-berjenjangx   btn btn-outline-secondary py-1 col-md-5 float-end"
                        type="submit">Bunga
                        Berjenjang</button>
                </div>
            </div>
            <div class="row">
                {{-- 1 --}}
                <div class="divbg-white">
                    <div class="logo d-flex align-items-center justify-content-start ">
                        <img class="yuhuuu img-non-class" src="/assets/kpr/btn.png" alt="">
                        <h6>Bank BTN</h6>
                    </div>
                    <div class="row jadisatu">
                        <div class="infoSukuBunga d-flex col-md-5">
                            <h6>Suku Bunga mulai dari</h6>
                            <h6> 3.46%</h6>
                        </div>
                        <div class="kosongan col-md-2"></div>
                        <div class="masaKredit d-flex col-md-5">
                            <h6>Masa Kredit</h6>
                            <h6>30 Tahun</h6>
                        </div>
                    </div>
                    <button class="npc btn btn-primary py-2 col-md-11 " type="submit"><i
                            class="fab fa-whatsapp"></i>Tanya KPR</button>
                </div>
                {{-- 2 --}}
                <div class="divbg-white">
                    <div class="logo d-flex align-items-center justify-content-start ">
                        <img class="yuhuuu img-non-class" src="/assets/kpr/bni.png" alt="">
                        <h6>Bank BNI</h6>
                    </div>
                    <div class="row jadisatu">
                        <div class="infoSukuBunga d-flex col-md-5">
                            <h6>Suku Bunga mulai dari</h6>
                            <h6> 2.76%</h6>
                        </div>
                        <div class="kosongan col-md-2"></div>
                        <div class="masaKredit d-flex col-md-5">
                            <h6>Masa Kredit</h6>
                            <h6>30 Tahun</h6>
                        </div>
                    </div>
                    <button class="npc btn btn-primary py-2 col-md-11 " type="submit"><i
                            class="fab fa-whatsapp"></i>Tanya KPR</button>
                </div>
                {{-- 3 --}}
                <div class="divbg-white">
                    <div class="logo d-flex align-items-center justify-content-start ">
                        <img class="yuhuuu img-non-class" src="/assets/kpr/mandiri.png" alt="">
                        <h6>Bank Mandiri</h6>
                    </div>
                    <div class="row jadisatu">
                        <div class="infoSukuBunga d-flex col-md-5">
                            <h6>Suku Bunga mulai dari</h6>
                            <h6>4.5%</h6>
                        </div>
                        <div class="kosongan col-md-2"></div>
                        <div class="masaKredit d-flex col-md-5">
                            <h6>Masa Kredit</h6>
                            <h6>20 Tahun</h6>
                        </div>
                    </div>
                    <button class="npc btn btn-primary py-2 col-md-11 " type="submit"><i
                            class="fab fa-whatsapp"></i>Tanya KPR</button>
                </div>

            </div>
            <div class="row">
                {{-- 4 --}}
                <div class="divbg-white">
                    <div class="logo d-flex align-items-center justify-content-start ">
                        <img class="yuhuuu img-non-class" src="/assets/kpr/bri.png" alt="">
                        <h6>Bank BRI</h6>
                    </div>
                    <div class="row jadisatu">
                        <div class="infoSukuBunga d-flex col-md-5">
                            <h6>Suku Bunga mulai dari</h6>
                            <h6>4.5%</h6>
                        </div>
                        <div class="kosongan col-md-2"></div>
                        <div class="masaKredit d-flex col-md-5">
                            <h6>Masa Kredit</h6>
                            <h6>20 Tahun</h6>
                        </div>
                    </div>
                    <button class="npc btn btn-primary py-2 col-md-11 " type="submit"><i
                            class="fab fa-whatsapp"></i>Tanya KPR</button>
                </div>
                {{-- 5 --}}
                <div class="divbg-white">
                    <div class="logo d-flex align-items-center justify-content-start ">
                        <img class="yuhuuu img-non-class" src="/assets/kpr/ocbc nisp.png" alt="">
                        <h6>Bank OCBC NISP</h6>
                    </div>
                    <div class="row jadisatu">
                        <div class="infoSukuBunga d-flex col-md-5">
                            <h6>Suku Bunga mulai dari</h6>
                            <h6> 2.75%</h6>
                        </div>
                        <div class="kosongan col-md-2"></div>
                        <div class="masaKredit d-flex col-md-5">
                            <h6>Masa Kredit</h6>
                            <h6>25 Tahun</h6>
                        </div>
                    </div>
                    <button class="npc btn btn-primary py-2 col-md-11 " type="submit"><i
                            class="fab fa-whatsapp"></i>Tanya KPR</button>
                </div>
                {{-- 6 --}}
                <div class="divbg-white">
                    <div class="logo d-flex align-items-center justify-content-start ">
                        <img class="yuhuuu img-non-class" src="/assets/kpr/permata bank.png" alt="">
                        <h6>Bank Permata</h6>
                    </div>
                    <div class="row jadisatu">
                        <div class="infoSukuBunga d-flex col-md-5">
                            <h6>Suku Bunga mulai dari</h6>
                            <h6> 5.25%</h6>
                        </div>
                        <div class="kosongan col-md-2"></div>
                        <div class="masaKredit d-flex col-md-5">
                            <h6>Masa Kredit</h6>
                            <h6>25 Tahun</h6>
                        </div>
                    </div>
                    <button class="npc btn btn-primary py-2 col-md-11 " type="submit"><i
                            class="fab fa-whatsapp"></i>Tanya KPR</button>
                </div>

            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        <script>
            // $('input[type="number"]').on('mousewheel', function(event) {
            //     $(this).blur();
            // });
            // const openPopupButton = document.querySelector('.open-popup-button');
            // const popupOverlay = document.querySelector('.popup-overlay');
            // const popup = document.querySelector('.popup');
            // const closePopupButton = document.querySelector('.close-popup-button');

            // openPopupButton.addEventListener('click', () => {
            //     popupOverlay.style.display = 'flex';
            // });

            // popupOverlay.addEventListener('click', (event) => {
            //     if (event.target === popupOverlay) {
            //         popupOverlay.style.display = 'none';
            //     }
            // });

            // closePopupButton.addEventListener('click', () => {
            //     popupOverlay.style.display = 'none';
            // });
            function showAlert() {
                document.getElementById("overlay").style.display = "block";
                document.getElementById("alertBox").style.display = "block";
            }

            function closeAlert() {
                document.getElementById("overlay").style.display = "none";
                document.getElementById("alertBox").style.display = "none";
            }
        </script>
    </body>

    </html>
@endsection
