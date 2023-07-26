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
        
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/pages/profile.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <title>Document</title>

</head>

<body>
     

    <div class="form-container" >
        
        <div class="left-section">
            <form id="multi-page-form">
                <div class="form-section current" id="section1" style="margin-top: -70px;">
                    <button class="back-button" onclick="goBack()" style="">
                        Back
                    </button>   
                    <h1 class="h1upload">Upload Unit</h1>
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

                <div class="form-section" id="section2" style="margin-top: -70px;">
                    <button class="back-button" onclick="previousSection(2)" style="">
                        Back
                    </button> 
                    <h1 class="h1uploadimage" style="margin-top:-70px; 
                    text-align: center; margin-bottom:50px;">Unggah Unit</h1>
                    <div class="left-section">
                        <div class="upload-container" style="margin-bottom: 90px;"">
                            <div class="container-upload">
                                <div class="wrapper wrapper2">
                                   <div class="image">
                                      <img src="" alt="">
                                   </div>
                                   <div class="content" style="width: 100%; height: 10px; margin-top: -50px; justify-content: center; align-items: center;">
                                      <div class="icon">
                                         <i class="fas fa-photo"></i>
                                      </div>
                                      <div class="text">
                                         No file chosen, yet!
                                      </div>
                                   </div>
                                   <div id="cancel-btn">
                                      <i class="fas fa-times"></i>
                                   </div>
                                   <div class="file-name">
                                      File name here
                                   </div>
                                </div>
                                <button onclick="defaultBtnActive(2)" class="custom-btn" id="custom-btn">Upload</button>
                                <input id="default-btn2" type="file" hidden>
                             </div>
                            <div class="upload-details">
                                <h3>Unggah Video 360°</h3>
                                <p>Unggah Video bagian depan dengan kualitas HD dan ukuran file video Maks 10 MB
                                </p>
                            </div>
                        </div>

                        <div class="upload-container" style="margin-bottom: 90px;">
                            <div class="container-upload">
                                <div class="wrapper wrapper2">
                                   <div class="image">
                                      <img src="" alt="">
                                   </div>
                                   <div class="content" style="width: 100%; height: 10px; margin-top: -50px; justify-content: center; align-items: center;">
                                      <div class="icon">
                                         <i class="fas fa-photo"></i>
                                      </div>
                                      <div class="text">
                                         No file chosen, yet!
                                      </div>
                                   </div>
                                   <div id="cancel-btn">
                                      <i class="fas fa-times"></i>
                                   </div>
                                   <div class="file-name">
                                      File name here
                                   </div>
                                </div>
                                <button onclick="defaultBtnActive(2)" class="custom-btn" id="custom-btn">Upload</button>
                                <input id="default-btn2" type="file" hidden>
                             </div>
                            <div class="upload-details">
                                <h3>Unggah Rumah</h3>
                                <p>Unggah Rumah bagian samping dengan kualitas HD dan ukuran file foto Maks 10 MB
                                </p>
                            </div>
                        </div>

                        <div class="upload-container" style="margin-bottom: 90px;">
                            <div class="container-upload">
                                <div class="wrapper wrapper2">
                                   <div class="image">
                                      <img src="" alt="">
                                   </div>
                                   <div class="content" style="width: 100%; height: 10px; margin-top: -50px; justify-content: center; align-items: center;">
                                      <div class="icon">
                                         <i class="fas fa-photo"></i>
                                      </div>
                                      <div class="text">
                                         No file chosen, yet!
                                      </div>
                                   </div>
                                   <div id="cancel-btn">
                                      <i class="fas fa-times"></i>
                                   </div>
                                   <div class="file-name">
                                      File name here
                                   </div>
                                </div>
                                <button onclick="defaultBtnActive(2)" class="custom-btn" id="custom-btn">Upload</button>
                                <input id="default-btn2" type="file" hidden>
                             </div>
                            <div class="upload-details">
                                <h3>Unggah Rumah</h3>
                                <p>Unggah Rumah bagian belakang dengan kualitas HD dan ukuran file foto Maks 10 MB
                                </p>
                            </div>
                        </div>

                        <div class="upload-container" style="margin-bottom: 90px;">
                            <div class="container-upload">
                                <div class="wrapper wrapper2">
                                   <div class="image">
                                      <img src="" alt="">
                                   </div>
                                   <div class="content" style="width: 100%; height: 10px; margin-top: -50px; justify-content: center; align-items: center;">
                                      <div class="icon">
                                         <i class="fas fa-photo"></i>
                                      </div>
                                      <div class="text">
                                         No file chosen, yet!
                                      </div>
                                   </div>
                                   <div id="cancel-btn">
                                      <i class="fas fa-times"></i>
                                   </div>
                                   <div class="file-name">
                                      File name here
                                   </div>
                                </div>
                                <button onclick="defaultBtnActive(2)" class="custom-btn" id="custom-btn">Upload</button>
                                <input id="default-btn2" type="file" hidden>
                             </div>
                            <div class="upload-details">
                                <h3>Unggah Ruang Tamu</h3>
                                <p>Unggah Ruang Tamu dengan kualitas HD dan ukuran file foto Maks 10 MB
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="upload-container" style="margin-bottom: 90px;">
                            <div class="container-upload">
                                <div class="wrapper wrapper2">
                                   <div class="image">
                                      <img src="" alt="">
                                   </div>
                                   <div class="content" style="width: 100%; height: 10px; margin-top: -50px; justify-content: center; align-items: center;">
                                      <div class="icon">
                                         <i class="fas fa-photo"></i>
                                      </div>
                                      <div class="text">
                                         No file chosen, yet!
                                      </div>
                                   </div>
                                   <div id="cancel-btn">
                                      <i class="fas fa-times"></i>
                                   </div>
                                   <div class="file-name">
                                      File name here
                                   </div>
                                </div>
                                <button onclick="defaultBtnActive(2)" class="custom-btn" id="custom-btn">Upload</button>
                                <input id="default-btn2" type="file" hidden>
                             </div>
                            <div class="upload-details">
                                <h3>Unggah Kamar Tidur</h3>
                                <p>Unggah Kamar Tidur bagian depan dengan kualitas HD dan ukuran file foto Maks 10 MB
                                </p>
                            </div>
                        </div>

                        <div class="upload-container" style="margin-bottom: 90px;">
                            <div class="container-upload">
                                <div class="wrapper wrapper2">
                                   <div class="image">
                                      <img src="" alt="">
                                   </div>
                                   <div class="content" style="width: 100%; height: 10px; margin-top: -50px; justify-content: center; align-items: center;">
                                      <div class="icon">
                                         <i class="fas fa-photo"></i>
                                      </div>
                                      <div class="text">
                                         No file chosen, yet!
                                      </div>
                                   </div>
                                   <div id="cancel-btn">
                                      <i class="fas fa-times"></i>
                                   </div>
                                   <div class="file-name">
                                      File name here
                                   </div>
                                </div>
                                <button onclick="defaultBtnActive(2)" class="custom-btn" id="custom-btn">Upload</button>
                                <input id="default-btn2" type="file" hidden>
                             </div>
                            <div class="upload-details">
                                <h3>Unggah Kamar Mandi</h3>
                                <p>Unggah Kamar Mandi bagian depan dengan kualitas HD dan ukuran file foto Maks 10 MB
                                </p>
                            </div>
                        </div>
                        <div class="upload-container" style="margin-bottom: 90px;">
                            <div class="container-upload">
                                <div class="wrapper wrapper2">
                                   <div class="image">
                                      <img src="" alt="">
                                   </div>
                                   <div class="content" style="width: 100%; height: 10px; margin-top: -50px; justify-content: center; align-items: center;">
                                      <div class="icon">
                                         <i class="fas fa-photo"></i>
                                      </div>
                                      <div class="text">
                                         No file chosen, yet!
                                      </div>
                                   </div>
                                   <div id="cancel-btn">
                                      <i class="fas fa-times"></i>
                                   </div>
                                   <div class="file-name">
                                      File name here
                                   </div>
                                </div>
                                <button onclick="defaultBtnActive(2)" class="custom-btn" id="custom-btn">Upload</button>
                                <input id="default-btn2" type="file" hidden>
                             </div>
                            <div class="upload-details">
                                <h3>Unggah Ruang Dapur</h3>
                                <p>Unggah Ruang Dapur bagian depan dengan kualitas HD dan ukuran file foto Maks 10 MB
                                </p>
                            </div>
                        </div>

                        <div class="upload-container" style="margin-bottom: 90px;">
                            <div class="container-upload">
                                <div class="wrapper wrapper2">
                                   <div class="image">
                                      <img src="" alt="">
                                   </div>
                                   <div class="content" style="width: 100%; height: 10px; margin-top: -50px; justify-content: center; align-items: center;">
                                      <div class="icon">
                                         <i class="fas fa-photo"></i>
                                      </div>
                                      <div class="text">
                                         No file chosen, yet!
                                      </div>
                                   </div>
                                   <div id="cancel-btn">
                                      <i class="fas fa-times"></i>
                                   </div>
                                   <div class="file-name">
                                      File name here
                                   </div>
                                </div>
                                <button onclick="defaultBtnActive(2)" class="custom-btn" id="custom-btn">Upload</button>
                                <input id="default-btn2" type="file" hidden>
                             </div>
                            <div class="upload-details">
                                <h3>Unggah Denah Rumah</h3>
                                <p>Unggah Denah Rumah bagian depan dengan kualitas HD dan ukuran file foto Maks 10 MB
                                </p>
                            </div>
                        </div>

                       
                    </div>

                    <br>
                    <br>
                    <br>
                    <button type="button" class="btn-next"  style="margin-top: 0px;">Buat</button>
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
    
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
{{-- @endsection --}}
