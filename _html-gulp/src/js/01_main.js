document.getElementById("toggle").addEventListener("click", function () {
  this.classList.toggle("on");
  document.getElementById("menu").style.display = (document.getElementById("menu").style.display === "none" || document.getElementById("menu").style.display === "") ? "flex" : "none";
});

let mainSwiper = new Swiper(".main-banner", {
  grabCursor: true,
  effect: "creative",
  loop: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  creativeEffect: {
    prev: {
      shadow: true,
      translate: ["-20%", 0, -1],
    },
    next: {
      translate: ["100%", 0, 0],
    },
  },
});

let clientsSwiper = new Swiper(".clients-swiper", {
  grabCursor: true,
  slidesPerView: 3,
  spaceBetween: 30,
  spaceBetween: 20,
  loop: true,
  breakpoints: {
    320: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 3,
    },
  },
  pagination: {
    el: ".swiper-pagination",
    type: 'bullets',
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});