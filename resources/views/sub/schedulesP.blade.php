@extends("sub.layouts.master")

@section('konten')
    <section class="schedule-section">
        <div class="info-section">
            <span class="judul-section">Programs</span>
        </div>
        <div class="schedule-container">
            @for ($i = 1; $i <= 5; $i++)
               <a href="#" class="schedule-item">
                    <div class="cover">
                        <div class="photo">
                            <span class="number">{{$i}}</span>
                        </div>
                    </div>
                    <div class="data">
                        <span class="judul">Podcast Bla Bla</span>
                        <span class="host">Nisoy Maharanoy</span>
                        <span class="view">View Schedules 
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M21.375 23.25H2.625C2.12787 23.2495 1.65125 23.0518 1.29972 22.7003C0.9482 22.3488 0.750496 21.8721 0.75 21.375V7.3125C0.750496 6.81537 0.9482 6.33875 1.29972 5.98722C1.65125 5.6357 2.12787 5.438 2.625 5.4375H7.93781C8.34338 5.43831 8.73788 5.56981 9.06281 5.8125L12.3122 8.25H21.375C21.8721 8.2505 22.3488 8.4482 22.7003 8.79972C23.0518 9.15125 23.2495 9.62787 23.25 10.125V21.375C23.2495 21.8721 23.0518 22.3488 22.7003 22.7003C22.3488 23.0518 21.8721 23.2495 21.375 23.25ZM7.93688 7.3125H2.62313L2.625 21.375H21.375V10.125H11.6869L7.93688 7.3125ZM23.25 5.4375H13.5619L9.81188 2.625H2.625V0.75H9.81281C10.2184 0.750806 10.6129 0.882307 10.9378 1.125L14.1872 3.5625H23.25V5.4375Z" fill="white"/>
                            </svg>
                        </span>
                    </div>
                </a> 
            @endfor
            
            
        </div>
    </section>
<script>

    const stylesheet = document.styleSheets[5];
    const photoRule = [...stylesheet.cssRules].find((r) => r.selectorText === ".photo");

    function random(min,max) {
        const num = Math.floor(Math.random()*(max-min)) + min;
        return num;
    }

    console.log(stylesheet)

    function randomColor() {
        return `rgb(${random(0, 255)}, ${random(0, 255)}, ${random(0, 255)})`;
    }

    photoRule.style.setProperty('height', `${document.getElementsByClassName("photo").item(0).clientWidth}px`);
    console.log(document.getElementsByClassName("photo").item(0).clientWidth)
    console.log(document.getElementsByClassName("photo").item(0).clientHeight)
</script>
@endsection