@extends('admin.layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>


        <div class="container">
            <div class="row">
                <div class="col-ad-12">
                    <h3 class=" text-dark">Edit Agent</h3>
                    <br>
                    <div class="card bg-light">
                        <div class="card-body">
                            <form method="post" action="{{ route('agent.update', $agent->id) }}"
                                enctype="multipart/form-data">
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
                                    <input type="password"
                                        class="form-control @error('password') is-invalid @enderror" id="password"
                                        name="password">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="address" class="form-label">Address</label>
                                    <input class="form-control" id="address" name="address"
                                        value="{{ old('address', $agent->address) }}" required>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="col-auto">
                                        <div class="form-group">
                                            <label for="ktp" class="form-label">Ktp</label>
                                            @if ($agent->ktp)
                                                <div class="mb-3">
                                                    <img src="{{ asset('storage/' . $agent->ktp) }}"
                                                        alt="{{ $agent->ktp }}" class="img-thumbnail" width="120">
                                                </div>
                                            @endif
                                            <input type="file" class="form-control" id="ktp" name="ktp">
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-group">
                                            <label for="face" class="form-label">Face</label>
                                            @if ($agent->face)
                                                <div class="mb-3">
                                                    <img src="{{ asset('storage/' . $agent->face) }}"
                                                        alt="{{ $agent->face }}" class="img-thumbnail" width="120">
                                                </div>
                                            @endif
                                            <input type="file" class="form-control" id="face" name="face">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="telp" class="form-label">Telephone</label>
                                    <input type="text" class="form-control @error('telp') is-invalid @enderror" id="telp" name="telp"
                                        value="{{ old('telp', $agent->telp) }}" required>
                                    @error('telp')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        
                                    @enderror
                                </div>
                                <br>
                                <div class="float-end">
                                    <a type="button" class="btn btn-warning"
                                        href="{{ route('agent.show', $agent->id) }}">Back</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </body>

    </html>
@endsection
