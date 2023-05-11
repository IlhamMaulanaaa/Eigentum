@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Detail Data</h3>
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
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Certificate</label>
                                <div class="image-text-wrapper">
                                    <img src="{{ asset('storage/' . $unit->certificate) }}" alt="" width="200">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <a type="button" class="btn btn-warning" href="/admin/unit/data  ">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
