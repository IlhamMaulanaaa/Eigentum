@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Detail Agent</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $agent->name }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $agent->email }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ $agent->address }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location"
                                    value="{{ $agent->locations->location }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="ktp" class="form-label">Ktp</label>
                                <div class="image-text-wrapper">
                                    <img src="{{ asset('storage/' . $agent->ktp) }}" alt="" width="200">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="face" class="form-label">Face</label>
                                <div class="image-text-wrapper">
                                    <img src="{{ asset('storage/' . $agent->face) }}" alt="" width="200">
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="phone_number" class="form-label">Phone number</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number"
                                    value="{{ $agent->phone_number }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="properties" class="form-label">Properties</label>
                                <ul>
                                    @foreach ($agent->properties as $property)
                                        <li>{{ $property->property }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <br>
                            <div class="form-group text-end">
                                <a type="button" class="btn btn-warning" href="/admin/agent/data  ">Back</a>
                                <a type="button" class="btn btn-primary" href="edit/{{ $agent->id }}">Edit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
