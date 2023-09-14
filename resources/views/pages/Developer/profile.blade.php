@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Eigentum</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        {{-- <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> --}}
        {{-- <link rel="stylesheet" type="text/css" href="/css/pages/profile.css"> --}}
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                <div class="u-s-p-t-100 header-content">

                    <!--====== Section Content ======-->
                    <div class="section__content">
                        <div class="container">
                            <div class="breadcrumb">
                                <div class="breadcrumb__wrap">
                                    <ul class="breadcrumb__list">
                                        <li class="has-separator">

                                            <a href="index.html">Home</a>
                                        </li>
                                        <li class="is-marked">

                                            <a href="dashboard.html">Akun Saya</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--====== End - Section 1 ======-->

                <!--====== Section 2 ======-->
                <div class="u-s-p-y-60">
                    <div class="section__content">
                        <div class="dash">
                            <div class="container">
                                <div class="row">
                                    {{-- sidebar --}}
                                    <div class="col-lg-3 col-md-12">
                                        <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
                                            <div class="dash__pad-1">
                                                <span class="dash__text u-s-m-b-16">Halo, {{ auth()->user()->name }}</span>
                                                <ul class="dash__f-list">
                                                    <li>
                                                        <a class="dash-active tab-link" data-tab="account"
                                                            href="javascript:void(0);" onclick="openTab('account')">Kelola
                                                            Akun Saya</a>
                                                    </li>
                                                    <li>
                                                        <a class="tab-link" data-tab="profiledeveloper"
                                                            href="javascript:void(0);"
                                                            onclick="openTab('profiledeveloper')">Profile Developer</a>
                                                    </li>
                                                    {{-- <li>
                                                        <a class="tab-link" data-tab="profileowner"
                                                            href="javascript:void(0);"
                                                            onclick="openTab('profileowner')">Profile Owner</a>
                                                    </li> --}}
                                                    <li>
                                                        <a class="tab-link" data-tab="orders" href="javascript:void(0);"
                                                            onclick="openTab('orders')">Daftar Pesanan</a>
                                                    </li>
                                                    <li>
                                                        <a class="tab-link" data-tab="riwayat" href="javascript:void(0);"
                                                            onclick="openTab('riwayat')">Riwayat</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
                                            <div class="dash__pad-1">
                                                <ul class="dash__w-list">
                                                    <li>
                                                        <div class="dash__w-wrap">

                                                            <span class="dash__w-icon dash__w-icon-style-2"><i
                                                                    class="fas fa-clipboard-list"></i></span>

                                                            <span class="dash__w-text">0</span>

                                                            <span class="dash__w-name">Dipesan</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dash__w-wrap">

                                                            <span class="dash__w-icon dash__w-icon-style-3"><i
                                                                    class="fas fa-check-circle"></i></span>

                                                            <span class="dash__w-text">0</span>

                                                            <span class="dash__w-name">Aktif</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dash__w-wrap">

                                                            <span class="dash__w-icon dash__w-icon-style-1"><i
                                                                    class="fas fa-times"></i></span>

                                                            <span class="dash__w-text">0</span>

                                                            <span class="dash__w-name">Dibatalkan</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- main content --}}
                                    <div class="col-lg-9 col-md-12">
                                        <div id="account"
                                            class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                            <div class="dash__pad-2">
                                                <h1 class="dash__h1 u-s-m-b-14">Kelola Akun Saya</h1>
                                                <span class="dash__text u-s-m-b-30">Dari Dasbor Ini, Anda dapat melihat
                                                    cuplikan aktivitas akun terkini dan memperbarui informasi akun Anda.
                                                    Pilih tautan di bawah ini untuk melihat atau mengedit informasi.</span>
                                                <div class="row">
                                                    <div class="col-lg-4 u-s-m-b-30">
                                                        <div
                                                            class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                            <div class="dash__pad-3">
                                                                <h2 class="dash__h2 u-s-m-b-8">PROFILE DEVELOPER</h2>
                                                                <div class="dash__link dash__link--secondary u-s-m-b-8">
                                                                    <a href="javascript:void(0);"
                                                                        onclick="openTab('profiledeveloper')">Edit</a>
                                                                </div>
                                                                <span class="dash__text">{{ $developer->company }}</span>
                                                                <span
                                                                    class="dash__text">{{ $developer->company_email }}</span>
                                                                <div class="dash__link dash__link--secondary u-s-m-t-8">
                                                                    @if (Auth::user()->developers->pluck('subscribe')->first() == 'already')
                                                                        <h4 class="dash__text text-success">
                                                                            Telah Berlangganan</h4>
                                                                        <a
                                                                            href="{{ route('developer.dashboard') }}">Developer</a>
                                                                    @elseif (Auth::user()->developers->pluck('subscribe')->first() == 'pending')
                                                                        <h4 class="dash__text text-warning">Belum
                                                                            Berlangganan</h4>
                                                                        <a href="{{ route('langganan.index') }}">Berlangganan
                                                                            Sekarang</a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 u-s-m-b-30">
                                                        <div
                                                            class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                            <div class="dash__pad-3">
                                                                <h2 class="dash__h2 u-s-m-b-8">PROFILE OWNER</h2>

                                                                <div class="dash__link dash__link--secondary u-s-m-b-8">
                                                                    <a data-tab="profiledeveloper"
                                                                        href="javascript:void(0);"
                                                                        onclick="openTab('profileowner')">Edit</a>
                                                                </div>
                                                                <span class="dash__text">{{ auth()->user()->name }}</span>
                                                                <span class="dash__text">{{ auth()->user()->email }}</span>
                                                                <div class="dash__link dash__link--secondary u-s-m-t-8">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 u-s-m-b-30">
                                                        <div
                                                            class="dash__box dash__box--bg-grey dash__box--shadow-2 u-h-100">
                                                            <div class="dash__pad-3">
                                                                <h2 class="dash__h2 u-s-m-b-8">ALAMAT PERUSAHAAN</h2>
                                                                <span class="dash__text">{{ $developer->address }}</span>
                                                                <span class="dash__text">{{ $developer->telp }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="profiledeveloper"
                                            class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                            <div class="dash__pad-2">
                                                <h1 class="dash__h1 u-s-m-b-14">Edit Profile Developer</h1>

                                                <span class="dash__text u-s-m-b-30">Looks like you haven't update your
                                                    profile</span>
                                                <div class="dash__link dash__link--secondary u-s-m-b-30">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <form class="dash-edit-p"
                                                                action="{{ route('developer.update.developer', $developer->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="gl-inline">
                                                                    <div class="u-s-m-b-30">
    
                                                                        <label class="gl-label" for="face">FOTO</label>
    
                                                                        @if ($developer->face)
                                                                            <img src="{{ asset('storage/' . $developer->face) }}"
                                                                                alt="{{ $developer->face }}"
                                                                                style="width: 100px; height:100px;">
                                                                        @endif
    
                                                                        <input type="file" id="face" name="face">
                                                                    </div>
    
                                                                    <div class="u-s-m-b-30">
    
                                                                        <label class="gl-label" for="ktp">KTP</label>
    
                                                                        @if ($developer->ktp)
                                                                            <img src="{{ asset('storage/' . $developer->ktp) }}"
                                                                                alt="{{ $developer->ktp }}"
                                                                                style="width: 100px; height:100px;">
                                                                        @endif
                                                                        <input type="file" id="ktp" name="ktp">
    
                                                                    </div>
                                                                </div>
                                                                <div class="gl-inline">
                                                                    <div class="u-s-m-b-30">
    
                                                                        <label class="gl-label" for="reg-fname">NAMA *</label>
    
                                                                        <input class="input-text input-text--primary-style"
                                                                            type="text" name="name"
                                                                            value="{{ old('name', auth()->user()->name) }}">
                                                                    </div>
                                                                    <div class="u-s-m-b-30">
    
                                                                        <label class="gl-label" for="reg-lname">EMAIL
                                                                            *</label>
    
                                                                        <input class="input-text input-text--primary-style"
                                                                            type="text" name="email"
                                                                            value="{{ old('email', auth()->user()->email) }}">
                                                                    </div>
    
                                                                </div>
                                                                <div class="gl-inline">
                                                                    <div class="u-s-m-b-30">

                                                                        <label class="gl-label"
                                                                            for="reg-fname">PERUSAHAAN</label>

                                                                        <input class="input-text input-text--primary-style"
                                                                            type="text" name="company"
                                                                            value="{{ old('company', $developer->company) }}">
                                                                    </div>
                                                                    <div class="u-s-m-b-30">

                                                                        <label class="gl-label" for="reg-lname">NOMOR
                                                                            TELEPHONE</label>

                                                                        <input class="input-text input-text--primary-style"
                                                                            type="text" name="telp"
                                                                            value="{{ old('telp', $developer->telp) }}">
                                                                    </div>
                                                                </div>
                                                                <div class="gl-inline">
                                                                    <div class="u-s-m-b-30">

                                                                        <label class="gl-label"
                                                                            for="reg-fname">EMAIL</label>

                                                                        <input class="input-text input-text--primary-style"
                                                                            type="text" name="company_email"
                                                                            value="{{ old('company_email', $developer->company_email) }}">
                                                                    </div>
                                                                    <div class="u-s-m-b-30">

                                                                        <label class="gl-label"
                                                                            for="reg-lname">ALAMAT</label>

                                                                        <input class="input-text input-text--primary-style"
                                                                            type="text" name="address"
                                                                            value="{{ old('address', $developer->address) }}">
                                                                    </div>
                                                                </div>
                                                                <div class="gl-inline">
                                                                    <div class="u-s-m-b-30">
                                                                        <div class="gl-dob"><select
                                                                                class="select-box select-box--primary-style"
                                                                                name="provinces_id" id="provinsi">
                                                                                <option value="{{ implode(', ',$developer->provinces()->pluck('id')->toArray()) }}">{{ implode(', ',$developer->provinces()->pluck('name')->toArray()) }}</option>
                                                                                @foreach ($provinces as $item)
                                                                                    <option value="{{ $item->id }}"
                                                                                        {{ old('provinces_id') == $item->id }}>
                                                                                        {{ $item->name }}</option>
                                                                                @endforeach
                                                                                @error('province_id')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </select><select
                                                                                class="select-box select-box--primary-style"
                                                                                name="regencies_id" id="kota">
                                                                                <option value="{{ implode(', ',$developer->regencies()->pluck('id')->toArray()) }}" selected>{{ implode(', ',$developer->regencies()->pluck('name')->toArray()) }}</option>
                                                                                @if (old('provinces_id'))
                                                                                    @foreach ($regencies as $item)
                                                                                        <option
                                                                                            value="{{ $item->id }}"
                                                                                            {{ old('regencies_id') == $item->id }}>
                                                                                            {{ $item->name }}</option>
                                                                                    @endforeach
                                                                                @endif
                                                                                @error('regency_id')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </select>
                                                                            <select
                                                                                class="select-box select-box--primary-style"
                                                                                name="districts_id" id="kecamatan">
                                                                                <option value="{{ implode(', ',$developer->districts()->pluck('id')->toArray()) }}" selected>{{ implode(', ',$developer->districts()->pluck('name')->toArray()) }}</option>
                                                                                @if (old('regencies_id'))
                                                                                    @foreach ($districts as $item)
                                                                                        <option
                                                                                            value="{{ $item->id }}"
                                                                                            {{ old('districts_id') == $item->id }}>
                                                                                            {{ $item->name }}</option>
                                                                                    @endforeach
                                                                                @endif
                                                                                @error('district_id')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </select>
                                                                            <select
                                                                                class="select-box select-box--primary-style"
                                                                                name="villages_id" id="desa">
                                                                                <option value="{{ implode(', ',$developer->villages()->pluck('id')->toArray()) }}" selected>{{ implode(', ',$developer->villages()->pluck('name')->toArray()) }}</option>
                                                                                @if (old('districts_id'))
                                                                                    @foreach ($villages as $item)
                                                                                        <option
                                                                                            value="{{ $item->id }}"
                                                                                            {{ old('villages_id') == $item->id }}>
                                                                                            {{ $item->name }}</option>
                                                                                    @endforeach
                                                                                @endif
                                                                                @error('village_id')
                                                                                    <div class="invalid-feedback">
                                                                                        {{ $message }}</div>
                                                                                @enderror
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="gl-inline">
                                                                    @foreach ($licenseFile as $index => $license)
                                                                        <div class="col-12">
                                                                            <div class="file-container my-2">
                                                                                <a href="{{ route('pdf.preview', ['file' => $license]) }}"
                                                                                    target="_blank">Tampilkan
                                                                                    {{ Str::limit(pathinfo($license, PATHINFO_FILENAME), 20, '...') }}</a>
                                                                            </div>
                                                                            <input type="file"
                                                                                class="form-control noscroll"
                                                                                id="license"
                                                                                name="license[{{ $index }}]"
                                                                                multiple>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                <button class="btn btn--e-brand-b-2"
                                                                    type="submit">SIMPAN</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div id="profileowner"
                                            class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white">
                                            <div class="dash__pad-2">
                                                <h1 class="dash__h1 u-s-m-b-14">Edit Profile Owner</h1>
                                                <span class="dash__text u-s-m-b-30">Looks like you haven't update your
                                                    profile</span>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <form class="dash-edit-p"
                                                            action="{{ route('developer.update.developer', $developer->id) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="gl-inline">
                                                                <div class="u-s-m-b-30">

                                                                    <label class="gl-label" for="face">FOTO</label>

                                                                    @if ($developer->face)
                                                                        <img src="{{ asset('storage/' . $developer->face) }}"
                                                                            alt="{{ $developer->face }}"
                                                                            style="width: 100px; height:100px;">
                                                                    @endif

                                                                    <input type="file" id="face" name="face">
                                                                </div>

                                                                <div class="u-s-m-b-30">

                                                                    <label class="gl-label" for="ktp">KTP</label>

                                                                    @if ($developer->ktp)
                                                                        <img src="{{ asset('storage/' . $developer->ktp) }}"
                                                                            alt="{{ $developer->ktp }}"
                                                                            style="width: 100px; height:100px;">
                                                                    @endif
                                                                    <input type="file" id="ktp" name="ktp">

                                                                </div>
                                                            </div>
                                                            <div class="gl-inline">
                                                                <div class="u-s-m-b-30">

                                                                    <label class="gl-label" for="reg-fname">NAMA *</label>

                                                                    <input class="input-text input-text--primary-style"
                                                                        type="text" name="name"
                                                                        value="{{ old('name', auth()->user()->name) }}">
                                                                </div>
                                                                <div class="u-s-m-b-30">

                                                                    <label class="gl-label" for="reg-lname">EMAIL
                                                                        *</label>

                                                                    <input class="input-text input-text--primary-style"
                                                                        type="text" name="email"
                                                                        value="{{ old('email', auth()->user()->email) }}">
                                                                </div>

                                                            </div>
                                                            <button class="btn btn--e-brand-b-2"
                                                                type="submit">SIMPAN</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div id="orders"
                                            class="dash__box dash__box--shadow dash__box--bg-white dash__box--radius"
                                            style="display: none;">
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

                                                                    <img class="u-img-fluid"
                                                                        src="images/product/electronic/product3.jpg"
                                                                        alt="">
                                                                </div>
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

                                                                    <img class="u-img-fluid"
                                                                        src="images/product/electronic/product14.jpg"
                                                                        alt="">
                                                                </div>
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

                                                                    <img class="u-img-fluid"
                                                                        src="images/product/men/product8.jpg"
                                                                        alt="">
                                                                </div>
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

                                                                    <img class="u-img-fluid"
                                                                        src="images/product/women/product10.jpg"
                                                                        alt="">
                                                                </div>
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
                                        <div id="riwayat"
                                            class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
                                            <div class="dash__pad-2">
                                                <h1 class="dash__h1 u-s-m-b-14">Riwayat</h1>

                                                <span class="dash__text u-s-m-b-30">Di sini Anda dapat melihat semua
                                                    riwayat di website ini.</span>
                                                <form class="m-order u-s-m-b-30">
                                                    <div class="m-order__select-wrapper">

                                                        <label class="u-s-m-r-8" for="my-order-sort">Lihat:</label><select
                                                            class="select-box select-box--primary-style"
                                                            id="my-order-sort">
                                                            <option selected>Hari Ini</option>
                                                            <option>3 Hari Terakhir</option>
                                                            <option>1 Minggu Terakhir</option>
                                                            <option>1 Bulan Terakhir</option>
                                                            <option>Semua Riwayat</option>
                                                        </select>
                                                    </div>
                                                </form>
                                                <div class="m-order__list">
                                                    <div class="m-order__get">
                                                        <div class="manage-o__header u-s-m-b-30">
                                                            <div class="dash-l-r">
                                                                <div>
                                                                    <div class="manage-o__text-2 u-c-secondary">Id Order
                                                                        #305423126</div>
                                                                    <div class="manage-o__text u-c-silver">Tanggal 1 Oct
                                                                        2023 09:08:37 - 31 Oct 2023 09:08:37</div>
                                                                </div>
                                                                <div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="manage-o__description">
                                                            <div class="description__container">
                                                                <div class="description__img-wrap">

                                                                    <img class="u-img-fluid"
                                                                        src="images/product/electronic/product3.jpg"
                                                                        alt="">
                                                                </div>
                                                                <div class="description-title">Rumah Minimalis</div>
                                                            </div>
                                                            <div class="description__info-wrap">
                                                                <div>

                                                                    <span
                                                                        class="manage-o__badge badge--processing">Disewa</span>
                                                                </div>
                                                                <div>

                                                                    <span class="manage-o__text-2 u-c-silver">Quantity:

                                                                        <span
                                                                            class="manage-o__text-2 u-c-secondary">1</span></span>
                                                                </div>
                                                                <div>

                                                                    <span class="manage-o__text-2 u-c-silver">Total:

                                                                        <span class="manage-o__text-2 u-c-secondary">Rp.
                                                                            900.000.000</span></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="m-order__get">
                                                        <div class="manage-o__header u-s-m-b-30">
                                                            <div class="dash-l-r">
                                                                <div>
                                                                    <div class="manage-o__text-2 u-c-secondary">Id Order
                                                                        #305423126</div>
                                                                    <div class="manage-o__text u-c-silver">Tanggal 12 Oct
                                                                        2023 09:08:37</div>
                                                                </div>
                                                                <div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="manage-o__description">
                                                            <div class="description__container">
                                                                <div class="description__img-wrap">

                                                                    <img class="u-img-fluid"
                                                                        src="images/product/electronic/product3.jpg"
                                                                        alt="">
                                                                </div>
                                                                <div class="description-title">Rumah Minimalis</div>
                                                            </div>
                                                            <div class="description__info-wrap">
                                                                <div>

                                                                    <span
                                                                        class="manage-o__badge badge--shipped">Dijual</span>
                                                                </div>
                                                                <div>

                                                                    <span class="manage-o__text-2 u-c-silver">Quantity:

                                                                        <span
                                                                            class="manage-o__text-2 u-c-secondary">1</span></span>
                                                                </div>
                                                                <div>

                                                                    <span class="manage-o__text-2 u-c-silver">Total:

                                                                        <span class="manage-o__text-2 u-c-secondary">Rp.
                                                                            2.900.000.000</span></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="m-order__get">
                                                        <div class="manage-o__header u-s-m-b-30">
                                                            <div class="dash-l-r">
                                                                <div>
                                                                    <div class="manage-o__text-2 u-c-secondary">Id Order
                                                                        #305423126</div>
                                                                    <div class="manage-o__text u-c-silver">Tanggal 12 Oct
                                                                        2023 09:08:37</div>
                                                                </div>
                                                                <div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="manage-o__description">
                                                            <div class="description__container">
                                                                <div class="description__img-wrap">

                                                                    <img class="u-img-fluid"
                                                                        src="images/product/electronic/product3.jpg"
                                                                        alt="">
                                                                </div>
                                                                <div class="description-title">Rumah Minimalis</div>
                                                            </div>
                                                            <div class="description__info-wrap">
                                                                <div>

                                                                    <span
                                                                        class="manage-o__badge badge--delivered">Dibatalkan</span>
                                                                </div>
                                                                <div>

                                                                    <span class="manage-o__text-2 u-c-silver">Quantity:

                                                                        <span
                                                                            class="manage-o__text-2 u-c-secondary">1</span></span>
                                                                </div>
                                                                <div>

                                                                    <span class="manage-o__text-2 u-c-silver">Total:

                                                                        <span class="manage-o__text-2 u-c-secondary">Rp.
                                                                            2.900.000.000</span></span>
                                                                </div>
                                                            </div>

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
                </div>
                <!--====== End - Section 2 ======-->
            </div>
            <!--====== End - App Content ======-->
        </div>
        <!--====== End - Main App ======-->

        <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
        <script>
            window.ga = function() {
                ga.q.push(arguments)
            };
            ga.q = [];
            ga.l = +new Date;
            ga('create', 'UA-XXXXX-Y', 'auto');
            ga('send', 'pageview')
        </script>

        <script src="https://www.google-analytics.com/analytics.js" async defer></script>

        <!--====== Vendor Js ======-->
        <script src="{{ asset('css/Lib/fix/js/vendor.js') }}"></script>

        <!--====== jQuery Shopnav plugin ======-->
        <script src="{{ asset('css/Lib/fix/js/jquery.shopnav.js') }}"></script>

        <!--====== App ======-->
        <script src="{{ asset('css/Lib/fix/js/app.js') }} "></script>

        <!--====== Noscript ======-->
        <noscript>
            <div class="app-setting">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="app-setting__wrap">
                                <h1 class="app-setting__h1">JavaScript dinonaktifkan di browser Anda.</h1>

                                <span class="app-setting__text">Aktifkan JavaScript di browser Anda atau tingkatkan ke
                                    browser yang mendukung JavaScript.</span>
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
                tabLinks.forEach(function(tabLink) {
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

        <script>
            $(document).ready(function() {
                function onChangeSelect(url, id, name) {
                    // send ajax request to get the regency of the selected province and append to the select tag
                    $.ajax({
                        url: url,
                        type: 'GET',
                        data: {
                            id: id
                        },
                        success: function(data) {
                            let target = $('#' + name);
                            target.attr('disabled', false);
                            target.empty()
                            target.attr('placeholder', target.data('placeholder'))
                            target.append(`<option> ${target.data('placeholder')} </option>`)
                            $.each(data, function(key, value) {
                                target.append(`<option value="${key}">${value}</option>`)
                            });
                        }
                    });
                }

                $('#kota').prop('disabled', true);
                $('#kecamatan').prop('disabled', true);
                $('#desa').prop('disabled', true);


                $('#provinsi').on('change', function() {
                    var id = $(this).val();
                    var url = `{{ route('get.regency') }}`;
                    $('#kota').empty().prop('disabled', false);
                    $('#kecamatan').empty().prop('disabled', true);
                    $('#desa').empty().prop('disabled', true);
                    onChangeSelect(url, id, 'kota');
                });

                $('#kota').on('change', function() {
                    var id = $(this).val();
                    var url = `{{ route('get.districts') }}`;
                    $('#kecamatan').empty().prop('disabled', false);
                    $('#desa').empty().prop('disabled', true);
                    onChangeSelect(url, id, 'kecamatan');
                });

                $('#kecamatan').on('change', function() {
                    var id = $(this).val();
                    var url = `{{ route('get.villages') }}`;
                    $('#desa').empty().prop('disabled', false);
                    onChangeSelect(url, id, 'desa');
                });

                // $('.single-select-field').select2({
                //     theme: "bootstrap-5",
                //     width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' :
                //         'style',
                //     placeholder: $(this).data('placeholder'),
                // });

            });
        </script>
    </body>

    </html>
@endsection
