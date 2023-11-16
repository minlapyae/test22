gsap.registerPlugin(ScrollTrigger);

(function ($) {
  const isDesktop = window.innerWidth >= 1024;
  jQuery.fn.clickToggle = function (a, b) {
    return this.on("click", function (ev) {
      [b, a][(this.$_io ^= 1)].call(this, ev);
    });
  };

  $(window).scroll(function () {
    let position = $(this).scrollTop();
    if (position >= 100) {
      $(".nav-menu__desktop").addClass("custom-navbar");
      $(".mobile_menu .top-navbar").addClass("custom-navbar");
      $(".nav-logo-color").fadeIn(600);
      $(".nav-logo-white").fadeOut(600);
      $(".hamburger-white")
        .fadeOut(10)
        .promise()
        .done(function () {
          $(".hamburger-black").fadeIn(600);
        });
    } else {
      $(".nav-menu__desktop").removeClass("custom-navbar");
      $(".mobile_menu .top-navbar").removeClass("custom-navbar");
      $(".nav-logo-color").fadeOut(600);
      $(".nav-logo-white").fadeIn(600);
      $(".hamburger-black")
        .fadeOut(10)
        .promise()
        .done(function () {
          $(".hamburger-white").fadeIn(600);
        });
    }
  });
  $(document).click(function () {
    $(".nav-menu-dropdown__desktop ul").fadeOut(600);
    $(".nav-menu-dropdown__desktop").fadeOut(600);
  });
  $(".nav-menu__desktop .navigation__links li a").clickToggle(
    function (e) {
      e.stopPropagation();
      const data = $(this).data("menu");
      $(".nav-menu-dropdown__desktop").fadeIn(600);
      $("." + data).fadeIn(600);
    },
    function (e) {
      e.stopPropagation();
      $(".nav-menu-dropdown__desktop ul").fadeOut(600);
      $(".nav-menu-dropdown__desktop").fadeOut(600);
    }
  );
  $(".mobile_menu .navbar-link a").clickToggle(
    function (e) {
      e.stopPropagation();
      const data = $(this).data("menu");
      $("." + data).fadeIn(600);
    },
    function (e) {
      e.stopPropagation();
      const data = $(this).data("menu");
      $("." + data).fadeOut(600);
    }
  );
  $(".mobile-hamburger").click(function () {
    $(".mobile_menu").fadeIn();
  });
  $(".exit-menu").click(function () {
    $(".mobile_menu").fadeOut();
    $(".navbar-mobile-dropdown").fadeOut(600);
  });
  document.querySelector(
    `.shelf-slider-section .shelf-slide .title-container-1`
  ).style.display = "none";

  $(".shelf-slider-section .shelf-slide").click(function (e) {
    const dataAttr = $(this).data("index");
    console.log("dataAttr", dataAttr);
    document
      .querySelectorAll(".shelf-slider-section .shelf-slide .content-container")
      .forEach((element) => {
        element.style.opacity = 0;
        element.style.zIndex = -2;
      });

    document
      .querySelectorAll(".shelf-slider-section .shelf-slide .title-container")
      .forEach((element) => {
        element.style.display = "flex";
      });
    document.querySelector(
      `.shelf-slider-section .shelf-slide .${dataAttr}`
    ).style.display = "none";
    const currentElement = $(this);
    $(currentElement)
      .addClass("shelf-slide-active")
      .siblings(".shelf-slide-active")
      .removeClass("shelf-slide-active")
      .siblings(".shelf-slide");
    $(".shelf-slider-section .shelf-slide-active .content-container")
      .css("zIndex", "3")
      .animate(
        {
          opacity: 1,
        },
        500
      );
  });

  gsap.to(".zero-waste-title", {
    scrollTrigger: {
      trigger: ".zero-waste .block__item_wrapper-1",
      start: isDesktop ? "-150%" : "-500%",
      end: "100%",
      scrub: 2,

      onEnter: () => {
        gsap.to(".zero-waste-title", { opacity: 0.25 });
      },
    },
    y: isDesktop ? -100 : -25,
  });

  gsap.to(".zero-waste-paragraph", {
    scrollTrigger: {
      trigger: ".zero-waste .block__item_wrapper-1",
      start: isDesktop ? "-130%" : "-500%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".zero-waste-paragraph", { opacity: 1 });
      },
    },
    y: isDesktop ? -100 : -50,
  });

  gsap.to(".zero-waste-image-1", {
    scrollTrigger: {
      trigger: ".zero-waste .block__item_wrapper-2",
      start: isDesktop ? "-160%" : "-350%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".zero-waste-image-1", { opacity: 1 });
      },
    },
    y: isDesktop ? -100 : -50,
  });

  gsap.to(".zero-waste-image-2", {
    scrollTrigger: {
      trigger: ".zero-waste .block__item_wrapper-3",
      start: isDesktop ? "-160%" : "-210%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".zero-waste-image-2", { opacity: 1 });
      },
    },
    y: isDesktop ? -100 : -50,
  });

  gsap.to(
    [
      ".block__item_wrapper-3 h3",
      ".block__item_wrapper-3 .title",
      ".block__item_wrapper-3 .subtitle",
    ],
    {
      scrollTrigger: {
        trigger: ".zero-waste .block__item_wrapper-3",
        start: isDesktop ? "-180%" : "-250%",
        end: "100%",
        scrub: 2,
        onEnter: () => {
          gsap.to(".block__item_wrapper-3 .content-container", { opacity: 1 });
        },
      },
      y: isDesktop ? -100 : -50,
    }
  );

  gsap.to(".zero-waste-image-3", {
    scrollTrigger: {
      trigger: ".zero-waste .block__item_wrapper-4",
      start: isDesktop ? "-200%" : "-220%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".zero-waste-image-3", { opacity: 1 });
        gsap.to(".block__item_wrapper-4 .content-container", { opacity: 1 });
      },
    },
    y: isDesktop ? -100 : -50,
  });

  gsap.to(".zero-waste-image-4", {
    scrollTrigger: {
      trigger: ".zero-waste .block__item_wrapper-5",
      start: isDesktop ? "-160%" : "-230%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".zero-waste-image-4", { opacity: 1 });
      },
    },
    y: isDesktop ? -100 : -50,
  });

  gsap.to(
    [
      ".block__item_wrapper-5 h3",
      ".block__item_wrapper-5 .title",
      ".block__item_wrapper-5 .subtitle",
    ],
    {
      scrollTrigger: {
        trigger: ".zero-waste .block__item_wrapper-5",
        start: "-160%",
        end: "100%",
        scrub: 2,
        onEnter: () => {
          gsap.to(".zero-waste-image-2", { opacity: 1 });
          gsap.to(".block__item_wrapper-5 .content-container", { opacity: 1 });
        },
      },
      y: isDesktop ? -100 : -50,
    }
  );
  gsap
    .timeline({
      scrollTrigger: {
        trigger: ".farming-connection-section",
        start: isDesktop ? "-80%" : "-35%",
        end: "100%",
        scrub: 2,
        onEnter: () => {
          gsap.to(
            ".farming-connection-section .farming-connection__block-item",
            { autoAlpha: 1 }
          );
        },
      },
    })
    .fromTo(
      ".farming-img-border",
      {
        y: 50,
      },
      {
        y: -50,
      }
    )
    .fromTo(
      ".farming-connection-section .content-container",
      {
        y: 50,
      },
      {
        y: 0,
      },
      "<"
    );

  gsap
    .timeline({
      scrollTrigger: {
        trigger: ".quote-section",
        start: isDesktop ? "-160%" : "-180%",
        end: "100%",
        scrub: 2,
        onEnter: () => {
          gsap.to(".quote-section p", { autoAlpha: 1 });
        },
      },
    })
    .fromTo(
      ".quote-section p",
      {
        y: 50,
      },
      {
        y: 0,
      }
    );

  gsap
    .timeline({
      scrollTrigger: {
        trigger: ".latest-new-event-section",
        start: "-80%",
        end: "100%",
        scrub: 2,
        onEnter: () => {
          gsap.to(".latest-new-event-section", { autoAlpha: 1 });
        },
      },
    })
    .fromTo(
      ".latest-new-event-section h2",
      {
        y: 70,
      },
      {
        y: -50,
      }
    )
    .fromTo(
      ".latest-new-event-section .image",
      {
        y: 70,
      },
      {
        y: -50,
      },
      "<"
    )
    .fromTo(
      ".latest-new-event-section .content-container",
      {
        y: 80,
      },
      {
        y: -50,
      },
      "<"
    );

  gsap
    .timeline({
      scrollTrigger: {
        trigger: ".testimonials",
        start: isDesktop ? "-100%" : "-65%",
        end: "100%",
        scrub: 2,
        onEnter: () => {
          gsap.to(".testimonials .container", { autoAlpha: 1 });
        },
      },
    })
    .fromTo(
      ".testimonials h2",
      {
        y: 50,
      },
      {
        y: 0,
      }
    )
    .fromTo(
      ".testimonials .block__item",
      {
        y: 50,
      },
      {
        y: 0,
      },
      "<"
    )
    .fromTo(
      ".testimonials .view-all-testimonials",
      {
        y: 50,
      },
      {
        y: 0,
      },
      "<"
    );

  gsap
    .timeline({
      scrollTrigger: {
        trigger: ".collaborators-section",
        start: "-160%",
        end: "100%",
        scrub: 2,
        onEnter: () => {
          gsap.to(".collaborators-section .content-container", {
            autoAlpha: 1,
          });
        },
      },
    })
    .fromTo(
      ".collaborators-section .content-container",
      {
        y: 50,
      },
      {
        y: 0,
      }
    );
})(jQuery);
