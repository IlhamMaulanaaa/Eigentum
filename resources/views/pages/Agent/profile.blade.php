@extends('layout.main')

@section('content')


<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="LIHATport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.png" rel="shortcut icon">

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="{{ asset('css/Lib/fix/css/vendor.css') }}">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="{{ asset('css/Lib/fix/css/utility.css') }}">

    <!--====== App ======-->
    <link rel="stylesheet" href="{{ asset('css/Lib/fix/css/app.css') }}">
</head>
<body class="config">
    
    <div id="app">


        <!--====== App Content ======-->
        <div class="app-content">

            <!--====== Section 1 ======-->
            <div class="u-s-p-t-100">

                <!--====== Section Content ======-->
                <div class="section__content">
                    <div class="container">
                        <div class="breadcrumb">
                            <div class="breadcrumb__wrap">
                                <ul class="breadcrumb__list">
                                    <li class="has-separator">

                                        <a href="index.html">Home</a></li>
                                    <li class="is-marked">

                                        <a href="dashboard.html">Akun Saya</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="u-s-p-y-60">

                <div class="section__content">
                    <div class="dash">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-12">
                                    <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                        <div class="dash__pad-1">
                                            <span class="dash__text u-s-m-b-16">Halo, Supajono</span>
                                            <ul class="dash__f-list">
                                                <li>
                                                    <a class="dash-active tab-link" data-tab="account" href="javascript:void(0);" onclick="openTab('account')">Kelola Akun Saya</a>
                                                </li>
                                                <li>
                                                    <a class="tab-link" data-tab="profilepribadi" href="javascript:void(0);" onclick="openTab('profilepribadi')">Profile Pribadi</a>
                                                </li>
                                                <li>
                                                    <a class="tab-link" data-tab="orders" href="javascript:void(0);" onclick="openTab('orders')">Daftar Pesanan</a>
                                                </li>
                                                <li>
                                                    <a class="tab-link" data-tab="riwayat" href="javascript:void(0);" onclick="openTab('riwayat')">Riwayat</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                                        <div class="dash__pad-1">
                                            <ul class="dash__w-list">
                                                <li>
                                                    <div class="dash__w-wrap">

                                                        <span class="dash__w-icon dash__w-icon-style-2"><i class="fas fa-clipboard-list"></i></span>

                                                        <span class="dash__w-text">0</span>

                                                        <span class="dash__w-name">Dipesan</span></div>
                                                </li>
                                                <li>
                                                    <div class="dash__w-wrap">

                                                        <span class="dash__w-icon dash__w-icon-style-3"><i class="fas fa-check-circle"></i></span>

                                                        <span class="dash__w-text">0</span>

                                                        <span class="dash__w-name">Aktif</span></div>
                                                </li>
                                                <li>
                                                    <div class="dash__w-wrap">

                                                        <span class="dash__w-icon dash__w-icon-style-1"><i class="fas fa-times"></i></span>

                                                        <span class="dash__w-text">0</span>

                                                        <span class="dash__w-name">Dibatalkan</span></div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-12">
                                    <div id="account" class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                        <div class="dash__pad-2">
                                            <h1 class="dash__h1 u-s-m-b-14">Kelola Akun Saya</h1>
                                            <span class="dash__text u-s-m-b-30">Dari Dasbor Ini, Anda dapat melihat cuplikan aktivitas akun terkini dan memperbarui informasi akun Anda. Pilih tautan di bawah ini untuk melihat atau mengedit informasi.</span>
                                            <div class="row">
                                                <div class="col-lg-4 u-s-m-b-30">
                                                    <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                        <div class="dash__pad-3">
                                                            <h2 class="dash__h2 u-s-m-b-8">PROFILE PRIBADI</h2>
                                                            <div class="dash__link dash__link--secondary u-s-m-b-8">
                                                                <a  data-tab="profilepribadi" href="javascript:void(0);" onclick="openTab('profilepribadi')">Edit</a>
                                                            </div>
                                                            <span class="dash__text">Suparjono</span>
                                                            <span class="dash__text">suparjono90@gmail.com</span>
                                                            <div class="dash__link dash__link--secondary u-s-m-t-8">
                                                                <a data-modal="modal" data-modal-id="#dash-newsletter">Telah Berlangganan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 u-s-m-b-30">
                                                    <div class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                        <div class="dash__pad-3">
                                                            <h2 class="dash__h2 u-s-m-b-8">ALAMAT</h2>
                                                            

                                                            <span class="dash__text">Kudus, Jawa Tengah, Desa Besito, Kec. Gebog</span>

                                                            <span class="dash__text">(+62) 828783938</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div id="orders" class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius" style="display: none;">
                                            <h2 class="dash__h2 u-s-p-xy-20">Daftar Pesanan</h2>
                                            <div class="dash__table-wrap gl-scroll">
                                                <table class="dash__table">
                                                    <thead>
                                                        <tr>
                                                            <th>Id Order</th>
                                                            <th>Tipe</th>
                                                            <th>Tanggal</th>
                                                            <th>Items</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>3054231326</td>
                                                            <td>Rumah</td>
                                                            <td>26/11/2023</td>
                                                            <td>
                                                                <div class="dash__table-img-wrap">

                                                                    <img class="u-img-fluid" src="images/product/electronic/product3.jpg" alt=""></div>
                                                            </td>
                                                            <td>
                                                                <div class="dash__table-total">

                                                                    <span>Rp. 900.000.000</span>
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3054231326</td>
                                                            <td>Rumah</td>
                                                            <td>26/11/2023</td>
                                                            <td>
                                                                <div class="dash__table-img-wrap">

                                                                    <img class="u-img-fluid" src="images/product/electronic/product14.jpg" alt=""></div>
                                                            </td>
                                                            <td>
                                                                <div class="dash__table-total">

                                                                    <span>Rp. 900.000.000</span>
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3054231326</td>
                                                            <td>Rumah</td>
                                                            <td>26/11/2023</td>
                                                            <td>
                                                                <div class="dash__table-img-wrap">

                                                                    <img class="u-img-fluid" src="images/product/men/product8.jpg" alt=""></div>
                                                            </td>
                                                            <td>
                                                                <div class="dash__table-total">

                                                                    <span>Rp. 900.000.000</span>
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3054231326</td>
                                                            <td>Rumah</td>
                                                            <td>26/11/2023</td>
                                                            <td>
                                                                <div class="dash__table-img-wrap">

                                                                    <img class="u-img-fluid" src="images/product/women/product10.jpg" alt=""></div>
                                                            </td>
                                                            <td>
                                                                <div class="dash__table-total">

                                                                    <span>Rp. 900.000.000</span>
                                                                    
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div  id="riwayat" class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                            <div class="dash__pad-2">
                                                <h1 class="dash__h1 u-s-m-b-14">Riwayat</h1>
    
                                                <span class="dash__text u-s-m-b-30">Di sini Anda dapat melihat semua riwayat di website ini.</span>
                                                <form class="m-order u-s-m-b-30">
                                                    <div class="m-order__select-wrapper">
    
                                                        <label class="u-s-m-r-8" for="my-order-sort">Lihat:</label><select class="select-box select-box--primary-style" id="my-order-sort">
                                                            <option selected>Hari Ini</option>
                                                            <option>3 Hari Terakhir</option>
                                                            <option>1 Minggu Terakhir</option>
                                                            <option>1 Bulan Terakhir</option>
                                                            <option>Semua Riwayat</option>
                                                        </select></div>
                                                </form>
                                                <div class="m-order__list">
                                                    <div class="m-order__get">
                                                        <div class="manage-o__header u-s-m-b-30">
                                                            <div class="dash-l-r">
                                                                <div>
                                                                    <div class="manage-o__text-2 u-c-secondary">Id Order #305423126</div>
                                                                    <div class="manage-o__text u-c-silver">Tanggal 1 Oct 2023 09:08:37 - 31 Oct 2023 09:08:37</div>
                                                                </div>
                                                                <div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="manage-o__description">
                                                            <div class="description__container">
                                                                <div class="description__img-wrap">
    
                                                                    <img class="u-img-fluid" src="images/product/electronic/product3.jpg" alt=""></div>
                                                                <div class="description-title">Rumah Minimalis</div>
                                                            </div>
                                                            <div class="description__info-wrap">
                                                                <div>
    
                                                                    <span class="manage-o__badge badge--processing">Disewa</span></div>
                                                                <div>
    
                                                                    <span class="manage-o__text-2 u-c-silver">Quantity:
    
                                                                        <span class="manage-o__text-2 u-c-secondary">1</span></span></div>
                                                                <div>
    
                                                                    <span class="manage-o__text-2 u-c-silver">Total:
    
                                                                        <span class="manage-o__text-2 u-c-secondary">Rp. 900.000.000</span></span></div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="m-order__get">
                                                        <div class="manage-o__header u-s-m-b-30">
                                                            <div class="dash-l-r">
                                                                <div>
                                                                    <div class="manage-o__text-2 u-c-secondary">Id Order #305423126</div>
                                                                    <div class="manage-o__text u-c-silver">Tanggal 12 Oct 2023 09:08:37</div>
                                                                </div>
                                                                <div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="manage-o__description">
                                                            <div class="description__container">
                                                                <div class="description__img-wrap">
    
                                                                    <img class="u-img-fluid" src="images/product/electronic/product3.jpg" alt=""></div>
                                                                <div class="description-title">Rumah Minimalis</div>
                                                            </div>
                                                            <div class="description__info-wrap">
                                                                <div>
    
                                                                    <span class="manage-o__badge badge--shipped">Dijual</span></div>
                                                                <div>
    
                                                                    <span class="manage-o__text-2 u-c-silver">Quantity:
    
                                                                        <span class="manage-o__text-2 u-c-secondary">1</span></span></div>
                                                                <div>
    
                                                                    <span class="manage-o__text-2 u-c-silver">Total:
    
                                                                        <span class="manage-o__text-2 u-c-secondary">Rp. 2.900.000.000</span></span></div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="m-order__get">
                                                        <div class="manage-o__header u-s-m-b-30">
                                                            <div class="dash-l-r">
                                                                <div>
                                                                    <div class="manage-o__text-2 u-c-secondary">Id Order #305423126</div>
                                                                    <div class="manage-o__text u-c-silver">Tanggal 12 Oct 2023 09:08:37</div>
                                                                </div>
                                                                <div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="manage-o__description">
                                                            <div class="description__container">
                                                                <div class="description__img-wrap">
    
                                                                    <img class="u-img-fluid" src="images/product/electronic/product3.jpg" alt=""></div>
                                                                <div class="description-title">Rumah Minimalis</div>
                                                            </div>
                                                            <div class="description__info-wrap">
                                                                <div>
    
                                                                    <span class="manage-o__badge badge--delivered">Dibatalkan</span></div>
                                                                <div>
    
                                                                    <span class="manage-o__text-2 u-c-silver">Quantity:
    
                                                                        <span class="manage-o__text-2 u-c-secondary">1</span></span></div>
                                                                <div>
    
                                                                    <span class="manage-o__text-2 u-c-silver">Total:
    
                                                                        <span class="manage-o__text-2 u-c-secondary">Rp. 2.900.000.000</span></span></div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div id="profilepribadi" class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                                <div class="dash__pad-2">
                                                    <h1 class="dash__h1 u-s-m-b-14">Edit Profile Pribadi</h1>
        
                                                    <span class="dash__text u-s-m-b-30">Perbarui profil anda disini</span>
                                                    <div class="dash__link dash__link--secondary u-s-m-b-30">
        
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <form class="dash-edit-p">

                                                                <div class="gl-inline">
                                                                    <div class="u-s-m-b-30">
        
                                                                        <label class="gl-label" for="face">FOTO</label>
        
                                                                        @if ($agents->face)
                                                                                <img src="{{ asset('storage/' . $agents->face) }}"
                                                                                    alt="{{ $agents->face }}" style="width: 100px; height: 100px;">
                                                                        @endif
                                                                        <input type="file" id="face" name="face">
                                                                        </div>

                                                                        <div class="u-s-m-b-30">
        
                                                                            <label class="ktp" for="reg-fname">KTP</label>
                                                                            @if ($agents->ktp)
                                                                                <div class="mb-3">
                                                                                    <img src="{{ asset('storage/' . $agents->ktp) }}"
                                                                                        alt="{{ $agents->ktp }}" class="img-thumbnail" width="120">
                                                                                </div>
                                                                            @endif
                                                                            <input type="file" id="ktp" name="ktp">
                                                                        </div>
                                                                </div>


                                                                <div class="gl-inline">
                                                                    <div class="u-s-m-b-30">
        
                                                                        <label class="gl-label" for="reg-fname">NAMA LENGKAP</label>
        
                                                                        <input class="input-text input-text--primary-style" type="text" name="name"
                                                                        value="{{ old('name', auth()->user()->name) }}"></div>
                                                                    <div class="u-s-m-b-30">
        
                                                                        <label class="gl-label" for="reg-lname">NOMOR TELEPHONE</label>
        
                                                                        <input class="input-text input-text--primary-style" type="text" name="telp"
                                                                        value="{{ old('telp', $agents->telp) }}"></div>
                                                                </div>
                                                                <div class="gl-inline">
                                                                    <div class="u-s-m-b-30">
        
                                                                        <label class="gl-label" for="reg-fname">EMAIL</label>
        
                                                                        <input class="input-text input-text--primary-style" type="text" name="email"
                                                                        value=" {{ old('email', auth()->user()->email) }}"></div>
                                                                    <div class="u-s-m-b-30">
        
                                                                        <label class="gl-label" for="reg-lname">ALAMAT</label>
        
                                                                        <input class="input-text input-text--primary-style" type="text" name="address"
                                                                        value="{{ old('address', $agents->address) }}"></div>
                                                                </div>
                                                                <div class="gl-inline">
                                                                    <div class="u-s-m-b-30">
        
        
                                                                        {{-- <span class="gl-label">Provinsi</span> --}}
                                                                        <div class="gl-dob"><select class="select-box select-box--primary-style" >
                                                                                <option>Pilih Provinsi</option>
                                                                                <option value="male">January</option>
                                                                                <option value="male">February</option>
                                                                                <option value="male">March</option>
                                                                                <option value="male">April</option>
                                                                            </select><select class="select-box select-box--primary-style">
                                                                                <option selected>Kabupaten / Kota</option>
                                                                                <option value="01">01</option>
                                                                                <option value="02">02</option>
                                                                                <option value="03">03</option>
                                                                                <option value="04">04</option>
                                                                            </select><select class="select-box select-box--primary-style">
                                                                                <option selected>Kecamatan</option>
                                                                                <option value="1991">1991</option>
                                                                                <option value="1992">1992</option>
                                                                                <option value="1993">1993</option>
                                                                                <option value="1994">1994</option>
                                                                            </select><select class="select-box select-box--primary-style">
                                                                                <option selected>Desa</option>
                                                                                <option value="1991">1991</option>
                                                                                <option value="1992">1992</option>
                                                                                <option value="1993">1993</option>
                                                                                <option value="1994">1994</option>
                                                                            </select></div>
                                                                        <!--====== End - Date of Birth Select-Box ======-->
                                                                    </div>
                                                                </div>
        
                                                                <button class="btn btn--e-brand-b-2" type="submit">SIMPAN</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--====== End - Section Content ======-->
            </div>
            <!--====== End - Section 2 ======-->
        </div>
        <!--====== End - App Content ======-->

    </div>
    <!--====== End - Main App ======-->


    {{-- <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script> --}}
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="{{ asset('css/Lib/fix/js/vendor.js') }}"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="{{ asset('css/Lib/fix/js/jquery.shopnav.js') }}"></script>

    <!--====== App ======-->
    <script src="{{ asset('css/Lib/fix/js/app.js') }}"></script>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript dinonaktifkan di browser Anda.</h1>

                            <span class="app-setting__text">Aktifkan JavaScript di browser Anda atau tingkatkan ke browser yang mendukung JavaScript.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
    <script>
        function openTab(tabId) {
        // Ambil semua tab-link
        var tabLinks = document.querySelectorAll('.tab-link');
        
        // Sembunyikan semua tab-content dan nonaktifkan semua tab-link
        tabLinks.forEach(function (tabLink) {
            var tabContentId = tabLink.getAttribute('data-tab');
            var tabContent = document.getElementById(tabContentId);
            tabContent.style.display = 'none';
            tabLink.classList.remove('dash-active');
        });
        
        // Tampilkan tab yang dipilih dan aktifkan tab-link yang sesuai
        var selectedTab = document.getElementById(tabId);
        selectedTab.style.display = 'block';
        var selectedTabLink = document.querySelector('.tab-link[data-tab="' + tabId + '"]');
        selectedTabLink.classList.add('dash-active');
    }

    // Inisialisasi tab pertama saat halaman dimuat
    openTab('account');
    </script>
</body>
</html>

@endsection