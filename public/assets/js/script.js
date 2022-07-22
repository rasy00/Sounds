$(document).ready(function () {
    /* tombol slider ev */
    const slideLeft = $(".container-scroll > .button-slide > *.slide-left");
    const slideRight = $(".container-scroll > .button-slide > *.slide-right");
    $(".container-scroll > .container-content").on("scroll", (ev) => {
        if (ev.target.scrollLeft === ev.target.scrollLeftMax) {
            slideRight.attr("disabled", "");
        } else if (ev.target.scrollLeft === 0) {
            slideLeft.attr("disabled", "");
        } else {
            $(".container-scroll > .button-slide > *").removeAttr("disabled");
        }
    });

    slideRight.on("click", (ev) => {
        let newLeft =
            ev.target.offsetParent.offsetParent.previousElementSibling
                .scrollLeft + 227;

        $(".container-scroll > .container-content").animate(
            {
                scrollLeft: newLeft,
            },
            500,
            "swing"
        );

        ev.preventDefault();
    });
    slideLeft.on("click", (ev) => {
        let newLeft =
            ev.target.offsetParent.offsetParent.previousElementSibling
                .scrollLeft - 227;

        $(".container-scroll > .container-content").animate(
            {
                scrollLeft: newLeft,
            },
            500,
            "swing"
        );
        ev.preventDefault();
    });
    /* end tombol slider ev */
});
