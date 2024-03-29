@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Tambah Data customer</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="{{route('customer.store')}}" enctype="multipart/form-data">
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
                                <label for="telp" class="form-label">Telephone</label>
                                <input type="text" class="form-control noscroll" id="telp" name="telp">
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning" href="{{route('customer.index')}}">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
