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

const dragging = (e) => {
  if(!isDragging) return;
  tabsBox.classList.add("dragging");
  tabsBox.scrollLeft -= e.movementX;
  handleIcons(tabsBox.scrollLeft)
}

const dragStop = () => {
  isDragging = false;
  tabsBox.classList.remove("dragging");
}

tabsBox.addEventListener("mousedown", () => isDragging = true);
tabsBox.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);



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