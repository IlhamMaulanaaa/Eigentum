@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Detail Data Specification</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="form-label">Bedroom</label>
                                <input type="text" class="form-control" id="bedroom" name="bedroom" value="{{ $spec->bedroom }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Bathroom</label>
                                <input type="text" class="form-control" id="bathroom" name="bathroom" value="{{ $spec->bathroom }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Surface Area</label>
                                <input type="text" class="form-control" id="surface_area" name="surface_area" value="{{ $spec->surface_area }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Building Area</label>
                                <input type="text" class="form-control" id="building_area" name="building_area" value="{{ $spec->building_area }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Floor</label>
                                <input type="text" class="form-control" id="floor" name="floor" value="{{ $spec->floor }}" readonly disabled>
                            </div>
                            <!--
                            <div class="form-group">
                                <label for="type_id" class="form-label">Property Type</label>
                                <select class="form-control" id="type_id" name="type_id" readonly disabled>
                                    {{-- @foreach ($types as $type)
                                        <option value="{{ $type->id }}" {{ $spec->type_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                            -->
                            <br>
                            <div class="form-group">
                                <a type="button" class="btn btn-warning" href="/admin/spec/data  ">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
