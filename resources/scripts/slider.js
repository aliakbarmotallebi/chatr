import { Pagination, Navigation } from "swiper/modules";
import Swiper from "swiper/bundle";
import "swiper/css/pagination";
import "swiper/css";

function createSlider(className, options) {
  new Swiper(className, {
    cssMode: true,
    slideToClickedSlide: true,
    updateOnWindowResize: true,
    rtl: true,
    autoplay: {
      delay: 3000,
      pauseOnMouseEnter: true,
      disableOnInteraction: false,
      reverseDirection: true,
    },
    ...options,
  });
}

document.addEventListener("DOMContentLoaded", function () {
  createSlider(".sw-hero", {
    modules: [Pagination],
    loop: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      bulletActiveClass: "bullet-active-custome",
    },
  });

  createSlider(".sw-about-chatr", {
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });

  createSlider(".sw-products", {
    modules: [Navigation],
    loop: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 0,
      },
    },
    navigation: {
      nextEl: ".swiper-button-product-next",
      prevEl: ".swiper-button-product-prev",
    },
  });

  createSlider(".sw-gifts", {
    modules: [Navigation],
    // loop: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 0,
      },
      1440: {
        slidesPerView: 5,
        spaceBetween: 0,
      },
    },
    navigation: {
      nextEl: ".swiper-button-product-next",
      prevEl: ".swiper-button-product-prev",
    },
  });

  var swiper = new Swiper(".sw-thumbs-video", {
    modules: [Navigation],

    freeMode: true,
    watchSlidesProgress: true,
    loop: true,
    breakpoints: {
      0: {
        direction: "horizontal",
        slidesPerView: 2,
        spaceBetween: 30,
      },
      769: {
        direction: "vertical",
        slidesPerView: 2,
        spaceBetween: 10,
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  var swiperVideo = new Swiper(".sw-video", {
    loop: true,
    spaceBetween: 10,
    thumbs: {
      swiper: swiper,
    },
  });

  var swiper = new Swiper(".sw-insta-card", {
    effect: "cards",
    centeredSlides: true,
    grabCursor: true,
    cardsEffect: {
      perSlideOffset: 10,
      perSlideRotate: 3,
    },
    autoplay: {
      delay: 3000,
      pauseOnMouseEnter: true,
      disableOnInteraction: false,
      reverseDirection: true,
    },
  });

  createSlider(".sw-blog", {
    loop: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });

  createSlider(".sw-about-us", {
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
      },
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: false,
      },
    },
  });
});
