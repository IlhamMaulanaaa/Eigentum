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

            .scroll-content {
                max-height: 100%;
                overflow-y: auto;
            }


            .vertical-line {
                width: 1px;
                height: 100%;
                background-color: #ccc;
            }

            form {
                margin-bottom: 20px;
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
                margin-top: 10px;
            }

            .upload-icon {
                width: 150px;
                height: 150px;
                background-color: #ccc;
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
                <h2>Bagian Kiri</h2>
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
            <div class="vertical-line"></div>
            <div class="right-section">
                <h2>Bagian Kanan</h2>
                <div class="scroll-content">
                    <form>
                        <form>
                            <div class="upload-container">
                                <div class="upload-icon">
                                    <i class="fas fa-upload"></i>
                                </div>
                                <div class="upload-details">
                                    <h3>Unggah Gambar</h3>
                                    <p>Pilih gambar untuk diunggah</p>
                                    <button type="button">Upload</button>
                                </div>
                            </div>
                            <div class="upload-container">
                                <div class="upload-icon">
                                    <i class="fas fa-upload"></i>
                                </div>
                                <div class="upload-details">
                                    <h3>Unggah Gambar</h3>
                                    <p>Pilih gambar untuk diunggah</p>
                                    <button type="button">Upload</button>
                                </div>
                            </div>
                            <div class="upload-container">
                                <div class="upload-icon">
                                    <i class="fas fa-upload"></i>
                                </div>
                                <div class="upload-details">
                                    <h3>Unggah Gambar</h3>
                                    <p>Pilih gambar untuk diunggah</p>
                                    <button type="button">Upload</button>
                                </div>
                            </div>
                            <div class="upload-container">
                                <div class="upload-icon">
                                    <i class="fas fa-upload"></i>
                                </div>
                                <div class="upload-details">
                                    <h3>Unggah Gambar</h3>
                                    <p>Pilih gambar untuk diunggah</p>
                                    <button type="button">Upload</button>
                                </div>
                            </div>
                            <div class="upload-container">
                                <div class="upload-icon">
                                    <i class="fas fa-upload"></i>
                                </div>
                                <div class="upload-details">
                                    <h3>Unggah Gambar</h3>
                                    <p>Pilih gambar untuk diunggah</p>
                                    <button type="button">Upload</button>
                                </div>
                            </div>
                            <div class="upload-container">
                                <div class="upload-icon">
                                    <i class="fas fa-upload"></i>
                                </div>
                                <div class="upload-details">
                                    <h3>Unggah Gambar</h3>
                                    <p>Pilih gambar untuk diunggah</p>
                                    <button type="button">Upload</button>
                                </div>
                            </div>
                            <div class="upload-container">
                                <div class="upload-icon">
                                    <i class="fas fa-upload"></i>
                                </div>
                                <div class="upload-details">
                                    <h3>Unggah Gambar</h3>
                                    <p>Pilih gambar untuk diunggah</p>
                                    <button type="button">Upload</button>
                                </div>
                            </div>
                            <div class="upload-container">
                                <div class="upload-icon">
                                    <i class="fas fa-upload"></i>
                                </div>
                                <div class="upload-details">
                                    <h3>Unggah Gambar</h3>
                                    <p>Pilih gambar untuk diunggah</p>
                                    <button type="button">Upload</button>
                                </div>
                            </div>
                        </form>
                    </form>
                </div>
            </div>

        </div>

    </body>

    </html>
@endsection
