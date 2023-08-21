@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>

    <body>
        <section class="vh-10" style="background-color: #f4f5f7;">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100" style="margin-top: 120px;">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <div class="card mb-5" style="border-radius: .5rem;">
                            <div class="row g-0">
                                <div class="col-md-4 gradient-custom text-center text-white"
                                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                                    @if (Auth::user()->role == 'user')
                                        @if (Auth::user()->avatar)
                                            <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="img-fluid my-5"
                                                style="width: 80px;" />
                                        @else
                                            <img src="{{ asset('/assets/nav/defaultPhotoProfile.jpg') }}"
                                                alt="Default Profile Picture">
                                        @endif
                                    @else
                                        <img src="{{ asset('/assets/nav/defaultPhotoProfile.jpg') }}"
                                            alt="Default Profile Picture">
                                    @endif
                                    <h5 class="text-danger">{{ $user->name }}</h5> <!-- Adding text-danger class -->
                                    <p class="text-danger">Web Designer</p> <!-- Adding text-danger class -->

                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="card-body p-4">
                                    <h6>Information</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Email</h6>
                                            <p class="text-muted">{{ $user->email }}</p>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <h6>Phone</h6>
                                            <p class="text-muted">123 456 789</p>
                                        </div>
                                    </div>
                                    <h6>Projects</h6>
                                    <hr class="mt-0 mb-4">
                                    <div class="row pt-1">
                                        <div class="col-6 mb-3">
                                            <h6>Role</h6>
                                            <p class="text-muted">{{ $user->role }}</p>
                                        </div>
                                        {{-- <div class="col-6 mb-3">
                       <h6>Most Viewed</h6>
                       <p class="text-muted">Dolor sit amet</p>
                     </div> --}}
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                        <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </body>

    </html>
@endsection
