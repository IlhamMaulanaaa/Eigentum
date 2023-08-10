<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Body styles */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container styles */
        .container {
            text-align: left;
        }

        /* Card styles */
        .card {
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        /* Button styles */
        .btn {
            margin-right: 10px;
        }

        /* Form input styles */
        .form-group label {
            font-weight: bold;
        }

        /* Invalid input styles */
        .form-control.is-invalid,
        .form-select.is-invalid {
            border-color: #dc3545;
        }

        .invalid-feedback {
            color: #dc3545;
        }

        /* Custom styling for the form */
        .container {
            padding: 20px;
        }

        .card {
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        /* Style for buttons */
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:hover {
            background-color: #d39e00;
            border-color: #d39e00;
        }

        /* Custom styling for invalid inputs */
        .form-control.is-invalid,
        .form-select.is-invalid {
            border-color: #dc3545;
        }

        .invalid-feedback {
            color: #dc3545;
        }

        /* Style for dropdowns */
        .form-select {
            appearance: none;
            background: transparent;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        /* Responsive layout adjustments */
        @media (max-width: 576px) {
            .float-end {
                text-align: center;
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Tambah Data Agent</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/session/auth/agent/signup/create" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control noscroll @error('name') is-invalid @enderror"
                                    id="name" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control noscroll @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password"
                                    class="form-control noscroll @error('password') is-invalid @enderror" id="password"
                                    name="password" value="{{ old('password') }}">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
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
                                                <option value="{{ $item->id }}"
                                                    {{ old('regencies_id') == $item->id }}>
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
                                                    {{ old('districts_id') == $item->id }}>
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
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text"
                                    class="form-control noscroll @error('address') is-invalid @enderror" id="address"
                                    name="address" value="{{ old('address') }}">
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="ktp" class="form-label">Ktp</label>
                                <input type="file" class="form-control noscroll @error('ktp') is-invalid @enderror"
                                    id="ktp" name="ktp">
                                @error('ktp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="face" class="form-label">Face</label>
                                <input type="file" class="form-control noscroll @error('face') is-invalid @enderror"
                                    id="face" name="face">
                                @error('face')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="telp" class="form-label">Telephone</label>
                                <input type="text"
                                    class="form-control noscroll @error('telp') is-invalid @enderror" id="telp"
                                    name="telp" value="{{ old('telp') }}">
                                @error('telp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="{{ route('agent.index') }}">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
</body>

</html>
