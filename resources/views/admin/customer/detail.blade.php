@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Detail Customer</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $customer->name }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $customer->email }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ $customer->address }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="telp" class="form-label">Telephone</label>
                                <input type="text" class="form-control" id="telp" name="telp"
                                    value="{{ $customer->telp }}" readonly disabled>
                            </div>
                            <br>
                            <div class="form-group text-end">
                                <a type="button" class="btn btn-warning" href="/admin/customer/data">Back</a>
                                <a type="button" class="btn btn-primary" href="edit/{{ $customer->id }}">Edit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
