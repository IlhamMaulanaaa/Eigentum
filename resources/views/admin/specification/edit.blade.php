@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class=" text-dark">Edit Specification</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/spec/update/ {{ $spec->id }}">
                            @csrf
                            <div class="form-group">
                                <label for="bedroom" class="form-label">Bedroom</label>
                                <input type="text" class="form-control" id="bedroom" name="bedroom"
                                    value="{{ old('bedroom', $spec->bedroom) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="bathroom" class="form-label">Bathroom</label>
                                <input type="text" class="form-control" id="bathroom" name="bathroom"
                                    value="{{ old('bathroom', $spec->bathroom) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="surface_area" class="form-label">Surface Area</label>
                                <input type="text" class="form-control" id="surface_area" name="surface_area"
                                    value="{{ old('surface_area', $spec->surface_area) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="building_area" class="form-label">Building Area</label>
                                <input type="text" class="form-control" id="building_area" name="building_area"
                                    value="{{ old('building_area', $spec->building_area) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="floor" class="form-label">Floor</label>
                                <input type="text" class="form-control" id="floor" name="floor"
                                    value="{{ old('floor', $spec->floor) }}" required>
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning"
                                    href="/admin/spec/show/{{ $spec->id }}">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
