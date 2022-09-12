function initials(){
    if($(window).width() <= 360){
        $('.cover_data > img').addClass("hidden");
        $('.cover_data > .data_item > .host').addClass("hidden");
        $(".gel").css('height',`${$(".date_lives_container").height()}px`);
    }else{
        $(".gel").height($(".gel").offsetParent().height());
        $('.cover_data > img').removeClass("hidden");
        $('.cover_data > .data_item > .host').removeClass("hidden");
    }
}
$(document).ready(function(){
    initials();
    $(".gel").click(function(ev){
        let scroll = $(".date_lives_inner").scrollLeft();
        let scrollPM = $(".date_lives").width();
        if(this.classList.contains("gel_left")){
            if($(window).width() <= 360){
                scroll -= 10 / 100 * scrollPM; 
            }else{
               scroll -= 20 / 100 * scrollPM; 
            } 
        }else if(this.classList.contains("gel_right")){
            if($(window).width() <= 360){
                scroll += 10 / 100 * scrollPM; 
            }else{
               scroll += 20 / 100 * scrollPM; 
            } 
        } 
        
        $(".date_lives_inner").animate({
            scrollLeft:scroll
        },600,"swing");

        // console.log(`scroll : ${scroll}`);
        // console.log(`scrollPM : ${scrollPM}`);
        if($(window).width() <= 360){
            if(scroll >= (scrollPM - ((20 / 100) * scrollPM))){
                $(".gel_right").addClass("forbidden");
            }else if(scroll <= 0){
                $(".gel_left").addClass("forbidden");
            }else{
                $(".gel").removeClass("forbidden");
            }

        }else if($(window).width() <= 1200){
            if(scroll >= (scrollPM - ((40 / 100) * scrollPM))){
                $(".gel_right").addClass("forbidden");
            }else if(scroll <= 0){
                $(".gel_left").addClass("forbidden");
            }else{
                $(".gel").removeClass("forbidden");
            }
        }else{
            if(scroll >= (scrollPM - ((50 / 100) * scrollPM))){
                $(".gel_right").addClass("forbidden");
            }else if(scroll <= 0){
                $(".gel_left").addClass("forbidden");
            }else{
                $(".gel").removeClass("forbidden");
            }
        }
       
    });
});