gsap.registerPlugin(ScrollTrigger);

jQuery(document).ready(function ($) {
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
});
