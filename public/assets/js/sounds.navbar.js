// function for initial behavior your web
function initial() {
  if ($(window).innerWidth() < 1200) {
    $(".nav.menu").innerHeight("100vh");
    $("#search_nav").addClass("focused");
    if (!$(".nav.menu")[0].checked) $(".nav.menu")[0].style.display = "none";
  } else {
    $(".nav.menu").innerHeight("100%");
    $(".nav.menu")[0].style.display = "flex";
  }

  $(".navbar input[type='checkbox'").click(function () {
    if (!this.checked) {
      $(".nav.menu").css({ transform: "translateX(400px)", width: "0" });
      setTimeout(function () {
        $(".nav.menu").css("display", "none");
      }, 300);
    } else {
      this.nextElementSibling.style.display = "flex";
      setTimeout(function () {
        $(".nav.menu").css({ transform: "translateX(0)", width: "13em" });
      }, 100);
    }
  });
  // if you cliked the navbar items
  //   $("a.nav-link").click(function () {
  //     $("a.nav-link").removeClass("active");

  //     if (active != this) active = this;
  //     else {
  //       this.classList.add("active");
  //       active = null;
  //     }
  //     this.classList.toggle("active");
  //   });

  // if you scrolled the window
  $(window).scroll(function () {
    let h = $(window).scrollTop();
    if (h > 45) $("nav").addClass("scrolled");
    if (h <= 45) $("nav").removeClass("scrolled");
  });
}

$(document).ready(function () {
  initial();
  $(window).resize(() => {
    initial();
  });

  $("label[for='search_nav'] > button").on("mouseup", function (ev) {
    const search = $(".nav-item > .search > input");
    const searchNav = $("#search_nav");

    if (!searchNav.hasClass("focused")) {
      searchNav.addClass("focused");
    } else {
      // go to urlphp
      $(location).prop(
        "href",
        `${
          window.location.protocol + "//" + window.location.host
        }/sounds/search/results?search_name=${search.eq(0).val()}`
      );

      // console.log($(location).host());
    }

    ev.preventDefault();
  });

  $(".nav-item > .search > input").on("keyup", function (ev) {
    const search = $(".nav-item > .search > input");
    if (ev.keyCode == 13) {
      $(location).prop(
        "href",
        `http://localhost:8000/sounds/search/results?search_name=${search
          .eq(0)
          .val()}`
      );
    }
  });

  $("body").on("mouseup", function (ev) {
    const search = $(".search");
    const limit = [
      search[0].children[0],
      search[0].children[1],
      search[0].children[1].children[0],
      search[0].children[1].children[0].children[0],
      search[0].children[1].children[0].children[0].children[0],
    ];

    if (!limit.includes(ev.target)) {
      if (!($(window).innerWidth() < 1200)) {
        $("#search_nav").removeClass("focused");
      }
    }
  });
});
