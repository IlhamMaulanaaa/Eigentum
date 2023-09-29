@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class=" text-dark">Tambah Data Type</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="{{route('type.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="form-label">Type</label>
                                <input type="text" class="form-control noscroll" id="name" name="name">
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="{{route('type.index')}}">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
