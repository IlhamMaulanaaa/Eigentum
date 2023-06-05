@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Edit Developer</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="/admin/developer/update/ {{ $developer->id }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="company" class="form-label">Company</label>
                                <input type="text" class="form-control" id="company" name="company"
                                    value="{{ old('company', $developer->company) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email', $developer->email) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="owner" class="form-label">Owner</label>
                                <input type="text" class="form-control" id="owner" name="owner"
                                    value="{{ old('owner', $developer->owner) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ old('address', $developer->address) }}" required>
                            </div>
                            <br>
                            <div class="col">
                                @if ($developer->license)
                                    <img src="{{ asset('storage/' . $developer->license) }}" alt="{{ $developer->license }}"
                                        width="100">
                                @endif
                                <div class="form-group">
                                    <label for="" class="form-label">License</label>
                                    <input type="file" class="form-control" id="license" name="license">
                                </div>
                            </div>
                            <br>
                            <div class="col">
                                <div class="form-group">
                                    <label for="property" class="form-label">Property</label>
                                </div>
                                <ul>
                                    @foreach ($developer->properties as $property)
                                        <li>{{ $property->property }}
                                    @endforeach
                                </ul>
                                <a type="button" class="btn btn-warning"
                                    href="/admin/property/create">Create New</a>
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning"
                                    href="/admin/developer/show/{{ $developer->id }}">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
