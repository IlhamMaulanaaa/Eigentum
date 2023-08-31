@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
            integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
            crossorigin="anonymous" />

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="css/Lib/swiper-bundle.min.css">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="/css/Lib/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="/css/unit/detail.css">
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
        {{-- <link rel="stylesheet" href="/css/agent/detail.css"> --}}

        <link rel="stylesheet" href="css/lib/bootstrap.css">
        <link rel="stylesheet" href="css/pages/favorite.css">
        <link rel="stylesheet" href="/css/pages/home.css">



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

        <!-- Customized Bootstrap Stylesheet -->
        <link href="/css/Lib/bootstrap.min.css" rel="stylesheet">

        {{-- <link href="/css/pages/guide.css" rel="stylesheet"> --}}
        <!-- Customized Bootstrap Stylesheet -->
        <link href="/css/Lib/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/pages/home.css">





        <style>
            .btn-status {
                position: relative;
                top: 70px;
                left: 20px;
                width: 80px;
                padding: 10px 20px;
                background-color: #0c40e8;
                /* Warna latar belakang tombol */
                color: rgb(255, 255, 255);
                /* Warna teks tombol */
                border: none;
                border-radius: 4px;
                font-size: 14px;
                cursor: pointer;
                z-index: 12;
                /* Pastikan tombol berada di atas gambar */
            }
        </style>

    </head>

    <body style="height:100%; background-color: #fff;">



        <div class="card78-wrapper" style="margin-top: 120px;">

            <div class="card78" style="height: auto; margin-top:250px;">
                <!-- card78 left -->

                <div class="product-imgs">
                    <div class="img-display" style="height:450px;">
                        <div class="img-showcase" style="">
                            <img class="img-besar" src="{{ asset('storage/' . $property->image) }}"
                                alt="{{ $property->image }}">
                            <img class="img-besar" src="/assets/unit/detailunit/livingroom.jpg" alt="shoe image">
                            <img class="img-besar" src="/assets/unit/detailunit/bathroom.jpg" alt="shoe image">
                            <img class="img-besar" src="/assets/unit/detailunit/bedroom.jpg" alt="shoe image">
                            <img class="img-besar" src="/assets/unit/detailunit/denah.jpg" alt="shoe image">

                        </div>

                        <div class="wrapperimg" style="margin-top: -500px; ">
                            <div class="gallery">

                                <div class="image" style="margin-left: 770px; margin-top: 310px;">
                                    <img src="/assets/pages/Home/unit1.jpg" alt=""
                                        style="border-radius: 10px; filter: grayscale(90%) opacity(2.5); width: 200px; height: 120px;">
                                    <div class="text-overlay">
                                        <p class="text">Lihat Semua</p>
                                    </div>
                                </div>


                            </div>
                            <div class="image hide"><img src="/assets/unit/detailunit/livingroom.jpg" alt=""
                                    style="margin-left:770px; border-radius:10px; margin-top:310px; filter: grayscale(90%) opacity(2.5); width: 200px; height:120px;">
                            </div>
                        </div>
                    </div>

                    <div class="preview-box" style="z-index: 11;">
                        <div class="details">
                            <span class="title">Image <p class="current-img"></p> of <p class="total-img"></p></span>
                            <span class="icon fas fa-times"></span>
                        </div>
                        <div class="image-box">
                            <div class="slide prev"><i class="fas fa-angle-left"></i></div>
                            <div class="slide next"><i class="fas fa-angle-right"></i></div>
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="shadow" style="z-index:10;"></div>
                </div>

                <!-- card78 right -->
                <div class="product-content">
                    <h2 style="margin-top: 20px; width:550px;" class="product-title">{{ $property->title }}</h2>
                    <h5 style="font-family: 'Lato', sans-serif;" class="product-title1"><i
                            class="fas fa-map-marker-alt"></i>
                        {{ implode(', ',$property->regencies()->pluck('name')->toArray()) }}</h5>
                    <div class="product-detail">
                        <p style="color: #000; font-family: 'Inter', sans-serif; font-weight: 500;">
                            {{ $property->description }}</p>
                    </div>
                </div>

                <div class="img-select" style="width: 1000px; ">
                    <div class="img-item" style="padding-right: 20px;">
                        <a href="#" data-id="1">
                            <img style="width: 90px; height:70px; border: 1px solid black; border-radius:8px;"
                                src="/assets/pages/Home/unit1.jpg" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item" style="padding-right: 20px;">
                        <a href="#" data-id="2">
                            <img style="width: 90px; height:70px; border: 1px solid black; border-radius:8px;"
                                src="/assets/unit/detailunit/livingroom.jpg" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item" style="padding-right: 20px;">
                        <a href="#" data-id="3">
                            <img style="width: 90px; height:70px; border: 1px solid black; border-radius:8px;"
                                src="/assets/unit/detailunit/bathroom.jpg" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item" style="padding-right: 20px;">
                        <a href="#" data-id="4">
                            <img style="width: 90px; height:70px; border: 1px solid black; border-radius:8px;"
                                src="/assets/unit/detailunit/bedroom.jpg" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item" style="padding-right: 20px;">
                        <a href="#" data-id="5">
                            <img style="width: 90px; height:70px; border: 1px solid black; border-radius:8px;"
                                src="/assets/unit/detailunit/denah.jpg" alt="shoe image">
                        </a>
                    </div>
                </div>

                <div class="cardproperty" style="margin-top: -250px;">
                    <p class="developer">{{ $property->title }}</p>
                    <div class="official">
                        <p class="official-label">{{ auth()->user()->name }}</p>
                    </div>
                    <div class="rent-info">
                        <p class="rent-label">Kisaran Harga</p>
                        <p class="rent-price">{{ $property->price_range }} </p>
                    </div>
                    @foreach ($property->agents as $agent)
                        <li>{{ $agent->name }}
                            {{-- <a href="{{ route('agent.show', $agent->id) }}" class="text-warning">Detail</a> --}}
                        </li>
                    @endforeach
                    <a href="https://web.whatsapp.com/" class="ask-agent">
                        @foreach ($property->agents as $agent)
                            <li>{{ $agent->name }}
                                <a href="{{ route('agent.show', $agent->id) }}" class="text-warning">Detail</a>
                            </li>
                        @endforeach
                    </a>
                </div>

                <div class="cardproperty1">
                    <div class="tipe">
                        <i class="fas fa-home property-icon"></i>
                        <p class="tipe-text">Unit Tersedia</p>
                    </div>
                    <p class="unit-text">{{ $property->units->count() }}</p>
                </div>

                <div class="cardproperty1" style="margin-left: 170px; margin-top:-143px; height:119px;">
                    <div class="tipe">
                        <i class="fas fa-clipboard property-icon"></i>
                        <p class="tipe-text">Tipe Properti</p>
                    </div>
                    <p class="unit-text">{{ $property->types->name }}</p>
                </div>
                @if (Auth::user()->role == 'developer' && Auth::user()->id == $property->developers->users->pluck('id')->first())
                    <a href="{{ route('unit.create.developer', $property->id) }}" class="btn btn-success">Tambah Unit</a>
                @endif
            </div>
        </div>
        <div class="group-77-FDR" id="4:7198">
            <div class="rumahBaru" style="margin: 0px 150px 0px 0px ;">
                <div class="daftar-rumah-baru-ALP" id="4:7200" style="margin: auto;">List unit dari properti
                    {{ $property->title }}</div>
                <p id="subtexthome">Jelajahi koleksi properti eksklusif kami, termasuk villa mewah dan
                    apartemen bergaya </p>
            </div>
            <div class="slide-container swiper" style="margin-right: -2900px; align-item:center;">
                <div class="slide-content">
                    <div class="card-wrapper swiper-wrapper">
                        <div class="row " style="margin: 0px 0px 0px 440px ;">

                            @foreach ($units as $unit)
                                <div class="col-lg-3 col-md-4 col-sm-6 mb-4 wow swiper-slide" data-wow-delay="0.1s"
                                    style="max-width:330px; margin: 20px;">
                                    <div class="property-item rounded overflow-hidden" style="width: 280px;">
                                        <div class="position-relative overflow-hidden">
                                            @if (Auth::user()->role == 'developer' && Auth::user()->id == $property->developers->users->pluck('id')->first())
                                                <a href="{{ route('unit.show.developer', $unit->id) }}" class="">
                                                    <img src="{{ asset('storage/' . $unit->image) }}"
                                                        class="img-thumbnail" alt="" width="360"
                                                        height="120px" style="height: 180px;"></a>
                                            @elseif (Auth::user()->role == 'agent' && Auth::user()->id == $property->developers->users->pluck('id')->first())
                                                <a href="{{ route('unit.show.agent', $unit->id) }}" class="">
                                                    <img src="{{ asset('storage/' . $unit->image) }}"
                                                        class="img-thumbnail" alt="" width="360"
                                                        height="120"></a>
                                            @else
                                                <a href="{{ route('unit.show.user', $unit->id) }}" class="">
                                                    <img src="{{ asset('storage/' . $unit->image) }}"
                                                        class="img-thumbnail" alt="" width="360"
                                                        height="120"></a>
                                            @endif
                                            @if (Auth::user()->role == 'user')
                                                <form action="{{ route('favorite.add', $unit->id) }}" method="POST">
                                                    @csrf
                                                    <div class="btnsz"
                                                        style="position: absolute; top: 18px; right: 20px;">
                                                        <button type="submit" onclick="Toggle1()" id="btnh1z"
                                                            class="btnz"><i class="fas fa-heart"></i></button>
                                                    </div>
                                                </form>
                                            @endif

                                            {{-- <div class="rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"
                                                style="background-color: #0C40E8">
                                                @foreach ($unit->statuses as $status)
                                                    <li>{{ $status->name }}</li>
                                                @endforeach
                                            </div> --}}
                                            <div class="bg-white rounded-top d-flex position-absolute start-500 bottom-0 left-50 mx-4 pt-1 "
                                                style="color: #0C40E8; margin-right: 4px; padding-left: 10px;padding-right: 10px;">
                                                {{ $unit->properties->types->name }}
                                                <p>
                                                    @foreach ($unit->statuses as $status)
                                                        <li style="margin-left:10px; color:#000; font-weight:700;">
                                                            {{ $status->name }}</li>
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                        <div class="p-0 pb-0 mb-3"> <!-- Adjusted padding -->
                                            <h5 class="mb-1 mt-3 d-flex  text-start"
                                                style=" margin-left:0px;  color: #000;">
                                                {{ Str::limit($unit->title, 22) }}</h5>
                                            <div class="edit-unit-developer d-flex ">
                                                {{-- @foreach ($units->agents as $agent)
                                                @endforeach --}}
                                                <p class="mb-0 d-flex text-start"
                                                    style="width: 260px; margin-left:0px; margin-bottom:16px;">
                                                    {{ $unit->price }}</p>
                                                {{-- @foreach ($property->units as $unit)
                                                    @foreach ($unit->agents as $status)
                                                        <li
                                                            style="height:25px; border-radius: 15px; width:80px; background-color:yellow; margin-top: 0px; color:#000;">
                                                            {{ $status->status_unit }}</li>
                                                    @endforeach
                                                @endforeach --}}
                                            </div>
                                            <p class="mb-0 d-flex text-start " style=" margin-bottom:32px; width: 260px;">
                                                <i style="margin: 3px 10px 0px 0px ;"
                                                    class="fa fa-map-marker-alt  "></i>{{ Str::limit(implode(', ',$property->regencies()->pluck('name')->toArray()),20) }}
                                            </p>
                                        </div>
                                        @if (Auth::user()->role == 'developer' && Auth::user()->id == $property->developers->users->pluck('id')->first())
                                            <div class="action d-flex .align-items-center">
                                                <div class="labeldelete">
                                                    <form action="{{ route('unit.destroy.developer', $unit->id) }}"
                                                        method="get" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="linkdelete  bg-danger"
                                                            style="border:none;background-color: white; width: 130px; margin-right: 1px;"
                                                            onclick="return confirm('Apakah Anda Yakin {{ $property->id }} ')"><i
                                                                class="fas fa-trash delete-icon"
                                                                style="color: white;"></i></button>
                                                    </form>
                                                </div>
                                                <div class="labeledit bg-primary" style="width: 130px; margin-left: 1px;">
                                                    <a class="linkedit"
                                                        href="{{ route('unit.edit.developer', $unit->id) }}"><i
                                                            class="fas fa-edit" style="color: #fff;"></i></a>
                                                </div>
                                            </div>
                                        @endif
                                        {{-- <div class="d-flex border-top" style="width: 280px; ">
                                        <small class="flex-fill text-center border-end py-2" style="color: #000;"><i
                                                class="fa fa-bath  me-2"></i>{{ $unit->specifications->bathroom }}</small>
                                        <small class="flex-fill text-center border-end py-2" style="color: #000;"><i
                                                class="fa fa-bed  me-2"></i>{{ $unit->specifications->bedroom }}</small>
                                        <small class="flex-fill text-center border-end py-2" style="color: #000;"><i
                                                class="fa fa-ruler-combined  me-2"></i>{{ $unit->specifications->building_area }}m²</small>
                                        <small class="flex-fill text-center py-2" style="color: #000;"><i
                                                class="fa fa-signal  me-2"></i>{{ $unit->specifications->floor }}m²</small>
                                    </div> --}}
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
    <!-- Swiper JS -->
    <script src="js/lib/swiper-bundle.min.js"></script>
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

    <!-- Template Javascript -->
    {{-- <script src="/js/Panduan/panduan.js"></script> --}}
    <script src="/js/pages/home.js"></script>
    <!-- JavaScript -->
    {{-- <script src="js/home.js"></script> --}}
    <script>
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

        const tabsBox = document.querySelector(".tabs-box"),
            allTabs = tabsBox.querySelectorAll(".tab"),
            arrowIcons = document.querySelectorAll(".icon i");

        let isDragging = false;

        const handleIcons = (scrollVal) => {
            let maxScrollableWidth = tabsBox.scrollWidth - tabsBox.clientWidth;
            arrowIcons.parentElement.style.display = scrollVal <= 0 ? "none" : "flex";
            arrowIcons[1].parentElement.style.display = maxScrollableWidth - scrollVal <= 1 ? "none" : "flex";
        }

        arrowIcons.forEach(icon => {
            icon.addEventListener("click", () => {
                // if clicked icon is left, reduce 350 from tabsBox scrollLeft else add
                let scrollWidth = tabsBox.scrollLeft += icon.id === "left" ? -340 : 340;
                handleIcons(scrollWidth);
            });
        });

        allTabs.forEach(tab => {
            tab.addEventListener("click", () => {
                tabsBox.querySelector(".active").classList.remove("active");
                tab.classList.add("active");
            });
        });

        const dragging14 = (e) => {
            if (!isDragging) return;
            tabsBox.classList.add("dragging");
            tabsBox.scrollLeft -= e.movementX;
            handleIcons(tabsBox.scrollLeft)
        }

        const dragStop14 = () => {
            isDragging = false;
            tabsBox.classList.remove("dragging");
        }

        tabsBox.addEventListener("mousedown", () => isDragging = true);
        tabsBox.addEventListener("mousemove", dragging14);
        document.addEventListener("mouseup", dragStop14);



        // const wrapper = document.querySelector(".wrapperteks"),
        // selectBtn = wrapper.querySelector(".select-btn-teks"),
        // options = wrapper.querySelector(".optionsteks");

        // let countries = ["Semua", "Rumah", "Apartemen", "Ruko", "VIlla"];

        // function addCountry(selectedCountry) {
        //     options.innerHTML = "";
        //     countries.forEach(country => {
        //         let isSelected = country == selectedCountry ? "selected" : "";
        //         let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
        //         options.insertAdjacentHTML("beforeend", li);
        //     });
        // }
        // addCountry();

        // function updateName(selectedLi) {
        //     addCountry(selectedLi.innerText);
        //     wrapper.classList.remove("active");
        //     selectBtn.firstElementChild.innerText = selectedLi.innerText;
        // }


        // selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));

        const optionMenu = document.querySelector(".select-menu1"),
            selectBtn1 = optionMenu.querySelector(".select-btn1"),
            options1 = optionMenu.querySelectorAll(".option1"),
            sBtn_text1 = optionMenu.querySelector(".sBtn-text1");

        selectBtn1.addEventListener("click", () => optionMenu.classList.toggle("active"));

        options1.forEach(option1 => {
            option1.addEventListener("click", () => {
                let selectedOption = option1.querySelector(".option1-text").innerText;
                sBtn_text1.innerText = selectedOption;

                optionMenu.classList.remove("active");
            });
        });

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
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>
    {{-- <script src="js/unit/detail.js"></script> --}}

    <!-- JavaScript -->
    {{-- <script src="js/home.js"></script> --}}
    <script>
        const imgs = document.querySelectorAll('.img-select a');
        const imgBtns = [...imgs];
        let imgId = 1;

        imgBtns.forEach((imgItem) => {
            imgItem.addEventListener('click', (event) => {
                event.preventDefault();
                imgId = imgItem.dataset.id;
                slideImage();
            });
        });

        function slideImage() {
            const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

            document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
        }

        window.addEventListener('resize', slideImage);





        const gallery = document.querySelectorAll(".image");
        const previewImg = document.querySelector(".image-box img");
        const prevBtn = document.querySelector(".slide.prev");
        const nextBtn = document.querySelector(".slide.next");
        const currentImg = document.querySelector(".current-img");
        const totalImg = document.querySelector(".total-img");
        const previewBox = document.querySelector(".preview-box");
        const closeIcon = document.querySelector(".icon");

        let currentIndex = 0;

        window.onload = () => {
            totalImg.textContent = gallery.length;

            gallery[currentIndex].classList.add("active");
            previewImg.src = gallery[currentIndex].querySelector("img").src;
            currentImg.textContent = currentIndex + 1;

            prevBtn.onclick = () => {
                currentIndex--;
                if (currentIndex < 0) {
                    currentIndex = gallery.length - 1;
                }
                showImage(currentIndex);
            };

            nextBtn.onclick = () => {
                currentIndex++;
                if (currentIndex >= gallery.length) {
                    currentIndex = 0;
                }
                showImage(currentIndex);
            };

            gallery.forEach((image, index) => {
                image.onclick = () => {
                    showImage(index);
                };
            });

            closeIcon.onclick = () => {
                previewBox.classList.remove("show");
            };
        };

        function showImage(index) {
            gallery.forEach((image) => {
                image.classList.remove("active");
            });
            gallery[index].classList.add("active");
            previewImg.src = gallery[index].querySelector("img").src;
            currentImg.textContent = index + 1;
            previewBox.classList.add("show");
        }

        var swiper = new Swiper(".slide-content", {
            slidesPerView: 4,
            spaceBetween: 25,
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

        const tabsBox = document.querySelector(".tabs-box"),
            allTabs = tabsBox.querySelectorAll(".tab"),
            arrowIcons = document.querySelectorAll(".icon i");

        let isDragging = false;

        const handleIcons = (scrollVal) => {
            let maxScrollableWidth = tabsBox.scrollWidth - tabsBox.clientWidth;
            arrowIcons[0].parentElement.style.display = scrollVal <= 0 ? "none" : "flex";
            arrowIcons[1].parentElement.style.display = maxScrollableWidth - scrollVal <= 1 ? "none" : "flex";
        }

        arrowIcons.forEach(icon => {
            icon.addEventListener("click", () => {
                // if clicked icon is left, reduce 350 from tabsBox scrollLeft else add
                let scrollWidth = tabsBox.scrollLeft += icon.id === "left" ? -340 : 340;
                handleIcons(scrollWidth);
            });
        });

        allTabs.forEach(tab => {
            tab.addEventListener("click", () => {
                tabsBox.querySelector(".active").classList.remove("active");
                tab.classList.add("active");
            });
        });

        const dragging14 = (e) => {
            if (!isDragging) return;
            tabsBox.classList.add("dragging");
            tabsBox.scrollLeft -= e.movementX;
            handleIcons(tabsBox.scrollLeft)
        }

        const dragStop14 = () => {
            isDragging = false;
            tabsBox.classList.remove("dragging");
        }

        tabsBox.addEventListener("mousedown", () => isDragging = true);
        tabsBox.addEventListener("mousemove", dragging14);
        document.addEventListener("mouseup", dragStop14);



        // const wrapper = document.querySelector(".wrapperteks"),
        // selectBtn = wrapper.querySelector(".select-btn-teks"),
        // options = wrapper.querySelector(".optionsteks");

        // let countries = ["Semua", "Rumah", "Apartemen", "Ruko", "VIlla"];

        // function addCountry(selectedCountry) {
        //     options.innerHTML = "";
        //     countries.forEach(country => {
        //         let isSelected = country == selectedCountry ? "selected" : "";
        //         let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
        //         options.insertAdjacentHTML("beforeend", li);
        //     });
        // }
        // addCountry();

        // function updateName(selectedLi) {
        //     addCountry(selectedLi.innerText);
        //     wrapper.classList.remove("active");
        //     selectBtn.firstElementChild.innerText = selectedLi.innerText;
        // }


        // selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));
    </script>


    </html>
@endsection
