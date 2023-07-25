@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class=" text-dark">Detail Specification</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="form-label">Bedroom</label>
                                <input type="text" class="form-control" id="bedroom" name="bedroom"
                                    value="{{ $specification->bedroom }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Bathroom</label>
                                <input type="text" class="form-control" id="bathroom" name="bathroom"
                                    value="{{ $specification->bathroom }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Surface Area</label>
                                <input type="text" class="form-control" id="surface_area" name="surface_area"
                                    value="{{ $specification->surface_area }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Building Area</label>
                                <input type="text" class="form-control" id="building_area" name="building_area"
                                    value="{{ $specification->building_area }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Floor</label>
                                <input type="text" class="form-control" id="floor" name="floor"
                                    value="{{ $specification->floor }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group text-end">
                                <a type="button" class="btn btn-warning" href="/admin/specification/data">Back</a>
                                {{-- <a type="button" class="btn btn-primary" href="edit/{{ $specification->id }}">Edit</a> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
