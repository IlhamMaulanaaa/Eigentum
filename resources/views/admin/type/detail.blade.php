@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class=" text-dark">Detail Type</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="form-label">Type</label>
                                <input type="text" class="form-control" id="type" name="type"
                                    value="{{ $type->type }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" name="description"
                                    value="{{ $type->description }}" readonly disabled>
                            </div>
                            <!--
                                        <div class="form-group">
                                            <label for="type_id" class="form-label">Property Type</label>
                                            <select class="form-control" id="type_id" name="type_id" readonly disabled>
                                                {{-- @foreach ($types as $type)
                                        <option value="{{ $type->id }}" {{ $type->type_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                    @endforeach --}}
                                            </select>
                                        </div>
                                        -->
                            <br>
                            <div class="form-group text-end">
                                <a type="button" class="btn btn-warning" href="/admin/type/data">Back</a>
                                <a type="button" class="btn btn-primary" href="edit/{{ $type->id }}">Edit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
