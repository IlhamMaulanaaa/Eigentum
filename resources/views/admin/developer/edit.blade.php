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
                    <h3 class="text-dark">Edit Developer</h3>
                    <br>
                    <div class="card bg-light">
                        <div class="card-body">
                            <form method="post" action="/admin/developer/update/ {{ $developer->id }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="form-group col-auto">
                                        <label for="company" class="form-label">Company</label>
                                        <input type="text" class="form-control" id="company" name="company"
                                            value="{{ old('company', $developer->company) }}" required>
                                    </div>
                                    <br>
                                    <div class="form-group col-auto">
                                        <label for="email" class="form-label">Oompany Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            value="{{ old('email', $developer->email) }}" required>
                                    </div>
                                    <br>
                                    <div class="form-group col-auto">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="form-group col-auto">
                                        <label for="name" class="form-label">Owner</label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ old('name', $developer->owners->name) }}" required>
                                    </div>
                                    <br>
                                    <div class="form-group col-auto">
                                        <label for="owner_email" class="form-label">Owner Email</label>
                                        <input type="text" class="form-control" id="owner_email" name="owner_email"
                                            value="{{ old('owner_email', $developer->owners->owner_email) }}" required>
                                    </div>
                                    <br>
                                    <div class="form-group col-auto">
                                        <label for="owner_password" class="form-label">Owner Password</label>
                                        <input type="password" class="form-control" id="owner_password"
                                            name="owner_password">
                                    </div>
                                    <br>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-auto">
                                        <div class="form-group">
                                            <label for="ktp" class="form-label">Id Card</label>
                                            @if ($developer->owners->ktp)
                                                <div class="mb-3">
                                                    <img src="{{ asset('storage/' . $developer->owners->ktp) }}"
                                                        alt="{{ $developer->owners->ktp }}" class="img-thumbnail"
                                                        width="120">
                                                </div>
                                            @endif
                                            <input type="file" class="form-control" id="ktp" name="ktp">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-group">
                                            <label for="face" class="form-label">Face</label>
                                            @if ($developer->owners->face)
                                                <div class="mb-3">
                                                    <img src="{{ asset('storage/' . $developer->owners->face) }}"
                                                        alt="{{ $developer->owners->face }}" class="img-thumbnail"
                                                        width="120">
                                                </div>
                                            @endif
                                            <input type="file" class="form-control" id="face" name="face">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                {{-- <div class="form-group">
                                    <div class="form-group">
                                        <label class="col-md-3 col-form-label" for="provinsi">Provinsi</label>
                                        <select class="form-select" name="provinces_id" id="provinsi" 
                                            data-placeholder="Pilih Provinsi">
                                            <option value=""></option>
                                            @foreach ($provinces as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-form-label" for="kota">Kabupaten / Kota</label>
                                        <select class="form-select" name="regencies_id" id="kota"
                                            data-placeholder="Pilih Kota">
                                            <option></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-form-label" for="kecamatan">Kecamatan</label>
                                        <select class="form-select" name="districts_id" id="kecamatan"
                                            data-placeholder="Pilih kecamatan">
                                            <option></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 col-form-label" for="desa">Desa</label>
                                        <select class="form-select" name="villages_id" id="desa"
                                            data-placeholder="Pilih Desa">
                                            <option></option>
                                        </select>
                                    </div>
                                </div>
                                <br> --}}
                                <div class="col-auto">
                                    @foreach ($licenses as $index => $license)
                                        <div class="file-container my-2">
                                            <a href="{{ route('pdf.preview', ['file' => $license]) }}"
                                                target="_blank">Tampilkan
                                                {{ pathinfo($license, PATHINFO_FILENAME) }}</a>
                                        </div>
                                        <input type="file" class="form-control noscroll" id="license"
                                            name="license[{{ $index }}]" multiple>
                                    @endforeach
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="telp" class="form-label">Telephone</label>
                                    <input type="number" class="form-control" id="telp" name="telp"
                                        value="{{ old('telp', $developer->telp) }}" required>
                                </div>
                                <br>
                                <div class="float-end">
                                    <a type="button" class="btn btn-warning"
                                        href="/admin/developer/show/{{ $developer->id }}">Back</a>
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

            {{-- <script>
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
            </script> --}}
    </body>

    </html>
@endsection
