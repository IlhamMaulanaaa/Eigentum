@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Edit Data unit</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/unit/update/ {{ $unit->id }}">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title', $unit->title) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">description</label>
                                <input type="text" class="form-control" id="description"
                                    name="description"value="{{ old('description', $unit->description) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">price</label>
                                <input type="number" class="form-control" id="price"
                                    name="price"value="{{ old('price', $unit->price) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">rent</label>
                                <input type="number" class="form-control" id="rent"
                                    name="rent"value="{{ old('rent', $unit->rent) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">image_1</label>
                                <input type="file" class="form-control" id="image_1"
                                    name="image_1"value="{{ old('image_1', $unit->image_1) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">image_2</label>
                                <input type="file" class="form-control" id="image_2"
                                    name="image_2"value="{{ old('image_2', $unit->image_2) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">image_3</label>
                                <input type="file" class="form-control" id="image_3"
                                    name="image_3"value="{{ old('image_3', $unit->image_3) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">image_4</label>
                                <input type="file" class="form-control" id="image_4"
                                    name="image_4"value="{{ old('image_4', $unit->image_4) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">image_plan</label>
                                <input type="file" class="form-control" id="image_plan"
                                    name="image_plan"value="{{ old('image_plan', $unit->image_plan) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">bloc</label>
                                <input type="text" class="form-control" id="bloc"
                                    name="bloc"value="{{ old('bloc', $unit->bloc) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">certificate</label>
                                <input type="file" class="form-control" id="certificate"
                                    name="certificate"value="{{ old('certificate', $unit->certificate) }}" required>
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
