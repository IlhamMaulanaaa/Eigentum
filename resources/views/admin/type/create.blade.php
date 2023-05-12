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
                                <label for="housing" class="form-label">Housing</label>
                                <input type="text" class="form-control noscroll" id="housing" name="housing"
                                    value="{{ old('housing') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="apartement" class="form-label">Apartement</label>
                                <input type="text" class="form-control noscroll" id="apartement" name="apartement"
                                    value="{{ old('apartement') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="villa" class="form-label">Villa</label>
                                <input type="text" class="form-control noscroll" id="villa" name="villa"
                                    value="{{ old('villa') }}">
                            </div>
                            <br>
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
