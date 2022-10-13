const headInner = $(".headline-slider-inner")[0];

headInner.slideCurrent = 0;

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
    this.slideCurrent = to;
}

headInner.slideRight = function(range, inter) {
    // animate slide
    if($("body").outerWidth() <=360){
        this.style.transform = `translateX(-${50.15 * range - inter}%)`;
    }else if($("body").outerWidth() <=1200){
        this.style.transform = `translateX(-${48.16 * range - inter}%)`;
    }else{
        this.style.transform = `translateX(-${45 * range - inter}%)`;
    }
    this.addEventListener(
        "transitionend",
        (ev) => {
            for (let index = 1; index <= range; index++) {
                this.append(this.firstElementChild);
            }

            this.style.transition = "none";
            if($("body").outerWidth() <=360){
                this.style.transform = `translateX(-25.3%)`;
            }else if($("body").outerWidth() <=1200){
                this.style.transform = `translateX(-24.08%)`;
            }else{
                this.style.transform = `translateX(-22.7%)`;
            }

            setTimeout(() => {
                this.style.transition = "transform 300ms ease-in-out";
            });
        },
        { once: true }
    );
}

headInner.slideLeft = function(range, inter) {
    // animate slide
    if(range === 1){
        this.style.transform = `translateX(${0}%)`;
    }else if(range >= 1){
        if($("body").outerWidth() <=360){
            this.style.transform = `translateX(-25.3%)`;
        }else if($("body").outerWidth() <=1200){
            this.style.transform = `translateX(-24.08%)`;
        }else{
            this.style.transform = `translateX(22.7%)`;
        }
    }
    
        
    this.addEventListener(
        "transitionend",
        (event) => {
            for (let index = 1; index <= range; index++) {
                this.prepend(this.lastElementChild);  
            }

            this.style.transition = "none";
            if($("body").outerWidth() <=360){
                this.style.transform = `translateX(-25.3%)`;
            }else if($("body").outerWidth() <=1200){
                this.style.transform = `translateX(-24.08%)`;
            }else{
                this.style.transform = `translateX(-22.7%)`;
            }
            
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
    return this.auto(interval);
    
}, interval);
}

headInner.addEventListener("touchstart",function(ev){
    const startPoint = ev.touches[0].clientX;
    console.log("startPoint : "+startPoint);
    this.addEventListener("touchend",function(event){
        console.log(event);
        if(startPoint > event.changedTouches[0].clientX){
            slideShow(headInner.slideCurrent + 1);
        }else if(startPoint < event.changedTouches[0].clientX){
            slideShow(headInner.slideCurrent - 1);
        }
    })
})

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
    $(".live-container-inner")[0].countSlide = 0;
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

    function setTumbnail(){
        // set width tumbnail-img
        $(".headline-slider-data>a").each((i, element) => {
            const width = element.offsetWidth;
            const height = element.offsetHeight;
            const tumbnail = element.nextElementSibling;
            tumbnail.style.width = `${width}px`;
            tumbnail.style.height = `${height}px`
            });

        $(".headline-slider-data > a").mouseenter(function (ev) {
            const tumbnail = this.nextElementSibling;
            tumbnail.classList.remove("hidden");
        });

        $(".headline-slider-data > .tumbnail-img").mouseleave(function (ev) {
            this.classList.add("hidden");
        });
    }

    function setHeightBtnGel(element){
        const heightParent = element.parentElement.offsetHeight;
        for (const children of element.children) {
            children.style.height = `${heightParent}px`;
        } 
        element.style.margin= `-${heightParent}px 0 0 0`;
    }

    setTumbnail();
    setHeightBtnGel($(".live-section > .btn-gel")[0]);
    setHeightBtnGel($(".headline-slider-container > .btn-gel")[0]);

    // auto slide
    // headInner.auto(4000);


    $(".live-container")[0].addEventListener("touchstart",function(event){
        const target = this;
        const startPoint = event.touches[0].clientX;
        console.log(event)
        translateMobile(target,startPoint);
        target.addEventListener("touchend",function(event){
            if(Math.abs(target.resultTranslate ) > 861){
                target.firstElementChild.style.transform = 'translateX(0)';
                
            }else{
               target.firstElementChild.style.transform = target.resultTranslate; 
            }
            
            
            event.preventDefault();
        },false);
        
    },false)

    function translateMobile(target, startPoint){
        target.addEventListener("touchmove",(event)=>{
            const touchEv = event.touches[0];
            if(startPoint < touchEv.clientX){
                console.log("nambah")
                target.resultTranslate = `translateX(${(getTranslateX(target.firstElementChild) / 100) * parseInt(window.getComputedStyle(target.firstElementChild).width) + touchEv.clientX}px)`;
                
  
            }else if(startPoint > touchEv.clientX){ 
                console.log("kurang")
                target.resultTranslate = `translateX(${(getTranslateX(target.firstElementChild) / 100) * parseInt(window.getComputedStyle(target.firstElementChild).width) - touchEv.clientX}px)`;
            }
        });
    }



    // progress bar circle funtion
    function progress(initialState,range){
        setTimeout(() => {
        const el = $(".live-section > .live-container > .live-container-inner > .live-item:nth-child(2)>a>.cover-item>.duration-ui")[0];
        el.style.background = `conic-gradient(var(--normal)0deg,var(--normal)${initialState}deg,#CBCBCB ${initialState}deg,#CBCBCB 360deg)`;
        currentState = initialState + range;
        if(initialState === 360){
            return 0;
        }else{
            return progress(currentState,range);
        }
        
    }, 1000);
    }
    
   progress(0,5); 


    /* tombol slider ev */
    const slidebtn = $("#button-slide > *");
    slidebtn.attr('state',false);
    $(".live-container-inner").on("transitionend", function(){
        const widthbtn = slidebtn[0].offsetWidth * 2;
        let txValue = (getTranslateX(this) / 100) * parseInt(window.getComputedStyle(this).width);
        if(txValue < 0){
            slidebtn.attr('state',false);
            slidebtn[1].setAttribute('state',true);

        }else if(txValue >= 0){
            slidebtn.attr('state',false);
            slidebtn[0].setAttribute('state',true);
        }else{
            console.warn("not valid state")
            slidebtn.attr('state',true);
        }

        console.log(txValue);
    });

    


    slidebtn.click(function(ev){
        const live = $(".live-container-inner")[0];
        let widthItem = live.children[0].offsetWidth;
        let txValue = (getTranslateX(live) / 100) * parseInt(window.getComputedStyle(live).width);
        let txValueCurr;

        if($("body").outerWidth() <=360){
            txValueCurr = (widthItem +30) * 4;
        }else if($("body").outerWidth() <=1200){
            txValueCurr = (widthItem +30) * 5 - 99;
        }else{
            txValueCurr = (widthItem +30) * 3;
        }
        
        if(this.dataset.to === "right"){
            if(this.getAttribute('state') == 'false')
                txValue-=(txValueCurr);
            else
                txValue+=(txValueCurr);

            live.countSlide++;
            

        }else if(this.dataset.to === "left" ){
            if(this.getAttribute('state') == 'false')
                txValue+=(txValueCurr);
            else
                txValue-=(txValueCurr);
            
            live.countSlide--;
        }
        
        live.style.transform = `translateX(${txValue}px)`;
        
        ev.preventDefault();
    });

    

    $(window).resize(()=>{
        setTumbnail();
        setHeightBtnGel($(".live-section > .btn-gel")[0]);
        setHeightBtnGel($(".headline-slider-container > .btn-gel")[0]);
    })
});
