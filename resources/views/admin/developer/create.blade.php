@extends('admin.layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-ad-12">
                    <h3 class="text-dark">Tambah Data Developer</h3>
                    <br>
                    <div class="card bg-light">
                        <div class="card-body">
                            <form method="post" action="/admin/developer/add" enctype="multipart/form-data">
                                @csrf
                                <h1>Owner</h1>
                                <div class="form-group owner">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control noscroll" id="name" name="name">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" class="form-control noscroll" id="email"
                                            name="owner_email">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control noscroll" id="password"
                                            name="owner_password">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="ktp" class="form-label">ID card</label>
                                        <input type="file" class="form-control noscroll" id="ktp" name="ktp">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="face" class="form-label">Face</label>
                                        <input type="file" class="form-control noscroll" id="face" name="face">
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <h1>Developer</h1>
                                <div class="form-group developer">
                                    <div class="form-group">
                                        <label for="company" class="form-label">Company</label>
                                        <input type="text" class="form-control noscroll" id="company" name="company">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control noscroll" id="email" name="email">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control noscroll" id="password" name="password">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label class="col-md-3 col-form-label" for="provinsi">Provinsi</label>
                                            <select class="form-select" name="provinces_id" id="provinsi"
                                                data-placeholder="Pilih Provinsi" required>
                                                <option>Pilih Provinsi</option>
                                                @foreach ($provinces as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-form-label" for="kota">Kabupaten / Kota</label>
                                            <select class="form-select" name="regencies_id" id="kota"
                                                data-placeholder="Pilih Kota" required>
                                                <option></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-form-label" for="kecamatan">Kecamatan</label>
                                            <select class="form-select" name="districts_id" id="kecamatan"
                                                data-placeholder="Pilih kecamatan" required>
                                                <option></option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 col-form-label" for="desa">Desa</label>
                                            <select class="form-select" name="villages_id" id="desa"
                                                data-placeholder="Pilih Desa" required>
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control noscroll" id="address" name="address">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="nib" class="form-label">Nomor Induk Berusaha</label>
                                        <input type="file" class="form-control noscroll" id="license_nib"
                                            name="license[]" multiple>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="npwp" class="form-label">Nomor Pokok Wajib Pajak</label>
                                        <input type="file" class="form-control noscroll" id="license_npwp"
                                            name="license[]" multiple>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="sbu" class="form-label">Sertifikat Badan Usaha</label>
                                        <input type="file" class="form-control noscroll" id="license_sbu"
                                            name="license[]" multiple>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="telp" class="form-label">Telephone</label>
                                        <input type="number" class="form-control noscroll" id="telp"
                                            name="telp">
                                    </div>
                                </div>
                                <br>
                                <div class="float-end">
                                    <a type="button" class="btn btn-warning" href="/admin/developer/data">Back</a>
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
@endsection
