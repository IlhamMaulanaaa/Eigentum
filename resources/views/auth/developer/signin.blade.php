<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/auth/developer/login.css" />

    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                {{-- form Sign In  --}}
                {{-- action --}}
                <form action="#" class="sign-up-form">
                    {{-- end action --}}
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
                {{-- form Sign Up --}}
                {{-- action --}}
                <form action="" class="sign-in-form" id="div">
                    {{-- end action --}}
                    <h2 class="title ">Sign up</h2>
                    {{-- <div class="input-field">
                        <i class="fa-sharp fa-solid fa-building"></i>
                        <input type="text" placeholder="Nama Perusahaan" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="validasi Password" />
                    </div>
                    <div class="input-field">
                        <i class="fa-sharp fa-solid fa-location-dot"></i>
                        <input type="texarea" placeholder="Alamat" />
                    </div>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nama Owner" />
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-mobile"></i>
                        <input type="number" placeholder="Nomer Handphone" />
                    </div>
                    <label for="file-upload" class="file-label">
                        <input type="file" id="file-upload" class="file-input">
                        <span class="file-button">Choose a file</span>
                        <span class="file-name">Lecense</span>
                    </label>
                    <button type="submit" class="btn " value="Sign up">Submit</button> --}}
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
                </form>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content welcoming">
                    <h3>New here ?</h3>
                    <p id="greeting" class="">sudah punya akun!</p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign in
                    </button>
                </div>
                <img src="/assets/login/developer/img/Mortgage Broker online.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel ">
                <div class="content">

                    <p>
                        Bergabunglah dengan komunitas developer terbaik dan tingkatkan penjualan properti Anda di
                        Eigentum.
                    </p>
                    <button class="btn transparent " id="sign-in-btn">
                        Sign up
                    </button>
                </div>
                <img src="/assets/login/developer/img/Mortgage Broker.svg" class="image" alt="" />
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/10d48cad5b.js" crossorigin="anonymous"></script>
    <script src="/js/auth/developer/login.js"></script>
    <script src="/js/auth/developer/register.js"></script>
    <script src="/js/auth/developer/jam.js"></script>
</body>

</html>
