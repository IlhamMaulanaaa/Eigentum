@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Edit guide</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/guide/update/ {{ $guide->id }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Title</label>
                                <input class="form-control" id="title" name="title"
                                    value="{{ old('title', $guide->title) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description" required>{{ old('description', $guide->description) }}</textarea>
                            </div>
                            <br>
                            <div class="col">
                                @if ($guide->image)
                                    <img src="{{ asset('storage/' . $guide->image) }}" alt="{{ $guide->image }}"
                                        width="100">
                                @endif
                                <div class="form-group">
                                    <label for="" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="image">
                                </div>
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning"
                                    href="/admin/guide/show/{{ $guide->id }}">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
