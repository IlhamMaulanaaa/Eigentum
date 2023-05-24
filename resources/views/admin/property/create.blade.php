@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Tambah Data Property</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/property/add" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="property" class="form-label">Property</label>
                                <input type="text" class="form-control" id="property" name="property">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" class="form-control" id="description" name="description"></textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="developer_id" class="form-label">Developer</label>
                                <select class="form-control" id="developer_id" name="developer_id">
                                    <option value="">Developer</option>
                                    @foreach ($developer as $developer)
                                        <option value="{{ $developer->id }}"
                                            @if (old('developer_id') == $developer->company) selected @endif>{{ $developer->company }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <br> 
                            <div class="form-group">
                                <label for="type_id" class="form-label">Type</label>
                                <select class="form-control" id="type_id" name="type_id">
                                    <option value="">Type</option>
                                    @foreach ($type as $type)
                                        <option value="{{ $type->id }}"
                                            @if (old('type_id') == $type->id) selected @endif>{{ $type->type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            {{-- <div class="form-group">
                                <label for="agent_id" class="form-label">Agent</label>
                                <select class="form-control" id="agent_id" name="agent_id">
                                    <option value="">-- Select an agent --</option>
                                    @foreach ($agents as $agent)
                                        <option value="{{ $agent->id }}"
                                            @if (old('agent_id') == $agent->id) selected @endif>{{ $agent->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br> --}}
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/admin/property/data">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
