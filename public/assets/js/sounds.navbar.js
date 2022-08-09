// function for initial behavior your web
function initial() {
    if ($(window).innerWidth() <= 850) {
        $(".nav.menu").innerHeight($("body")[0].offsetHeight);
    } else {
        $(".nav.menu").innerHeight("100%");
    }

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
});
