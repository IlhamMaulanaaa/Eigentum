@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class=" text-dark">Detail guide</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $guide->title }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Description</label>
                                <input class="form-control" id="description" name="description" readonly disabled
                                    value="{{ $guide->description }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Image</label>
                                <div class="image-text-wrapper">
                                    <img src="{{ asset('storage/' . $guide->image) }}" alt="" width="200">
                                </div>
                            </div>
                            <br>
                            <div class="form-group text-end">
                                <a type="button" class="btn btn-warning" href="{{ route('guide.index') }}">Back</a>
                                <form action="{{ route('guide.destroy', $guide->id) }}" method="get" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger"
                                        onclick="return  confirm('Apakah Anda Yakin')">Delete</button>
                                </form>
                                <a type="button" class="btn btn-primary"
                                    href="{{ route('guide.edit', $guide->id) }}">Edit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
