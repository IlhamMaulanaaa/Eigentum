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
                                <label for="" class="form-label">Rent</label>
                                <input type="number" class="form-control noscroll" id="rent" name="rent">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image 1</label>
                                <input type="file" class="form-control noscroll" id="image_1" name="image_1">
                            </div>
                            <br>
                            <div class="form-group">
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
                            <br>
                                <div class="row">
                                    <div class="form-group col-md-2">
                                        <label for="" class="form-label">bedroom</label>
                                        <input class="form-control" name="bedroom" id="bedroom">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="" class="form-label">bathroom</label>
                                        <input class="form-control" name="bathroom" id="bathroom">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="" class="form-label">surface area</label>
                                        <input class="form-control" name="surface_area" id="surface_area">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="" class="form-label">building area</label>
                                        <input class="form-control" name="building_area" id="building_area">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="" class="form-label">floor</label>
                                        <input class="form-control" name="floor" id="floor">
                                    </div>
                                    
                                </div>
                                <br>

                            {{-- <div class="row">
                                <label for="property">property</label>
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">unit</label>
                                    <input class="form-control" >
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">property</label>
                                    <input class="form-control" >
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">description</label>
                                    <input class="form-control">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="" class="form-label">address</label>
                                    <input class="form-control" >
                                </div>
                            </div>
                            <br> --}}
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Property</label>
                                <input type="number" class="form-control noscroll" id="property_id" name="property_id">
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
