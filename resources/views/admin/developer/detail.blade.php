@extends('admin.layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <style>
            /* Pastikan parent container memiliki lebar yang sesuai */
            .file-container {
                max-width: 100%;
                height: auto;
                overflow: hidden;
            }
        </style>
    </head>

    <body>

    </body>
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Detail Developer</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-group col-auto row">
                                <div class="form-group col-6">
                                    <label for="company" class="form-label">Company</label>
                                    <input type="text" class="form-control" id="company" name="company"
                                        value="{{ $developer->company }}" readonly disabled>
                                </div>
                                <div class="form-group col-6">
                                    <label for="email" class="form-label">Company Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ $developer->email }}" readonly disabled>
                                </div>
                            </div>
                            <br>
                            <div class="form-group col-auto row">
                                <div class="form-group col-6">
                                    <label for="owner" class="form-label">Owner</label>
                                    <input type="text" class="form-control" id="owner" name="owner"
                                        value="{{ $developer->owners->name }}" readonly disabled>
                                </div>

                                <div class="form-group col-6">
                                    <label for="owner" class="form-label">Owner Email</label>
                                    <input type="owner" class="form-control" id="owner" name="owner"
                                        value="{{ $developer->owners->owner_email }}" readonly disabled>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <div class="form-group col-auto">
                                    <label for="ktp" class="form-label">Ktp</label>
                                    <div class="image-text-wrapper">
                                        <img src="{{ asset('storage/' . $developer->owners->ktp) }}" class="img-thumbnail"
                                            alt="" width="120">
                                    </div>
                                </div>

                                <div class="form-group col-auto">
                                    <label for="face" class="form-label">Face</label>
                                    <div class="image-text-wrapper">
                                        <img src="{{ asset('storage/' . $developer->owners->face) }}" class="img-thumbnail"
                                            alt="" width="120">
                                    </div>
                                </div>
                            </div>
                            <br>

                            <div class="form-group row col-12">
                                <div class="form-group col-auto mb-3">
                                    <label for="Provinces" class="form-label">Provinsi</label>
                                    <input type="text" class="form-control" id="Provinces" name="Provinces"
                                        value="{{ implode(', ',$developer->provinces()->pluck('name')->toArray()) }}"
                                        readonly disabled>
                                </div>
                                <div class="form-group col-auto mb-3">
                                    <label for="Regencies" class="form-label">Kota</label>
                                    <input type="text" class="form-control" id="Regencies" name="Regencies"
                                        value="{{ implode(', ',$developer->regencies()->pluck('name')->toArray()) }}"
                                        readonly disabled>
                                </div>
                                <div class="form-group col-auto mb-3">
                                    <label for="District" class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" id="District" name="District"
                                        value="{{ implode(', ',$developer->districts()->pluck('name')->toArray()) }}"
                                        readonly disabled>
                                </div>
                                <div class="form-group col-auto mb-3">
                                    <label for="Village" class="form-label">Desa</label>
                                    <input type="text" class="form-control" id="Village" name="Village"
                                        value="{{ implode(', ',$developer->villages()->pluck('name')->toArray()) }}"
                                        readonly disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control noscroll" id="address" name="address"
                                    value="{{ $developer->address }}" readonly disabled>
                            </div><br>
                            <div class="form-group">
                                <label for="license" class="form-label">License</label>
                                @foreach ($licenseFile as $index => $file)
                                    <div class="col-auto">
                                        <div class="file-container">
                                            {{-- <embed src="{{ asset('storage/' . $file) }}" type="application/pdf"
                                                width="40%" height="40%"/> --}}
                                            <a href="{{ route('pdf.preview', ['file' => $file]) }}"
                                                target="_blank">Tampilkan {{ pathinfo($file, PATHINFO_FILENAME) }}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="telp" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="telp" name="telp"
                                    value="{{ $developer->telp }}" readonly disabled>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="properties" class="form-label">Property</label>
                                <ul>
                                    @foreach ($developer->properties as $property)
                                        <li>
                                            {{ $property->title }}
                                            <a href="{{ route('property.show', $property->id) }}"
                                                class="text-warning">Detail</a>
                                            <a href="{{ route('property.edit', $property->id) }}">Edit</a>
                                        </li>
                                    @endforeach
                                </ul>

                                <a href="{{ route('propertyid.create', $developer->id) }}" class="btn btn-success">Tambah
                                    Property</a>
                            </div>
                            <br>

                            <div class="form-group text-end">
                                <a type="button" class="btn btn-warning" href="{{ route('developer.index') }}">Back</a>
                                <form action="{{ route('developer.destroy', $developer->id) }}" method="get"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda Yakin')">Delete</button>
                                </form>
                                <a type="button" class="btn btn-primary"
                                    href="{{ route('developer.edit', $developer->id) }}">Edit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </html>
@endsection
