@extends('layout.main')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/unit/upload/upload.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" type="text/css" href="css/pages/profile.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <title>Document</title>

    </head>

    <body>


        <div class="form-container" style="margin-top: 90px; height:auto;">
            <div class="left-section">
                <form method="post" action="{{ route('unit.store.developer', $property->id) }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label for="title" class="form-label">Unit</label>
                            <input class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                                value="{{ old('title') }}">
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
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                                name="price" value="{{ old('price') }}">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="status_id" class="form-label">Status</label>
                            @foreach ($status as $statusItem)
                                <div class="form-check">
                                    <input class="form-check-input @error('status_id') is-invalid @enderror" type="checkbox"
                                        name="status_id[]" value="{{ $statusItem->id }}" id="status_{{ $statusItem->id }}"
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
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                                name="image">
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
                                    <button class="btn btn-success btn-livingroomimg" type="button">Add</button>
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
                                    <input type="file" class="form-control noscroll" id="etcimg" name="etcimg[]"
                                        multiple>
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
                            <input type="text" class="form-control @error('surface_area') is-invalid @enderror"
                                name="surface_area" id="surface_area" value="{{ old('surface_area') }}">
                            @error('surface_area')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-auto">
                            <label for="building_area" class="form-label">Building area</label>
                            <input type="text" class="form-control @error('building_area') is-invalid @enderror"
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
                    <div class="float-end">
                        <a type="button" class="btn btn-warning"
                            href="{{ route('property.show.developer', $property->id) }}">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>

        </div>
        <script>
            function defaultBtnActive(wrapperNumber) {
                const wrapper = document.querySelector(".wrapper" + wrapperNumber);
                const fileName = wrapper.querySelector(".file-name");
                const defaultBtn = document.querySelector("#default-btn" + wrapperNumber);
                const customBtn = wrapper.querySelector(".custom-btn");
                const MembatalkanBtn = wrapper.querySelector("#Membatalkan-btn i");
                const img = wrapper.querySelector("img");
                let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_ ]+$/;

                defaultBtn.click();

                defaultBtn.addEventListener("change", function() {
                    const file = this.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function() {
                            const result = reader.result;
                            img.src = result;
                            wrapper.classList.add("active");
                        };
                        MembatalkanBtn.addEventListener("click", function() {
                            img.src = "";
                            wrapper.classList.remove("active");
                        });
                        reader.readAsDataURL(file);
                    }
                    if (this.value) {
                        let valueStore = this.value.match(regExp);
                        fileName.textContent = valueStore;
                    }
                });
            }


            function goBack() {
                window.history.back();
            }
            // Function to show the next section and hide the current section
            function nextSection(nextIndex) {
                const currentSection = document.getElementById(`section${nextIndex - 1}`);
                const nextSection = document.getElementById(`section${nextIndex}`);

                if (currentSection && nextSection) {
                    currentSection.classList.remove('current');
                    nextSection.classList.add('current');
                }
            }

            // Function to show the previous section and hide the current section
            function previousSection(previousIndex) {
                const currentSection = document.getElementById(`section${previousIndex}`);
                const previousSection = document.getElementById(`section${previousIndex - 1}`);

                if (currentSection && previousSection) {
                    currentSection.classList.remove('current');
                    previousSection.classList.add('current');
                }
            }
        </script>
        <script>
            function handleImageUpload(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        var uploadedImage = input.parentNode.querySelector('img');
                        uploadedImage.setAttribute('src', e.target.result);
                        uploadedImage.style.display = 'block';
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            document.addEventListener('DOMContentLoaded', function() {
                var uploadInputs = document.querySelectorAll('input[type="file"]');
                Array.prototype.forEach.call(uploadInputs, function(input) {
                    input.addEventListener('change', function() {
                        handleImageUpload(this);
                    });
                });
            });
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
                    '<div class="remove"><label for="' + elementClass.substr(1) +
                    '">Upload Opsional 1:</label><div class="upload-container"><label class="upload-icon" for="' + elementClass
                    .substr(1) + '"><i class="fas fa-upload"></i><input type="file" id="' + elementClass.substr(1) +
                    '" name="' + elementClass.substr(1) +
                    '[]" multiple style="display:none;"></label><div class="upload-details"><h3>Unggah Gambar</h3><p>Pilih gambar untuk diunggah</p><button class="btn btn-danger btn-' +
                    elementClass.substr(1) + 'img" type="button">Remove</button></div></div></div>';
                $(elementClass).append(html);
            }

            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".remove").remove();
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
        </script>

    </body>

    </html>
@endsection
