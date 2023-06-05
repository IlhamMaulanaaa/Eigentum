@extends('layout.main')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Document</title>
        <style>
            .form-container {
                display: flex;
                justify-content: center;
                align-items: flex-start;
                height: 500px;
            }

            .left-section {
                width: 50%;
                padding: 20px;
            }

            .right-section {
                width: 50%;
                padding: 20px;
            }

            .vertical-line {
                width: 1px;
                height: 800px;
                background-color: #ccc;
            }

            form {
                margin: 40px 40px 20px 90px;
            }

            .form2 {
                margin: 40px 40px 20px 40px;
            }

            label {
                display: block;
                margin-bottom: 10px;
            }

            input[type="text"],
            textarea,
            input[type="number"],
            input[type="file"] {
                width: 100%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            textarea {
                height: 100px;
            }

            input[type="file"] {
                margin-bottom: 5px;
            }

            h2 {
                margin-bottom: 20px;
            }

            .upload-container {
                display: flex;
                align-items: center;
            }

            .upload-icon i {
                font-size: 40px;
            }

            .upload-icon {
                width: 150px;
                height: 150px;
                border: 2px dashed #ccc;
                border-radius: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;
            }

            .upload-details {
                margin-left: 20px;
            }

            .upload-details h3,
            .upload-details p,
            .upload-details button {
                margin: 0;
            }

            .upload-details button {
                margin-top: 10px;
            }

            /* Gaya tambahan jika tombol unggah gambar aktif */
            input[type="file"]:focus+.upload-icon {
                background-color: #999;
            }
        </style>
    </head>

    <body>
        <div class="form-container">
            <div class="left-section">
                <form>
                    <label for="judul">Judul:</label>
                    <input type="text" id="judul" name="judul" required>

                    <label for="deskripsi">Deskripsi:</label>
                    <textarea id="deskripsi" name="deskripsi" required></textarea>

                    <label for="lebar">Lebar:</label>
                    <input type="number" id="lebar" name="lebar" required>

                    <label for="panjang">Panjang:</label>
                    <input type="number" id="panjang" name="panjang" required>

                    <label for="luas_tanah">Luas Tanah:</label>
                    <input type="number" id="luas_tanah" name="luas_tanah" required>

                    <label for="luas_bangunan">Luas Bangunan:</label>
                    <input type="number" id="luas_bangunan" name="luas_bangunan" required>

                    <label for="kamar_mandi">Kamar Mandi:</label>
                    <input type="number" id="kamar_mandi" name="kamar_mandi" required>

                    <label for="kamar_tidur">Kamar Tidur:</label>
                    <input type="number" id="kamar_tidur" name="kamar_tidur" required>
                </form>
            </div>
            <div class="right-section">
                <form class="form2">
                    <label for="optional1">Upload Opsional 1:</label>
                    <div class="upload-container">
                        <label class="upload-icon" for="optional1">
                            <i class="fas fa-upload"></i>
                            <input type="file" id="optional1" name="optional1" style="display:none;">
                        </label>
                        <div class="upload-details">
                            <h3>Unggah Gambar</h3>
                            <p>Pilih gambar untuk diunggah</p>
                        </div>
                    </div>

                    <label for="optional1">Upload Opsional 1:</label>
                    <div class="upload-container">
                        <label class="upload-icon" for="optional1">
                            <i class="fas fa-upload"></i>
                            <input type="file" id="optional1" name="optional1" style="display:none;">
                        </label>
                        <div class="upload-details">
                            <h3>Unggah Gambar</h3>
                            <p>Pilih gambar untuk diunggah</p>
                        </div>
                    </div>

                    <label for="optional1">Upload Opsional 1:</label>
                    <div class="upload-container">
                        <label class="upload-icon" for="optional1">
                            <i class="fas fa-upload"></i>
                            <input type="file" id="optional1" name="optional1" style="display:none;">
                        </label>
                        <div class="upload-details">
                            <h3>Unggah Gambar</h3>
                            <p>Pilih gambar untuk diunggah</p>
                        </div>
                    </div>

                    <label for="optional1">Upload Opsional 1:</label>
                    <div class="upload-container">
                        <label class="upload-icon" for="optional1">
                            <i class="fas fa-upload"></i>
                            <input type="file" id="optional1" name="optional1" style="display:none;">
                        </label>
                        <div class="upload-details">
                            <h3>Unggah Gambar</h3>
                            <p>Pilih gambar untuk diunggah</p>
                        </div>
                    </div>

                    <div class="livingroomimg">
                        <label for="livingroomimg">Upload Opsional 1:</label>
                        <div class="upload-container">
                            <label class="upload-icon" for="livingroomimg">
                                <i class="fas fa-upload"></i>
                                <input type="file" id="livingroomimg" name="livingroomimg[]" multiple
                                    style="display:none;">
                            </label>
                            <div class="upload-details">
                                <h3>Unggah Gambar</h3>
                                <p>Pilih gambar untuk diunggah</p>
                                <button class="btn btn-success btn-livingroomimg" type="button">Add</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <script>
            function handleImageUpload(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var uploadedImage = input.parentNode.querySelector('img');
                        uploadedImage.setAttribute('src', e.target.result);
                        uploadedImage.style.display = 'block';
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            document.addEventListener('DOMContentLoaded', function() {
                var uploadInputs = document.querySelectorAll('input[type="file"]');
                Array.prototype.forEach.call(uploadInputs, function(input) {
                    input.addEventListener('change', function() {
                        handleImageUpload(this);
                    });
                });
            });
            $('.btn-livingroomimg').on('click', function() {
                btnsuccess('.livingroomimg');
            });

            $('.btn-bedroomimg').on('click', function() {
                btnsuccess('.bedroomimg');
            });

            $('.btn-bathroomimg').on('click', function() {
                btnsuccess('.bathroomimg');
            });

            $('.btn-kitchenimg').on('click', function() {
                btnsuccess('.kitchenimg');
            });

            $('.btn-etcimg').on('click', function() {
                btnsuccess('.etcimg');
            });

            function btnsuccess(elementClass) {
                var html =
                    '<div class="remove"><label for="' + elementClass.substr(1) +
                    '">Upload Opsional 1:</label><div class="upload-container"><label class="upload-icon" for="' + elementClass
                    .substr(1) + '"><i class="fas fa-upload"></i><input type="file" id="' + elementClass.substr(1) +
                    '" name="' + elementClass.substr(1) +
                    '[]" multiple style="display:none;"></label><div class="upload-details"><h3>Unggah Gambar</h3><p>Pilih gambar untuk diunggah</p><button class="btn btn-danger btn-' +
                    elementClass.substr(1) + 'img" type="button">Remove</button></div></div></div>';
                $(elementClass).append(html);
            }

            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".remove").remove();
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>

    </body>

    </html>
@endsection
