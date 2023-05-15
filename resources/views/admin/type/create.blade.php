@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class=" text-dark">Tambah Data Type</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/type/add" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control noscroll" id="type" name="type"
                                    value="{{ old('type') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control noscroll" id="description" name="description"
                                    value="{{ old('description') }}">
                            </div>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/admin/type/data">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
