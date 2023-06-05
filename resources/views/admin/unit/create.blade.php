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
                            <form method="post" action="{{ route('unit.store', $property->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="" class="form-label">Title</label>
                                        <input class="form-control noscroll" id="title" name="title">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="" class="form-label">Description</label>
                                        <textarea class="form-control noscroll" id="description" name="description"></textarea>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="" class="form-label">Price</label>
                                        <input type="number" class="form-control noscroll" id="price" name="price">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="" class="form-label">Status</label>
                                        <select class="form-select" name="status_id[]" size="2" multiple>
                                            @foreach ($status as $status)
                                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="" class="form-label">Base</label>
                                        <input type="file" class="form-control noscroll" id="image" name="image">
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
                                        <label for="" class="form-label">Bedroom</label>
                                        <input class="form-control" name="bedroom" id="bedroom">
                                    </div>
                                    <div class="form-group col-auto">
                                        <label for="" class="form-label">Bathroom</label>
                                        <input class="form-control" name="bathroom" id="bathroom">
                                    </div>
                                    <div class="form-group col-auto">
                                        <label for="" class="form-label">Surface area</label>
                                        <input class="form-control" name="surface_area" id="surface_area">
                                    </div>
                                    <div class="form-group col-auto">
                                        <label for="" class="form-label">Building area</label>
                                        <input class="form-control" name="building_area" id="building_area">
                                    </div>
                                    <div class="form-group col-auto">
                                        <label for="" class="form-label">Floor</label>
                                        <input class="form-control" name="floor" id="floor">
                                    </div>
                                </div>
                                <br>
                                {{-- <div class="form-group">
                                    <div class="form-group">
                                        <label for="" class="form-label">Property</label>
                                        <select name="property_id" id="property_id" class="form-select">
                                            @foreach ($properties as $property)
                                                <option value="{{ $property->id }}">{{ $property->property }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <br> --}}
                                <div class="float-end">
                                    <a type="button" class="btn btn-warning" href="/admin/unit/data">Back</a>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

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
                        '[]" multiple></div><div class="input-group-btn col-auto"><button class="btn btn-danger" type="button">Remove</button></div></div>';
                    $(elementClass).append(html);
                }

                $("body").on("click", ".btn-danger", function() {
                    $(this).parents(".remove").remove();
                });
            </script>
    </body>

    </html>
@endsection
