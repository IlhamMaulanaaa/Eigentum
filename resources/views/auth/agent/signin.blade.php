<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/loginRegister/agen/login.css" />

    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                {{-- form Sign In  --}}
                {{-- action --}}
                <form action="#" class="sign-in-form">
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
                <form action="" class="sign-up-form" id="div">
                    {{-- end action --}}
                    <h2 class="title signupTitle">Sign up</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Nama" />
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
                                <i class="fa-sharp fa-solid fa-location-dot"></i>
                                <input type="texarea" placeholder="Alamat" />
                            </div>
                            <div class="input-field">
                                <i class="fa-solid fa-mobile"></i>
                                <input type="number" placeholder="Nomer Handphone" />
                            </div>
                        </div>
                        <div class="col-md-2">
                            {{-- <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="drpdwn provinsi" />
                            </div> --}}
                            
                            <div class="dropdown">
                                <select class="dropdown-select" style="height: 55px; width: 378px; border-radius: 50px;">
                                  <option value="" selected disabled>Select an Provinsi </option>
                                  <option value="option1">Option 1</option>
                                  <option value="option2">Option 2</option>
                                  <option value="option3">Option 3</option>
                                </select>
                              </div>
                              <div class="dropdown">
                                <select class="dropdown-select" style="height: 55px; width: 378px; border-radius: 50px;">
                                  <option value="" selected disabled>Select an Kota</option>
                                  <option value="option1">Option 1</option>
                                  <option value="option2">Option 2</option>
                                  <option value="option3">Option 3</option>
                                </select>
                              </div>
                              <div class="dropdown">
                                <select class="dropdown-select" style="height: 55px; width: 378px; border-radius: 50px; 
                                margin-bottom: 10px;">
                                  <option value="" selected disabled>Select an Distrik</option>
                                  <option value="option1">Option 1</option>
                                  <option value="option2">Option 2</option>
                                  <option value="option3">Option 3</option>
                                </select>
                              </div>
                                                            

                            <label for="file-upload" class="file-label">
                                <input type="file" id="file-upload" class="file-input">
                                <span class="file-button">Choose a file</span>
                                <span class="file-name">Foto KTP</span>
                              </label>
                            <label for="file-upload" class="file-label">
                                <input type="file" id="file-upload" class="file-input">
                                <span class="file-button">Choose a file</span>
                                <span class="file-name">Foto selfie dengan KTP</span>
                              </label>
                        </div>
                    </div>
                    <button type="submit" class="btn signupButton" value="Sign up" style="margin-left: 30px;">Submit</button>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content welcoming">
                    <h3>New here ?</h3>
                    <p id="greeting" class="">sudah punya akun!</p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="/assets/login/developer/img/Mortgage Broker online.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel ">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent " id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="/assets/login/developer/img/Mortgage Broker.svg" class="image" alt="" />
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/10d48cad5b.js" crossorigin="anonymous"></script>
    <script src="/js/loginRegister/developer/login.js"></script>
    <script src="/js/loginRegister/developer/jam.js"></script>
</body>
</html>
