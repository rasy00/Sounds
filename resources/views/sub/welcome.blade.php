@extends("sub.layouts.master")

@section("konten")

{{-- headline --}}
<section id="headline_slide" class="headline-slider"  data-bs-interval="4000" data-bs-pause='false' data-bs-touch="true">
    <div class="headline-slider-container">
        <div class="headline-slider-inner d-flex">
            <div class="headline-slider-item" data-index = "3">
                <div class="headline-slider-data">
                    <a href="#">
                        <img src="assets/resources/photod/tod.jpeg" class="d-block" alt="...">
                    </a>
                    <div class="tumbnail-img">
                        <button class="play">
                            <i class="icofont-ui-play"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="headline-slider-item active" data-index = "0">
                <div class="headline-slider-data">
                    <a href="#">
                        <img src="assets/resources/photod/tod1.jpeg" class="d-block" alt="...">
                    </a>
                    <div class="tumbnail-img hidden">
                        <button class="play">
                            <i class="icofont-ui-play"></i>
                        </button>
                    </div>

                </div>
            </div>
            <div class="headline-slider-item" data-index = "1">
                <div class="headline-slider-data">
                    <a href="#"><img src="assets/resources/photod/tod2.jpeg" class="d-block" alt="..."></a>
                    <div class="tumbnail-img">
                        <button class="play">
                            <i class="icofont-ui-play"></i>
                        </button>
                    </div>

                </div>
            </div>
            <div class="headline-slider-item" data-index = "2">
                <div class="headline-slider-data">
                     <a href="#"><img src="assets/resources/photod/tod3.jpeg" class="d-block" alt="..."></a>
                     <div class="tumbnail-img">
                        <button class="play">
                            <i class="icofont-ui-play"></i>
                        </button>
                    </div>

                </div>
            </div>
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
        <span class="see-more">View all Schedules ></span>
    </div>
    
    <div class="live-container">
        <div class="live-container-inner">
            @for ($i = 1; $i <=10; $i++)
                <div class="live-item">
                    <a href="">
                        <div class="cover-item">
                            <div class="duration-ui">
                                <img src="assets/resources/photod/tod{{$i==7?$i+6:$i + 2}}.jpeg" alt="" width="150" height="150" style="border-radius:50%">
                            </div>    
                        </div>
                        <div class="data-item">
                            <span class="judul-live">Lorem Ipsum</span>
                            <span class="auhtor-live">Dolor sit</span>
                        </div>
                    </a>
                </div>
            @endfor
        </div>
    </div>
      <div class="btn-gel">
            <button class="gel gel-left" data-to="left"><i class="icofont-curved-left"></i></button>
            <button class="gel gel-right" data-to="right"><i class="icofont-curved-right"></i></button>
        </div>
    
</section>
{{-- end live section --}}

@endsection

