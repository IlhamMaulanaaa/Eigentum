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
                                <input class="form-control noscroll" id="title" name="title"
                                    value="{{ old('title') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Description</label>
                                <input class="form-control noscroll" id="description" name="description"
                                    value="{{ old('description') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Price</label>
                                <input type="number" class="form-control noscroll" id="price" name="price"
                                    value="{{ old('price') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Rent</label>
                                <input type="number" class="form-control noscroll" id="rent" name="rent"
                                    value="{{ old('rent') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image 1</label>
                                <input type="file" class="form-control noscroll" id="image_1" name="image_1"
                                    value="{{ old('image_1') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image 2</label>
                                <input type="file" class="form-control noscroll" id="image_2" name="image_2"
                                    value="{{ old('image_2') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image 3</label>
                                <input type="file" class="form-control noscroll" id="image_3" name="image_3"
                                    value="{{ old('image_3') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image 4</label>
                                <input type="file" class="form-control noscroll" id="image_4" name="image_4"
                                    value="{{ old('image_4') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image plan</label>
                                <input type="file" class="form-control noscroll" id="image_plan" name="image_plan"
                                    value="{{ old('image_plan') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Bloc</label>
                                <input class="form-control noscroll" id="bloc" name="bloc"
                                    value="{{ old('bloc') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Certificate</label>
                                <input type="file" class="form-control noscroll" id="certificate" name="certificate"
                                    value="{{ old('certificate') }}">
                            </div>
                            <br>
                            {{-- <div class="form-group">
                                <label for="" class="form-label">Kode_Pasien</label>
                                <input class="form-control noscroll" id="kode_pasien" name="kode_pasien"
                                    value="{{ old('kode_pasien') }}">
                            </div> --}}
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
