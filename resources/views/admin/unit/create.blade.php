@extends('admin.layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-en_US.js"></script> --}}
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-ad-12">
                    <h3 class=" text-dark">Tambah Data Unit</h3>
                    <br>
                    <div class="card bg-light">
                        <div class="card-body">
                            <form method="post" action="{{ route('unitid.store', $property->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="title" class="form-label">Unit</label>
                                        <input class="form-control @error('title') is-invalid @enderror" id="title"
                                            name="title" value="{{ old('title') }}">
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                                            id="price" name="price" value="{{ old('price') }}">
                                        @error('price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="status_id" class="form-label">Status</label>
                                        @foreach ($status as $statusItem)
                                            <div class="form-check">
                                                <input class="form-check-input @error('status_id') is-invalid @enderror"
                                                    type="checkbox" name="status_id[]" value="{{ $statusItem->id }}"
                                                    id="status_{{ $statusItem->id }}"
                                                    {{ in_array($statusItem->id, old('status_id', [])) ? 'checked' : '' }}>
                                                <label class="form-check-label"
                                                    for="status_{{ $statusItem->id }}">{{ $statusItem->name }}</label>
                                            </div>
                                        @endforeach
                                        @error('status_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="image" class="form-label">Base</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror"
                                            id="image" name="image">
                                        @error('image')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                <div class="form-group">
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label">Living room</label>
                                        <div class="livingroomimg row g-2">
                                            <div class="col-auto">
                                                <input type="file" class="form-control noscroll" id="livingroomimg"
                                                    name="livingroomimg[]" multiple>
                                            </div>
                                            <div class="input-group-btn col-auto">
                                                <button class="btn btn-success btn-livingroomimg"
                                                    type="button">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label">Bedroom</label>
                                        <div class="bedroomimg row g-2">
                                            <div class="col-auto">
                                                <input type="file" class="form-control noscroll" id="bedroomimg"
                                                    name="bedroomimg[]" multiple>
                                            </div>
                                            <div class="input-group-btn col-auto">
                                                <button class="btn btn-success btn-bedroomimg" type="button">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label">Bathroom</label>
                                        <div class="bathroomimg row g-2">
                                            <div class="col-auto">
                                                <input type="file" class="form-control noscroll" id="bathroomimg"
                                                    name="bathroomimg[]" multiple>
                                            </div>
                                            <div class="input-group-btn col-auto">
                                                <button class="btn btn-success btn-bathroomimg" type="button">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label">Kitchen</label>
                                        <div class="kitchenimg row g-2">
                                            <div class="col-auto">
                                                <input type="file" class="form-control noscroll" id="kitchenimg"
                                                    name="kitchenimg[]" multiple>
                                            </div>
                                            <div class="input-group-btn col-auto">
                                                <button class="btn btn-success btn-kitchenimg" type="button">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label">Etc</label>
                                        <div class="etcimg row g-2">
                                            <div class="col-auto">
                                                <input type="file" class="form-control noscroll" id="etcimg"
                                                    name="etcimg[]" multiple>
                                            </div>
                                            <div class="input-group-btn col-auto">
                                                <button class="btn btn-success btn-etcimg" type="button">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                    <div class="form-group col-auto">
                                        <label for="bedroom" class="form-label">Bedroom</label>
                                        <input type="text" class="form-control @error('bedroom') is-invalid @enderror"
                                            name="bedroom" id="bedroom" value="{{ old('bedroom') }}">
                                        @error('bedroom')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-auto">
                                        <label for="bathroom" class="form-label">Bathroom</label>
                                        <input type="text" class="form-control @error('bathroom') is-invalid @enderror"
                                            name="bathroom" id="bathroom" value="{{ old('bathroom') }}">
                                        @error('bathroom')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-auto">
                                        <label for="surface_area" class="form-label">Surface area</label>
                                        <input type="text"
                                            class="form-control @error('surface_area') is-invalid @enderror"
                                            name="surface_area" id="surface_area" value="{{ old('surface_area') }}">
                                        @error('surface_area')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-auto">
                                        <label for="building_area" class="form-label">Building area</label>
                                        <input type="text"
                                            class="form-control @error('building_area') is-invalid @enderror"
                                            name="building_area" id="building_area" value="{{ old('building_area') }}">
                                        @error('building_area')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-auto">
                                        <label for="floor" class="form-label">Floor</label>
                                        <input type="text" class="form-control @error('floor') is-invalid @enderror"
                                            name="floor" id="floor" value="{{ old('floor') }}">
                                        @error('floor')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <br>
                                {{-- <div class="form-group">
                                    <div class="form-group">
                                        <label for="" class="form-label">Property</label>
                                        <select name="property_id" id="property_id" class="form-select">
                                            @foreach ($properties as $property)
                                                <option value="{{ $property->id }}">{{ $property->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br> --}}
                                <div class="float-end">
                                    <a type="button" class="btn btn-warning" href="{{ route('unit.index') }}">Back</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                    $('.form-control, .form-select, .form-control, .form-check-input').on('focus', function() {
                        $(this).removeClass('is-invalid');
                        $(this).next('.invalid-feedback').remove();
                        if ($(this).hasClass('form-check-input')) {
                            $(this).closest('.form-check').find('.invalid-feedback').remove();
                        }
                    });
                });
        </script>

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
                    '<div class="remove row g-2"><div class="col-auto"><input type="file" class="form-control noscroll" id="' +
                    elementClass.substr(1) + '" name="' + elementClass.substr(1) +
                    '[]" multiple></div><div class="input-group-btn col-auto">@method('DELETE') <button class = "btn btn-danger" type = "button"> Remove </button></div></div>';
                $(elementClass).append(html);
            }

            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".remove").remove();
            });
        </script>
    </body>

    </html>
@endsection
