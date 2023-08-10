<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Developer</title>
    <!-- Tambahkan link CSS dari Bootstrap atau CSS kustom Anda di sini -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Data Developer - Step <span id="current-step">1</span></div>
                    <div class="card-body">
                        <form id="developer-form" method="post" action="{{ route('developer.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-step active" id="step1">
                                <!-- Isi dengan konten Form Step 1 -->
                                <div class="form-group owner">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text"
                                            class="form-control noscroll @error('name') is-invalid @enderror" id="name"
                                            name="name" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text"
                                            class="form-control noscroll @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password"
                                            class="form-control noscroll @error('password') is-invalid @enderror"
                                            id="password" name="password" value="{{old('password')}}">
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="ktp" class="form-label">Ktp</label>
                                        <input type="file"
                                            class="form-control noscroll @error('ktp') is-invalid @enderror" id="ktp"
                                            name="ktp" value="{{ old('ktp') }}">
                                        @error('ktp')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="face" class="form-label">Face</label>
                                        <input type="file"
                                            class="form-control noscroll @error('face') is-invalid @enderror" id="face"
                                            name="face">
                                        @error('face')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                </div>
                            </div>

                            <div class="form-step" id="step2">
                                <!-- Isi dengan konten Form Step 2 -->
                                <h1>Developer</h1>
                                <div class="form-group developer">
                                    <div class="form-group">
                                        <label for="company" class="form-label">Company</label>
                                        <input type="text"
                                            class="form-control noscroll @error('company') is-invalid @enderror"
                                            id="company" name="company" value="{{ old('company') }}">
                                        @error('company')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="email" class="form-label">Company Email</label>
                                        <input type="email"
                                            class="form-control noscroll @error('company_email') is-invalid @enderror"
                                            id="company_email" name="company_email" value="{{ old('company_email') }}">
                                        @error('company_email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="password" class="form-label">Company Password</label>
                                        <input type="password"
                                            class="form-control noscroll @error('company_password') is-invalid @enderror"
                                            id="company_password" name="company_password" value="{{ old('company_password') }}">
                                        @error('company_password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="col-md-3 col-form-label" for="provinsi">Provinsi</label>
                                            <select class="form-select"
                                                name="provinces_id" id="provinsi" data-placeholder="Pilih Provinsi"
                                                required>
                                                <option>Pilih Provinsi</option>
                                                @foreach ($provinces as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ old('provinces_id') == $item->id  }}>
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
                                                        <option value="{{ $item->id }}"
                                                            {{ old('regencies_id') == $item->id  }}>
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
                                                        <option value="{{ $item->id }}"
                                                            {{ old('districts_id') == $item->id  }}>
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
                                                            {{ old('villages_id') == $item->id  }}>
                                                            {{ $item->name }}</option>
                                                    @endforeach
                                                @endif
                                                @error('village_id')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text"
                                            class="form-control noscroll @error('address') is-invalid @enderror"
                                            id="address" name="address" value="{{ old('address') }}">
                                        @error('address')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="nib" class="form-label">Nomor Induk Berusaha</label>
                                        <input type="file"
                                            class="form-control noscroll @error('license') is-invalid @enderror"
                                            id="license_nib" name="license[]" multiple>
                                        @error('license')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="npwp" class="form-label">Nomor Pokok Wajib Pajak</label>
                                        <input type="file"
                                            class="form-control noscroll @error('license') is-invalid @enderror"
                                            id="license_npwp" name="license[]" multiple>
                                        @error('license')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="sbu" class="form-label">Sertifikat Badan Usaha</label>
                                        <input type="file"
                                            class="form-control noscroll @error('license') is-invalid @enderror"
                                            id="license_sbu" name="license[]" multiple>
                                        @error('license')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="telp" class="form-label">Telephone</label>
                                        <input type="text"
                                            class="form-control noscroll @error('telp') is-invalid @enderror"
                                            id="telp" name="telp" value="{{ old('telp') }}">
                                        @error('telp')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="form-step" id="step3">
                                <!-- Isi dengan konten Form Step 3 -->
                                <h1>Step 3: Address</h1>
                                <!-- Konten Form Step 3 -->
                            </div>

                            <div class="form-step" id="step4">
                                <!-- Isi dengan konten Form Step 4 -->
                                <h1>Step 4: Additional Information</h1>
                                <!-- Konten Form Step 4 -->
                            </div>

                            <div class="text-center mt-3">
                                <button type="button" class="btn btn-secondary" id="prev-step">Previous</button>
                                <button type="button" class="btn btn-primary" id="next-step">Next</button>
                                <button type="submit" class="btn btn-success" id="submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tambahkan script JavaScript di sini -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            const formSteps = $('.form-step');
            let currentStep = 1;

            $('#prev-step').click(function () {
                if (currentStep > 1) {
                    formSteps.removeClass('active');
                    currentStep--;
                    $('#current-step').text(currentStep);
                    $(`#step${currentStep}`).addClass('active');
                }
            });

            $('#next-step').click(function () {
                if (currentStep < formSteps.length) {
                    formSteps.removeClass('active');
                    currentStep++;
                    $('#current-step').text(currentStep);
                    $(`#step${currentStep}`).addClass('active');
                }
            });

            $('#developer-form').submit(function (e) {
                if (currentStep < formSteps.length) {
                    e.preventDefault();
                    alert("Please complete all steps before submitting.");
                }
            });

            // Tambahkan validasi form sesuai kebutuhan Anda

            // ...
        });
    </script>
</body>

</html>
