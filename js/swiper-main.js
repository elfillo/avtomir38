$(document).ready(function(){
  var swiper1 = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
  });
});

$(document).ready(function(){
  //avtoBrends slider
  setTimeout(function(){
      var swiper2 = new Swiper('#avto-brends', {
        autoplay: {
            delay: 5000,
            stopOnLastSlide: false,
            disableOnInteraction: false,
        },
      slidesPerView: 3,
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 10
        },
        480: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        640: {
          slidesPerView: 3,
          spaceBetween: 30
        }
      },
      spaceBetween: 30,
      loop: true,
      navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
      });
  }, 1000);
});

$(document).ready(function(){
  //akumulBrends slider
  var swiper3 = new Swiper('.akkumul-brends__swiper-container', {
    autoplay: {
        delay: 5000,
    },
    slidesPerView: 3,
    breakpoints: {
    940: {
        slidesPerView: 1,
        spaceBetween: 30
    }
    },
    spaceBetween: 30,
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
                },
  });
});
