<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/pages/profile.css">
    <!----======== CSS ======== -->
    <style>
        /* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #0C40E8;
}
.container{
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #fff;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.container header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}
.container header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #0C40E8;
}
.container form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #fff;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    background-color: #fff;
    transition: 0.3s ease;
}
.container form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}
form.secActive .form.second{
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;
    color: #333;
}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
form .fields .input-field1{
    display: flex;
    width: calc(100% / 2 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
} label{
    font-size: 12px;
    font-weight: 500;
    color: #2e2e2e;
}
.input-field form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
} input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    color: #333;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
} input :focus,
.input-field form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
} select:focus{
    box-shadow: 0 3px 6px rgba(0,0,0,0.13);
}
.input-field form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
} select,
.input-field form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
} input[type="date"]{
    color: #707070;
}
.input-field form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
} input[type="date"]:valid{
    color: #333;
}
.container form button, .backBtn{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    max-width: 200px;
    width: 100%;
    border: none;
    outline: none;
    color: #fff;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #0C40E8;
    transition: all 0.3s linear;
    cursor: pointer;
}
.container form .btnText{
    font-size: 14px;
    font-weight: 400;
}
form button:hover{
    background-color: #265df2;
}
form button i,
form .backBtn i{
    margin: 0 6px;
}
form .backBtn i{
    transform: rotate(180deg);
}
form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button , .backBtn{
    margin-right: 14px;
}

.masuk p{
    font-weight: 400;
    font-size: 1rem;
    color: #151111;
    text-decoration: none;
    font-size: 1rem;
    transition: 0.3s;
  }
  .masuk a{
    font-weight: 500;
    font-size: 1rem;
    color: #151111;
    text-decoration: none;
    font-size: 1rem;
    transition: 0.3s;
  }
  
  .linkmasuk:hover {
    color: #0C40E8;
  }

@media (max-width: 750px) {
    .container form{
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}{
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}{
        width: 100%;
    }
}

/* Tambahkan gaya khusus untuk konten kamera */
.camera-content {
    width: 100%;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Gaya tombol pembatalan */
.cancel-btn {
    position: absolute;
    top: 5px;
    right: 5px;
    cursor: pointer;
}

/* Gaya nama file kamera */
.camera-file-name {
    position: absolute;
    bottom: 5px;
    left: 5px;
    font-size: 12px;
    color: #555;
}

/* Gaya ikon kamera */
.icon {
    font-size: 20px;
    margin-right: 5px;
    color: #0C40E8;
}

    </style>
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

   <title>Responsive Regisration Form </title>
</head>
<body>
    <div class="container">
        <header>Registration</header>
        <div class="masuk" style="margin-top: 5px;">
            <p>Sudah Punya Akun Develop? <a class="linkmasuk" style=" text-decoration: none;" href="http://127.0.0.1:8000/session/auth/developer/signin">Masuk</a></p>
        </div>

        <form action="#">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Owner</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nama Lengkap</label>
                            <input type="text" placeholder="Nama Lengkap" >
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Alamat Email" >
                        </div>

                        <div class="input-field">
                            <label>Password</label>
                            <input type="text" placeholder="Kata Sandi" >
                        </div>
                        <div class="col-md-3 form-group">
                            <label>Wajah</label>
                            <div class="container-upload">
                                <div class="wrapper wrapper5">
                                    <div class="image" style="width:50px; height:50px;">
                                        <video id="video" autoplay style="width: 160px; height:150px; margin-top:-10px;"></video>
                                    </div>
                                    <div class="content" style="width: 100%; height: 10px; margin-top: -50px; justify-content: center; align-items: center;">
                                        {{-- <div class="icon">
                                            <i class="fas fa-camera"></i>
                                        </div> --}}
                                        {{-- <div class="text">
                                            Click to Start Camera
                                        </div> --}}
                                    </div>
                                    {{-- <div id="cancel-btn">
                                        <i class="fas fa-times"></i>
                                    </div> --}}
                                    {{-- <div class="file-name">
                                        Camera Stream
                                    </div> --}}
                                </div>
                                <button style="margin-top: 120px;" onclick="startCamera()" class="custom-btn" id="custom-btn">Start Camera</button>
                                <button style="margin-top: -20px;" onclick="captureSnapshot()" class="custom-btn" id="capture-btn">Capture</button>
                            </div>
                        </div>
                        <div class="col-md-3 form-group" style="margin-right: 390px;">
                            <label>KTP</label>
                            <div class="container-upload">
                                <div class="wrapper wrapper5">
                                    <div class="image" style="width:50px; height:50px;">
                                        <video id="video" autoplay style="width: 160px; height:150px; margin-top:-10px;"></video>
                                    </div>
                                    <div class="content" style="width: 100%; height: 10px; margin-top: -50px; justify-content: center; align-items: center;">
                                        {{-- <div class="icon">
                                            <i class="fas fa-camera"></i>
                                        </div> --}}
                                        {{-- <div class="text">
                                            Click to Start Camera
                                        </div> --}}
                                    </div>
                                    {{-- <div id="cancel-btn">
                                        <i class="fas fa-times"></i>
                                    </div> --}}
                                    {{-- <div class="file-name">
                                        Camera Stream
                                    </div> --}}
                                </div>
                                <button style="margin-top: 120px;" onclick="startCamera()" class="custom-btn" id="custom-btn">Start Camera</button>
                                <button style="margin-top: -20px;" onclick="captureSnapshot()" class="custom-btn" id="capture-btn">Capture</button>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                </div>

                <div class="details ID" >

                    <button class="nextBtn" style="margin-top: -20px">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Developer</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Perusahaan</label>
                            <input type="text" placeholder="Nama Perussahaan" >
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="text" placeholder="Email Perusahaan" >
                        </div>

                        <div class="input-field">
                            <label>Kata Sandi</label>
                            <input type="text" placeholder="Kata Sandi Perusahaan" >
                        </div>
                        <div class="input-field">
                            <label>Provinsi</label>
                            <select style="width: auto" >
                                <option disabled selected>Select gender</option>
                                <option>1</option>
                                <option>1</option>
                                <option>1</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Kabupaten/Kota</label>
                            <select style="width: auto" >
                                <option disabled selected>Pilih Kabupaten</option>
                                <option>1</option>
                                <option>1</option>
                                <option>1</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Kecamatan</label>
                            <select style="width: auto" >
                                <option disabled selected>Pilih Kecamatan</option>
                                <option>1</option>
                                <option>1</option>
                                <option>1</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Desa</label>
                            <select style="width: auto" >
                                <option disabled selected>Pilih Desa</option>
                                <option>1</option>
                                <option>1</option>
                                <option>1</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Alamat</label>
                            <input type="text" placeholder="Enter block number" >
                        </div>

                        <div class="input-field">
                            <label>Nomor Induk Berusaha</label>
                            <input type="text" placeholder="Enter ward number" >
                        </div>
                        <div class="input-field">
                            <label>Nomor Pokok Wajib</label>
                            <input type="text" placeholder="Enter ward number" >
                        </div>
                        <div class="input-field">
                            <label>Sertifikat Badan Usaha</label>
                            <input type="text" placeholder="Enter ward number" >
                        </div>
                        <div class="input-field">
                            <label>Telephone</label>
                            <input type="tel" placeholder="Enter ward number" >
                        </div>
                    </div>
                </div>
                <div class="details family">


                    <div class="buttons">
                        <div class="backBtn">
                            <i class="uil uil-navigator"></i>
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="sumbit" formaction="/beranda">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script>
        const form = document.querySelector("form"),
        nextBtn = form.querySelector(".nextBtn"),
        backBtn = form.querySelector(".backBtn"),
        allInput = form.querySelectorAll(".first input");


        nextBtn.addEventListener("click", ()=> {
            allInput.forEach(input => {
                if(input.value != ""){
                    form.classList.add('secActive');
                }else{
                    form.classList.remove('secActive');
                }
            })
        })

       
        const video = document.getElementById("video");
const startButton = document.getElementById("start-btn");
const captureButton = document.getElementById("capture-btn");
const cancelCaptureButton = document.getElementById("cancel-capture-btn");

let stream;
let cameraActive = false; // Variable to track camera activation status

function startCamera() {
    if (cameraActive) return; // Jika kamera sudah aktif, keluar dari fungsi
    cameraActive = true; // Set status kamera menjadi aktif
    navigator.mediaDevices.getUserMedia({ video: true })
    .then(mediaStream => {
        stream = mediaStream;
        video.srcObject = stream;
        startButton.style.display = "none";
        captureButton.style.display = "block";
        cancelCaptureButton.style.display = "block";
        document.querySelector(".content").style.display = "none";
        document.querySelector(".image").style.display = "block";
    })
    .catch(error => {
        console.error("Error accessing camera:", error);
    });
}


// Rest of your code...

let capturedImage = null;

function captureSnapshot() {
    const canvas = document.createElement("canvas");
    const targetWidth = 150;
    const targetHeight = 150;
    canvas.width = targetWidth;
    canvas.height = targetHeight;
    cameraActive = false;
    
    // Calculate scaling factor for resizing
    const scaleFactor = Math.min(targetWidth / video.videoWidth, targetHeight / video.videoHeight);
    
    const drawWidth = video.videoWidth * scaleFactor;
    const drawHeight = video.videoHeight * scaleFactor;
    
    const xOffset = (canvas.width - drawWidth) / 2;
    const yOffset = (canvas.height - drawHeight) / 2;
    
    canvas.getContext("2d").drawImage(video, xOffset, yOffset, drawWidth, drawHeight);
    
    const image = document.createElement("img");
    image.src = canvas.toDataURL();
    image.width = targetWidth;
    image.height = targetHeight;
    image.style.marginTop = "-10px"; // Set the margin-top to -10px

    const imageContainer = document.querySelector(".image");
    imageContainer.innerHTML = "";
    imageContainer.appendChild(image);

    // Store the captured image
    capturedImage = image.src;

    // Show the "Start Camera" button again
    startButton.style.display = "block";
    captureButton.style.display = "none";
    cancelCaptureButton.style.display = "none";
}






// function cancelCapture() {
//     // Stop camera stream
//     if (stream) {
//         const tracks = stream.getTracks();
//         tracks.forEach(track => track.stop());
//     }

//     // Reset UI
//     startButton.style.display = "block";
//     captureButton.style.display = "none";
//     cancelCaptureButton.style.display = "none";
//     document.querySelector(".content").style.display = "block";
//     document.querySelector(".image").style.display = "none";
// }

// Menambahkan event listener untuk tombol "Cancel"
// cancelCaptureButton.addEventListener("click", cancelCapture);
    </script>
    
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>