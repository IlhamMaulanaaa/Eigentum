(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });
    
    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";
    
    $(window).on("load resize", function() {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
            function() {
                const $this = $(this);
                $this.addClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "true");
                $this.find($dropdownMenu).addClass(showClass);
            },
            function() {
                const $this = $(this);
                $this.removeClass(showClass);
                $this.find($dropdownToggle).attr("aria-expanded", "false");
                $this.find($dropdownMenu).removeClass(showClass);
            }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


    // Vendor carousel
    $('.vendor-carousel').owlCarousel({
        loop: true,
        margin: 45,
        dots: false,
        loop: true,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0:{
                items:2
            },
            576:{
                items:4
            },
            768:{
                items:6
            },
            992:{
                items:8
            }
        }
    });
    
})(jQuery);

const wrapper = document.querySelector(".wrapper");
const carousel11 = document.querySelector(".carousel11");
const firstCardWidth = carousel11.querySelector(".card").offsetWidth;
const arrowBtns = document.querySelectorAll(".wrapper i");
const carousel11Childrens = [...carousel11.children];

// Get the number of cards that can fit in the carousel11 at once
let cardPerView = Math.round(carousel11.offsetWidth / firstCardWidth);

// Insert copies of the last few cards to the beginning of carousel11 for infinite scrolling
carousel11Childrens.slice(-cardPerView).reverse().forEach(card => {
    carousel11.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to the end of carousel11 for infinite scrolling
carousel11Childrens.slice(0, cardPerView).forEach(card => {
    carousel11.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel11 at the appropriate position to hide the first few duplicate cards on Firefox
carousel11.classList.add("no-transition");
carousel11.scrollLeft = carousel11.offsetWidth;
carousel11.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel11 left and right
arrowBtns.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel11.scrollLeft += btn.id === "left" ? -firstCardWidth : firstCardWidth;
    });
});

const dragStart = (e) => {
    isDragging = true;
    carousel11.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel11
    startX = e.pageX;
    startScrollLeft = carousel11.scrollLeft;
};

const dragging = (e) => {
    if (!isDragging) return; // if isDragging is false, return from here
    // Updates the scroll position of the carousel11 based on the cursor movement
    carousel11.scrollLeft = startScrollLeft - (e.pageX - startX);
};

const dragStop = () => {
    isDragging = false;
    carousel11.classList.remove("dragging");
};

const infiniteScroll = () => {
    // If the carousel11 is at the beginning, scroll to the end
    if (carousel11.scrollLeft === 0) {
        carousel11.classList.add("no-transition");
        carousel11.scrollLeft = carousel11.scrollWidth - 2 * carousel11.offsetWidth;
        carousel11.classList.remove("no-transition");
    }
    // If the carousel11 is at the end, scroll to the beginning
    else if (Math.ceil(carousel11.scrollLeft) === carousel11.scrollWidth - carousel11.offsetWidth) {
        carousel11.classList.add("no-transition");
        carousel11.scrollLeft = carousel11.offsetWidth;
        carousel11.classList.remove("no-transition");
    }
};



carousel11.addEventListener("mousedown", dragStart);
carousel11.addEventListener("mousemove", dragging);
document.addEventListener("mouseup", dragStop);
carousel11.addEventListener("scroll", infiniteScroll);
wrapper.addEventListener("mouseenter", () => clearTimeout(timeoutId));




const wrapper1 = document.querySelector(".wrapper1");
const carousel12 = document.querySelector(".carousel12");
const firstCardWidth1 = carousel12.querySelector(".card1").offsetWidth;
const arrowBtns1 = document.querySelectorAll(".wrapper1 i");
const carousel12Childrens = [...carousel12.children];

// Get the number of cards that can fit in the carousel12 at once
let cardPerView1 = Math.round(carousel12.offsetWidth / firstCardWidth1);

// Insert copies of the last few cards to the beginning of carousel12 for infinite scrolling
carousel12Childrens.slice(-cardPerView1).reverse().forEach(card => {
    carousel12.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to the end of carousel12 for infinite scrolling
carousel12Childrens.slice(0, cardPerView1).forEach(card => {
    carousel12.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel12 at the appropriate position to hide the first few duplicate cards on Firefox
carousel12.classList.add("no-transition");
carousel12.scrollLeft = carousel12.offsetWidth;
carousel12.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel12 left and right
arrowBtns1.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel12.scrollLeft += btn.id === "left" ? -firstCardWidth1 : firstCardWidth1;
    });
});

