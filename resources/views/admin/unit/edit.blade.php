@extends('admin.layout.main')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-ad-12">
                    <h3 class="text-dark">Edit unit</h3>
                    <br>
                    <div class="card bg-light">
                        <div class="card-body">
                            <form method="post" action="{{ route('unit.update', $unit->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="" class="form-label">Unit</label>
                                        <input type="text" class="form-control" id="title" name="title"
                                            value="{{ old('title', $unit->title) }}" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="" class="form-label">Description</label>
                                        <input type="text" class="form-control" id="description"
                                            name="description"value="{{ old('description', $unit->description) }}" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="" class="form-label">Price</label>
                                        <input type="number" class="form-control" id="price"
                                            name="price"value="{{ old('price', $unit->price) }}" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="" class="form-label">Status</label>
                                        @foreach ($statuses as $statusItem)
                                            <div class="form-check">
                                                <input class="form-check-input @error('status_id') is-invalid @enderror"
                                                    type="checkbox" name="status_id[]" value="{{ $statusItem->id }}"
                                                    id="status_{{ $statusItem->id }}"
                                                    {{ in_array($statusItem->id, old('status_id', $unit->statuses->pluck('id')->toArray())) ? 'checked' : '' }}>
                                                <label class="form-check-label"
                                                    for="status_{{ $statusItem->id }}">{{ $statusItem->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>

                                    <br>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="image" class="form-label">Base</label>
                                            @if ($unit->image)
                                                <div class="mb-3">
                                                    <img src="{{ asset('storage/' . $unit->image) }}"
                                                        alt="{{ $unit->image }}" class="img-thumbnail" width="360">
                                                </div>
                                            @endif
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <div class="form-group mb-4">
                                        <label for="livingroomimg" class="form-label">Living room</label>
                                        <div class="form-group row g-2">
                                            <div class="col-auto">
                                                @php
                                                    $livingroomImgs = is_string($unit->images->livingroomimg) ? explode('|', $unit->images->livingroomimg) : [];
                                                @endphp
                                                @foreach ($livingroomImgs as $index => $livingroomImg)
                                                    <div class="image-container my-2">
                                                        <img src="{{ asset('storage/' . $livingroomImg) }}"
                                                            alt="{{ $livingroomImg }}" class="img-thumbnail"
                                                            width="200">
                                                    </div>
                                                    <input type="file" class="form-control noscroll"
                                                        id="livingroomimg_update{{ $index }}"
                                                        name="livingroomimg_update[{{ $index }}]" multiple>
                                                @endforeach
                                            </div>
                                            <div class="livingroomimg row g-2">
                                                <div class="col-auto">
                                                    <input type="file" class="form-control noscroll"
                                                        id="livingroomimg_insert" name="livingroomimg_insert[]" multiple>
                                                </div>
                                                <div class="input-group-btn col-auto">
                                                    <button class="btn btn-success btn-livingroomimg"
                                                        type="button">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group mb-4">
                                        <label for="bedroomimg" class="form-label">Bedroom</label>
                                        <div class="form-group row g-2">
                                            <div class="col-auto">
                                                @php
                                                    $bedroomImgs = is_string($unit->images->bedroomimg) ? explode('|', $unit->images->bedroomimg) : [];
                                                @endphp
                                                @foreach ($bedroomImgs as $index => $bedroomImg)
                                                    <div class="image-container my-2">
                                                        <img src="{{ asset('storage/' . $bedroomImg) }}"
                                                            alt="{{ $bedroomImg }}" class="img-thumbnail" width="200">
                                                    </div>
                                                    <input type="file" class="form-control noscroll"
                                                        id="bedroomimg_update{{ $index }}"
                                                        name="bedroomimg_update[{{ $index }}]" multiple>
                                                @endforeach
                                            </div>
                                            <div class="bedroomimg row g-2">
                                                <div class="col-auto">
                                                    <input type="file" class="form-control noscroll"
                                                        id="bedroomimg_insert" name="bedroomimg_insert[]" multiple>
                                                </div>
                                                <div class="input-group-btn col-auto">
                                                    <button class="btn btn-success btn-bedroomimg"
                                                        type="button">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="bathroomimg" class="form-label">Bathroom</label>
                                        <div class="form-group row g-2">
                                            <div class="col-auto">
                                                @php
                                                    $bathroomImgs = is_string($unit->images->bathroomimg) ? explode('|', $unit->images->bathroomimg) : [];
                                                @endphp
                                                @foreach ($bathroomImgs as $index => $bathroomImg)
                                                    <div class="image-container my-2">
                                                        <img src="{{ asset('storage/' . $bathroomImg) }}"
                                                            alt="{{ $bathroomImg }}" class="img-thumbnail"
                                                            width="200">
                                                    </div>
                                                    <input type="file" class="form-control noscroll"
                                                        id="bathroomimg_update{{ $index }}"
                                                        name="bathroomimg_update[{{ $index }}]" multiple>
                                                @endforeach
                                            </div>
                                            <div class="bathroomimg row g-2">
                                                <div class="col-auto">
                                                    <input type="file" class="form-control noscroll"
                                                        id="bathroomimg_insert" name="bathroomimg_insert[]" multiple>
                                                </div>
                                                <div class="input-group-btn col-auto">
                                                    <button class="btn btn-success btn-bathroomimg"
                                                        type="button">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="kitchenimg" class="form-label">Kitchen</label>
                                        <div class="form-group row g-2">
                                            <div class="col-auto">
                                                @php
                                                    $kitchenImgs = is_string($unit->images->kitchenimg) ? explode('|', $unit->images->kitchenimg) : [];
                                                @endphp
                                                @foreach ($kitchenImgs as $index => $kitchenImg)
                                                    <div class="image-container my-2">
                                                        <img src="{{ asset('storage/' . $kitchenImg) }}"
                                                            alt="{{ $kitchenImg }}" class="img-thumbnail"
                                                            width="200">
                                                    </div>
                                                    <input type="file" class="form-control noscroll"
                                                        id="kitchenimg_update{{ $index }}"
                                                        name="kitchenimg_update[{{ $index }}]" multiple>
                                                @endforeach
                                            </div>
                                            <div class="kitchenimg row g-2">
                                                <div class="col-auto">
                                                    <input type="file" class="form-control noscroll"
                                                        id="kitchenimg_insert" name="kitchenimg_insert[]" multiple>
                                                </div>
                                                <div class="input-group-btn col-auto">
                                                    <button class="btn btn-success btn-kitchenimg"
                                                        type="button">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="etcimg" class="form-label">Etc</label>
                                        <div class="form-group row g-2">
                                            <div class="col-auto">
                                                @php
                                                    $etcImgs = is_string($unit->images->etcimg) ? explode('|', $unit->images->etcimg) : [];
                                                @endphp
                                                @foreach ($etcImgs as $index => $etcImg)
                                                    <div class="image-container my-2">
                                                        <img src="{{ asset('storage/' . $etcImg) }}"
                                                            alt="{{ $etcImg }}" class="img-thumbnail"
                                                            width="200">
                                                    </div>
                                                    <input type="file" class="form-control noscroll"
                                                        id="etcimg_update{{ $index }}"
                                                        name="etcimg_update[{{ $index }}]" multiple>
                                                @endforeach
                                            </div>
                                            <div class="etcimg row g-2">
                                                <div class="col-auto">
                                                    <input type="file" class="form-control noscroll"
                                                        id="etcimg_insert" name="etcimg_insert[]" multiple>
                                                </div>
                                                <div class="input-group-btn col-auto">
                                                    <button class="btn btn-success btn-etcimg" type="button">Add</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="form-group col-auto mb-2">
                                        <label for="" class="form-label">Bedroom</label>
                                        <input class="form-control" id="bedroom" name="bedroom"
                                            value="{{ $unit->specifications->bedroom }}">
                                    </div>
                                    <div class="form-group col-auto mb-2">
                                        <label for="" class="form-label">Bathroom</label>
                                        <input class="form-control" id="bathroom" name="bathroom"
                                            value="{{ $unit->specifications->bathroom }}">
                                    </div>
                                    <div class="form-group col-auto mb-2">
                                        <label for="" class="form-label">Surface area</label>
                                        <input class="form-control" id="surface_area" name="surface_area"
                                            value="{{ $unit->specifications->surface_area }}">
                                    </div>
                                    <div class="form-group col-auto mb-2">
                                        <label for="" class="form-label">Building area</label>
                                        <input class="form-control" id="building_area" name="building_area"
                                            value="{{ $unit->specifications->building_area }}">
                                    </div>
                                    <div class="form-group col-auto mb-2">
                                        <label for="" class="form-label">Floor</label>
                                        <input class="form-control" id="floor" name="floor"
                                            value="{{ $unit->specifications->floor }}">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group invisible">
                                    <label for="" class="form-label">Property</label>
                                    <select class="form-control" id="property_id" name="property_id">
                                        @foreach ($properties as $property)
                                            @if (old('property_id', $unit->property_id == $property->id))
                                                <option name="property_id" value="{{ $property->id }}" selected>
                                                    {{ $property->title }}
                                                </option>
                                            @endif
                                            <option name="property_id" value="{{ $property->id }}">
                                                {{ $property->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <div class="float-end">
                                    <a type="button" class="btn btn-warning"
                                        href="{{ route('unit.show', $unit->id) }}">Back</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

            <script type="text/javascript">
                $('.btn-livingroomimg').on('click', function() {
                    btnsuccess('.livingroomimg');
                });

                $('.btn-bedroomimg').on('click', function() {
                    btnsuccess('.bedroomimg');
                });

                $('.btn-bathroomimg').on('click', function() {
                    btnsuccess('.bathroomimg');
                });

                $('.btn-kitchenimg').on('click', function() {
                    btnsuccess('.kitchenimg');
                });

                $('.btn-etcimg').on('click', function() {
                    btnsuccess('.etcimg');
                });

                function btnsuccess(elementClass) {
                    var html =
                        '<div class="row g-2 remove"><div class="col-auto"><input type="file" class="form-control noscroll" id="' +
                        elementClass.substr(1) + '" name="' + elementClass.substr(1) +
                        '_insert[]" multiple></div><div class="input-group-btn col-auto">@method('DELETE') <
                    button class = "btn btn-danger"
                    type = "button" > Remove < /button></div > < /div>';
                    $(elementClass).append(html);
                }

                $("body").on("click", ".btn-danger", function() {
                    $(this).parents(".remove").remove();
                });
            </script>
    </body>

    </html>
@endsection
