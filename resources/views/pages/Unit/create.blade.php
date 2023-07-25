{{-- @extends('layout.main') --}}
{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/unit/upload/upload.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>
    <button class="back-button" onclick="goBack()">
        <i class="fas fa-arrow-left back-icon"></i>
        Back
    </button>

    <div class="form-container">
        <div class="left-section">
            <form id="multi-page-form">
                <div class="form-section current" id="section1">
                    <h1 class="h1upload">upload unit</h1>
                    <label for="deskripsi">Judul:</label>
                    <input type="text" id="judul" name="judul" required>

                    <label for="deskripsi">Deskripsi:</label>
                    <textarea id="deskripsi" name="deskripsi" required></textarea>

                    <label for="lebar">Lebar:</label>
                    <input type="number" id="lebar" name="lebar" required>

                    <label for="panjang">Panjang:</label>
                    <input type="number" id="panjang" name="panjang" required>

                    <label for="luas_tanah">Luas Tanah:</label>
                    <input type="number" id="luas_tanah" name="luas_tanah" required>

                    <label for="luas_bangunan">Luas Bangunan:</label>
                    <input type="number" id="luas_bangunan" name="luas_bangunan" required>

                    <label for="kamar_mandi">Kamar Mandi:</label>
                    <input type="number" id="kamar_mandi" name="kamar_mandi" required>

                    <label for="kamar_tidur">Kamar Tidur:</label>
                    <input type="number" id="kamar_tidur" name="kamar_tidur" required>
                    {{-- make me button next for next form --}}
                    <br>
                    <br>
                    <button type="button" class="btn-next" onclick="nextSection(2)">Berikutnya</button>
                </div>

                <div class="form-section" id="section2">

                    <br>
                    <br>
                    <div class="left-section">
                        <div class="upload-container">
                            <label class="upload-icon" for="optional1">
                                <i class="fas fa-upload"></i>
                                <input type="file" id="optional1" name="optional1" style="display:none;">
                            </label>
                            <div class="upload-details">
                                <h3>Unggah Gambar</h3>
                                <p>Pilih gambar untuk diunggah Pilih gambar untuk diunggah Pilih gambar untuk diunggah
                                </p>
                            </div>
                        </div>

                        <div class="upload-container">
                            <label class="upload-icon" for="optional1">
                                <i class="fas fa-upload"></i>
                                <input type="file" id="optional1" name="optional1" style="display:none;">
                            </label>
                            <div class="upload-details">
                                <h3>Unggah Gambar</h3>
                                <p>Pilih gambar untuk diunggah Pilih gambar untuk diunggah Pilih gambar untuk diunggah
                                </p>
                            </div>
                        </div>

                        <div class="upload-container">
                            <label class="upload-icon" for="optional1">
                                <i class="fas fa-upload"></i>
                                <input type="file" id="optional1" name="optional1" style="display:none;">
                            </label>
                            <div class="upload-details">
                                <h3>Unggah Gambar</h3>
                                <p>Pilih gambar untuk diunggah Pilih gambar untuk diunggah Pilih gambar untuk diunggah
                                </p>
                            </div>
                        </div>

                        <div class="upload-container">
                            <label class="upload-icon" for="optional1">
                                <i class="fas fa-upload"></i>
                                <input type="file" id="optional1" name="optional1" style="display:none;">
                            </label>
                            <div class="upload-details">
                                <h3>Unggah Gambar</h3>
                                <p>Pilih gambar untuk diunggah Pilih gambar untuk diunggah Pilih gambar untuk diunggah
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="upload-container">
                            <label class="upload-icon" for="optional1">
                                <i class="fas fa-upload"></i>
                                <input type="file" id="optional1" name="optional1" style="display:none;">
                            </label>
                            <div class="upload-details">
                                <h3>Unggah Gambar</h3>
                                <p>Pilih gambar untuk diunggah Pilih gambar untuk diunggah Pilih gambar untuk diunggah
                                </p>
                            </div>
                        </div>

                        <div class="upload-container">
                            <label class="upload-icon" for="optional1">
                                <i class="fas fa-upload"></i>
                                <input type="file" id="optional1" name="optional1" style="display:none;">
                            </label>
                            <div class="upload-details">
                                <h3>Unggah Gambar</h3>
                                <p>Pilih gambar untuk diunggah Pilih gambar untuk diunggah Pilih gambar untuk diunggah
                                </p>
                            </div>
                        </div>

                        <div class="upload-container">
                            <label class="upload-icon" for="optional1">
                                <i class="fas fa-upload"></i>
                                <input type="file" id="optional1" name="optional1" style="display:none;">
                            </label>
                            <div class="upload-details">
                                <h3>Unggah Gambar</h3>
                                <p>Pilih gambar untuk diunggah Pilih gambar untuk diunggah Pilih gambar untuk diunggah
                                </p>
                            </div>
                        </div>

                        <div class="upload-container">
                            <label class="upload-icon" for="optional1">
                                <i class="fas fa-upload"></i>
                                <input type="file" id="optional1" name="optional1" style="display:none;">
                            </label>
                            <div class="upload-details">
                                <h3>Unggah Gambar</h3>
                                <p>Pilih gambar untuk diunggah Pilih gambar untuk diunggah Pilih gambar untuk diunggah
                                </p>
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>
                    <button type="button" class="btn-next" onclick="previousSection(2)">Previous</button>
                </div>
            </form>

        </div>

    </div>
    <script>
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

</body>

</html>
{{-- @endsection --}}
