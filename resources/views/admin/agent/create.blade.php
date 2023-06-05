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
                                <input type="text" class="form-control noscroll" id="name" name="name">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control noscroll" id="email" name="email">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control noscroll" id="password" name="password">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control noscroll" id="address" name="address">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="location_id" class="form-label">Location</label>
                                <select class="form-control" id="location_id" name="location_id">
                                    <option value="">Location</option>
                                    @foreach ($location as $location)
                                        <option value="{{ $location->id }}"
                                            @if (old('location_id') == $location->id) selected @endif>{{ $location->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="ktp" class="form-label">Ktp</label>
                                <input type="file" class="form-control noscroll" id="ktp" name="ktp">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="face" class="form-label">Face</label>
                                <input type="file" class="form-control noscroll" id="face" name="face">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="phone_number" class="form-label">Phone number</label>
                                <input type="text" class="form-control noscroll" id="phone_number" name="phone_number">
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
