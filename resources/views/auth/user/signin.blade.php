<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Tambahkan link ini untuk menghubungkan library Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/auth/user/login.css">
</head>


<body>


    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black">
                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                        <a id="loginback" href="/beranda">Back</a>
                        <form action="/session/auth/user/signin/create" method="POST">
                            @csrf
                            <img class="mb-4" src="/assets/pages/login/logo_1.png" alt="">

                            <span class="h1 fw-regular mb-0" style="color: #0c40e8;">Eigentum
                            </span>
                            <h1 class="h1 fw-normal text-dark" id="masuk009">Masuk</h1>
                            <h6 class="h6 fw-normal text-dark" id="masuk026">Belum punya akun? <a
                                    href="/session/auth/user/signup/" class="text-dark " id="adkjslf">Sign
                                    up</a></h6>
                            <div class="form-floating">
                                <input type="email" value="{{ Session::get('email') }}" name="email" id="email"
                                    class="form-control" placeholder="name@example.com">
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password">
                                <label for="password">Password</label>
                            </div>


                            <button class="w-100 btn btn-lg btn-primary" id="loginbutton" type="submit">Sign
                                In</button>
                            <button class="w-100 mt-2 btn btn-lg btn-primary" id="jamal009" type="submit">
                                <img id="googleicon" src="/assets/pages/login/google.png" alt="">
                                Lanjutkan dengan google
                            </button>
                            <pre><p id="privacy_police">you agree to be bound by these <u> Terms of Service</u> and our
<u>Privacy Policy.</u></p></pre>
                        </form>

                    </div>

                </div>
                <div class=" col-sm-6 px-0 d-flex d-sm-block">
                    <img id="image1009" src="/assets/pages/login/Component 169-min-min.svg" alt="image 1">
                </div>
            </div>
        </div>
    </section>
    <script>
        // Daftar sumber gambar
        var daftarGambar = [
            "/assets/pages/login/Component 169-min-min.svg",
            "/assets/pages/login/Component 170-min-min.svg",
            "/assets/pages/login/Component 171-min-min.svg",
            "/assets/pages/login/Component 172-min-min.svg",
        ];

        // Mendapatkan elemen gambar
        var gambar = document.getElementById("image1009");

        // Mengatur indeks awal gambar
        var indeksGambar = 0;

        // Fungsi untuk mengganti gambar
        function gantiGambar() {
            // Mengatur sumber gambar baru
            gambar.src = daftarGambar[indeksGambar];

            // Menambahkan 1 ke indeks gambar
            indeksGambar++;

            // Jika indeks gambar melebihi jumlah gambar, kembali ke indeks awal
            if (indeksGambar === daftarGambar.length) {
                indeksGambar = 0;
            }
        }

        // Memanggil fungsi gantiGambar setiap 2 detik
        setInterval(gantiGambar, 2000);
        // Fungsi untuk menampilkan alert pesan kesalahan
        function showErrorAlert(message) {
            alert(message);
        }
    </script>
</body>

</html>
