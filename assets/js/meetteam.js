jQuery(document).ready(function ($) {
  const isDesktop = window.innerWidth >= 1024;
  const swiper = new Swiper(".meet-swiper", {
    slidesPerView: isDesktop ? 4 : 1,
    spaceBetween: 30,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  gsap.to(".team .content-container", {
    scrollTrigger: {
      trigger: ".team",
      start: isDesktop ? "-50%" : "-60%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".team .content-container", { opacity: 1 });
      },
    },
    y: isDesktop ? -50 : -25,
  });

  gsap.to(".team .image", {
    scrollTrigger: {
      trigger: ".team",
      start: isDesktop ? "-50%" : "-60%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".team .image", { opacity: 1 });
      },
    },
    y: isDesktop ? -50 : -25,
  });

  gsap.to(".founder .image", {
    scrollTrigger: {
      trigger: ".founder",
      start: isDesktop ? "-20%" : "-35%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".founder .image", { opacity: 1 });
      },
    },
    y: isDesktop ? -70 : -25,
  });

  gsap.to(".founder .content-container", {
    scrollTrigger: {
      trigger: ".founder",
      start: isDesktop ? "-20%" : "0%",
      end: "100%",
      scrub: 1,
      onEnter: () => {
        gsap.to(".founder .content-container", { opacity: 1 });
      },
    },
    y: isDesktop ? -50 : -25,
  });

  gsap.to(".meet-team .meet-team-inner", {
    scrollTrigger: {
      trigger: ".meet-team",
      start: isDesktop ? "-45%" : "-70%",
      end: "100%",
      scrub: 1,
      markers: true,
      onEnter: () => {
        gsap.to(".meet-team .meet-team-inner", { opacity: 1 });
      },
    },
    y: isDesktop ? -50 : -25,
  });

  gsap.to(".careers .content-container", {
    scrollTrigger: {
      trigger: ".careers",
      start: isDesktop ? "-150%" : "-120%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".careers .content-container", { opacity: 1 });
      },
    },
    y: isDesktop ? -75 : -25,
  });

});
