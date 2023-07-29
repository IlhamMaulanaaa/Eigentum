@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class=" text-dark">Edit Agent</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="post" action="{{route('agent.update', $agent->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name" class="form-label">Name</label>
                                <input class="form-control" id="name" name="name"
                                    value="{{ old('name', $agent->name) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input class="form-control" id="email" name="email"
                                    value="{{ old('email', $agent->email) }}" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="address" class="form-label">Address</label>
                                <input class="form-control" id="address" name="address"
                                    value="{{ old('address', $agent->address) }}" required>
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                @if ($agent->ktp)
                                    <img src="{{ asset('storage/' . $agent->ktp) }}" alt="{{ $agent->ktp }}"
                                        width="100">
                                @endif
                                <div class="form-group">
                                    <label for="" class="form-label">Ktp</label>
                                    <input type="file" class="form-control" id="ktp" name="ktp">
                                </div>

                            </div>
                            <br>
                            <div class="form-group">
                                @if ($agent->face)
                                    <img src="{{ asset('storage/' . $agent->face) }}" alt="{{ $agent->face }}"
                                        width="100">
                                @endif
                                <div class="form-group">
                                    <label for="" class="form-label">Face</label>
                                    <input type="file" class="form-control" id="face" name="face">
                                </div>

                            </div>
                            <br>
                            <div class="form-group">
                                <label for="telp" class="form-label">Phone Number</label>
                                <input class="form-control" id="telp" name="telp"
                                    value="{{ old('telp', $agent->telp) }}" required>
                            </div>
                            <br>
                            <div class="float-end">
                                <a type="button" class="btn btn-warning"
                                    href="{{route('agent.show',$agent->id)}}">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
