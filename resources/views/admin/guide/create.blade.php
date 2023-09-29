@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Tambah Data guide</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="{{route('guide.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Title</label>
                                <input class="form-control noscroll" id="title" name="title"
                                    value="{{ old('title') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" class="form-control" id="description" name="description"
                                    value="{{ old('description') }}"></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" id="image" name="image"
                                    value="{{ old('image') }}">
                            </div>
                            <br>
                            
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="{{route('guide.index')}}">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
