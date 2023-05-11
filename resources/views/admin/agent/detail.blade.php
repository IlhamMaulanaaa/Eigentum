@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Detail Data Agent</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $agent->email }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" value="{{ $agent->password }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $agent->name }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $agent->address }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ $agent->location }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="ktp" class="form-label">Ktp</label>
                                <input type="text" class="form-control" id="ktp" name="ktp" value="{{ $agent->ktp }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="phone_number" class="form-label">Phone number</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $agent->phone_number }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <a type="button" class="btn btn-warning" href="/admin/agent/data  ">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
