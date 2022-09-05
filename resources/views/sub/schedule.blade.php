@extends("sub.layouts.master")

@section("konten")
<section class="schedule_section">
    <div class="date_lives_container">
        <div class="button_gel_group">
            <button class="btn gel_left"></button>
            <button class="btn gel_right"></button>
        </div>
        <div class="date_lives_inner">
            <span class="date_lives_item">Mon 4th</span>
        </div>
    </div>

    <div class="time_lives_container">
        <span class="title_schedule">Schedules</span>
        <div class="time_live_inner">
            <span class="skip_to">Skip To :</span>
            <span class="time_live_inner">Early</span>
            <span class="time_live_inner">Morning</span>
            <span class="time_live_inner">Afternoon</span>
            <span class="time_live_inner">Evening</span>
            <span class="time_live_inner">Late</span>
        </div>
    </div>

    <div class="lives_container">
        <div class="lives_inner" id="early">
            <span class="info_inner">Early</span>
            <div class="live-item">
                <div class="cover_time">
                    <span class="time">00.00</span>
                    <img src="../../assets/resources/photos/tos1.jpeg" alt="ww" srcset="../../assets/resources/photos/tos1.jpeg">
                </div>
                <div class="data_item">
                    <span class="judul_item">Leon Vynehall with Kenzie TTH</span>
                    <span class="summ_item">Leon Vynehall has new music in the mix and his collaborator Kenzie TTH in the studio.</span>
                </div>
            </div>
        </div>
    </div>    
</section>
@endsection