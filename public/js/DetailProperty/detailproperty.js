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