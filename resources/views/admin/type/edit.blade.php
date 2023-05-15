@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class=" text-dark">Edit Type</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/type/update/ {{ $type->id }}">
                            @csrf
                            <div class="form-group">
                                <label for="type" class="form-label">Type</label>
                                <input type="text" class="form-control" id="type" name="type"
                                    value="{{ old('type', $type->type) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" class="form-control" id="description" name="description"
                                    value="{{ old('description', $type->description) }}" required>
                            </div>
                            <!--
                                    <div class="form-group">
                                        <label for="type_id" class="form-label">Property Type</label>
                                        <select class="form-control" id="type_id" name="type_id">
                                            {{-- @foreach ($types as $type)
                                        <option value="{{ $type->id }}" {{ $type->type_id == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                                    @endforeach --}}
                                        </select>
                                    </div>
                                    -->
                            <br>

                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/admin/type/show/{{$type->id}}">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
