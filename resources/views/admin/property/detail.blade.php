@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class=" text-dark">Detail Property</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="form-label">Property</label>
                                <input type="text" class="form-control" id="property" name="property"
                                    value="{{ $property->title }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" readonly disabled value="">{{ $property->description }}</textarea>
                            </div>
                            <br>
                            <div class="form-group row col-12">
                                <div class="form-group col-auto mb-3">
                                    <label for="Provinces" class="form-label">Provinsi</label>
                                    <input type="text" class="form-control" id="Provinces" name="Provinces"
                                        value="{{ implode(', ',$property->provinces()->pluck('name')->toArray()) }}"
                                        readonly disabled>
                                </div>
                                <div class="form-group col-auto mb-3">
                                    <label for="Regencies" class="form-label">Kota</label>
                                    <input type="text" class="form-control" id="Regencies" name="Regencies"
                                        value="{{ implode(', ',$property->regencies()->pluck('name')->toArray()) }}"
                                        readonly disabled>
                                </div>
                                <div class="form-group col-auto mb-3">
                                    <label for="District" class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" id="District" name="District"
                                        value="{{ implode(', ',$property->districts()->pluck('name')->toArray()) }}"
                                        readonly disabled>
                                </div>
                                <div class="form-group col-auto mb-3">
                                    <label for="Village" class="form-label">Desa</label>
                                    <input type="text" class="form-control" id="Village" name="Village"
                                        value="{{ implode(', ',$property->villages()->pluck('name')->toArray()) }}" readonly
                                        disabled>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Address</label>
                                <input class="form-control" id="address" name="address" readonly disabled
                                    value="{{ $property->address }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Developer</label>
                                <input type="text" class="form-control" id="developer_id" name="developer_id"
                                    value="{{ $property->developers->company }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Type</label>
                                <input type="text" class="form-control" id="type_id" name="type_id"
                                    value="{{ $property->types->name }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="properties" class="form-label">Agent</label>
                                <ul>
                                    @foreach ($property->agents as $agent)
                                        <li>{{ $agent->name }}
                                            <a href="{{ route('agent.show', $agent->id) }}" class="text-warning">Detail</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="unit" class="form-label">Unit</label>
                                <ul>
                                    @foreach ($property->units as $unit)
                                        <li>
                                            {{ $unit->title }}
                                            <a href="{{ route('unit.show', $unit->id) }}" class="text-warning">Detail</a>
                                            {{-- <a href="{{ route('unit.edit', $unit->id) }}">Edit</a> --}}
                                        </li>
                                    @endforeach
                                </ul>
                                {{-- <a href="{{ route('unitid.create', $property->id) }}" class="btn btn-success">Tambah
                                    Unit</a> --}}
                            </div>
                            <br>
                            <div class="form-group text-end">
                                <a type="button" class="btn btn-warning" href="{{ route('property.index') }}">Back</a>
                                {{-- <form action="{{ route('property.destroy', $property->id) }}" method="get"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"
                                        onclick="return confirm('Apakah Anda Yakin')">Delete</button>
                                </form> --}}
                                {{-- <a type="button" class="btn btn-primary"
                                    href="{{ route('property.edit', $property->id) }}">Edit</a> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
