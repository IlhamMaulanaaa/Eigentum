 // JavaScript for handling slide changes
 let slideIndex = 0;
 showSlide(slideIndex);

 function changeSlide(n) {
   showSlide(slideIndex += n);
 }

 function showSlide(n) {
   const slides = document.getElementsByClassName("testimonial-card");
   const indicators = document.getElementsByClassName("slide-indicator");

   // Wrap around to the first slide if at the end
   if (n >= slides.length) {
     slideIndex = 0;
   }
   // Wrap around to the last slide if at the beginning
   else if (n < 0) {
     slideIndex = slides.length - 1;
   } else {
     slideIndex = n;
   }

   // Hide all slides and deactivate all indicators
   for (let i = 0; i < slides.length; i++) {
     slides[i].style.display = "none";
     indicators[i].classList.remove("active");
   }

   // Show the current slide and activate the corresponding indicator
   slides[slideIndex].style.display = "block";
   indicators[slideIndex].classList.add("active");

   // Add fade-in and fade-out classes for smooth transitions
   for (let i = 0; i < slides.length; i++) {
     if (i === slideIndex) {
       slides[i].classList.add("fade-in");
       slides[i].classList.remove("fade-out");
       slides[i].classList.add("active"); // Add the "active" class for bouncy effect
     } else {
       slides[i].classList.add("fade-out");
       slides[i].classList.remove("fade-in");
       slides[i].classList.remove("active");
     }
   }
 }

 // Function to auto slide every 3 seconds
     function autoSlide() {
   changeSlide(1); // Move to the next slide
   setTimeout(autoSlide, 3000); // Call autoSlide again after 3 seconds
 }

 // Start auto sliding on page load
 setTimeout(autoSlide, 3000);