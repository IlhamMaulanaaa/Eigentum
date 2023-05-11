@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Edit Data Property</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/property/update/ {{ $property->id }}">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">unit</label>
                                <input class="form-control" id="unit" name="unit"
                                    value="{{ old('unit', $property->unit) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="property" class="form-label">Property</label>
                                <input class="form-control" id="property" name="property"
                                    value="{{ old('property', $property->property) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description"
                                    required>{{ old('description', $property->description) }}</textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input class="form-control" id="address" name="address"
                                    value="{{ old('address', $property->address) }}" required>
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/admin/property/data">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
