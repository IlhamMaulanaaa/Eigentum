@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
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

        <link href="/css/pages/guide.css" rel="stylesheet">
    </head>

    <body>
        <section class="banner-area organic-breadcrumb" style="background-image: url('assets/pages/favorite/baner.svg');">
            <div class="container">
                <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                    <div class="col-first">
                        <h1>Favorite</h1>
                        <div class="d-flex align-items-center">
                            <a href="index.html" style="margin-right: 10px; color:#fff">Home</a>
                            <a style="margin-right: 10px; color:#fff;">/</a>
                            <a href="single-product.html" style="color: #fff">Favorite</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="slide-container swiper" style="margin-top: 90px;">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">

                    @foreach ($favorites as $unit)
                        <div class="col-lg-4 col-md-2 wow swiper-slide" data-wow-delay="0.1s"
                            style="max-width:330px; margin: 20px;">
                            {{-- <a href="/unit/{{ $unit->id }}" class="stretched-link"></a> --}}
                            <div class="property-item rounded overflow-hidden" style="width: 290px;">
                                <div class="position-relative overflow-hidden">
                                    <img src="{{ asset('storage/' . $unit->image) }}" class="img-thumbnail" alt=""
                                        style="width: 280px; height:190px;">
                                    <form action="{{ route('favorite.add', $unit->id) }}" method="POST">
                                        @csrf
                                        <div class="btnsz"
                                            style="position: absolute; top: 18px; right: 20px; z-index: 100;">
                                            <button type="submit" onclick="Toggle1()" id="btnh1z" class="btnz"><i
                                                    class="fas fa-heart"></i></button>
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
                                        style="color: #0C40E8">{{ $unit->properties->types->name }}</div>
                                </div>
                                <div class="p-0 pb-0">
                                    <h5 class=" mb-1 mt-3" style="color: #000;">{{ $unit->price }}</h5>
                                    <h6 class=" mb-1 mt-3" style="color: #000;">
                                        {{ $unit->title }}</h6>
                                    <p><i class="fa fa-map-marker-alt  me-2" style="color: #000;"></i>
                                        {{ implode(', ',$unit->properties->regencies()->pluck('name')->toArray()) }}
                                    </p>
                                </div>
                                <div class="d-flex border-top" style="width: 280px; ">
                                    <small class="flex-fill text-center border-end py-2" style="color: #000;"><i
                                            class="fa fa-bath  me-2"></i>{{ $unit->specifications->bathroom }}</small>
                                    <small class="flex-fill text-center border-end py-2" style="color: #000;"><i
                                            class="fa fa-bed  me-2"></i>{{ $unit->specifications->bedroom }}</small>
                                    <small class="flex-fill text-center border-end py-2" style="color: #000;"><i
                                            class="fa fa-ruler-combined  me-2"></i>{{ $unit->specifications->building_area }}m²</small>
                                    <small class="flex-fill text-center py-2" style="color: #000;"><i
                                            class="fa fa-signal  me-2"></i>{{ $unit->specifications->floor }}m²</small>
                                </div>
                            </div>
                            <a href="{{route('unit.show.user', $unit->id)}}" class="stretched-link"></a>
                        </div>
                    @endforeach









                    {{-- @endforeach --}}


                </div>
            </div>


        </div>
    </body>

    <!-- Swiper JS -->
    <script src="js/lib/swiper-bundle.min.js"></script>

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

    <!-- Template Javascript -->
    {{-- <script src="/js/Panduan/panduan.js"></script> --}}
    <script src="/js/pages/home.js"></script>

    </html>
@endsection
