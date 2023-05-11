@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 align="center" class=" text-light">Detail Data typeification</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="id" class="form-label">Id</label>
                                <input type="text" class="form-control" id="id" name="id"
                                    value="{{ $develop->id }}" readonly disabled>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $develop->email }}" readonly disabled>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    value="{{ $develop->password }}" readonly disabled>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" class="form-control" id="company" name="company"
                                    value="{{ $develop->company }}" readonly disabled>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ $develop->address }}" readonly disabled>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="owner" class="form-label">Owner</label>
                                <input type="text" class="form-control" id="owner" name="owner"
                                    value="{{ $develop->owner }}" readonly disabled>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="license" class="form-label">License</label>
                                <input type="text" class="form-control" id="license" name="license"
                                    value="{{ $develop->license }}" readonly disabled>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number"
                                    value="{{ $develop->phone_number }}" readonly disabled>
                            </div>
                            <br>

                            <div class="form-group">
                                <a type="button" class="btn btn-warning" href="/admin/type/data  ">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
