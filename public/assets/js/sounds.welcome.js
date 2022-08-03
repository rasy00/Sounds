function slideShow(n) {
    // convert value
    switch (n) {
        case -1:
            n = 3;
            break;
        case -2:
            n = 2;
            break;
        case -3:
            n = 1;
            break;
        case -4:
            n = 0;
            break;

        case 4:
            n = 0;
            // slideLeft();
            break;
    }

    const items = $(".headline-slider-item");
    const indicators = $(".headline-slider-indicators > *");

    // slide
    slideTo(Number(getActive(indicators[0].offsetParent).dataset.index), n);

    // edit items
    items.removeClass("active");
    items.each(function () {
        if (Number(this.dataset.index) === n) {
            this.classList.add("active");
        }
    });

    // edit indicators
    indicators.removeClass("active");
    indicators.each(function () {
        if (Number(this.dataset.index) === n) {
            this.classList.add("active");
        }
    });

    // set prosessed hidden class
    $(".headline-slider-data > .tumbnail-img").removeClass("hidden");
    getActive(
        $(".headline-slider-inner")[0]
    ).lastElementChild.lastElementChild.classList.add("hidden");
}

function slideTo(from, to) {
    const range = to - from;

    if (from === 3 && to === 0) {
        slideRight(1, 0);
    } else if (from === 0 && to === 3) {
        slideLeft(1, 0);
    } else {
        if (range === 1) {
            slideRight(1, 0);
        } else if (range === -1) {
            slideLeft(1, 0);
        } else {
            if (range < -1) {
                slideLeft(Math.abs(range), 0);
            } else if (range > 1) {
                slideRight(range, 25);
            } else {
                console.log("Not valid range");                                         
            }
        }
    }
}


function slideRight(range, inter) {
    const headInner = $(".headline-slider-inner")[0];
    // animate slide
    headInner.style.transform = `translateX(-${45 * range - inter}%)`;
    headInner.addEventListener(
        "transitionend",
        (ev) => {
            for (let index = 1; index <= range; index++) {
                headInner.append(headInner.firstElementChild);
            }

            headInner.style.transition = "none";
            headInner.style.transform = `translateX(-22.78%)`;

            setTimeout(() => {
                headInner.style.transition = "transform 300ms ease-in-out";
            });
        },
        { once: true }
    );
}

$(".headline-slide-inner").on("transitionend",(ev)=>{
    
})

function getActive(parent) {
    for (let item of parent.children) {
        if (item.classList.contains("active")) {
            return item;
        }
    }
}

function slideLeft(range, inter) {
    const headInner = $(".headline-slider-inner")[0];
    // animate slide
    if(range === 1){
        headInner.style.transform = `translateX(${0}%)`;
    }else if(range >= 1){
        headInner.style.transform = `translateX(${22.78}%)`;
    }
    
        
    headInner.addEventListener(
        "transitionend",
        (event) => {
            for (let index = 1; index <= range; index++) {
                headInner.prepend(headInner.lastElementChild);
            }

            headInner.style.transition = "none";
            headInner.style.transform = `translateX(-22.78%)`;
            setTimeout(() => {
                headInner.style.transition = "transform 300ms ease-in-out";
            }, 300);
        },
        { once: true }
    );
}

function getTranslateX(element) {
    const style = window.getComputedStyle(element);
    const matrix = new WebKitCSSMatrix(style.transform);
    const widthEl = window.getComputedStyle(element).width;
    return (matrix.m41 / parseInt(widthEl)) * 100;
}

// get item yang active
function getIndex(parent) {
    for (let children of parent.children) {
        if (children.classList.contains("active")) {
            return children.dataset.index;
        }
    }
}

$(document).ready(function () {
    $(".btn-gel>*").click(function () {
        const headInner = $(".headline-slider-inner")[0];
        if (this.dataset.to === "right") {
            let to = Number(getActive(headInner).dataset.index) + 1;
            slideShow(to);
        } else {
            let to = Number(getActive(headInner).dataset.index) - 1;
            slideShow(to);
        }
    });

    $(window).resize(()=>{
        setWidthTumbnail();
    })
    setWidthTumbnail = ()=>{
        // set width tumbnail-img
        $(".headline-slider-data>a>img").each((i, element) => {
            const width = element.width;
            const tumbnail = element.parentElement.nextElementSibling;
            tumbnail.style.width = `${width}px`;
        });

        $(".headline-slider-data > a").mouseenter(function (ev) {
            const tumbnail = this.nextElementSibling;
            tumbnail.classList.remove("hidden");
        });

        $(".headline-slider-data > .tumbnail-img").mouseleave(function (ev) {
            this.classList.add("hidden");
        });
    }

    setWidthTumbnail();

    

    // auto slide
    let a = 1;
    function auto(){
        $(".btn-gel>*").click(function (){
            a++;
            if (a >= 4) {
                a = 0;
            }
        });
        setTimeout(() => {
            slideShow(a);
            a++;
        if (a >= 4) {
            a = 0;
        }
        return auto();
        
    }, 4000);
    }

    auto()
    
});
