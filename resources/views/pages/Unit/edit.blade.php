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
               <form method="post" action="{{ route('unit.update.developer', $unit->id) }}" enctype="multipart/form-data">
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
                  <div class="float-end">
                      <a type="button" class="btn btn-warning"
                          href="{{ route('unit.show', $unit->id) }}">Back</a>
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
