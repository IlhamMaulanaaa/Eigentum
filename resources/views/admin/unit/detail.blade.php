@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Detail Unit</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="form-label">Title</label>
                                <input class="form-control" value="{{ $unit->title }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Description</label>
                                <input class="form-control" value="{{ $unit->description }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Price</label>
                                <input class="form-control" value="{{ $unit->price }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Rent</label>
                                <input class="form-control" value="{{ $unit->rent }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image 1</label>
                                <div class="image-text-wrapper">
                                    <img src="{{ asset('storage/' . $unit->image_1) }}" alt="" width="200">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image 2</label>
                                <div class="image-text-wrapper">
                                    <img src="{{ asset('storage/' . $unit->image_2) }}" alt="" width="200">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image 3</label>
                                <div class="image-text-wrapper">
                                    <img src="{{ asset('storage/' . $unit->image_3) }}" alt="" width="200">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image 4</label>
                                <div class="image-text-wrapper">
                                    <img src="{{ asset('storage/' . $unit->image_4) }}" alt="" width="200">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image plan</label>
                                <div class="image-text-wrapper">
                                    <img src="{{ asset('storage/' . $unit->image_plan) }}" alt="" width="200">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Bloc</label>
                                <input class="form-control" value="{{ $unit->bloc }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Certificate</label>
                                <div class="image-text-wrapper">
                                    <img src="{{ asset('storage/' . $unit->certificate) }}" alt="" width="200">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">Bedroom</label>
                                    <input class="form-control" value="{{ $unit->specifications->bedroom }}" readonly
                                        disabled>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">Bathroom</label>
                                    <input class="form-control" value="{{ $unit->specifications->bathroom }}" readonly
                                        disabled>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">Surface area</label>
                                    <input class="form-control" value="{{ $unit->specifications->surface_area }}" readonly
                                        disabled>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">Building area</label>
                                    <input class="form-control" value="{{ $unit->specifications->building_area }}" readonly
                                        disabled>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">Floor</label>
                                    <input class="form-control" value="{{ $unit->specifications->floor }}" readonly
                                        disabled>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">Property</label>
                                    <input class="form-control" value="{{ $unit->properties->property }}" readonly
                                        disabled>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">Description</label>
                                    <input class="form-control" value="{{ $unit->properties->description }}" readonly
                                        disabled>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">Address</label>
                                    <input class="form-control" value="{{ $unit->properties->address }}" readonly
                                        disabled>
                                </div>
                            </div>
                            <br>
                            <div class="form-group text-end">
                                <a type="button" class="btn btn-warning" href="/admin/unit/data  ">Back</a>
                                <a type="button" class="btn btn-primary" href="edit/{{ $unit->id }}">Edit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
