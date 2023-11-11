 //banner slideshow
 var index = 1;
 changeImage = function() {
     var imgs = ["view/images/carousel/1.png", "view/images/carousel/2.png", "view/images/carousel/3.png", "view/images/carousel/4.png", "view/images/carousel/5.png", "view/images/carousel/6.png"];
     document.getElementById('img').src = imgs[index];
     index++;
     if (index == 6) {
         index = 0;
     }
 }
 setInterval(changeImage, 1000);

 //TESTIMONIALS
 var swiper = new Swiper(".swiper-testimonials", {
     effect: "coverflow",
     grabCursor: true,
     centeredSlides: true,
     slidesPerView: "auto",
     slidesPerView: "3",
     loop: true,
     coverflowEffect: {
         rotate: 50,
         stretch: 0,
         depth: 100,
         modifier: 1,
         slideShadows: false,
     },
     pagination: {
         el: ".swiper-pagination",
     },
     breakpoints: {
         320: {
             slidesPerView: 1,
         },
         640: {
             slidesPerView: 1,
         },
         768: {
             slidesPerView: 2,
         },
         1024: {
             slidesPerView: 3,
         }
     }
 });