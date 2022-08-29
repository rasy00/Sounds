@extends("sub.layouts.master")

@section('konten')
<section class="headline">
    <div class="headline-container">
        <div class="headline-text">
            <span class="judul">MG Radio Network</span>
            <span class="summ">Berkomitmen dalam terus memberikan inspirasi dan membuka wawasan seluruh lapisan masyarakat, MG Radio Network lahir sebagai pionir radio yang membawa nafas TV berita nasional pertama di Indonesia dalam bentuk audio dengan pengemasan konten news yang lebih light dan friendly.</span>
        </div>
        <div class="headline-cover">
            <img src="../../assets/resources/photos/tos8.png" alt="MG Radio Network" srcset="../../assets/resources/photos/tos8.png">
        </div>
    </div>
    <div class="info-section">
        <span class="judul-section">Episodes <span class="available">(12 Available)</span></span>
        <div class="grid-option-container">
            <button class="grid-list active">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                    <path d="M2 17.6667H25M1 1H26V26H1V1ZM8 2.19048V24.8095V2.19048ZM2 9.33333H25H2Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="grid-3-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 25 25" fill="none">
                    <rect width="7.14271" height="7.14294" fill="black"/>
                    <rect x="8.92798" width="7.14271" height="7.14294" fill="black"/>
                    <rect x="17.8574" width="7.14271" height="7.14294" fill="black"/>
                    <rect x="17.8574" y="8.92871" width="7.14271" height="7.14294" fill="black"/>
                    <rect x="8.92798" y="8.92871" width="7.14271" height="7.14294" fill="black"/>
                    <rect y="8.92883" width="7.14271" height="7.14294" fill="black"/>
                    <rect y="17.8571" width="7.14271" height="7.14294" fill="black"/>
                    <rect x="8.92798" y="17.8569" width="7.14271" height="7.14294" fill="black"/>
                    <rect x="17.8574" y="17.8569" width="7.14271" height="7.14294" fill="black"/>
                </svg>
            </button>
            <button class="grid-4-card">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="27" viewBox="0 0 32 24" fill="none">
                    <rect width="7.14" height="7.14281" fill="black"/>
                    <rect y="9" width="7.14" height="7.14281" fill="black"/>
                    <rect y="18" width="7.14" height="7.14281" fill="black"/>
                    <rect x="8" width="7.14" height="7.14281" fill="black"/>
                    <rect x="8" y="9" width="7.14" height="7.14281" fill="black"/>
                    <rect x="8" y="18" width="7.14" height="7.14281" fill="black"/>
                    <rect x="16" width="7.14" height="7.14281" fill="black"/>
                    <rect x="16" y="9" width="7.14" height="7.14281" fill="black"/>
                    <rect x="16" y="18" width="7.14" height="7.14281" fill="black"/>
                    <rect x="24" width="7.14" height="7.14281" fill="black"/>
                    <rect x="24" y="9" width="7.14" height="7.14281" fill="black"/>
                    <rect x="24" y="18" width="7.14" height="7.14281" fill="black"/>
                </svg>
            </button>
        </div> 
    </div>
</section>
<section class="episodes-section">
    <div class="episodes-container grid-list">
        @for ($i = 1; $i <= 5; $i++)
            <a href="#" class="episode-item">
                <div class="cover">
                    <img src="../../assets/resources/photos/tos.jpeg" alt="jhsd" srcset="../../assets/resources/photos/tos.jpeg">
                </div>
                <div class="data">
                    <span class="judul">MG Radio Network</span>
                    <span class="summ">Setelah Jokowi Bertemu Zelensky dan Putin, What Next?</span>
                    <span class="duration-release">64 Min | 06 Jul 2022</span>
                </div>
            </a>
        @endfor
    </div>
    <div class="pagination">
        <button class="first-page"></button>
        <button class="previous-page"></button>
        <div class="another-page"></div>
        <button class="next-page"></button>
        <button class="last-page"></button>
    </div>
</section>
@endsection