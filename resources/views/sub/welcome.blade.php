@extends("sub.layouts.master")

@section("konten")

{{-- headline --}}
<section id="headline_slide" class="headline-slider"  data-bs-interval="4000" data-bs-pause='false' data-bs-touch="true">
    <div class="headline-slider-indicators">
        <button type="button" data-bs-target="#headline" data-bs-slide-to="0" class="bg-light active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#headline" data-bs-slide-to="1" class="bg-light" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#headline" data-bs-slide-to="2" class="bg-light" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#headline" data-bs-slide-to="3" class="bg-light" aria-label="Slide 4"></button>
    </div>
    <div class="headline-slider-inner d-flex">
      <div class="headline-slider-item active">
        <div class="headline-slider-data overlay">
            <img src="assets/resources/tod.jpeg" class="d-block" alt="...">
        </div>
      </div>
      <div class="headline-slider-item">
        <div class="headline-slider-data overlay">
            <img src="assets/resources/tod1.jpeg" class="d-block" alt="...">
        </div>
      </div>
      <div class="headline-slider-item">
        <div class="headline-slider-data overlay">
            <img src="assets/resources/tod2.jpeg" class="d-block" alt="...">
        </div>
      </div>
      <div class="headline-slider-item">
        <div class="headline-slider-data overlay">
            <img src="assets/resources/tod3.jpeg" class="d-block" alt="...">
        </div>
      </div>
    </div>
  </section>

{{-- end headline --}}

@endsection

