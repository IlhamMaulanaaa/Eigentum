@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Detail Developer</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" class="form-control" id="company" name="company"
                                    value="{{ $developer->company }}" readonly disabled>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $developer->email }}" readonly disabled>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="owner" class="form-label">Owner</label>
                                <input type="text" class="form-control" id="owner" name="owner"
                                    value="{{ $developer->owner }}" readonly disabled>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ $developer->address }}" readonly disabled>
                            </div>
                            <br>


                            <div class="form-group">
                                <label for="license" class="form-label">License</label>
                                <div class="image-text-wrapper">
                                    <img src="{{ asset('storage/' . $developer->license) }}" alt="" width="200">
                                </div>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="phone_number" class="form-label">Phone Number</label>
                                <input type="text" class="form-control" id="phone_number" name="phone_number"
                                    value="{{ $developer->phone_number }}" readonly disabled>
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="properties" class="form-label">Property</label>
                                <ul>
                                    @foreach ($developer->properties as $property)
                                        <li>{{ $property->property }}
                                        </li>
                                    @endforeach
                                </ul>
                                <a type="button" class="btn btn-success"
                                    href="/admin/property/create/?developer_id={{ $developer->id }}">Add Property</a>
                            </div>
                            <br>

                            <div class="form-group text-end">
                                <a type="button" class="btn btn-warning" href="/admin/developer/data">Back</a>
                                <a type="button" class="btn btn-primary" href="edit/{{ $developer->id }}">Edit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
