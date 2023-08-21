<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://apis.google.com/js/api:client.js"></script>
    <title>Eigentum</title>
    {{-- google login button --}}
    {{-- <script>
        var googleUser = {};
        var startApp = function() {
            gapi.load('auth2', function() {
                // Retrieve the singleton for the GoogleAuth library and set up the client.
                auth2 = gapi.auth2.init({
                    client_id: 'YOUR_CLIENT_ID.apps.googleusercontent.com',
                    cookiepolicy: 'single_host_origin',
                    // Request scopes in addition to 'profile' and 'email'
                    //scope: 'additional_scope'
                });
                attachSignin(document.getElementById('customBtn'));
            });
        };

        function attachSignin(element) {
            console.log(element.id);
            auth2.attachClickHandler(element, {},
                function(googleUser) {
                    document.getElementById('name').innerText = "Signed in: " +
                        googleUser.getBasicProfile().getName();
                },
                function(error) {
                    alert(JSON.stringify(error, undefined, 2));
                });
        }
    </script> --}}
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

        *,
        *::before,
        *::after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body,
        input {
            font-family: "Poppins", sans-serif;
        }

        main {
            width: 100%;
            min-height: 100vh;
            overflow: hidden;
            background-color: #0C40E8;
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box {
            position: relative;
            width: 100%;
            max-width: 1020px;
            height: 640px;
            background-color: #fff;
            border-radius: 6px;
            box-shadow: 0 60px 40px -30px rgba(0, 0, 0, 0.27);
        }

        .inner-box {
            position: absolute;
            width: calc(100% - 4.1rem);
            height: calc(100% - 4.1rem);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .forms-wrap {
            position: absolute;
            height: 100%;
            width: 45%;
            top: 0;
            left: 0;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
            transition: 0.8s ease-in-out;
        }

        form {
            max-width: 260px;
            width: 100%;
            margin: 0 auto;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            grid-column: 1 / 2;
            grid-row: 1 / 2;
            transition: opacity 0.02s 0.4s;
        }

        form.sign-up-form {
            opacity: 0;
            pointer-events: none;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        /* .logo img {
            width: 150px;
            height: 150px;
            margin-right: 0.3rem;
            margin-bottom: -90px;
        }

        .logo h4 {
            font-size: 1.5rem;
            margin-top: -9px;
            letter-spacing: -0.5px;
            color: #151111;
        }

        .heading h2 {
            font-size: 2.1rem;
            font-weight: 600;
            color: #151111;
        } */

        .heading h6 {
            color: #000000;
            font-weight: 400;
            font-size: 1rem;
            display: inline;
        }

        .toggle {
            color: #151111;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: 500;
            transition: 0.3s;
        }

        .toggle:hover {
            color: #0C40E8;
        }

        .input-wrap {
            position: relative;
            height: 37px;
            margin-bottom: 2rem;
        }

        .input-field {
            position: absolute;
            width: 100%;
            height: 100%;
            background: none;
            border: none;
            outline: none;
            border-bottom: 1px solid #bbb;
            padding: 0;
            font-size: 1rem;
            color: #151111;
            transition: 0.4s;
        }

        label {
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1rem;
            color: #bbb;
            pointer-events: none;
            transition: 0.4s;
        }

        .input-field.active {
            border-bottom-color: #151111;
        }

        .input-field.active+label {
            font-size: 1rem;
            top: -2px;
        }

        .sign-btn {
            display: inline-block;
            width: 100%;
            height: 43px;
            background-color: #151111;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 0.8rem;
            font-size: 0.8rem;
            margin-bottom: 2rem;
            transition: 0.3s;
        }

        .sign-btn:hover {
            background-color: #0C40E8;
        }

        .text {
            color: #bbb;
            font-size: 0.7rem;
            margin-top: 2rem;
        }

        .text a {
            color: #bbb;
            transition: 0.3s;
        }

        .text a:hover {
            color: #0C40E8;
        }

        main.sign-up-mode form.sign-in-form {
            opacity: 0;
            width: 100px;
            pointer-events: none;
        }

        main.sign-up-mode form.sign-up-form {
            opacity: 1;
            pointer-events: all;
        }

        main.sign-up-mode .forms-wrap {
            left: 55%;
        }

        main.sign-up-mode .carousel {
            left: 0%;
        }

        .carousel {
            position: absolute;
            height: 100%;
            width: 55%;
            left: 45%;
            top: 0;
            background-color: #0C40E8;
            border-radius: 2rem;
            display: grid;
            grid-template-rows: auto 1fr;
            padding-bottom: 2rem;
            overflow: hidden;
            transition: 0.8s ease-in-out;
        }

        .images-wrapper {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 1fr;
        }

        .image {
            width: 100%;
            grid-column: 1/2;
            grid-row: 1/2;
            opacity: 0;
            transition: opacity 0.3s, transform 0.5s;
        }

        .img-1 {
            transform: translate(0, -50px);
        }

        .img-2 {
            transform: scale(0.4, 0.5);
        }

        .img-3 {
            transform: scale(0.3) rotate(-20deg);
        }

        .image.show {
            opacity: 1;
            transform: none;
        }

        .text-slider {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .text-wrap {
            color: #fff;
            max-height: 2.2rem;
            overflow: hidden;
            margin-bottom: 2.5rem;
        }

        .text-group {
            display: flex;
            flex-direction: column;
            text-align: center;
            transform: translateY(0);
            transition: 0.5s;
        }

        .text-group h2 {
            line-height: 2.2rem;
            font-weight: 600;
            font-size: 1.6rem;
        }

        .bullets {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bullets span {
            display: block;
            width: 0.5rem;
            height: 0.5rem;
            background-color: #aaa;
            margin: 0 0.25rem;
            border-radius: 50%;
            cursor: pointer;
            transition: 0.3s;
        }

        .bullets span.active {
            width: 1.1rem;
            background-color: #fff;
            border-radius: 1rem;
        }

        @media (max-width: 850px) {
            .box {
                height: auto;
                max-width: 550px;
                overflow: hidden;
            }

            .inner-box {
                position: static;
                transform: none;
                width: revert;
                height: revert;
                padding: 2rem;
            }

            .forms-wrap {
                position: revert;
                width: 100%;
                height: auto;
            }

            form {
                max-width: revert;
                padding: 1.5rem 2.5rem 2rem;
                transition: transform 0.8s ease-in-out, opacity 0.45s linear;
            }

            .heading {
                margin: 2rem 0;
            }

            form.sign-up-form {
                transform: translateX(100%);
            }

            form.sign-in-form {
                top: 90;
            }


            main.sign-up-mode form.sign-in-form {
                transform: translateX(-100%);
            }

            main.sign-up-mode form.sign-up-form {
                transform: translateX(0%);
            }

            .carousel {
                position: revert;
                height: auto;
                width: 100%;
                padding: 3rem 2rem;
                display: flex;
            }

            .images-wrapper {
                display: none;
            }

            .text-slider {
                width: 100%;
            }
        }

        @media (max-width: 530px) {
            main {
                padding: 1rem;
            }

            .box {
                border-radius: 2rem;
            }

            .inner-box {
                padding: 1rem;
            }

            .carousel {
                padding: 1.5rem 1rem;
                border-radius: 1.6rem;
            }

            .text-wrap {
                margin-bottom: 1rem;
            }

            .text-group h2 {
                font-size: 1.2rem;
            }

            form {
                padding: 1rem 2rem 1.5rem;
            }
        }

        .agent {
            margin-left: 0px;
            font-size: 12px;
        }

        .dev-signup-link {
            font-size: 12px;
            margin-left: 50px;
        }

        .register-btn {
            margin-bottom: 0px;
        }

        .underline {
            text-decoration: underline;
        }
    </style>
    {{-- google button login styling --}}
    <style type="text/css">
        #customBtn {
            display: inline-block;
            background: white;
            color: #444;
            width: 190px;
            border-radius: 5px;
            border: thin solid #888;
            box-shadow: 1px 1px 1px grey;
            white-space: nowrap;
        }

        #customBtn:hover {
            cursor: pointer;
        }

        span.label {
            font-family: serif;
            font-weight: normal;
        }

        span.icon {
            background: url('/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
            display: inline-block;
            vertical-align: middle;
            width: 42px;
            height: 42px;
        }

        span.buttonText {
            display: inline-block;
            vertical-align: middle;
            padding-left: 42px;
            padding-right: 42px;
            font-size: 14px;
            font-weight: bold;
            /* Use the Roboto font that is loaded in the <head> */
            font-family: 'Roboto', sans-serif;
        }

        .google-button {
            display: inline-block;
            padding: 6.5px 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 12px;
            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.2);
            font-size: 16px;
            color: #555;
            width: 100%;
            height: 43px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s, box-shadow 0.3s;
        }

        .google-button img {
            width: 20px;
            margin-right: 10px;
            vertical-align: middle;
            justify-content: center;
        }

        .google-button:hover {
            background-color: #f5f5f5;
            color: #333;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="/createL" method="POST" autocomplete="off" class="sign-in-form">
                        {{-- <div class="logo">
                            <img src="/assets/skins/logo.svg" alt="" />
                        </div> --}}
                        @csrf
                        <div class="heading">
                            <h2>Selamat Datang!!</h2>
                            <h6>belum pumya akun?</h6>
                            <a href="#" class="toggle underline">Mendaftar</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input name="email" type="text" minlength="4" class="input-field"
                                    autocomplete="off" required />
                                <label>Surel (e-mail)</label>
                            </div>

                            <div class="input-wrap">
                                <input name="password" type="password" minlength="4" class="input-field"
                                    autocomplete="off" required />
                                <label>kata sandi (Password)</label>
                            </div>

                            <input type="submit" value="Masuk" class="sign-btn" />
                            {{-- <div id="gSignInWrapper">
                                <span class="label">Sign in with:</span>
                                <div id="customBtn" class="customGPlusSignIn">
                                    <span class="icon"></span>
                                    <span class="buttonText">Google</span>
                                </div>
                            </div>
                            <div id="name"></div>
                            <script>startApp();</script> --}}
                            <div class="row">
                                <div class="col-md-3">
                                    <a class="google-button" href="/auth/google/redirect" role="button">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png"
                                            alt="Google sign-in" />
                                        Login with Google
                                    </a>
                                </div>
                            </div>
                            <p class="text">
                                Lupa password Anda atau Anda login datails?
                                <a href="/session/auth/user/signin/createL">Dapatkan bantuan</a> masuk
                            </p>
                        </div>
                    </form>
                    <form action="/createR" method="POST" autocomplete="off" class="sign-up-form">
                        @csrf
                        <div class="heading">
                            <h2>Daftarkan Sekarang!!</h2>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Sign in</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field" autocomplete="off" required
                                    name="name" />
                                <label>Name</label>
                            </div>

                            <div class="input-wrap">
                                <input type="email" class="input-field" autocomplete="off" required name="email" />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" class="input-field" autocomplete="off" required
                                    name="password" />
                                <label>Password</label>
                            </div>

                            <input type="submit" value="Sign Up" class="sign-btn register-btn" />
                            <a href="/session/auth/developer/signup" class="dev-signup-link"> signup
                                developer / </a><a href="/session/auth/agent/signup" class=" agent">agent</a>

                            <p class="text">
                                By signing up, I agree to the
                                <a href="#">Terms of Services</a> and
                                <a href="#">Privacy Policy</a>
                            </p>
                        </div>
                    </form>

                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img height="600px;" src="/assets/pages/login/Component 169-min-min.svg"
                            class="image img-1 show" alt="" />
                        <img height="600px;" src="/assets/pages/login/Component 170-min-min.svg" class="image img-2"
                            alt="" />
                        <img height="600px;" src="/assets/pages/login/Component 171-min-min.svg" class="image img-3"
                            alt="" />
                    </div>

                    <div class="text-slider">
                        {{-- <div class="text-wrap">
                <div class="text-group">
                  <h2>Create your own courses</h2>
                  <h2>Customize as you like</h2>
                  <h2>Invite students to your class</h2>
                </div>
              </div> --}}

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Javascript file -->
    <script>
        const inputs = document.querySelectorAll(".input-field");
        const toggle_btn = document.querySelectorAll(".toggle");
        const main = document.querySelector("main");
        const bullets = document.querySelectorAll(".bullets span");
        const images = document.querySelectorAll(".image");

        inputs.forEach((inp) => {
            inp.addEventListener("focus", () => {
                inp.classList.add("active");
            });
            inp.addEventListener("blur", () => {
                if (inp.value != "") return;
                inp.classList.remove("active");
            });
        });

        toggle_btn.forEach((btn) => {
            btn.addEventListener("click", () => {
                main.classList.toggle("sign-up-mode");
            });
        });

        function moveSlider() {
            let index = this.dataset.value;

            let currentImage = document.querySelector(`.img-${index}`);
            images.forEach((img) => img.classList.remove("show"));
            currentImage.classList.add("show");

            const textSlider = document.querySelector(".text-group");
            textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

            bullets.forEach((bull) => bull.classList.remove("active"));
            this.classList.add("active");
        }

        bullets.forEach((bullet) => {
            bullet.addEventListener("click", moveSlider);
        });

        // Autoplay the slider
        let currentIndex = 1;

        function autoPlaySlider() {
            currentIndex = currentIndex % 3 + 1;
            bullets[currentIndex - 1].click();
        }

        setInterval(autoPlaySlider, 3000);
    </script>

</body>

</html>
