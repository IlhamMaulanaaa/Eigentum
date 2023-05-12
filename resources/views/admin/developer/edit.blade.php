@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Edit Developer</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/develop/update/ {{ $develop->id }}">
                            @csrf
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email', $develop->email) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" class="form-control" id="company" name="company"
                                    value="{{ old('company', $develop->company) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ old('address', $develop->address) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="owner" class="form-label">Owner</label>
                                <input type="text" class="form-control" id="owner" name="owner"
                                    value="{{ old('owner', $develop->owner) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="license" class="form-label">License</label>
                                <input type="text" class="form-control" id="license" name="license"
                                    value="{{ old('license', $develop->license) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="phone_number" class="form-label">Phone number</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number"
                                    value="{{ old('phone_number', $develop->phone_number) }}" required>
                            </div>
                            <br>

                            <div class="float-end">
                                <a type="button" class="btn btn-warning"
                                    href="/admin/develop/show/{{ $develop->id }}">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
