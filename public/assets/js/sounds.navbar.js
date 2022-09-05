// function for initial behavior your web
function initial() {
    if ($(window).innerWidth() < 1200) {
        $(".nav.menu").innerHeight($("body")[0].offsetHeight);
        if(!$(".nav.menu")[0].checked)
        $(".nav.menu")[0].style.display = "none";
    } else {
        $(".nav.menu").innerHeight("100%");
        $(".nav.menu")[0].style.display = "flex";
    }

    $(".navbar input").click(function(){
        if(!this.checked){
            $(".nav.menu").css({'transform':'translateX(400px)','width':'0'});
            setTimeout(function(){
                $(".nav.menu").css('display','none');
            },300);
        }else{
            this.nextElementSibling.style.display = "flex";
            setTimeout(function(){
                $(".nav.menu").css({'transform':'translateX(0)','width':'13em'});
            },100);
        }
    })
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
