jQuery(document).ready(function ($) {
  const isDesktop = window.innerWidth >= 1024;

  $(".block-items-list .block-item .image").hover(
    function () {
      $(this).parent().children(".top-titles").addClass("custom-toggle");
      $(this).parent().children(".content-container").addClass("custom-toggle");
    },
    function () {
      $(this).parent().children(".top-titles").removeClass("custom-toggle");
      $(this)
        .parent()
        .children(".content-container")
        .removeClass("custom-toggle");
    }
  );

  gsap.to(".our-driving-us h2", {
    scrollTrigger: {
      trigger: ".our-driving-us",
      start: isDesktop ? "-50%" : "-30%",
      end: "100%",
      scrub: 2,

      onEnter: () => {
        gsap.to(".our-driving-us h2", { opacity: 1 });
      },
    },
    y: isDesktop ? -50 : -25,
  });

  gsap.to(".our-driving-us .block-item-1 .image", {
    scrollTrigger: {
      trigger: ".our-driving-us",
      start: isDesktop ? "-50%" : "-30%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".our-driving-us .block-item-1 .image", { opacity: 1 });
      },
    },
    y: isDesktop ? -100 : -25,
  });

  gsap.to(".our-driving-us .block-item-1 .content-container", {
    scrollTrigger: {
      trigger: ".our-driving-us",
      start: isDesktop ? "-50%" : "-30%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".our-driving-us .block-item-1 .content-container", {
          opacity: 1,
        });
      },
    },
    y: isDesktop ? -75 : -25,
  });

  gsap.to(".our-driving-us .block-item-2 .image", {
    scrollTrigger: {
      trigger: ".our-driving-us",
      start: isDesktop ? "0%" : "-10%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".our-driving-us .block-item-2 .image", { opacity: 1 });
      },
    },
    y: isDesktop ? -100 : -25,
  });

  gsap.to(".our-driving-us .block-item-2 .content-container", {
    scrollTrigger: {
      trigger: ".our-driving-us",
      start: isDesktop ? "0%" : "15%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".our-driving-us .block-item-2 .content-container", {
          opacity: 1,
        });
      },
    },
    y: isDesktop ? -75 : -25,
  });

  gsap.to(".inspired-nextevo .content-container", {
    scrollTrigger: {
      trigger: ".inspired-nextevo",
      start: isDesktop ? "-100%" : "-120%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".inspired-nextevo .content-container", { opacity: 1 });
      },
    },
    y: isDesktop ? -75 : -25,
  });

  gsap.to(".three-princple .headline-title", {
    scrollTrigger: {
      trigger: ".three-princple",
      start: isDesktop ? "-60%" : "-40%",
      end: "100%",
      scrub: 1,
      onEnter: () => {
        gsap.to(".three-princple .headline-title", { opacity: 1 });
      },
    },
    // y: isDesktop ? -75 : -100,
  });

  gsap.to(".three-princple .icons-item-list", {
    scrollTrigger: {
      trigger: ".three-princple",
      start: isDesktop ? "-50%" : "-40%",
      end: "100%",
      scrub: 1.5,
      onEnter: () => {
        gsap.to(".three-princple .icons-item-list", { opacity: 1 });
      },
    },
    y: isDesktop ? -75 : -100,
  });

  gsap.to(".three-princple .image", {
    scrollTrigger: {
      trigger: ".three-princple ",
      start: isDesktop ? "-40%" : "10%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        console.log("enter");
        gsap.to(".three-princple .image", { opacity: 1 });
      },
    },
    y: isDesktop ? -75 : -25,
  });

  gsap.to(".three-princple .numbers-item-list", {
    scrollTrigger: {
      trigger: ".three-princple ",
      start: isDesktop ? "20%" : "10%",
      end: "100%",
      scrub: 2.5,
      onEnter: () => {
        gsap.to(".three-princple .numbers-item-list", { opacity: 1 });
      },
    },
    y: isDesktop ? -75 : -30,
  });

  gsap.to(".our-journey", {
    scrollTrigger: {
      trigger: ".our-journey",
      start: isDesktop ? "-80%" : "-40%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".our-journey", { opacity: 1 });
      },
    },
    y: isDesktop ? -75 : -100,
  });

  gsap.to(".our-solution .content-container", {
    scrollTrigger: {
      trigger: ".our-solution",
      start: isDesktop ? "-100%" : "-120%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".our-solution .content-container", { opacity: 1 });
      },
    },
    y: isDesktop ? -75 : -25,
  });
});
