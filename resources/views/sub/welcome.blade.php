@extends("sub.layouts.master")

@section("konten")

{{-- headline --}}
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause='false' data-bs-touch="true">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="bg-dark active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" class="bg-dark" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" class="bg-dark" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" class="bg-dark" aria-label="Slide 4"></button>
      </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="carousel-data overlay">
            <img src="assets/resources/headline.png" class="d-block" alt="...">
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-data overlay">
            <img src="assets/resources/2.png" class="d-block" alt="...">
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-data overlay">
            <img src="assets/resources/headline.png" class="d-block" alt="...">
        </div>
      </div>
      <div class="carousel-item">
        <div class="carousel-data overlay">
            <img src="assets/resources/2.png" class="d-block" alt="...">
        </div>
      </div>
    </div>
  </div>
{{-- end headline --}}

@endsection

