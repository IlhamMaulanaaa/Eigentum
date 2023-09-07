@extends('layout.main')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Responsive Regisration Form </title>
    <style>
        /* ===== Google Font Import - Poppins ===== */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .tutup {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffffff;
        }

        .container {
            position: relative;
            max-width: 900px;
            width: 100%;
            border-radius: 6px;
            padding: 30px;
            margin: 0 15px;
            background-color: #fff;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .container header {
            position: relative;
            font-size: 20px;
            font-weight: 600;
            color: #333;
        }

        .container header::before {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            height: 3px;
            width: 27px;
            border-radius: 8px;
            background-color: #0c40e8;
        }

        .container form {
            position: relative;
            margin-top: 16px;
            min-height: 490px;
            background-color: #fff;
            overflow: hidden;
        }

        .container form .form {
            position: absolute;
            background-color: #fff;
            transition: 0.3s ease;
        }

        .container form .form.second {
            opacity: 0;
            pointer-events: none;
            transform: translateX(100%);
        }

        form.secActive .form.second {
            opacity: 1;
            pointer-events: auto;
            transform: translateX(0);
        }

        form.secActive .form.first {
            opacity: 0;
            pointer-events: none;
            transform: translateX(-100%);
        }

        .container form .title {
            display: block;
            margin-bottom: 8px;
            font-size: 16px;
            font-weight: 500;
            margin: 6px 0;
            color: #333;
        }

        .container form .fields {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        form .fields .input-field {
            display: flex;
            width: calc(100% / 3 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        .input-field label {
            font-size: 12px;
            font-weight: 500;
            color: #2e2e2e;
        }

        .input-field input,
        select {
            outline: none;
            font-size: 14px;
            font-weight: 400;
            color: #333;
            border-radius: 5px;
            border: 1px solid #aaa;
            padding: 0 15px;
            height: 42px;
            margin: 8px 0;
        }

        .input-field input :focus,
        .input-field select:focus {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
        }

        .input-field select,
        .input-field input[type="date"] {
            color: #707070;
        }

        .input-field input[type="date"]:valid {
            color: #333;
        }

        .container form button,
        .backBtn {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 45px;
            max-width: 200px;
            width: 100%;
            border: none;
            outline: none;
            color: #fff;
            border-radius: 5px;
            margin: 25px 0;
            background-color: #0c40e8;
            transition: all 0.3s linear;
            cursor: pointer;
        }

        .container form .btnText {
            font-size: 14px;
            font-weight: 400;
        }

        form button:hover {
            background-color: #265df2;
        }

        form button i,
        form .backBtn i {
            margin: 0 6px;
        }

        form .backBtn i {
            transform: rotate(180deg);
        }

        form .buttons {
            display: flex;
            align-items: center;
        }

        form .buttons button,
        .backBtn {
            margin-right: 14px;
        }

        @media (max-width: 750px) {
            .container form {
                overflow-y: scroll;
            }

            .container form::-webkit-scrollbar {
                display: none;
            }

            form .fields .input-field {
                width: calc(100% / 2 - 15px);
            }
        }

        @media (max-width: 550px) {
            form .fields .input-field {
                width: 100%;
            }
        }

        .masuk p {
            font-weight: 400;
            font-size: 1rem;
            color: #151111;
            text-decoration: none;
            font-size: 1rem;
            transition: 0.3s;
        }

        .masuk a {
            font-weight: 500;
            font-size: 1rem;
            color: #151111;
            text-decoration: none;
            font-size: 1rem;
            transition: 0.3s;
        }
        
    </style>
</head>

<body>
<div class="tutup">
    <div class="container">
        <header>Upload Properti</header>
        <div class="masuk" style="margin-top: 5px;">
            <p>Ingin membatalkan perubahan? <a class="linkmasuk" style=" text-decoration: none;"
                    href="">Kembali</a></p>
        </div>

        <form >
            <div class="form first" id="tab1">
                <div class="details personal">
                    <div class="fields">
                        <div class="input-field">
                            <label for="title" class="form-label">Nama Properti</label>
                            <input class="form-control ">
                            {{-- @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror --}}
                        </div>

                        <div class="input-field">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control "></textarea>
                            {{-- @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror --}}
                        </div>
                        <div class="input-field">
                            <label for="status_id" class="form-label">Tipe Properti</label>
                            <select required>
                                <option disabled selected>Pilih Tipe</option>
                                <option>Apartemen</option>
                                <option>Rumah</option>
                                <option>Ruko</option>
                                <option>Villa</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label for="nib" class="form-label">Image</label>
                            <input style="padding-top: 8px;" type="file"
                                class="form-control noscroll @error('license') is-invalid @enderror" id="license_nib"
                                name="license[]" multiple>
                            
                        </div>
                        
                    </div>
                </div>

                <div class="details ID" style="margin-top: -20px;">
                    <button class="nextBtn" type="submit">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>


           
        </form>
    </div>
</div>
</div>
    
    {{-- <script>
        $(document).ready(function() {
            $('.form-control, .form-select, .form-control, .form-check-input').on('focus', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').remove();
                if ($(this).hasClass('form-check-input')) {
                    $(this).closest('.form-check').find('.invalid-feedback').remove();
                }
            });
        });
    </script> --}}

    
    <script>
        let currentTab = 1;
    
        function showTab(tabNumber) {
            const tabs = document.querySelectorAll('.form');
            tabs.forEach(tab => {
                tab.style.display = 'none';
            });
            document.getElementById(`tab${tabNumber}`).style.display = 'block';
        }
    
        function nextTab() {
            currentTab++;
            showTab(currentTab);
        }
    
        function prevTab() {
            currentTab--;
            showTab(currentTab);
        }
    
        showTab(currentTab);
    </script>
    
    

</body>

</html>

@endsection