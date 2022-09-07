function initial(){
    $(".gel").height($(".gel").offsetParent().height());
}
$(document).ready(function(){
    $(".gel").click(function(ev){
        let scroll = $(".date_lives_inner").scrollLeft();
        let scrollPM = $(".date_lives").width();
        if(this.classList.contains("gel_left")){
            scroll -= 20 / 100 * scrollPM;
        }else if(this.classList.contains("gel_right")){
            scroll += 20 / 100 * scrollPM;
        } 
        
        $(".date_lives_inner").animate({
            scrollLeft:scroll
        },600,"swing");

        // console.log(`scroll : ${scroll}`);
        // console.log(`scrollPM : ${scrollPM}`);
        if(scroll >= (scrollPM - ((30 / 100) * scrollPM))){
            $(".gel_right").addClass("forbidden");
        }else if(scroll <= 0){
            $(".gel_left").addClass("forbidden");
        }else{
            $(".gel").removeClass("forbidden");
        }
    })
});