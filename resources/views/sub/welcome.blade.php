@extends("sub.layouts.master")

@section("konten")

{{-- headline --}}
<section id="headline_slide" class="headline-slider"  data-bs-interval="4000" data-bs-pause='false' data-bs-touch="true">
    <div class="headline-slider-container">
        <div class="headline-slider-inner d-flex">
            @for ($i = 0; $i <= 3; $i++)
                <div class="headline-slider-item {{$i==1?'active':''}}" data-index = "{{$i==0?3:($i==1?0:($i==2?1:2))}}">
                    <div class="headline-slider-data">
                        <a href="#">
                            <div class="headline-item">
                                <img src="../assets/resources/photos/headline/background/{{$i + 1}}.png" alt="" class="background">
                                <div class="headline-data">
                                    <div class="cover">
                                       <img src="../assets/resources/photos/headline/{{$i + 1}}.png" alt="" class="content"> 
                                    </div>
                                    <div class="data">
                                        <span class="judul">Lorem Ipsum Dolor</span>
                                        <span class="summ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, esse consequuntur. Ipsam, earum hic? Aperiam harum ipsa ea error vitae maiores, aspernatur velit autem rem sint, atque accusamus. Saepe, in.</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="tumbnail-img">
                            <a href="/sounds#">
                                <button class="play">
                                    <i class="icofont-play-alt-1"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="btn-gel">
            <button class="gel gel-left" data-to="left"><i class="icofont-curved-left"></i></button>
            <button class="gel gel-right" data-to="right"><i class="icofont-curved-right"></i></button>
        </div>
    </div>

    <div class="headline-slider-indicators">    
        <button type="button" data-bs-target="#headline" data-index = "0" class="active" onclick="slideShow(0)" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#headline" data-index = "1" class="" onclick="slideShow(1)" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#headline" data-index = "2" class="" onclick="slideShow(2)" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#headline" data-index = "3" class="" onclick="slideShow(3)" aria-label="Slide 4"></button>
    </div>
  </section>
{{-- end headline --}}

{{-- live section --}}
<section class="live-section">
    <div class="info-section">
        <span class="judul-section">Schedules</span>
        <a class="see-more">View all Schedules ></a>
    </div>
    
    <div class="live-container">
        <div class="live-container-inner">
            @for ($i = 1; $i <=10; $i++)
                <div class="live-item {{$i === 2?"live-current":""}}">
                    <a href="">
                        <div class="cover-item">
                            <div class="duration-ui">
                                <img src="assets/resources/photos/tos{{$i>=8?$i+1:$i}}.jpeg" alt="" width="150" height="150" style="border-radius:50%">
                            </div>  
                            <div class="thumbnail-cover">
                                <button class="play">
                                    <i class="icofont-ui-play"></i>
                                </button>
                            </div>
                        </div>
                        <div class="data-item">
                            <span class="judul-live">Lorem Ipsum</span>
                            <span class="author-live">Dolor sit</span>
                        </div>
                    </a>
                    <span class="live-ic">Live</span>   
                </div>
            @endfor
        </div>
    </div>
        <div id="button-slide" class="btn-gel">
            <button class="gel gel-left" data-to="left"><i class="icofont-curved-left"></i></button>
            <button class="gel gel-right" data-to="right"><i class="icofont-curved-right"></i></button>
        </div>
    
</section>
{{-- end live section --}}

{{-- cover section --}}
<section class="cover-section">
    <div class="info-section">
        <span class="judul-section">Podcast Mixes</span>
        <a href="#" class="see-more">View more ></a> 
    </div>
    <div class="cover-container">
        
       @for ($i = 1; $i <= 10; $i++)
        <a href="#" class="cover-link">
           <div class="cover-item">
            <div class="cover"> 
                <img src="../assets/resources/photos/cover/{{$i}}.jpg" alt="">
            </div>
            <div class="thumbnail-cover">
                <button class="play">
                    <i class="icofont-ui-play"></i>
                </button>
            </div>
            <div class="data">
                <span class="judul">Lorem ipsum dolor sit amet.</span>
                <span class="summ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque sequi minus ex ...hic.</span>
            </div>
          </div> 
        </a>  
       @endfor
    </div>    
</section>
{{-- end cover section --}}

{{-- program section --}}
<section class="program-section">
    <div class="info-section">
        <span class="judul-section">Programs</span>
        <a href="#" class="see-more">More programs ></a>
    </div>
    <div class="program-container">
        @for ($i = 1; $i <=10; $i++)
        <a href="#" class="program-link">
            <div class="program-item">
            <div class="cover">
                <img src="../assets/resources/photos/tos{{$i==1?"":($i>=8?$i+1:$i-1)}}.jpeg" alt="">
            </div>
            <div class="thumbnail-cover">
                <button class="play">
                    <i class="icofont-ui-play"></i>
                </button>
            </div>
            <div class="data">
                <span class="judul">Lorem ipsum dolor sit amet.</span>
                <span class="summ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat similique adipisci ...aecati!</span>
                <span class="episodes">24 episodes <svg width="15" height="9" viewBox="0 0 15 9" xmlns="http://www.w3.org/2000/svg" fill="white">
                    <path d="M0 0V8.82142H1.2218V0H0ZM2.4812 0V8.82142H3.703V0H2.4812ZM8.30827 6.64084V2.18058L12.3684 4.41071L8.30827 6.64084ZM6.297 1.15637H13.6654V7.66504H6.297V1.15637ZM4.96241 8.82142H15V0H4.96241V8.82142Z" fill="white"/>
                    </svg>
                </span>
            </div>
        </div>
        </a>
        @endfor
        
    </div>
</section>
{{-- end program section --}}

{{-- category section --}}
<section class="categories-section">
    <div class="info-section">
        <span class="judul-section">Categories</span>
        <a href="#" class="see-more">More categories ></a>
    </div>
    <div class="categories-container">
        @for ($i = 1; $i <=10 ; $i++)
            <a href="#" class="category-link">
                <div class="category-item">
                    <div class="cover"> 
                        <img src="../assets/resources/photos/categories/{{$i}}.jpg" >
                    </div>
                    <div class="category-data">
                        <span class="category-name">Lorem Ipsum</span>
                    </div>
                </div>
            </a>
        @endfor
    </div>
</section>
{{-- end category section --}}

@endsection

