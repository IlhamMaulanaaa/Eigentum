@extends('admin.layout.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ad-12">
                <h3 class="text-dark">Detail Unit</h3>
                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <form method="get" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="" class="form-label">Title</label>
                                    <input class="form-control" value="{{ $unit->title }}" readonly disabled>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="" class="form-label">Description</label>
                                    <input class="form-control" value="{{ $unit->description }}" readonly disabled>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="" class="form-label">Price</label>
                                    <input class="form-control" value="{{ $unit->price }}" readonly disabled>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="" class="form-label">Status</label>
                                    <ul>
                                        @foreach ($unit->status as $status)
                                            <li>
                                                {{ $status->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="" class="form-label">Image</label>
                                    <div class="image-text-wrapper">
                                        <img src="{{ asset('storage/' . $unit->image) }}" class="img-thumbnail"
                                            alt="" width="360">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Living Room</label>
                                    <div class="image-text-wrapper">
                                        <div class="row">
                                            @if ($images && $images['livingroomimg'])
                                                @php
                                                    $imageArray = explode('|', $images['livingroomimg']);
                                                @endphp
                                                @foreach ($imageArray as $image)
                                                    <div class="col-auto">
                                                        <div class="image-container">
                                                            <img src="{{ asset('storage/' . $image) }}" alt=""
                                                                class="img-thumbnail" width="200">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Bedroom</label>
                                    <div class="image-text-wrapper">
                                        <div class="row">
                                            @if ($images && $images['bedroomimg'])
                                                @php
                                                    $imageArray = explode('|', $images['bedroomimg']);
                                                @endphp
                                                @foreach ($imageArray as $image)
                                                    <div class="col-auto">
                                                        <div class="image-container">
                                                            <img src="{{ asset('storage/' . $image) }}" alt=""
                                                                class="img-thumbnail" width="200">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif 
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Bathroom</label>
                                    <div class="image-text-wrapper">
                                        <div class="row">
                                            @if ($images && $images['bathroomimg'])
                                                @php
                                                    $imageArray = explode('|', $images['bathroomimg']);
                                                @endphp
                                                @foreach ($imageArray as $image)
                                                    <div class="col-auto">
                                                        <div class="image-container">
                                                            <img src="{{ asset('storage/' . $image) }}" alt=""
                                                                class="img-thumbnail" width="200">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Kitchen</label>
                                    <div class="image-text-wrapper">
                                        <div class="row">
                                            @if ($images && $images['kitchenimg'])
                                                @php
                                                    $imageArray = explode('|', $images['kitchenimg']);
                                                @endphp
                                                @foreach ($imageArray as $image)
                                                    <div class="col-auto">
                                                        <div class="image-container">
                                                            <img src="{{ asset('storage/' . $image) }}" alt=""
                                                                class="img-thumbnail" width="200">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="form-label">Etc</label>
                                    <div class="image-text-wrapper">
                                        <div class="row">
                                            @if ($images && $images['etcimg'])
                                                @php
                                                    $imageArray = explode('|', $images['etcimg']);
                                                @endphp
                                                @foreach ($imageArray as $image)
                                                    <div class="col-auto">
                                                        <div class="image-container">
                                                            <img src="{{ asset('storage/' . $image) }}" alt=""
                                                                class="img-thumbnail" width="200">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <div class="form-group col-auto mb-2">
                                    <label for="" class="form-label">Bedroom</label>
                                    <input class="form-control" value="{{ $unit->specifications->bedroom }}" readonly
                                        disabled>
                                </div>
                                <div class="form-group col-auto mb-2">
                                    <label for="" class="form-label">Bathroom</label>
                                    <input class="form-control" value="{{ $unit->specifications->bathroom }}" readonly
                                        disabled>
                                </div>
                                <div class="form-group col-auto mb-2">
                                    <label for="" class="form-label">Surface area</label>
                                    <input class="form-control" value="{{ $unit->specifications->surface_area }}"
                                        readonly disabled>
                                </div>
                                <div class="form-group col-auto mb-2">
                                    <label for="" class="form-label">Building area</label>
                                    <input class="form-control" value="{{ $unit->specifications->building_area }}"
                                        readonly disabled>
                                </div>
                                <div class="form-group col-auto mb-2">
                                    <label for="" class="form-label">Floor</label>
                                    <input class="form-control" value="{{ $unit->specifications->floor }}" readonly
                                        disabled>
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <div class="form-group col-auto">
                                    <label for="" class="form-label">Property</label>
                                    <input class="form-control" value="{{ $unit->properties->property }}" readonly
                                        disabled>
                                </div>
                                <div class="form-group col-auto">
                                    <label for="" class="form-label">Address</label>
                                    <input class="form-control" value="{{ $unit->properties->address }}" readonly
                                        disabled>
                                </div>
                            </div>
                            <br>
                            <div class="form-group text-end">
                                <a type="button" class="btn btn-warning" href="/admin/unit/data">Back</a>
                                {{-- <form action="{{ url('/unit/delete', $unit->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin')">Delete</button>
                                </form>                                                               --}}
                                <a type="button" class="btn btn-primary" href="edit/{{ $unit->id }}">Edit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    @endsection
