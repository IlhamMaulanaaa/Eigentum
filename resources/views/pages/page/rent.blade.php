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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!-- CSS -->
    <link rel="stylesheet" href="/css/pages/rent.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!-- Libraries Stylesheet -->
    <link href="/css/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/css/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/Lib/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/pages/guide.css" rel="stylesheet">
</head>
<body>
    <div class="desktop-1-RTV" id="1:2">
        
        <div class="frame-147-QbZ" id="4:7162">
        <div class="group-75-kvK" id="4:7163">
        <div class="group-74-7F5" id="4:7164">
        <div class="group-71-2cw" id="4:7166">
        <div class="segera-miliki-properti-impianmu-AUF" id="4:7167">Cari Properti Yang Disewa</div>
        <div class="temukan-pilihan-properti-terbaik-untuk-investasi-atau-tempat-tinggal-di-website-kami-dari-apartemen-hingga-rumah-mewah-rdu" id="4:7168">Temukan pilihan properti terbaik untuk investasi atau tempat tinggal di website kami, dari apartemen hingga rumah mewah.</div>
        </div>
        </div>
        
        <!-- Search Start -->
    <div class="container-fluid bg-custom mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px; background-color: #0C40E8; margin-top: 400px;">
      <div class="container">
          <div class="row g-2">
              <div class="col-md-10">
                  <div class="row g-2">
                      <div class="col-md-4">
                          <input type="text" class="form-control border-0 py-3" style="height: 56px" placeholder="Cari Kata Kunci">
                      </div>
                      <div class="col-md-4">
                          <select class="form-select border-0 py-3">
                              <option selected>Tipe Properti</option>
                              <option value="1">Apartemen</option>
                              <option value="2">Rumah</option>
                              <option value="3">Ruko</option>
                              <option value="3">Villa</option>
                          </select>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group" style="height: 56px">
                          <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                          <input type="text" class="form-control border-0 py-3" style="height: 56px" placeholder="Lokasi Spesifik">
                        </div>
                      </div>
                      
                  </div>
              </div>
              <div class="col-md-2">
                  <button class="btn border-0 w-100 py-3 btn-white" style="background-color: #4070f4; color: #fff;">Search</button>
              </div>
              
          </div>
      </div>
  </div>
  
  <!-- Search End -->

        </div>
        
        </div>
    </div>
        
</body>
    <!-- Swiper JS -->
    <script src="/js/swiper-bundle.min.js"></script>
    
    <!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/css/lib/wow/wow.min.js"></script>
<script src="/css/lib/easing/easing.min.js"></script>
<script src="/css/lib/waypoints/waypoints.min.js"></script>
<script src="/css/lib/counterup/counterup.min.js"></script>
<script src="/css/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/css/lib/isotope/isotope.pkgd.min.js"></script>
<script src="/css/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="/js/pages/guide.js"></script>
</html>


    <!-- JavaScript -->
    {{-- <script src="js/home.js"></script> --}}

    <script>
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
  
  const optionMenu = document.querySelector(".select-menu1"),
       selectBtn1 = optionMenu.querySelector(".select-btn1"),
       options1 = optionMenu.querySelectorAll(".option1"),
       sBtn_text1 = optionMenu.querySelector(".sBtn-text1");
  
  selectBtn1.addEventListener("click", () => optionMenu.classList.toggle("active"));       
  
  options1.forEach(option1 =>{
    option1.addEventListener("click", ()=>{
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
  
  options2.forEach(option2 =>{
    option2.addEventListener("click", ()=>{
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
  
  options3.forEach(option3 =>{
    option3.addEventListener("click", ()=>{
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
  
  options4.forEach(option4 =>{
    option4.addEventListener("click", ()=>{
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
  
  options5.forEach(option5 =>{
    option5.addEventListener("click", ()=>{
        let selectedOption = option5.querySelector(".option5-text").innerText;
        sBtn_text5.innerText = selectedOption;
  
        optionMenu4.classList.remove("active");
    });
  });
      </script>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/css/lib/wow/wow.min.js"></script>
<script src="/css/lib/easing/easing.min.js"></script>
<script src="/css/lib/waypoints/waypoints.min.js"></script>
<script src="/css/lib/counterup/counterup.min.js"></script>
<script src="/css/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/css/lib/isotope/isotope.pkgd.min.js"></script>
<script src="/css/lib/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="/js/pages/guide.js"></script>

@endsection