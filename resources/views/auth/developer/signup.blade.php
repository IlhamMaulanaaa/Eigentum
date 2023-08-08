{{-- <!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="css/pages/profile.css">
    <!----======== CSS ======== -->
    <style>
        /* ===== Google Font Import - Poppins ===== */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0C40E8;
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
            background-color: #0C40E8;
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

        form .fields .input-field1 {
            display: flex;
            width: calc(100% / 2 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        .input-field form .fields .input-field {
            display: flex;
            width: calc(100% / 3 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        label {
            font-size: 12px;
            font-weight: 500;
            color: #2e2e2e;
        }

        .input-field form .fields .input-field {
            display: flex;
            width: calc(100% / 3 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        input,
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

        .input-field form .fields .input-field {
            display: flex;
            width: calc(100% / 3 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        input :focus,
        .input-field form .fields .input-field {
            display: flex;
            width: calc(100% / 3 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        select:focus {
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.13);
        }

        .input-field form .fields .input-field {
            display: flex;
            width: calc(100% / 3 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        select,
        .input-field form .fields .input-field {
            display: flex;
            width: calc(100% / 3 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        input[type="date"] {
            color: #707070;
        }

        .input-field form .fields .input-field {
            display: flex;
            width: calc(100% / 3 - 15px);
            flex-direction: column;
            margin: 4px 0;
        }

        input[type="date"]:valid {
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
            background-color: #0C40E8;
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

        .linkmasuk:hover {
            color: #0C40E8;
        }

        @media (max-width: 750px) {
            .container form {
                overflow-y: scroll;
            }

            .container form::-webkit-scrollbar {
                display: none;
            }

            form .fields .input-field form .fields .input-field {
                display: flex;
                width: calc(100% / 3 - 15px);
                flex-direction: column;
                margin: 4px 0;
            }

                {
                width: calc(100% / 2 - 15px);
            }
        }

        @media (max-width: 550px) {
            form .fields .input-field form .fields .input-field {
                display: flex;
                width: calc(100% / 3 - 15px);
                flex-direction: column;
                margin: 4px 0;
            }

                {
                width: 100%;
            }
        }

        /* Tambahkan gaya khusus untuk konten kamera */
        .camera-content {
            width: 100%;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Gaya tombol pembatalan */
        .cancel-btn {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
        }

        /* Gaya nama file kamera */
        .camera-file-name {
            position: absolute;
            bottom: 5px;
            left: 5px;
            font-size: 12px;
            color: #555;
        }

        /* Gaya ikon kamera */
        .icon {
            font-size: 20px;
            margin-right: 5px;
            color: #0C40E8;
        }
    </style>

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Responsive Regisration Form </title>
</head>

<body>
    <div class="container">
        <header>Registration</header>
        <div class="masuk" style="margin-top: 5px;">
            <p>Sudah Punya Akun Develop? <a class="linkmasuk" style=" text-decoration: none;"
                    href="http://127.0.0.1:8000/session/auth/developer/signin">Masuk</a></p>
        </div>

        <form action="/session/auth/developer/signup/create" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Owner</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nama Lengkap</label>
                            <input type="text" placeholder="Nama Lengkap" required name="name">
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Alamat Email"required name="email">
                        </div>

                        <div class="input-field">
                            <label>Password</label>
                            <input type="text" placeholder="Kata Sandi"required name="password">
                        </div>
                        <div class="input-field">
                            <label>Wajah</label>
                            <input type="file" placeholder="Foto Wajah"required name="face">
                        </div>
                        <div class="input-field">
                            <label>KTP</label>
                            <input type="file" placeholder="Foto KTP"required name="ktp">
                        </div>




                    </div>
                </div>

                <div class="details ID">

                    <button class="nextBtn" style="margin-top: -0px">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Developer</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Perusahaan</label>
                            <input type="text" placeholder="Nama Perussahaan" name="company">
                        </div>

                        <div class="input-field">
                            <label>Email Perusahaan</label>
                            <input type="text" placeholder="Email Perusahaan" name="cmail">
                        </div>

                        <div class="input-field">
                            <label>Kata Sandi</label>
                            <input type="text" placeholder="Kata Sandi Perusahaan" name="cpassword">
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label class="col-md-3 col-form-label" for="provinsi">Provinsi</label>
                                <select class="form-select" name="provinces_id" id="provinsi"
                                    data-placeholder="Pilih Provinsi" required>
                                    <option>Pilih Provinsi</option>
                                    @foreach ($provinces as $item)
                                        <option value="{{ $item->id }}" {{ old('provinces_id') == $item->id }}>
                                            {{ $item->name }}</option>
                                    @endforeach
                                    @error('province_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-form-label" for="kota">Kabupaten / Kota</label>
                                <select class="form-select " name="regencies_id" id="kota"
                                    data-placeholder="Pilih Kota" required>
                                    <option></option>
                                    @if (old('provinces_id'))
                                        @foreach ($regencies as $item)
                                            <option value="{{ $item->id }}" {{ old('regencies_id') == $item->id }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    @endif
                                    @error('regency_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-form-label" for="kecamatan">Kecamatan</label>
                                <select class="form-select " name="districts_id" id="kecamatan"
                                    data-placeholder="Pilih kecamatan" required>
                                    <option></option>
                                    @if (old('regencies_id'))
                                        @foreach ($districts as $item)
                                            <option value="{{ $item->id }}" {{ old('districts_id') == $item->id }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    @endif
                                    @error('district_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-form-label" for="desa">Desa</label>
                                <select class="form-select " name="villages_id" id="desa"
                                    data-placeholder="Pilih Desa" required>
                                    <option></option>
                                    @if (old('districts_id'))
                                        @foreach ($villages as $item)
                                            <option value="{{ $item->id }}"
                                                {{ old('villages_id') == $item->id }}>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    @endif
                                    @error('village_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </select>
                            </div>
                        </div>

                        <div class="input-field">
                            <label>Alamat</label>
                            <input type="text" placeholder="Enter block number" name="address">
                        </div>

                        <div class="input-field">
                            <label>Nomor Induk Berusaha</label>
                            <input type="text" placeholder="Enter ward number" name="license[]">
                        </div>
                        <div class="input-field">
                            <label>Nomor Pokok Wajib</label>
                            <input type="text" placeholder="Enter ward number" name="license[]">
                        </div>
                        <div class="input-field">
                            <label>Sertifikat Badan Usaha</label>
                            <input type="text" placeholder="Enter ward number" name="license[]">
                        </div>
                        <div class="input-field">
                            <label>Telephone</label>
                            <input type="tel" placeholder="Enter ward number">
                        </div>
                    </div>
                </div>
                <div class="details family">


                    <div class="buttons">
                        <button class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </button>
                        <button type="submit" class="submit" formaction="/beranda">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.form-control, .form-select, .form-control, .form-check-input').on('focus', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.invalid-feedback').remove();
                if ($(this).hasClass('form-check-input')) {
                    $(this).closest('.form-check').find('.invalid-feedback').remove();
                }
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            function onChangeSelect(url, id, name) {
                // send ajax request to get the regency of the selected province and append to the select tag
                $.ajax({
                    url: url,
                    type: 'GET',
                    data: {
                        id: id
                    },
                    success: function(data) {
                        let target = $('#' + name);
                        target.attr('disabled', false);
                        target.empty()
                        target.attr('placeholder', target.data('placeholder'))
                        target.append(`<option> ${target.data('placeholder')} </option>`)
                        $.each(data, function(key, value) {
                            target.append(`<option value="${key}">${value}</option>`)
                        });
                    }
                });
            }

            $('#kota').prop('disabled', true);
            $('#kecamatan').prop('disabled', true);
            $('#desa').prop('disabled', true);


            $('#provinsi').on('change', function() {
                var id = $(this).val();
                var url = `{{ route('get.regency') }}`;
                $('#kota').empty().prop('disabled', false);
                $('#kecamatan').empty().prop('disabled', true);
                $('#desa').empty().prop('disabled', true);
                onChangeSelect(url, id, 'kota');
            });

            $('#kota').on('change', function() {
                var id = $(this).val();
                var url = `{{ route('get.districts') }}`;
                $('#kecamatan').empty().prop('disabled', false);
                $('#desa').empty().prop('disabled', true);
                onChangeSelect(url, id, 'kecamatan');
            });

            $('#kecamatan').on('change', function() {
                var id = $(this).val();
                var url = `{{ route('get.villages') }}`;
                $('#desa').empty().prop('disabled', false);
                onChangeSelect(url, id, 'desa');
            });

            // $('.single-select-field').select2({
            //     theme: "bootstrap-5",
            //     width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
            //         'style',
            //     placeholder: $(this).data('placeholder'),
            // });

        });
    </script>
    <script>
        const form = document.querySelector("form");
        const nextBtn = form.querySelector(".nextBtn");
        const backBtn = form.querySelector(".backBtn");
        const allInput = form.querySelectorAll(".first input");

        nextBtn.addEventListener("click", () => {
            allInput.forEach(input => {
                if (input.value != "") {
                    form.classList.add('secActive');
                } else {
                    form.classList.remove('secActive');
                }
            });
            currentStep = 2;
            updateStep();
        });

        backBtn.addEventListener("click", () => {
            currentStep = 1;
            updateStep();
        });


        // const video = document.getElementById("video");
        // const startButton = document.getElementById("start-btn");
        // const captureButton = document.getElementById("capture-btn");
        // const cancelCaptureButton = document.getElementById("cancel-capture-btn");

        // let stream;
        // let cameraActive = false; // Variable to track camera activation status

        // function startCamera() {
        //     if (cameraActive) return; // Jika kamera sudah aktif, keluar dari fungsi
        //     cameraActive = true; // Set status kamera menjadi aktif
        //     navigator.mediaDevices.getUserMedia({
        //             video: true
        //         })
        //         .then(mediaStream => {
        //             stream = mediaStream;
        //             video.srcObject = stream;
        //             startButton.style.display = "none";
        //             captureButton.style.display = "block";
        //             cancelCaptureButton.style.display = "block";
        //             document.querySelector(".content").style.display = "none";
        //             document.querySelector(".image").style.display = "block";
        //         })
        //         .catch(error => {
        //             console.error("Error accessing camera:", error);
        //         });
        // }


        // // Rest of your code...

        // let capturedImage = null;

        // function captureSnapshot() {
        //     const canvas = document.createElement("canvas");
        //     const targetWidth = 150;
        //     const targetHeight = 150;
        //     canvas.width = targetWidth;
        //     canvas.height = targetHeight;
        //     cameraActive = false;

        //     // Calculate scaling factor for resizing
        //     const scaleFactor = Math.min(targetWidth / video.videoWidth, targetHeight / video.videoHeight);

        //     const drawWidth = video.videoWidth * scaleFactor;
        //     const drawHeight = video.videoHeight * scaleFactor;

        //     const xOffset = (canvas.width - drawWidth) / 2;
        //     const yOffset = (canvas.height - drawHeight) / 2;

        //     canvas.getContext("2d").drawImage(video, xOffset, yOffset, drawWidth, drawHeight);

        //     const image = document.createElement("img");
        //     image.src = canvas.toDataURL();
        //     image.width = targetWidth;
        //     image.height = targetHeight;
        //     image.style.marginTop = "-10px"; // Set the margin-top to -10px

        //     const imageContainer = document.querySelector(".image");
        //     imageContainer.innerHTML = "";
        //     imageContainer.appendChild(image);

        //     // Store the captured image
        //     capturedImage = image.src;

        //     // Show the "Start Camera" button again
        //     startButton.style.display = "block";
        //     captureButton.style.display = "none";
        //     cancelCaptureButton.style.display = "none";
        // }






        // function cancelCapture() {
        //     // Stop camera stream
        //     if (stream) {
        //         const tracks = stream.getTracks();
        //         tracks.forEach(track => track.stop());
        //     }

        //     // Reset UI
        //     startButton.style.display = "block";
        //     captureButton.style.display = "none";
        //     cancelCaptureButton.style.display = "none";
        //     document.querySelector(".content").style.display = "block";
        //     document.querySelector(".image").style.display = "none";
        // }

        // Menambahkan event listener untuk tombol "Cancel"
        // cancelCaptureButton.addEventListener("click", cancelCapture);
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eigentum</title>
    <link rel="stylesheet" href="/css/auth/developer/register.css" />


</head>

<body>
    <div class="container">
        <div class="step-indicator">
            <div class="active"></div>
            <div></div>
            <div></div>
        </div>
        <form id="cool-form" action="/admin/developer/add" method="POST">
            <div class="form-step active">
                <div class="input-field">
                    <i class="fa-sharp fa-solid fa-building"></i>
                    <input type="text" placeholder="Id" name="id" />
                </div>
                <div class="input-field">
                    <i class="fa-sharp fa-solid fa-building"></i>
                    <input type="text" placeholder="Nama" name="name" />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="owner_emal" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="owner_password" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="validasi Password" />
                </div>

                <label for="file-upload" class="file-label">
                    <input type="file" id="file-upload" class="file-input" name="ktp">
                    <span class="file-button">Choose a file</span>
                    <span class="file-name">foto ktp</span>
                </label>
                <label for="file-uploadandktp" class="file-labelandktp">
                    <input type="file" id="file-uploadandktp" class="file-input" name="face">
                    <span class="file-buttonandktp">Choose a file</span>
                    <span class="file-name">foto dengan ktp</span>
                </label>
                <br>
                <br>
                <br>

                <button type="submit" class="btn next " value="Sign up">NEXT</button>
            </div>

            <div class="form-step">
                <div class="input-field">
                    <i class="fa-sharp fa-solid fa-building"></i>
                    <input type="text" placeholder="Nama Perusahaan" name="company" />
                </div>
                <div class="input-field">
                    <i class="fa-sharp fa-solid fa-building"></i>
                    <input type="number" placeholder="Nomer Telp Perusahaan" name="telp" />
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="validasi Password" />
                </div>
                <label for="file-uploadandktp" class="file-labelandktp">
                    <input type="file" id="file-uploadandktp" class="file-input" name="license[]">
                    <span class="file-buttonSBU">Choose a file</span>
                    <span class="file-name">Sertifikat Badan Usaha</span>
                </label>
                <label for="file-uploadandktp" class="file-labelandktp">
                    <input type="file" id="file-uploadandktp" class="file-input" name="license[]">
                    <span class="file-buttonNIU">Choose a file</span>
                    <span class="file-name">Nomer Induk Usaha</span>
                </label>
                <button class="previous btn">Previous</button>
                <button class="next btn">Next</button>
            </div>

            <div class="form-step">
                <label for="file-uploadandktp" class="file-labelandktp">
                    <input type="file" id="file-uploadandktp" class="file-input" name="license[]">
                    <span class="file-buttonNPWP">Choose a file</span>
                    <span class="file-name">Nomer Pokok Wajib Pajak</span>
                </label><br>
                <div class="input-field dropdown">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="select-wrapper">
                        <span class="selected-option">Choose an Provinsi</span>
                        <ul class="dropdown-list">
                            <li>Option 1</li>
                            <li>Option 2</li>
                            <li>Option 3</li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="input-field dropdown">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="select-wrapper">
                        <span class="selected-option">Choose an Kabupaten</span>
                        <ul class="dropdown-list">
                            <li>Option 1</li>
                            <li>Option 2</li>
                            <li>Option 3</li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="input-field dropdown">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="select-wrapper">
                        <span class="selected-option">Choose an Kecamatan</span>
                        <ul class="dropdown-list">
                            <li>Option 1</li>
                            <li>Option 2</li>
                            <li>Option 3</li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="input-field dropdown">
                    <i class="fa-solid fa-location-dot"></i>
                    <div class="select-wrapper">
                        <span class="selected-option">Choose an Desa</span>
                        <ul class="dropdown-list">
                            <li>Option 1</li>
                            <li>Option 2</li>
                            <li>Option 3</li>
                        </ul>
                    </div>
                </div>
                <br><br>

                <button class="previous btn">Previous</button>
                <button type="submit" class="btn">Submit</button>
            </div>
        </form>
    </div>

    <script>
        const form = document.getElementById('cool-form');
        const formSteps = Array.from(form.querySelectorAll('.form-step'));
        // Add an event listener to toggle the dropdown
        const dropdownWrapper = document.querySelector('.input-field.dropdown .select-wrapper');
        dropdownWrapper.addEventListener('click', () => {
            dropdownWrapper.classList.toggle('open');
        });

        // Add event listeners to handle dropdown option selection
        const dropdownOptions = document.querySelectorAll('.input-field.dropdown .dropdown-list li');
        dropdownOptions.forEach((option) => {
            option.addEventListener('click', () => {
                const selectedOption = option.textContent;
                const selectedOptionElement = dropdownWrapper.querySelector('.selected-option');
                selectedOptionElement.textContent = selectedOption;
                dropdownWrapper.classList.remove('open');
            });
        });

        let currentStep = 0;

        function showStep(stepIndex) {
            formSteps.forEach((step, index) => {
                step.classList.toggle('active', index === stepIndex);
            });

            const stepIndicators = document.querySelectorAll('.step-indicator div');
            stepIndicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === stepIndex);
            });
        }

        function goToPreviousStep() {
            currentStep--;
            if (currentStep < 0) {
                currentStep = 0;
            }
            showStep(currentStep);
        }

        function goToNextStep() {
            currentStep++;
            if (currentStep >= formSteps.length) {
                currentStep = formSteps.length - 1;
            }
            showStep(currentStep);
        }

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            // Handle form submission here
            // You can use JavaScript or send the data to a server using fetch/axios, etc.
            // Example:
            // const formData = new FormData(form);
            // fetch('your-server-url', {
            //     method: 'POST',
            //     body: formData
            // })
            // .then(response => response.json())
            // .then(data => console.log(data))
            // .catch(error => console.error(error));
        });

        const previousBtns = form.querySelectorAll('.previous');
        previousBtns.forEach((btn) => {
            btn.addEventListener('click', goToPreviousStep);
        });

        const nextBtns = form.querySelectorAll('.next');
        nextBtns.forEach((btn) => {
            btn.addEventListener('click', goToNextStep);
        });

        showStep(currentStep);
    </script>
    </script>
</body>

</html>
