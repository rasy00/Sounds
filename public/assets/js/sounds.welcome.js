const headInner = $(".headline-slider-inner")[0];

// declarate methode to headInner OBJ
headInner.slideTo = function(from, to) {
    const range = to - from;

    if (from === 3 && to === 0) {
        this.slideRight(1, 0);
    } else if (from === 0 && to === 3) {
        this.slideLeft(1, 0);
    } else {
        if (range === 1) {
            this.slideRight(1, 0);
        } else if (range === -1) {
            this.slideLeft(1, 0);
        } else {
            if (range < -1) {
                this.slideLeft(Math.abs(range), 0);
            } else if (range > 1) {
                this.slideRight(range, 25);
            } else {
                console.log("Not valid range");                                         
            }
        }
    }
}

headInner.slideRight = function(range, inter) {
    // animate slide
    this.style.transform = `translateX(-${45 * range - inter}%)`;
    this.addEventListener(
        "transitionend",
        (ev) => {
            for (let index = 1; index <= range; index++) {
                this.append(this.firstElementChild);
            }

            this.style.transition = "none";
            this.style.transform = `translateX(-22.78%)`;

            setTimeout(() => {
                this.style.transition = "transform 300ms ease-in-out";
            });
        },
        { once: true }
    );
}

headInner.slideLeft =function(range, inter) {
    // animate slide
    if(range === 1){
        this.style.transform = `translateX(${0}%)`;
    }else if(range >= 1){
        this.style.transform = `translateX(${22.78}%)`;
    }
    
        
    this.addEventListener(
        "transitionend",
        (event) => {
            for (let index = 1; index <= range; index++) {
                this.prepend(this.lastElementChild);  
            }

            this.style.transition = "none";
            this.style.transform = `translateX(-22.78%)`;
            setTimeout(() => {
                this.style.transition = "transform 300ms ease-in-out";
            }, 300);
        },
        { once: true }
    );
} 

headInner.slideCurrent = 1;
headInner.auto = function (interval){
    $(".headline-slider-container>.btn-gel>*").click(function (){
        this.slideCurrent++;
        if (this.slideCurrent >= 4) {
            this.slideCurrent = 0;
        }
    });
    setTimeout(() => {
        slideShow(this.slideCurrent);
        this.slideCurrent++;
    if (this.slideCurrent >= 4) {
        this.slideCurrent = 0;
    }
    return this.auto(4000);
    
}, interval);
}

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
    headInner.slideTo(Number(getActive(indicators[0].offsetParent).dataset.index), n);

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




function getActive(parent) {
    for (let item of parent.children) {
        if (item.classList.contains("active")) {
            return item;
        }
    }
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
    $(".headline-slider-container>.btn-gel>*").click(function () {
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
        setHeightBtnGel($(".live-section > .btn-gel")[0]);
        setHeightBtnGel($(".headline-slider-container > .btn-gel")[0])
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

   setHeightBtnGel = function(element){
        const heightParent = element.parentElement.offsetHeight;
        for (const children of element.children) {
            children.style.height = `${heightParent}px`;
        }
        
        element.style.margin= `-${heightParent}px 0 0 0`;
    }

    setHeightBtnGel($(".live-section > .btn-gel")[0]);

    

    // auto slide
    headInner.auto(4000);
    
});
