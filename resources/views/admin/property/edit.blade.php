@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Edit Property</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/property/update/ {{ $property->id }}">
                            @csrf
                            {{-- <div class="form-group">
                                <label for="" class="form-label">unit</label>
                                <input class="form-control" id="unit" name="unit"
                                    value="{{ old('unit', $property->unit) }}" required>
                            </div>
                            <br> --}}
                            <div class="form-group">
                                <label for="property" class="form-label">Property</label>
                                <input class="form-control" id="property" name="property"
                                    value="{{ old('property', $property->property) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" required>{{ old('description', $property->description) }}</textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input class="form-control" id="address" name="address"
                                    value="{{ old('address', $property->address) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="type_id" class="form-label">Type</label>
                                <select class="form-control" id="type_id" name="type_id">
                                    {{-- @foreach ($types as $type)
                                    <option value="">{{$type->type}}</option>
                                        <option value="{{ $type->id }}"
                                            @if (old('type_id') == $type->id) selected @endif>{{ $type->type }}</option>
                                    @endforeach --}}
                                    @foreach ($types as $type)
                                        @if (old('type_id', $property->type_id == $type->id))
                                            <option name="type_id" value="{{ $type->id }}" selected>
                                                {{ $type->type }}
                                            </option>
                                        @endif
                                        <option name="type_id" value="{{ $type->id }}">{{ $type->type }}
                                        </option>
                                    @endforeach
                                </select>
                                {{-- <input type="number" class="form-control" id="type_id" name="type_id"
                                value="{{ old('type_id', $property->type_id) }}" required> --}}
                            </div>
                            
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning"
                                    href="/admin/property/show/{{ $property->id }}">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
