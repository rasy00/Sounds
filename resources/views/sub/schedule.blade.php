@extends("sub.layouts.master")

@section("konten")
<section class="schedule_section">
    <div class="date_lives_container">  
        <div class="date_lives_inner">
            <div class="date_lives">
                @for ($i = 1; $i <= 20; $i++)
                    <a class= "date_lives_item">Mon {{$i}}th</a>  
                @endfor
            </div>
        </div>
        <button class="gel gel_left forbidden">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0.5469 0.9375 33.06 37.13">
                <path d="M 33.6119 4.2562 L 28.5685 0.9375 L 0.5469 19.5 L 28.5969 38.0625 L 33.6119 34.7438 L 10.5769 19.5 L 33.6119 4.2562 Z" fill="white"/>
            </svg>
        </button>
        <button class="gel gel_right">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0.3602 0.9178 33.09 37.13">
                <path d="M.3602 34.7147 5.3973 38.0428 33.4534 19.5324 5.4379.9178.4168 4.2272 23.4234 19.5138.3602 34.7147Z" fill="white"/>
            </svg>
        </button>
    
    </div>

    <div class="time_lives_container">
        <span class="title_schedule">Schedules</span>
        <div class="time_live_inner">
            <span class="skip_to">Skip To :</span>
            <a href="#" class="time_live_item">On air</a>
            <a href="#" class="time_live_item">Early</a>
            <a href="#" class="time_live_item">Morning</a>
            <a href="#" class="time_live_item">Afternoon</a>
            <a href="#" class="time_live_item">Evening</a>
            <a href="#" class="time_live_item">Late</a>
        </div>
    </div>

    <div class="lives_container">
        <div class="lives_inner" id="early">
            <span class="info_inner">Early</span>
            <a class="live-item">
                <span class="time">00.00</span>
                <div class="cover_data">
                    <img src="../../assets/resources/photos/tos1.jpeg" width="200" height="200" alt="ww" srcset="../../assets/resources/photos/tos1.jpeg">
                    <div class="data_item">
                        <span class="judul_item">Leon Vynehall with Kenzie TTH</span>
                        <span class="summ_item">Leon Vynehall has new music in the mix and his collaborator Kenzie TTH in the studio</span>
                    </div>
                </div>
                
            </a>
        </div>
    </div>    
</section>
@endsection