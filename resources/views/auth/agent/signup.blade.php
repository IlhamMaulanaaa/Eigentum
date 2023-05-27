<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Tambahkan link ini untuk menghubungkan library Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/Login and Register/agen/register.css">
</head>


<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">
                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                        <form action="/session/signup/create" method="POST">
                            @csrf
                            <div class="logo">
                                <img class="mb-4 image_logo" src="/assets/login/logo_1.png" alt="">
                                <span class="h3 text_logo fw-regular " style="color: #0c40e8;">Eigentum
                                </span>
                            </div>
                            <br>
                            <div class="row">
                                <div class="column">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="email">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Password">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="namaLengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="namaLengkap"
                                            placeholder="Nama Lengkap">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="nomerHp">Nomer Handphone</label>
                                        <input type="number" class="form-control" id="nomerHp"
                                            placeholder="Nomer Handphone">
                                    </div>
                                    <br>
                                    <div class="mb-3 mt-4">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                        <textarea class="form-control" id="alamat" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="column"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 column_2">
                    <br>
                    <label for="exampleFormControlTextarea1" class="label lokasi">Lokasi</label>
                    <select class="form-select drp1" aria-label="Default select example">
                        <option selected>provinsi</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <select class="form-select drp2" aria-label="Default select example">
                        <option selected>kota</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <select class="form-select drp3" aria-label="Default select example">
                        <option selected>distrik</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="row nte mt-5" style="margin:auto;">
                        <span class="border border-dark col-md-8 rounded" id="border_upload_ktp"
                            style="display:inline-block; height: 150px; width: 150px;">
                            <i class="fa fa-upload" aria-hidden="false"></i>
                        </span>
                        <div class="col-md-4 nce">
                            <h5>Upload foto ktp</h5>
                            <p class="upload_foto row mb-3">Pastikan foto-foto yang diunggah adalah foto asli dan
                                memiliki
                                hak cipta yang sah. Jangan mengunggah foto yang melanggar hak cipta atau foto yang
                                diambil dari sumber yang tidak diizinkan.</p>
                            <button type="button" class="btn button_upload1">Upload</button>
                        </div>
                    </div>
                    <div class="row nte mt-3 " style="margin:auto;">
                        <span class="border border-dark col-md-8 rounded " id="border_upload_ktp"
                            style="display:inline-block; height: 150px; width: 150px;">
                            <i class="fa fa-upload" aria-hidden="false"></i>
                        </span>
                        <div class="col-md-4 nce">
                            <h5>Upload foto selfie anda bersama ktp</h5>
                            <p class="upload_foto row mb-3">Pastikan foto-foto yang diunggah adalah foto asli dan
                                memiliki
                                hak cipta yang sah. Jangan mengunggah foto yang melanggar hak cipta atau foto yang
                                diambil dari sumber yang tidak diizinkan.</p>
                            <button type="button" class="btn button_upload1">Upload</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="register">
            <button type="button" class="btn button_register">Register</button>
        </div>
    </section>

</body>

</html>
