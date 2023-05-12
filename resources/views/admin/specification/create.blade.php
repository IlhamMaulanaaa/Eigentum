@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class=" text-dark">Tambah Data Specification</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/spec/add" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="bedroom" class="form-label">Bedroom</label>
                                <input type="text" class="form-control noscroll" id="bedroom" name="bedroom"
                                    value="{{ old('bedroom') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="bathroom" class="form-label">Bathroom</label>
                                <input type="text" class="form-control noscroll" id="bathroom" name="bathroom"
                                    value="{{ old('bathroom') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="surface_area" class="form-label">Surface Area</label>
                                <input type="text" class="form-control noscroll" id="surface_area" name="surface_area"
                                    value="{{ old('surface_area') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="building_area" class="form-label">Building Area</label>
                                <input type="text" class="form-control noscroll" id="building_area" name="building_area"
                                    value="{{ old('building_area') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="floor" class="form-label">Floor</label>
                                <input type="text" class="form-control noscroll" id="floor" name="floor"
                                    value="{{ old('floor') }}">
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/admin/spec/data">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