const dragStart1 = (e) => {
    isDragging = true;
    carousel12.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel12
    startX = e.pageX;
    startScrollLeft = carousel12.scrollLeft;
};

const dragging1 = (e) => {
    if (!isDragging) return; // if isDragging is false, return from here
    // Updates the scroll position of the carousel12 based on the cursor movement
    carousel12.scrollLeft = startScrollLeft - (e.pageX - startX);
};

const dragStop1 = () => {
    isDragging = false;
    carousel12.classList.remove("dragging");
};

const infiniteScroll1 = () => {
    // If the carousel12 is at the beginning, scroll to the end
    if (carousel12.scrollLeft === 0) {
        carousel12.classList.add("no-transition");
        carousel12.scrollLeft = carousel12.scrollWidth - 2 * carousel12.offsetWidth;
        carousel12.classList.remove("no-transition");
    }
    // If the carousel12 is at the end, scroll to the beginning
    else if (Math.ceil(carousel12.scrollLeft) === carousel12.scrollWidth - carousel12.offsetWidth) {
        carousel12.classList.add("no-transition");
        carousel12.scrollLeft = carousel12.offsetWidth;
        carousel12.classList.remove("no-transition");
    }
};

carousel12.addEventListener("mousedown", dragStart1);
carousel12.addEventListener("mousemove", dragging1);
document.addEventListener("mouseup", dragStop1);
carousel12.addEventListener("scroll", infiniteScroll1);
wrapper1.addEventListener("mouseenter", () => clearTimeout(timeoutId));



const wrapper2 = document.querySelector(".wrapper2");
const carousel13 = document.querySelector(".carousel13");
const firstCardWidth3 = carousel13.querySelector(".card2").offsetWidth;
const arrowBtns2 = document.querySelectorAll(".wrapper2 i");
const carousel13Childrens = [...carousel13.children];

// Get the number of cards that can fit in the carousel13 at once
let cardPerView2 = Math.round(carousel13.offsetWidth / firstCardWidth3);

// Insert copies of the last few cards to the beginning of carousel13 for infinite scrolling
carousel13Childrens.slice(-cardPerView2).reverse().forEach(card => {
    carousel13.insertAdjacentHTML("afterbegin", card.outerHTML);
});

// Insert copies of the first few cards to the end of carousel13 for infinite scrolling
carousel13Childrens.slice(0, cardPerView2).forEach(card => {
    carousel13.insertAdjacentHTML("beforeend", card.outerHTML);
});

// Scroll the carousel13 at the appropriate position to hide the first few duplicate cards on Firefox
carousel13.classList.add("no-transition");
carousel13.scrollLeft = carousel13.offsetWidth;
carousel13.classList.remove("no-transition");

// Add event listeners for the arrow buttons to scroll the carousel13 left and right
arrowBtns2.forEach(btn => {
    btn.addEventListener("click", () => {
        carousel13.scrollLeft += btn.id === "left" ? -firstCardWidth3 : firstCardWidth3;
    });
});

const dragStart2 = (e) => {
    isDragging = true;
    carousel13.classList.add("dragging");
    // Records the initial cursor and scroll position of the carousel13
    startX = e.pageX;
    startScrollLeft = carousel13.scrollLeft;
};

const dragging2 = (e) => {
    if (!isDragging) return; // if isDragging is false, return from here
    // Updates the scroll position of the carousel13 based on the cursor movement
    carousel13.scrollLeft = startScrollLeft - (e.pageX - startX);
};

const dragStop2 = () => {
    isDragging = false;
    carousel13.classList.remove("dragging");
};

const infiniteScroll2 = () => {
    // If the carousel13 is at the beginning, scroll to the end
    if (carousel13.scrollLeft === 0) {
        carousel13.classList.add("no-transition");
        carousel13.scrollLeft = carousel13.scrollWidth - 2 * carousel13.offsetWidth;
        carousel13.classList.remove("no-transition");
    }
    // If the carousel13 is at the end, scroll to the beginning
    else if (Math.ceil(carousel13.scrollLeft) === carousel13.scrollWidth - carousel13.offsetWidth) {
        carousel13.classList.add("no-transition");
        carousel13.scrollLeft = carousel13.offsetWidth;
        carousel13.classList.remove("no-transition");
    }
};

carousel13.addEventListener("mousedown", dragStart2);
carousel13.addEventListener("mousemove", dragging2);
document.addEventListener("mouseup", dragStop2);
carousel13.addEventListener("scroll", infiniteScroll2);
wrapper2.addEventListener("mouseenter", () => clearTimeout(timeoutId));




















