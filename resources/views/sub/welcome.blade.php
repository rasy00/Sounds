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
                            <img src="assets/resources/photod/headline/{{$i+1}}.png" class="d-block" alt="...">
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
                                <img src="assets/resources/photod/tod{{$i==7?$i+6:$i + 2}}.jpeg" alt="" width="150" height="150" style="border-radius:50%">
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
        <a class="see-more">View more ></a> 
    </div>
    <div class="cover-container">
       @for ($i = 1; $i <= 10; $i++)
           <div class="cover-item">
            <div class="cover"> 
                <img src="../assets/resources/photod/cover/{{$i}}.jpg" alt="">
            </div>
            <div class="data">
                <span class="judul">Lorem ipsum dolor sit amet.</span>
                <span class="summ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque sequi minus ex ...hic.</span>
            </div>
          </div> 
       @endfor
    </div>    
</section>
{{-- end cover section --}}

@endsection

