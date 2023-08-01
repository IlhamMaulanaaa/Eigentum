@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Detail Agent</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $agent->name }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $agent->email }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group row col-12">
                                <div class="form-group col-auto mb-3">
                                    <label for="Provinces" class="form-label">Provinsi</label>
                                    <input type="text" class="form-control" id="Provinces" name="Provinces"
                                        value="{{ implode(', ',$agent->provinces()->pluck('name')->toArray()) }}" readonly
                                        disabled>
                                </div>
                                <div class="form-group col-auto mb-3">
                                    <label for="Regencies" class="form-label">Kota</label>
                                    <input type="text" class="form-control" id="Regencies" name="Regencies"
                                        value="{{ implode(', ',$agent->regencies()->pluck('name')->toArray()) }}" readonly
                                        disabled>
                                </div>
                                <div class="form-group col-auto mb-3">
                                    <label for="District" class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" id="District" name="District"
                                        value="{{ implode(', ',$agent->districts()->pluck('name')->toArray()) }}" readonly
                                        disabled>
                                </div>
                                <div class="form-group col-auto mb-3">
                                    <label for="Village" class="form-label">Desa</label>
                                    <input type="text" class="form-control" id="Village" name="Village"
                                        value="{{ implode(', ',$agent->villages()->pluck('name')->toArray()) }}" readonly
                                        disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ $agent->address }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group col-auto row">
                                <div class="form-group col-auto">
                                    <label for="ktp" class="form-label">Ktp</label>
                                    <div class="image-text-wrapper">
                                        <img src="{{ asset('storage/' . $agent->ktp) }}" alt="" width="120">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group col-auto">
                                    <label for="face" class="form-label">Face</label>
                                    <div class="image-text-wrapper">
                                        <img src="{{ asset('storage/' . $agent->face) }}" alt="" width="120">
                                    </div>
                                </div>
                                <br>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="telp" class="form-label">Telephone</label>
                                <input type="text" class="form-control" id="telp" name="telp"
                                    value="{{ $agent->telp }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="properties" class="form-label">Properties</label>
                                <ul>
                                    @foreach ($agent->properties as $property)
                                        <li>{{ $property->title }}
                                            <a href="{{ route('property.show', $property->id) }}"
                                                class="text-warning">Detail</a>
                                            <a href="{{ route('property.edit', $property->id) }}">Edit</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <br>
                            <div class="form-group text-end">
                                <a type="button" class="btn btn-warning" href="{{ route('agent.index') }}">Back</a>
                                <form action="{{ route('agent.destroy', $agent->id) }}" method="get" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"
                                        onclick="return  confirm('Apakah Anda Yakin')">Delete</button>
                                </form>
                                <a type="button" class="btn btn-primary"
                                    href="{{ route('agent.edit', $agent->id) }}">Edit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
