gsap.registerPlugin(ScrollTrigger);

$(function () {
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
      start: "-150%",
      end: "100%",
      scrub: 2,
      onEnter: () => {
        gsap.to(".zero-waste-title", { opacity: 0.25 });
      },
    },
    y: -100,
  });
  gsap.to(".zero-waste-paragraph", {
    scrollTrigger: {
      trigger: ".zero-waste .block__item_wrapper-1",
      start: "-130%",
      end: "100%",
      scrub: 3,
      markers: true,
      onEnter: () => {
        gsap.to(".zero-waste-paragraph", { opacity: 1 });
      },
    },
    y: -100,
  });
});
