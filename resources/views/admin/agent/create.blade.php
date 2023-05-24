@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Tambah Data Agent</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/agent/add" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control noscroll" id="name" name="name" value="{{ old('name') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control noscroll" id="email" name="email" value="{{ old('email') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control noscroll" id="password" name="password">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control noscroll" id="address" name="address" value="{{ old('address') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control noscroll" id="location" name="location" value="{{ old('location') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="ktp" class="form-label">Ktp</label>
                                <input type="file" class="form-control noscroll" id="ktp" name="ktp" value="{{ old('ktp') }}">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="phone_number" class="form-label">Phone number</label>
                                <input type="text" class="form-control noscroll" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="/admin/agent/data">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
