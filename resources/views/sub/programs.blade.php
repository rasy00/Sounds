@extends("sub.layouts.master")

@section('konten')
{{-- program section --}}
<section class="program-section">
    <div class="info-section">
        <span class="judul-section">Programs</span>
    </div>
    <div class="program-container">
        @for ($i = 1; $i <=10; $i++)
        <a href="/sounds/program/this" class="program-link">
            <div class="program-item">
            <div class="cover">
                <img src="../assets/resources/photos/tos{{$i==1?"":($i>=8?$i+1:$i-1)}}.jpeg" alt="">
                <span class="episodes">
                    <span>24 episodes</span>
                    <span><svg class="icon-episode"  viewBox="0 0 15 9" xmlns="http://www.w3.org/2000/svg" fill="white">
                    <path d="M0 0V8.82142H1.2218V0H0ZM2.4812 0V8.82142H3.703V0H2.4812ZM8.30827 6.64084V2.18058L12.3684 4.41071L8.30827 6.64084ZM6.297 1.15637H13.6654V7.66504H6.297V1.15637ZM4.96241 8.82142H15V0H4.96241V8.82142Z"
                    class= "icon-episode" fill="white"/>
                    </svg></span>
                </span>
            </div>
            <div class="thumbnail-cover">
                <button class="play">
                    <i class="icofont-ui-play"></i>
                </button>
            </div>
            <div class="data">
                <span class="judul">Lorem ipsum dolor sit amet.</span>
                <span class="summ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat similique adipisci ...aecati!</span>
            </div>
        </div>
        </a>
        @endfor
        
    </div>
</section>
{{-- end program section --}}
@endsection