@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Eigentum</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="/css/pages/profile.css">
    </head>

    <body>
        <div class="" style="margin-top: 90px">
            <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                <div class="profile-tab-nav border-right">
                    <div class="p-4">
                        <div class="img-circle text-center mb-3">
                            <img src="{{ asset('storage/' . $agents->face) }}" class="img-thumbnail" alt=""
                                width="120">
                        </div>
                        <h4 class="text-center">{{ auth()->user()->name }}</h4>
                    </div>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab"
                            aria-controls="account" aria-selected="true">
                            <i class="fa fa-home text-center mr-1"></i>
                            Profile
                        </a>
                        {{-- <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab"
                            aria-controls="password" aria-selected="false">
                            <i class="fa fa-key text-center mr-1"></i>
                            Kata Sandi
                        </a>
                        <a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab"
                            aria-controls="security" aria-selected="false">
                            <i class="fa fa-user text-center mr-1"></i>
                            Keamanan
                        </a>
                        <a class="nav-link" id="notification-tab" data-toggle="pill" href="#notification" role="tab"
                            aria-controls="notification" aria-selected="false">
                            <i class="fa fa-bell text-center mr-1"></i>
                            Notifikasi
                        </a> --}}
                    </div>
                </div>
                <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                        <form action="{{ route('agent.update.agent', $agents->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <h3 class="mb-4">Profil</h3>
                            <h5 class="mb-4">Pemilik</h5>
                            <div class="row" style="margin-top: -20px;">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ old('name', auth()->user()->name) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email"
                                            value=" {{ old('email', auth()->user()->email) }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-auto">
                                        <div class="form-group">
                                            <label for="ktp" class="form-label">Ktp</label>
                                            @if ($agents->ktp)
                                                <div class="mb-3">
                                                    <img src="{{ asset('storage/' . $agents->ktp) }}"
                                                        alt="{{ $agents->ktp }}" class="img-thumbnail" width="120">
                                                </div>
                                            @endif
                                            <input type="file" class="form-control" id="ktp" name="ktp">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-group">
                                            <label for="face" class="form-label">Face</label>
                                            @if ($agents->face)
                                                <div class="mb-3">
                                                    <img src="{{ asset('storage/' . $agents->face) }}"
                                                        alt="{{ $agents->face }}" class="img-thumbnail" width="120">
                                                </div>
                                            @endif
                                            <input type="file" class="form-control" id="face" name="face">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nomor Telephone</label>
                                        <input type="text" class="form-control" name="telp"
                                            value="{{ old('telp', $agents->telp) }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control" name="address"
                                            value="{{ old('address', $agents->address) }}">
                                    </div>
                                </div>
                                <br>

                            </div>
                            <br>
                            <div>
                                <button type="submit" class="btn btn-primary">Memperbarui</button>
                                <button class="btn btn-light">Membatalkan</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                        <h3 class="mb-4">Pengaturan Kata Sandi</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kata Sandi Lama</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kata Sandi Baru</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Konfirmasi Kata Sandi Baru</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary">Memperbarui</button>
                            <button class="btn btn-light">Membatalkan</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                        <h3 class="mb-4">Pengaturan Keamanan</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Masuk</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Autentikasi dua faktor</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="recovery">
                                        <label class="form-check-label" for="recovery">
                                            Pemulihan
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary">Memperbarui</button>
                            <button class="btn btn-light">Membatalkan</button>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                        <h3 class="mb-4">Pengaturan Notifikasi</h3>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="notification1">
                                <label class="form-check-label" for="notification1">
                                    Terima notifikasi tentang properti baru yang sesuai dengan kriteria saya.
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="notification2">
                                <label class="form-check-label" for="notification2">
                                    Terima notifikasi tentang penawaran dan promo terbaru.
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="notification3">
                                <label class="form-check-label" for="notification3">
                                    Terima notifikasi tentang perkembangan terbaru di daerah properti yang saya pilih.
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-primary">Memperbarui</button>
                            <button class="btn btn-light">Membatalkan</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <script>
            function defaultBtnActive(wrapperNumber) {
                const wrapper = document.querySelector(".wrapper" + wrapperNumber);
                const fileName = wrapper.querySelector(".file-name");
                const defaultBtn = document.querySelector("#default-btn" + wrapperNumber);
                const customBtn = wrapper.querySelector(".custom-btn");
                const MembatalkanBtn = wrapper.querySelector("#Membatalkan-btn i");
                const img = wrapper.querySelector("img");
                let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

                defaultBtn.click();

                defaultBtn.addEventListener("change", function() {
                    const file = this.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function() {
                            const result = reader.result;
                            img.src = result;
                            wrapper.classList.add("active");
                        };
                        MembatalkanBtn.addEventListener("click", function() {
                            img.src = "";
                            wrapper.classList.remove("active");
                        });
                        reader.readAsDataURL(file);
                    }
                    if (this.value) {
                        let valueStore = this.value.match(regExp);
                        fileName.textContent = valueStore;
                    }
                });
            }


            const video = document.getElementById("video");
            const startButton = document.getElementById("start-btn");
            const captureButton = document.getElementById("capture-btn");
            const cancelCaptureButton = document.getElementById("cancel-capture-btn");

            let stream;

            function startCamera() {
                navigator.mediaDevices.getUserMedia({
                        video: true
                    })
                    .then(mediaStream => {
                        stream = mediaStream;
                        video.srcObject = stream;
                        startButton.style.display = "none";
                        captureButton.style.display = "block";
                        cancelCaptureButton.style.display = "block";
                        document.querySelector(".content").style.display = "none";
                        document.querySelector(".image").style.display = "block";
                    })
                    .catch(error => {
                        console.error("Error accessing camera:", error);
                    });
            }

            function captureSnapshot() {
                const canvas = document.createElement("canvas");
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                canvas.getContext("2d").drawImage(video, 0, 0, canvas.width, canvas.height);
                const image = document.createElement("img");
                image.src = canvas.toDataURL();
                document.querySelector(".image").innerHTML = "";
                document.querySelector(".image").appendChild(image);

                // Stop camera stream
                if (stream) {
                    const tracks = stream.getTracks();
                    tracks.forEach(track => track.stop());
                }

                captureButton.style.display = "none";
                startButton.style.display = "block";
                cancelCaptureButton.style.display = "none";
            }

            function cancelCapture() {
                // Stop camera stream
                if (stream) {
                    const tracks = stream.getTracks();
                    tracks.forEach(track => track.stop());
                }

                // Reset UI
                startButton.style.display = "block";
                captureButton.style.display = "none";
                cancelCaptureButton.style.display = "none";
                document.querySelector(".content").style.display = "block";
                document.querySelector(".image").style.display = "none";
            }

            // Menambahkan event listener untuk tombol "Cancel"
            cancelCaptureButton.addEventListener("click", cancelCapture);
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>

    </html>
@endsection
