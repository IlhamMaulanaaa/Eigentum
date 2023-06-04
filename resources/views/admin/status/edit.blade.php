@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Edit status</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/status/update/ {{ $status->id }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Status</label>
                                <input class="form-control" id="name" name="name"
                                    value="{{ old('name', $status->name) }}" required>
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning"
                                    href="/admin/status/show/{{ $status->id }}">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
