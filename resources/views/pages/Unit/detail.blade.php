@extends('layout.main')

@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/DetailProperty/detailproperty.css">
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

        <!-- Customized Bootstrap Stylesheet -->
        <link href="/css/Lib/bootstrap.min.css" rel="stylesheet">


    </head>

    <body style="background-color: #fff;">



        <div class="card78-wrapper" style="margin-top: 90px;">

            <div class="card78">
                <!-- card78 left -->

                <div class="product-imgs">
                    <div class="img-display" style="height:450px;">
                        <div class="img-showcase" style="">
                            <img class="img-besar" src="/assets/pages/Home/unit1.jpg" alt="shoe image">
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
                            <div class="image hide"><img src="/assets/unit/detailunit/bathroom.jpg" alt=""
                                    style="margin-left:770px; border-radius:10px; margin-top:310px; filter: grayscale(90%) opacity(2.5); width: 200px; height:120px;">
                            </div>
                            <div class="image hide"><img src="/assets/unit/detailunit/bedroom.jpg" alt=""
                                    style="margin-left:770px; border-radius:10px; margin-top:310px; filter: grayscale(90%) opacity(2.5); width: 200px; height:120px;">
                            </div>
                            <div class="image hide"><img src="/assets/unit/detailunit/denah.jpg" alt=""
                                    style="margin-left:770px; border-radius:10px; margin-top:310px; filter: grayscale(90%) opacity(2.5); width: 200px; height:120px;">
                            </div>
                            <div class="image hide"><img src="/assets/pages/Home/unit1.jpg" alt=""
                                    style="margin-left:770px; border-radius:10px; margin-top:310px; filter: grayscale(90%) opacity(2.5); width: 200px; height:120px;">
                            </div>
                            <div class="image hide"><img src="/assets/unit/detailunit/livingroom.jpg" alt=""
                                    style="margin-left:770px; border-radius:10px; margin-top:310px; filter: grayscale(90%) opacity(2.5); width: 200px; height:120px;">
                            </div>
                            <div class="image hide"><img src="/assets/unit/detailunit/bathroom.jpg" alt=""
                                    style="margin-left:770px; border-radius:10px; margin-top:310px; filter: grayscale(90%) opacity(2.5); width: 200px; height:120px;">
                            </div>
                            <div class="image hide"><img src="/assets/unit/detailunit/bedroom.jpg" alt=""
                                    style="margin-left:770px; border-radius:10px; margin-top:310px; filter: grayscale(90%) opacity(2.5); width: 200px; height:120px;">
                            </div>
                            <div class="image hide"><img src="/assets/unit/detailunit/denah.jpg" alt=""
                                    style="margin-left:770px; border-radius:10px; margin-top:310px; filter: grayscale(90%) opacity(2.5); width: 200px; height:120px;">
                            </div>
                            <div class="image hide"><img src="/assets/pages/Home/unit1.jpg" alt=""
                                    style="margin-left:770px; border-radius:10px; margin-top:310px; filter: grayscale(90%) opacity(2.5); width: 200px; height:120px;">
                            </div>
                            <div class="image hide"><img src="/assets/unit/detailunit/livingroom.jpg" alt=""
                                    style="margin-left:770px; border-radius:10px; margin-top:310px; filter: grayscale(90%) opacity(2.5); width: 200px; height:120px;">
                            </div>
                            <div class="image hide"><img src="/assets/unit/detailunit/bathroom.jpg" alt=""
                                    style="margin-left:770px; border-radius:10px; margin-top:310px; filter: grayscale(90%) opacity(2.5); width: 200px; height:120px;">
                            </div>
                            <div class="image hide"><img src="/assets/unit/detailunit/bedroom.jpg" alt=""
                                    style="margin-left:770px; border-radius:10px; margin-top:310px; filter: grayscale(90%) opacity(2.5); width: 200px; height:120px;">
                            </div>
                            <div class="image hide"><img src="/assets/unit/detailunit/denah.jpg" alt=""
                                    style="margin-left:770px; border-radius:10px; margin-top:310px; filter: grayscale(90%) opacity(2.5); width: 200px; height:120px;">
                            </div>
                            <div class="image hide"><img src="/assets/pages/Home/unit1.jpg" alt=""
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
                    <h2 style="margin-top: 20px;" class="product-title">Rumah Minimalis</h2>
                    <h5 style="font-family: 'Lato', sans-serif;" class="product-title1"><i
                            class="fas fa-map-marker-alt"></i> Lokasi Jateng , Kudus</h5>
                    <div class="product-detail">
                        <p style="color: #000; font-family: 'Inter', sans-serif; font-weight: 500;">Rumah ini memiliki
                            berbagai fitur dan karakteristik yang membedakannya, seperti tipe, gaya arsitektur, dan
                            penyesuaian dengan kebutuhan individu seperti kamar tidur, kamar mandi, ruang tamu, dapur, dan
                            ruang keluarga. Rumah ini juga memiliki nilai investasi yang signifikan dengan potensi kenaikan
                            harga dalam jangka panjang, memberikan keuntungan finansial bagi pemiliknya. Selain itu, rumah
                            juga dapat digunakan sebagai aset untuk memperoleh pinjaman atau hipotek.</p>
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




            </div>

        </div>
        </div>




        <div class="group-9-g1K" id="3:42">
            <p class="informasi-properti-hSD"
                style="font-size: 16px; margin-left:-10px; font-family:'Lato', sans-serif; padding-bottom:10px;"
                id="2:4">Informasi Properti</p>
            <div class="auto-group-gquh-9b3" id="ChrW4N6ZdKqVk7fRtmGqUh" style="margin-left:10px;">
                <p class="developer--EMb" style="font-size: 20px; font-family: 'Lato', sans-serif; font-weight: 500;"
                    id="2:6">Developer:</p>
                <p class="informasi-properti-LfX" id="2:7">PT Sukaria Property</p>
            </div>
            <div class="group-14-GJH" id="3:52">
                <div class="group-4-wfK" id="3:20">
                    <i class="fas fa-bed group-5-TQh" style="color: #000" id="3:29"></i>
                    <p class=" item-2-BpZ" style="margin-bottom: 0px; font-family:'Lato', sans-serif;" id="2:14">2
                    </p>
                </div>
                <div class="group-6-KQy" id="3:36">
                    <i class="fas fa-bath group-5-TQh" style="color: #000" id="3:29"></i>
                    <p class=" item-1-arh" style="margin-bottom: -3px; font-family:'Lato', sans-serif;" id="3:18">1
                    </p>
                </div>
                <div class="group-7-vQm" id="3:37">
                    <i class="fas fa-arrows-alt group-5-TQh" style="color: #000" id="3:29"></i>
                    <p class="m1-nhs" style="margin-bottom: 0px; font-family:'Lato', sans-serif;" id="3:32">290 m1²
                    </p>
                </div>
                <div class="group-8-iLd" id="3:38">
                    <i class="fas fa-home group-5-TQh" style="color: #000" id="3:29"></i>
                    <p class="m-QDT" style="margin-bottom: 0px; font-family:'Lato', sans-serif;" id="3:31">305 m²
                    </p>
                </div>
            </div>
            <div class="group-13-7tZ" id="3:51">
                <div class="group-10-Dgh" id="3:43" style="margin-top:20px; margin-left:20px;">
                    <p class="hari-sewa-a1T" style="margin-left: -80px; font-family:'Lato', sans-serif;" id="3:39">1
                        Hari Sewa</p>
                    <p class="rp-15jt-malam-hLy" id="3:40" style="margin-left: -30px">
                        <span class="rp-15jt-malam-hLy-sub-0"
                            style="font-weight: 600; font-family:'Lato', sans-serif; margin-right:3px;">Rp. 1.5jt</span>
                        <span class="rp-15jt-malam-hLy-sub-1"> / Malam</span>
                    </p>
                </div>
                <div class="group-11-jws" id="3:44"
                    style="margin-top: 20px; margin-right:-10px; font-family:'Lato', sans-serif;">
                    <p class="bulan-sewa-Vw3" id="3:45"
                        style="margin-left: -60px; font-family:'Lato', sans-serif; ">1 Bulan Sewa</p>
                    <p class="rp-1jt-malam-dnM" id="3:46" style="margin-left: -30px">
                        <span class="rp-1jt-malam-dnM-sub-0"
                            style="font-weight: 600; font-family:'Lato', sans-serif; margin-right:3px;">Rp. 1jt</span>
                        <span class="rp-1jt-malam-dnM-sub-1"> / Malam</span>
                    </p>
                </div>
            </div>
            <a href="https://web.whatsapp.com/"><div class="group-12-pM3" id="3:50">Tanya Agent</div></a>
        </div>





        
    </body>
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

function slideImage(){
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

  breakpoints:{
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
  if(!isDragging) return;
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
