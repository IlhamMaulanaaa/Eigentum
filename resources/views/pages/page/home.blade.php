@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="css/Lib/swiper-bundle.min.css">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="/css/Lib/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="/css/pages/home.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

        <!-- Libraries Stylesheet -->
        <link href="/css/lib/animate/animate.min.css" rel="stylesheet">
        <link href="/css/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="/css/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


        <!-- Customized Bootstrap Stylesheet -->
        <link href="/css/Lib/bootstrap.min.css" rel="stylesheet">

        <link href="/css/pages/guide.css" rel="stylesheet">



        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="css/Lib/testimoni/lib/animate/animate.min.css" rel="stylesheet">
        <link href="css/Lib/testimoni/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/Lib/testimoni/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/Lib/testimoni/css/style.css" rel="stylesheet">
        <title>EIgentum</title>
    </head>

    <body>
        <div class="desktop-1-RTV" id="1:2">
            <div class="frame-147-QbZ" id="4:7162">
                <div class="group-75-kvK" id="4:7163">
                    <div class="group-74-7F56" id="4:7164">
                        <div class="group-71-2cw" id="4:7166">
                            <div class="segera-miliki-properti-impianmu-AUF" data-aos="fade-down" id="4:7167">Segera
                                Miliki Properti Impianmu
                            </div>
                            <div class="temukan-pilihan-properti-terbaik-untuk-investasi-atau-tempat-tinggal-di-website-kami-dari-apartemen-hingga-rumah-mewah-rdu"
                                id="4:7168" data-aos="fade-up">Temukan pilihan properti terbaik untuk investasi atau
                                tempat tinggal di
                                website kami, dari apartemen hingga rumah mewah.</div>
                        </div>
                    </div>

                    <div class="filter-jualsewa" style="margin-top: 400px;">
                        <form action="{{ route('filterproperti') }}" method="GET" role="search">
                            <input type="hidden" name="status" id="status" value="">
                            <button type="submit" class="jualsewa" data-status="{{ $status->pluck('id')->first() }}" onclick="setStatus('dijual')">Dijual</button>
                            <button type="submit" class="jualsewa" data-status="{{ $status->pluck('id')->first() }}" onclick="setStatus('disewa')">Disewa</button>
                        </form>
                    </div>

                    <div class="group-11-tab" id="4:7169">
                        <div class="group-10-mPV" id="4:7171">
                            <form action="{{ route('filterproperti') }}" method="GET" role="search">
                                <!-- Filter Home -->
                                <div class="frame-61-qi7" id="4:7172">
                                    <div class="select-menu2">
                                        <div class="select-btn2">
                                            <span class="sBtn-text2" style="cursor: pointer;">Semua Properti</span>
                                            <i class="bx bx-chevron-down"></i>
                                        </div>
                                        <ul class="options2">
                                            <li class="option2">
                                                <i class="bx bx-building" style="color: #0C40E8;"></i>
                                                <span class="option2-text">Apartemen</span>
                                            </li>
                                            <li class="option2">
                                                <i class="bx bx-home" style="color: #0C40E8;"></i>
                                                <span class="option2-text">Rumah</span>
                                            </li>
                                            <li class="option2">
                                                <i class="bx bx-store" style="color: #0C40E8;"></i>
                                                <span class="option2-text">Ruko</span>
                                            </li>
                                            <li class="option2">
                                                <i class="bx bx-home-heart" style="color: #0C40E8;"></i>
                                                <span class="option2-text">Villa</span>
                                            </li>
                                            <li class="option2">
                                                <i class="bx bx-grid-alt" style="color: #171515;"></i>
                                                <span class="option2-text">Semua Properti</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="select-menu3">
                                        <div class="select-btn3">
                                            <span class="sBtn-text3" style="cursor: pointer;">Kamar Tidur</span>
                                            <i class="bx bx-chevron-down"></i>
                                        </div>

                                        <ul class="options3">

                                            <li class="option3">
                                                <span class="option3-text">Tidak Ada</span>
                                            </li>
                                            <li class="option3">
                                                <span class="option3-text">Satu</span>
                                            </li>
                                            <li class="option3">
                                                <span class="option3-text">Dua</span>
                                            </li>

                                            <li class="option3">
                                                <span class="option3-text">Lebih Dari Dua</span>
                                            </li>
                                            <li class="option3">
                                                <i class="bx bx-hotel" style="color: #171515;"></i>
                                                <span class="option3-text">Kamar Tidur</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="select-menu4">
                                        <div class="select-btn4">
                                            <span class="sBtn-text4" style="cursor: pointer;">Kamar Mandi</span>
                                            <i class="bx bx-chevron-down"></i>
                                        </div>

                                        <ul class="options4">
                                            <li class="option4">
                                                <span class="option4-text">Tidak Ada</span>
                                            </li>
                                            <li class="option4">
                                                <span class="option4-text">Satu</span>
                                            </li>
                                            <li class="option4">
                                                <span class="option4-text">Dua</span>
                                            </li>
                                            <li class="option4">
                                                <span class="option4-text">Lebih Dari Dua</span>
                                            </li>
                                            <li class="option4">
                                                <i class="bx bx-bath" style="color: #171515;"></i>
                                                <span class="option4-text">Kamar Mandi</span>
                                            </li>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <form action="{{ route('filterproperti') }}" method="GET" role="search">
                            <div class="search-container">
                                <input type="text" id="search-input" name="search" placeholder="Search.."
                                    aria-label="Search username" aria-describedby="basic-addon2"
                                    value="{{ request('search') }}">
                                <button type="submit" id="search-button">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="frame-365-pto" id="4:7196">
                    <div class="judulFilter">
                        <h1 id="h1Filter" style="">Temukan Kota Tujuan Anda</h1>
                        <p id="pFilter">Temukan kota-kota menarik di seluruh dunia yang siap menjadi tujuan impian Anda.
                        </p>
                    </div>
                    <div class="filter-kota">
                        <div class="subFilter">
                            <div class="box">
                                <img src="/assets/pages/home/jakarta.jpg" id="img" alt="">
                                <div class="desc-filter-kota">
                                    <p id="namaKota">Jakarta</p>
                                    <p id="descKota">24 properti</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="/assets/pages/home/surabaya.jpg" id="img" alt="">
                                <div class="desc-filter-kota">
                                    <p id="namaKota">Surabaya</p>
                                    <p id="descKota">22 properti</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="/assets/pages/home/bandung.jpg" id="img" alt="">
                                <div class="desc-filter-kota">
                                    <p id="namaKota">Bandung</p>
                                    <p id="descKota">50 properti</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="/assets/pages/home/yogyakarta.jpg" id="img" alt="">
                                <div class="desc-filter-kota">
                                    <p id="namaKota">Yogyakarta</p>
                                    <p id="descKota">10 properti</p>
                                </div>
                            </div>
                        </div>
                        <div class="subFilter" id="filter2">
                            <div class="box">
                                <img src="/assets/pages/home/semarang.jpg" id="img" alt="">
                                <div class="desc-filter-kota">
                                    <p id="namaKota">Semarang</p>
                                    <p id="descKota">8 properti</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="/assets/pages/home/surakarta.jpg" id="img" alt="">
                                <div class="desc-filter-kota">
                                    <p id="namaKota">Surakarta</p>
                                    <p id="descKota">43 properti</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="/assets/pages/home/bekasi.jpg" id="img" alt="">
                                <div class="desc-filter-kota">
                                    <p id="namaKota">Bekasi</p>
                                    <p id="descKota">27 properti</p>
                                </div>
                            </div>
                            <div class="box">
                                <img src="/assets/pages/home/wonosobo.jpg" id="img" alt="">
                                <div class="desc-filter-kota">
                                    <p id="namaKota">Wonosobo</p>
                                    <p id="descKota">32 properti</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="group-77-FDR" id="4:7198">
                        <div class="rumahBaru">
                            <div class="daftar-rumah-baru-ALP" id="4:7200">Daftar Rumah Terbaru</div>
                            <p>Jelajahi koleksi properti eksklusif kami, termasuk villa mewah dan apartemen bergaya </p>
                        </div>

                        <div class="slide-container swiper" style="margin-bottom: 0px;">
                            <div class="slide-content">
                                <div class="card-wrapper swiper-wrapper">
                                    @foreach ($units as $unit)
                                        <div class="col-lg-4 col-md-2 wow swiper-slide" data-wow-delay="0.1s"
                                            style="max-width:330px; margin: 20px;">
                                            <a href="/unit/detail" class="stretched-link"></a>
                                            <div class="property-item rounded overflow-hidden" style="width: 280px;">
                                                <div class="position-relative overflow-hidden">
                                                    <img src="{{ asset('storage/' . $unit->image) }}"
                                                        class="img-thumbnail" alt="" width="360"
                                                        height="120">
                                                    <form action="{{ route('favorite.add', $unit->id) }}" method="POST">
                                                        @csrf
                                                        <div class="btnsz"
                                                            style="position: absolute; top: 18px; right: 20px;">
                                                            <button type="submit" onclick="Toggle1()" id="btnh1z"
                                                                class="btnz"><i class="fas fa-heart"></i></button>
                                                        </div>
                                                    </form>
                                                    <div class=" rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                                                        style="background-color: #0C40E8">
                                                        @foreach ($unit->statuses as $status)
                                                            <li>
                                                                {{ $status->name }}
                                                            </li>
                                                        @endforeach
                                                    </div>
                                                    <div class="bg-white rounded-top  position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                                        style="color: #0C40E8">{{ $unit->title }}</div>
                                                </div>
                                                <div class="p-0 pb-0">
                                                    <h5 class=" mb-1 mt-3" style="color: #000;">{{ $unit->price }}</h5>
                                                    {{ $unit->properties->property }}
                                                    {{-- <p><i class="fa fa-map-marker-alt  me-2" style="color: #000;"></i>
                                                        {{ implode(', ',$property->regencies()->pluck('name')->toArray()) }}</p> --}}
                                                </div>
                                                <div class="d-flex border-top" style="width: 280px; ">
                                                    <small class="flex-fill text-center border-end py-2"
                                                        style="color: #000;"><i
                                                            class="fa fa-bath  me-2"></i>{{ $unit->specifications->bathroom }}</small>
                                                    <small class="flex-fill text-center border-end py-2"
                                                        style="color: #000;"><i
                                                            class="fa fa-bed  me-2"></i>{{ $unit->specifications->bedroom }}</small>
                                                    <small class="flex-fill text-center border-end py-2"
                                                        style="color: #000;"><i
                                                            class="fa fa-ruler-combined  me-2"></i>{{ $unit->specifications->building_area }}m²</small>
                                                    <small class="flex-fill text-center py-2" style="color: #000;"><i
                                                            class="fa fa-signal  me-2"></i>{{ $unit->specifications->floor }}m²</small>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>


                        </div>
                        <div class="slide-container swiper" style="margin-bottom: 0px;">
                            <div class="slide-content">
                                <div class="card-wrapper swiper-wrapper">
                                    @foreach ($units as $unit)
                                        <div class="col-lg-4 col-md-2 wow swiper-slide" data-wow-delay="0.1s"
                                            style="max-width:330px; margin: 20px;">
                                            <a href="/unit/detail" class="stretched-link"></a>
                                            <div class="property-item rounded overflow-hidden" style="width: 280px;">
                                                <div class="position-relative overflow-hidden">
                                                    <img src="{{ asset('storage/' . $unit->image) }}"
                                                        class="img-thumbnail" alt="" width="360"
                                                        height="120">
                                                    <form action="{{ route('favorite.add', $unit->id) }}" method="POST">
                                                        @csrf
                                                        <div class="btnsz"
                                                            style="position: absolute; top: 18px; right: 20px;">
                                                            <button type="submit" onclick="Toggle1()" id="btnh1z"
                                                                class="btnz"><i class="fas fa-heart"></i></button>
                                                        </div>
                                                    </form>
                                                    <div class=" rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                                                        style="background-color: #0C40E8">
                                                        @foreach ($unit->statuses as $status)
                                                            <li>
                                                                {{ $status->name }}
                                                            </li>
                                                        @endforeach
                                                    </div>
                                                    <div class="bg-white rounded-top  position-absolute start-0 bottom-0 mx-4 pt-1 px-3"
                                                        style="color: #0C40E8">{{ $unit->title }}</div>
                                                </div>
                                                <div class="p-0 pb-0">
                                                    <h5 class=" mb-1 mt-3" style="color: #000;">{{ $unit->price }}</h5>
                                                    {{ $unit->properties->property }}
                                                    <p><i class="fa fa-map-marker-alt  me-2" style="color: #000;"></i>
                                                        {{ Str::limit('Jawa Tengah, Semarang, Kedurungan', 25) }}</p>
                                                </div>
                                                <div class="d-flex border-top" style="width: 280px; ">
                                                    <small class="flex-fill text-center border-end py-2"
                                                        style="color: #000;"><i
                                                            class="fa fa-bath  me-2"></i>{{ $unit->specifications->bathroom }}</small>
                                                    <small class="flex-fill text-center border-end py-2"
                                                        style="color: #000;"><i
                                                            class="fa fa-bed  me-2"></i>{{ $unit->specifications->bedroom }}</small>
                                                    <small class="flex-fill text-center border-end py-2"
                                                        style="color: #000;"><i
                                                            class="fa fa-ruler-combined  me-2"></i>{{ $unit->specifications->building_area }}m²</small>
                                                    <small class="flex-fill text-center py-2" style="color: #000;"><i
                                                            class="fa fa-signal  me-2"></i>{{ $unit->specifications->floor }}m²</small>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- banner disini --}}
                <div class="eigentum-2-dYK" id="4:7201">
                </div>

                <div class="frame-156-pto" id="4:7196">


                    <div class="kenapa-eigentum-UH5" id="4:7574">Kenapa Memilih Eigentum?</div>
                    <div class="frame-154-NUw" id="4:7572">
                        <div class="group-98-Wb9" id="4:7573">
                            <div class="component-106-bsV" id="4:7575">




                                <div class="divui-atomic-card-WzT" id="I4:7576;138:2203;124:15094">
                                    <div class="group-88-TPu" id="I4:7576;138:2203;124:15147">
                                        <div class="group-80-pkF" id="I4:7576;138:2203;124:15088">
                                            <img class="group-55-yNF" src="/assets/pages/Home/search-keunggulan.svg"
                                                id="I4:7576;138:2203;119:1189" />
                                        </div>
                                        <div class="group-87-fVy" id="I4:7576;138:2203;124:15146">
                                            <div class="group-86-cg7" id="I4:7576;138:2203;124:15145">
                                                <div class="kemudahan-pencarian-properti-N9V"
                                                    id="I4:7576;138:2203;119:1188">Kemudahan Pencarian properti</div>
                                                <div class="pengguna-bisa-dengan-mudah-mencari-properti-yang-diinginkan-dengan-fitur-pencarian-yang-lengkap-3mR"
                                                    id="I4:7576;138:2203;119:1191">Pengguna bisa dengan mudah mencari
                                                    properti yang diinginkan dengan fitur pencarian yang lengkap</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="divui-atomic-card-WzT" id="I4:7576;138:2203;124:15094">
                                    <div class="group-88-TPu" id="I4:7576;138:2203;124:15147">
                                        <div class="group-80-pkF" id="I4:7576;138:2203;124:15088">
                                            <img class="group-55-yNF" src="/assets/pages/Home/pilihan-keunggulan.svg"
                                                id="I4:7576;138:2203;119:1189" />
                                        </div>
                                        <div class="group-87-fVy" id="I4:7576;138:2203;124:15146">
                                            <div class="group-86-cg7" id="I4:7576;138:2203;124:15145">
                                                <div class="kemudahan-pencarian-properti-N9V"
                                                    id="I4:7576;138:2203;119:1188">Lebih Banyak Pilihan</div>
                                                <div class="pengguna-bisa-dengan-mudah-mencari-properti-yang-diinginkan-dengan-fitur-pencarian-yang-lengkap-3mR"
                                                    id="I4:7576;138:2203;119:1191">lebih banyak pilihan properti yang bisa
                                                    dipilih, mulai dari rumah, apartemen, hingga properti komersial.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="divui-atomic-card-WzT" id="I4:7576;138:2203;124:15094">
                                    <div class="group-88-TPu" id="I4:7576;138:2203;124:15147">
                                        <div class="group-80-pkF" id="I4:7576;138:2203;124:15088">
                                            <img class="group-55-yNF" src="/assets/pages/Home/informasi-keunggulan.svg"
                                                id="I4:7576;138:2203;119:1189" />
                                        </div>
                                        <div class="group-87-fVy" id="I4:7576;138:2203;124:15146">
                                            <div class="group-86-cg7" id="I4:7576;138:2203;124:15145">
                                                <div class="kemudahan-pencarian-properti-N9V"
                                                    id="I4:7576;138:2203;119:1188">Informasi Lengkap</div>
                                                <div class="pengguna-bisa-dengan-mudah-mencari-properti-yang-diinginkan-dengan-fitur-pencarian-yang-lengkap-3mR"
                                                    id="I4:7576;138:2203;119:1191">Informasi lengkap tentang properti yang
                                                    dijual, mulai dari harga, lokasi, ukuran, fasilitas, dan lain
                                                    sebagainya.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="divui-atomic-card-WzT" id="I4:7576;138:2203;124:15094">
                                    <div class="group-88-TPu" id="I4:7576;138:2203;124:15147">
                                        <div class="group-80-pkF" id="I4:7576;138:2203;124:15088">
                                            <img class="group-55-yNF" src="/assets/pages/Home/waktu-keunggulan.svg"
                                                id="I4:7576;138:2203;119:1189" />
                                        </div>
                                        <div class="group-87-fVy" id="I4:7576;138:2203;124:15146">
                                            <div class="group-86-cg7" id="I4:7576;138:2203;124:15145">
                                                <div class="kemudahan-pencarian-properti-N9V"
                                                    id="I4:7576;138:2203;119:1188">Efisiensi Waktu dan Biaya </div>
                                                <div class="pengguna-bisa-dengan-mudah-mencari-properti-yang-diinginkan-dengan-fitur-pencarian-yang-lengkap-3mR"
                                                    id="I4:7576;138:2203;119:1191">Menghemat waktu untuk mencari properti,
                                                    tidak perlu mengunjungi lokasi properti secara langsung.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- Testimonial Start -->
                        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="container py-5">
                                <div class="text-center">
                                    <h6 class=" text-uppercase" style="color: #000; font-size:24px;">Testimonial</h6>
                                </div>
                                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="testimonial-item p-4 my-5">
                                        <i
                                            class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                                        <div class="d-flex align-items-end mb-4">
                                            <img class="img-fluid flex-shrink-0" src="/assets/pages/home/agent1.jpg"
                                                style="width: 80px; height: 80px;">
                                            <div class="ms-4">
                                                <h5 class="mb-1">Rifki Wijaya</h5>
                                                <p class="m-0">Agen</p>
                                            </div>
                                        </div>
                                        <p class="mb-0">Saya sangat puas dengan layanan dari website properti ini.
                                            Informasi tentang properti yang mereka tawarkan sangat lengkap dan akurat.
                                            Transaksi jual-beli berjalan lancar.</p>
                                    </div>
                                    <div class="testimonial-item p-4 my-5">
                                        <i
                                            class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                                        <div class="d-flex align-items-end mb-4">
                                            <img class="img-fluid flex-shrink-0" src="/assets/pages/home/agent2.jpg"
                                                style="width: 80px; height: 80px;">
                                            <div class="ms-4">
                                                <h5 class="mb-1">Rahmawati</h5>
                                                <p class="m-0">Developer</p>
                                            </div>
                                        </div>
                                        <p class="mb-0">Website properti ini menjadi sumber informasi penting bagi saya
                                            dalam mencari peluang investasi. Saya mendapatkan data dan analisis yang akurat,
                                            sehingga saya bisa membuat keputusan investasi yang cerdas. Terima kasih atas
                                            layanan yang sangat membantu!</p>
                                    </div>
                                    <div class="testimonial-item p-4 my-5">
                                        <i
                                            class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                                        <div class="d-flex align-items-end mb-4">
                                            <img class="img-fluid flex-shrink-0" src="/assets/pages/home/agent3.jpg"
                                                style="width: 80px; height: 80px;">
                                            <div class="ms-4">
                                                <h5 class="mb-1">Budi Utomo</h5>
                                                <p class="m-0">Pembeli</p>
                                            </div>
                                        </div>
                                        <p class="mb-0">Terima kasih banyak kepada website properti ini. Rumah saya
                                            berhasil terjual dalam waktu singkat berkat layanan profesional mereka. Timnya
                                            sangat berkomitmen untuk membantu dan memberikan nasihat yang berharga. Sangat
                                            merekomendasikan!</p>
                                    </div>
                                    <div class="testimonial-item p-4 my-5">
                                        <i
                                            class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                                        <div class="d-flex align-items-end mb-4">
                                            <img class="img-fluid flex-shrink-0" src="/assets/pages/home/agent4.jpg"
                                                style="width: 80px; height: 80px;">
                                            <div class="ms-4">
                                                <h5 class="mb-1">Bambang Putra</h5>
                                                <p class="m-0">Agen</p>
                                            </div>
                                        </div>
                                        <p class="mb-0">Saya sangat terbantu dengan layanan dari website properti ini.
                                            Tim mereka sangat profesional dan responsif dalam membantu saya menemukan hunian
                                            idaman. Proses jual-beli properti menjadi lebih mudah berkat mereka. Terima
                                            kasih!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial End -->
                        <div class="frame-139-CN3" id="4:7580">
                            <div class="frame-136-8Wb" id="4:7581">
                                <div class="frame-137-Qyu" id="4:7582">
                                    <div class="group-128-LsZ" id="4:7583">
                                        <img class="group-127-4Hm" src="/assets/pages/Home/survey-apartemen.svg"
                                            id="I4:7583;181:7692" />
                                    </div>
                                    <div class="group-128-LsZ" id="4:7583">
                                        <img class="group-127-4Hm" src="/assets/pages/Home/survey-home.svg"
                                            id="I4:7583;181:7692" />
                                    </div>
                                </div>
                                <div class="frame-147-E5m" id="4:7585">
                                    <div class="group-128-LsZ" id="4:7583">
                                        <img class="group-127-4Hm" src="/assets/pages/Home/survey-ruko.svg"
                                            id="I4:7583;181:7692" />
                                    </div>
                                    <div class="group-128-LsZ" id="4:7583">
                                        <img class="group-127-4Hm" src="/assets/pages/Home/survey-villa.svg"
                                            id="I4:7583;181:7692" />
                                    </div>
                                </div>
                            </div>
                            <div class="group-136-grs" id="4:7588">
                                <div class="group-137-rFZ" id="4:7589">
                                    <div class="berapa-banyak-orang-yang-menyukai-properti-di-eigentum-bU3"
                                        id="4:7591">
                                        <span
                                            class="berapa-banyak-orang-yang-menyukai-properti-di-eigentum-bU3-sub-0">Berapa
                                            Banyak Orang Yang Menyukai Properti Di Eigentum</span>
                                    </div>
                                    <div class="eigentum-merupakan-salah-satu-investasi-yang-populer-di-indonesia-karena-dapat-memberikan-keuntungan-jangka-panjang-seperti-apresiasi-nilai-aset-dan-pendapatan-dari-penyewaan-selain-itu-memiliki-properti-juga-dapat-memberikan-keamanan-dan-stabilitas-finansial-bagi-pemiliknya-9fu"
                                        id="4:7590">Eigentum merupakan salah satu investasi yang populer di Indonesia,
                                        karena dapat memberikan keuntungan jangka panjang, seperti apresiasi nilai aset dan
                                        pendapatan dari penyewaan. Selain itu, memiliki properti juga dapat memberikan
                                        keamanan dan stabilitas finansial bagi pemiliknya.</div>
                                </div>
                                <div class="auto-group-elrb-NYf" id="NC5RpADVDDFgHQMR9YELrB">
                                    <div class="group-138-XRZ" id="4:7592">
                                        <div class="group-132-4RV" id="4:7593">
                                            <div class="menyukai-rumah-9Sw" id="4:7594">Menyukai Rumah</div>
                                            <div class="ribu-2md" id="4:7595">
                                                <span class="ribu-2md-sub-0">20 </span>
                                                <span class="ribu-2md-sub-1">ribu</span>
                                            </div>
                                        </div>
                                        <div class="group-132-4RV" id="4:7593">
                                            <div class="menyukai-rumah-9Sw" id="4:7594">Menyukai Rumah</div>
                                            <div class="ribu-2md" id="4:7595">
                                                <span class="ribu-2md-sub-0">40 </span>
                                                <span class="ribu-2md-sub-1">ribu</span>
                                            </div>
                                        </div>
                                        <div class="group-132-4RV" id="4:7593">
                                            <div class="menyukai-rumah-9Sw" id="4:7594">Menyukai Rumah</div>
                                            <div class="ribu-2md" id="4:7595">
                                                <span class="ribu-2md-sub-0">10 </span>
                                                <span class="ribu-2md-sub-1">ribu</span>
                                            </div>
                                        </div>
                                        <div class="group-132-4RV" id="4:7593">
                                            <div class="menyukai-rumah-9Sw" id="4:7594">Menyukai Rumah</div>
                                            <div class="ribu-2md" id="4:7595">
                                                <span class="ribu-2md-sub-0">30 </span>
                                                <span class="ribu-2md-sub-1">ribu</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </section>
                        <div class="group-146-X7u" id="4:7619">
                            <div class="group-145-UJ3" id="4:7620">
                                <p class="properti-yang-ada-di-provinsi-indonesia-EY7" id="4:7627">Properti Yang Ada Di
                                    Provinsi Indonesia</p>



                                {{-- <div class="wrapperpulau">
                                    <ul class="tabs-box">
                                        <li class="tab active">Rumah</li>
                                        <li class="tab">Ruko</li>
                                        <li class="tab">Apartemen</li>
                                        <li class="tab">Villa</li>
                                    </ul>
                                </div> --}}





                            </div>
                            <div class="group-144-h6F" id="4:7628">
                                <div class="group-139-nNb" id="4:7629">
                                    <p class="negara-home" id="4:7630">Banda Aceh</p>
                                    <p class="negara-home" id="4:7631">Sumatra Utara</p>
                                    <p class="negara-home" id="4:7632">Sumatra Selatan</p>
                                    <p class="negara-home" id="4:7633">Sumatra Barat</p>
                                    <p class="negara-home" id="4:7634">Bengkulu</p>
                                    <p class="negara-home" id="4:7635">Riau</p>
                                    <p class="negara-home" id="4:7636">Kepulauan Riau</p>
                                </div>
                                <div class="group-140-18s" id="4:7637">
                                    <p class="negara-home" id="4:7638">Jambi</p>
                                    <p class="negara-home" id="4:7639">Lampung</p>
                                    <p class="negara-home" id="4:7640">Bangka Belitung</p>
                                    <p class="negara-home" id="4:7641">Kalimantan Timur</p>
                                    <p class="negara-home" id="4:7642">Kalimantan Barat</p>
                                    <p class="negara-home" id="4:7643">Kalimantan Tengah</p>
                                    <p class="negara-home" id="4:7644">Kalimantan Selatan</p>
                                    <p class="negara-home" id="4:7645">Papua Tengah</p>
                                </div>
                                <div class="group-141-vHm" id="4:7646">
                                    <p class="negara-home" id="4:7647">Kalimantan Utara</p>
                                    <p class="negara-home" id="4:7648">DKI Jakarta</p>
                                    <p class="negara-home" id="4:7649">Banten</p>
                                    <p class="negara-home" id="4:7650">Jawa Barat</p>
                                    <p class="negara-home" id="4:7651">Jawa Tengah</p>
                                    <p class="negara-home" id="4:7652">DI Yogyakarta</p>
                                    <p class="negara-home" id="4:7653">Jawa Timur</p>
                                    <p class="negara-home" id="4:7654">Papua Pegunungan</p>
                                </div>
                                <div class="group-142-pfy" id="4:7655">
                                    <p class="negara-home" id="4:7656">Bali</p>
                                    <p class="negara-home" id="4:7657">NTT</p>
                                    <p class="negara-home" id="4:7658">NTB</p>
                                    <p class="negara-home" id="4:7659">Sulawesi Utara</p>
                                    <p class="negara-home" id="4:7660">Sulawesi Barat</p>
                                    <p class="negara-home" id="4:7661">Sulawesi Tengah</p>
                                    <p class="negara-home" id="4:7662">Sulawesi Tenggara</p>
                                    <p class="negara-home" id="4:7663">Papua Barat Daya</p>
                                </div>
                                <div class="group-143-yqh" id="4:7664">
                                    <p class="negara-home" id="4:7665">Sulawesi Selatan</p>
                                    <p class="negara-home" id="4:7666">Gorontalo</p>
                                    <p class="negara-home" id="4:7667">Maluku Utara</p>
                                    <p class="negara-home" id="4:7668">Maluku</p>
                                    <p class="negara-home" id="4:7669">Papua Barat</p>
                                    <p class="negara-home" id="4:7670">Papua</p>
                                    <p class="negara-home" id="4:7671">Papua Selatan</p>
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
        </div>

    </body>
    <!-- Swiper JS -->
    <script src="js/lib/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    <!-- JavaScript -->
    {{-- <script src="js/home.js"></script> --}}
    <script>
        var btnvar1 = document.getElementById('btnh1z');

        function Toggle1() {
            if (btnvar1.style.color == "red") {
                btnvar1.style.color = "grey"
            } else {
                btnvar1.style.color = "red"
            }
        }



        const jualsewaItems = document.querySelectorAll('.jualsewa');

        jualsewaItems.forEach(jualsewa => {
            jualsewa.addEventListener('click', function() {
                jualsewaItems.forEach(item => item.classList.remove('active'));
                this.classList.add('active');
            });
        });


        var swiper = new Swiper(".slide-content", {
            slidesPerView: 4,
            spaceBetween: 5,
            loop: false,
            centerSlide: 'false',
            fade: 'false',
            grabCursor: 'false',
            pagination: {
                el: ".swiper-pagination",
                clickable: false,
                dynamicBullets: false,
            },

            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                520: {
                    slidesPerView: 2,
                },
                950: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 4,
                }
            },
        });

        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            grabCursor: true,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });

        // const tabsBox = document.querySelector(".tabs-box"),
        //     allTabs = tabsBox.querySelectorAll(".tab"),
        //     arrowIcons = document.querySelectorAll(".icon i");

        // let isDragging = false;

        // const handleIcons = (scrollVal) => {
        //     let maxScrollableWidth = tabsBox.scrollWidth - tabsBox.clientWidth;
        //     arrowIcons[0].parentElement.style.display = scrollVal <= 0 ? "none" : "flex";
        //     arrowIcons[1].parentElement.style.display = maxScrollableWidth - scrollVal <= 1 ? "none" : "flex";
        // }

        // arrowIcons.forEach(icon => {
        //     icon.addEventListener("click", () => {
        //         // if clicked icon is left, reduce 350 from tabsBox scrollLeft else add
        //         let scrollWidth = tabsBox.scrollLeft += icon.id === "left" ? -340 : 340;
        //         handleIcons(scrollWidth);
        //     });
        // });

        // allTabs.forEach(tab => {
        //     tab.addEventListener("click", () => {
        //         tabsBox.querySelector(".active").classList.remove("active");
        //         tab.classList.add("active");
        //     });
        // });

        // const dragging14 = (e) => {
        //     if (!isDragging) return;
        //     tabsBox.classList.add("dragging");
        //     tabsBox.scrollLeft -= e.movementX;
        //     handleIcons(tabsBox.scrollLeft)
        // }

        // const dragStop14 = () => {
        //     isDragging = false;
        //     tabsBox.classList.remove("dragging");
        // }

        // tabsBox.addEventListener("mousedown", () => isDragging = true);
        // tabsBox.addEventListener("mousemove", dragging14);
        // document.addEventListener("mouseup", dragStop14);



        // const optionMenu = document.querySelector(".select-menu1"),
        //     selectBtn1 = optionMenu.querySelector(".select-btn1"),
        //     options1 = optionMenu.querySelectorAll(".option1"),
        //     sBtn_text1 = optionMenu.querySelector(".sBtn-text1");

        // selectBtn1.addEventListener("click", () => optionMenu.classList.toggle("active"));

        // options1.forEach(option1 => {
        //     option1.addEventListener("click", () => {
        //         let selectedOption = option1.querySelector(".option1-text").innerText;
        //         sBtn_text1.innerText = selectedOption;

        //         optionMenu.classList.remove("active");
        //     });
        // });

        const optionMenu1 = document.querySelector(".select-menu2"),
            selectBtn2 = optionMenu1.querySelector(".select-btn2"),
            options2 = optionMenu1.querySelectorAll(".option2"),
            sBtn_text2 = optionMenu1.querySelector(".sBtn-text2");

        selectBtn2.addEventListener("click", () => optionMenu1.classList.toggle("active"));

        options2.forEach(option2 => {
            option2.addEventListener("click", () => {
                let selectedOption = option2.querySelector(".option2-text").innerText;
                sBtn_text2.innerText = selectedOption;

                optionMenu1.classList.remove("active");
            });
        });


        const optionMenu2 = document.querySelector(".select-menu3"),
            selectBtn3 = optionMenu2.querySelector(".select-btn3"),
            options3 = optionMenu2.querySelectorAll(".option3"),
            sBtn_text3 = optionMenu2.querySelector(".sBtn-text3");

        selectBtn3.addEventListener("click", () => optionMenu2.classList.toggle("active"));

        options3.forEach(option3 => {
            option3.addEventListener("click", () => {
                let selectedOption = option3.querySelector(".option3-text").innerText;
                sBtn_text3.innerText = selectedOption;

                optionMenu2.classList.remove("active");
            });
        });


        const optionMenu3 = document.querySelector(".select-menu4"),
            selectBtn4 = optionMenu3.querySelector(".select-btn4"),
            options4 = optionMenu3.querySelectorAll(".option4"),
            sBtn_text4 = optionMenu3.querySelector(".sBtn-text4");

        selectBtn4.addEventListener("click", () => optionMenu3.classList.toggle("active"));

        options4.forEach(option4 => {
            option4.addEventListener("click", () => {
                let selectedOption = option4.querySelector(".option4-text").innerText;
                sBtn_text4.innerText = selectedOption;

                optionMenu3.classList.remove("active");
            });
        });


        const optionMenu4 = document.querySelector(".select-menu5"),
            selectBtn5 = optionMenu4.querySelector(".select-btn5"),
            options5 = optionMenu4.querySelectorAll(".option5"),
            sBtn_text5 = optionMenu4.querySelector(".sBtn-text5");

        selectBtn5.addEventListener("click", () => optionMenu4.classList.toggle("active"));

        options5.forEach(option5 => {
            option5.addEventListener("click", () => {
                let selectedOption = option5.querySelector(".option5-text").innerText;
                sBtn_text5.innerText = selectedOption;

                optionMenu4.classList.remove("active");
            });
        });
    </script>

<script>
    function setStatus(status) {
        document.getElementById('status').value = status;
    }
</script>

    </html>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/css/lib/wow/wow.min.js"></script>
    <script src="/css/lib/easing/easing.min.js"></script>
    <script src="/css/lib/waypoints/waypoints.min.js"></script>
    <script src="/css/lib/counterup/counterup.min.js"></script>
    <script src="/css/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/css/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/css/lib/lightbox/js/lightbox.min.js"></script>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="css/Lib/testimoni/lib/wow/wow.min.js"></script>
    <script src="css/Lib/testimoni/lib/easing/easing.min.js"></script>
    <script src="css/Lib/testimoni/lib/waypoints/waypoints.min.js"></script>
    <script src="css/Lib/testimoni/lib/counterup/counterup.min.js"></script>
    <script src="css/Lib/testimoni/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    {{-- <script src="/js/Panduan/panduan.js"></script> --}}
    <script src="/js/pages/home.js"></script>
    <script src="/js/pages/home/testimonyHome.js"></script>
@endsection
