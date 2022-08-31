$(document).ready(function(){
    const gridOptionBtn = $('.grid-option-container > button');

    gridOptionBtn.each(function(){
        const btnActive = this.classList.contains('active') === true ? this : undefined;
        gridOptionBtn.btnActive = btnActive;
    });

    gridOptionBtn.on('mouseleave',function(){
        gridOptionBtn.removeClass('hover');
        $(gridOptionBtn.btnActive).addClass('active');
    });

    gridOptionBtn.on('mouseenter',function(){
        gridOptionBtn.removeClass('active')
        $(this).addClass('hover');
    });

    gridOptionBtn.on('mouseup',function(){
        function setActive(element){
            $(element).addClass("active");
        }
        

        
        
        gridOptionBtn.removeClass("active");
        setActive(this);
        gridOptionBtn.btnActive = this; 
        const episodesContainer = $("section.episodes-section > .episodes-container");
        episodesContainer.removeClass("grid-3");
        episodesContainer.removeClass("grid-4");
        episodesContainer.removeClass("grid-list");
        if(this.dataset.grid === 'list'){
           episodesContainer.addClass("grid-list");
           $(".episode-item > .data > .duration-release").removeClass("hidden");
        }else if(this.dataset.grid ==="tColoumns"){
            episodesContainer.addClass("grid-3");
            $(".episode-item > .data > .duration-release").addClass("hidden");
        }else if(this.dataset.grid ==="fColoumns"){
            episodesContainer.addClass("grid-4");
            $(".episode-item > .data > .duration-release").addClass("hidden");
        }
    })
});