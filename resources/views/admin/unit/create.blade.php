@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class=" text-dark">Tambah Data Unit</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/unit/add" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Title</label>
                                <input class="form-control noscroll" id="title" name="title">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Description</label>
                                <input class="form-control noscroll" id="description" name="description">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Price</label>
                                <input type="number" class="form-control noscroll" id="price" name="price">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Status</label>
                                <select class="form-select" name="status_id[]" multiple>
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status->id }}">{{ $status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image</label>
                                <input type="file" class="form-control noscroll" id="image" name="image">
                            </div>
                            <br>
                            {{-- <div class="form-group">
                                <label for="" class="form-label">Image 2</label>
                                <input type="file" class="form-control noscroll" id="image_2" name="image_2">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image 3</label>
                                <input type="file" class="form-control noscroll" id="image_3" name="image_3">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image 4</label>
                                <input type="file" class="form-control noscroll" id="image_4" name="image_4">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image plan</label>
                                <input type="file" class="form-control noscroll" id="image_plan" name="image_plan">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Bloc</label>
                                <input class="form-control noscroll" id="bloc" name="bloc">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Certificate</label>
                                <input type="file" class="form-control noscroll" id="certificate" name="certificate">
                            </div>
                            <br> --}}
                            <div class="row">
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">Bedroom</label>
                                    <input class="form-control" name="bedroom" id="bedroom">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">Bathroom</label>
                                    <input class="form-control" name="bathroom" id="bathroom">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">Surface area</label>
                                    <input class="form-control" name="surface_area" id="surface_area">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">Building area</label>
                                    <input class="form-control" name="building_area" id="building_area">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">Floor</label>
                                    <input class="form-control" name="floor" id="floor">
                                </div>

                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Property</label>
                                <select name="property_id" id="property_id" class="form-control">
                                    @foreach ($properties as $property)
                                        <option value="{{ $property->id }}">{{ $property->property }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/admin/unit/data">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
