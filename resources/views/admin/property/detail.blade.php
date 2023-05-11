@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Detail Data Property</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="form-label">Unit</label>
                                <input type="text" class="form-control" id="unit" name="unit" value="{{ $property->unit }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Property</label>
                                <input type="text" class="form-control" id="property" name="property" value="{{ $property->property }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Description</label>
                                <input class="form-control" id="description" name="description" readonly disabled value="{{ $property->description }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="" class="form-label">Address</label>
                                <input class="form-control" id="address" name="address" readonly disabled value="{{ $property->address }}">
                            </div>
                            
                            {{-- <div class="form-group">
                                <label for="" class="form-label">Type ID</label>
                                <input type="text" class="form-control" id="type_id" name="type_id" value="{{ $property->type_id }}" readonly disabled>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="form-label">Developer ID</label>
                                <input type="text" class="form-control" id="developer_id" name="developer_id" value="{{ $property->developer_id }}" readonly disabled>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="form-label">Agent ID</label>
                                <input type="text" class="form-control" id="agent_id" name="agent_id" value="{{ $property->agent_id }}" readonly disabled>
                            </div> --}}
                            <br>
                            <div class="form-group">
                                <a type="button" class="btn btn-warning" href="/admin/property/data  ">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
