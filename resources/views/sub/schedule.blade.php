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
        @for ($i = 0; $i <= 23; $i++)
            @php
            $count = 0;
                if($i <=6){
                    if($i <= 0){
                        echo('
                        <div class="lives_inner" id="early">
                            <span class="info_inner">Early</span>
                        ');
                    }
                    echo('
                        <div class="live-item">
                            <span class="time">'
                    );
                    
                    if($i < 10){
                        echo("0$i");
                    }else{
                        echo($i);
                    }

                    echo(':00
                            </span>
                            <a class="cover_data">
                                <img src="../../assets/resources/photos/tos1.jpeg" width="200" height="200" alt="ww" srcset="../../assets/resources/photos/tos1.jpeg">
                                <div class="gel_play"><i class="icofont-ui-play"></i></div>
                                <div class="data_item">
                                    <span class="judul_item">Kesetaraan Semangat Kebangsaan</span>
                                    <span class="host">Adian Radiatus</span>
                                    <span class="summ_item">Leon Vynehall has new music in the mix and his collaborator Kenzie TTH in the studio</span>
                                </div>
                            </a>
                        </div>
                    ');
                        

                    if($count == 6){
                        echo("</div>");
                    }
                    $count++;
                    
                }elseif($i <=11){
                    if($i <= 7){
                        echo('
                        <div class="lives_inner" id="morning">
                            <span class="info_inner">Morning</span>
                        ');
                    }
                    echo('
                        <div class="live-item">
                            <span class="time">'
                    );
                    
                    if($i < 10){
                        echo("0$i");
                    }else{
                        echo($i);
                    }

                    echo(':00
                            </span>
                            <a class="cover_data">
                                <img src="../../assets/resources/photos/tos1.jpeg" width="200" height="200" alt="ww" srcset="../../assets/resources/photos/tos1.jpeg">
                                <div class="gel_play"><i class="icofont-ui-play"></i></div>
                                <div class="data_item">
                                    <span class="judul_item">Kesetaraan Semangat Kebangsaan</span>
                                    <span class="host">Adian Radiatus</span>
                                    <span class="summ_item">Leon Vynehall has new music in the mix and his collaborator Kenzie TTH in the studio</span>
                                </div>
                            </a>
                        </div>
                    ');   

                    if($count == 11){
                        echo("</div>");
                    } 
                    $count++;
                }elseif($i <=17){
                    if($i <= 12){
                        echo('
                        <div class="lives_inner" id="afternoon">
                            <span class="info_inner">Afternoon</span>
                        ');
                    }
                    echo('
                        <div class="live-item">
                            <span class="time">'
                    );
                    
                    if($i < 10){
                        echo("0$i");
                    }else{
                        echo($i);
                    }

                    echo(':00
                            </span>
                            <a class="cover_data">
                                <img src="../../assets/resources/photos/tos1.jpeg" width="200" height="200" alt="ww" srcset="../../assets/resources/photos/tos1.jpeg">
                                <div class="gel_play"><i class="icofont-ui-play"></i></div>
                                <div class="data_item">
                                    <span class="judul_item">Kesetaraan Semangat Kebangsaan</span>
                                    <span class="host">Adian Radiatus</span>
                                    <span class="summ_item">Leon Vynehall has new music in the mix and his collaborator Kenzie TTH in the studio</span>
                                </div>
                            </a>
                        </div>
                    ');
                        

                    if($count == 17){
                        echo("</div>");
                    } 
                    $count++;
                }elseif($i <=23){
                    // logical for skip this count
                    if($i == 18 || $i == 20 || $i==21){
                        continue;
                    }


                    if($i <= 19){
                        echo('
                        <div class="lives_inner" id="evening">
                            <span class="info_inner">Evening</span>
                        ');
                    }

                    echo('
                        <div class="live-item">
                            <span class="time">'
                    );
                    
                    if($i < 10){
                        echo("0$i");
                    }else{
                        echo($i);
                    }

                    echo(':00
                            </span>
                            <a class="cover_data">
                                <img src="../../assets/resources/photos/tos1.jpeg" width="200" height="200" alt="ww" srcset="../../assets/resources/photos/tos1.jpeg">
                                <div class="gel_play"><i class="icofont-ui-play"></i></div>
                                <div class="data_item">
                                    <span class="judul_item">Kesetaraan Semangat Kebangsaan</span>
                                    <span class="host">Adian Radiatus</span>
                                    <span class="summ_item">Leon Vynehall has new music in the mix and his collaborator Kenzie TTH in the studio</span>
                                </div>
                            </a>
                        </div>
                    ');
                    if($count == 6){
                        echo("</div>");
                    }
                    $count++;
                }
            @endphp
        @endfor
        <div class="lives_inner" id="late">
            <span class="info_inner">Late</span>
            <div class="live-item">
                <span class="time">00:00</span>
                <a class="cover_data">
                    <img src="../../assets/resources/photos/tos1.jpeg" width="200" height="200" alt="ww" srcset="../../assets/resources/photos/tos1.jpeg">
                    <div class="gel_play"><i class="icofont-ui-play"></i></div>
                    <div class="data_item">
                        <span class="judul_item">Kesetaraan Semangat Kebangsaan</span>
                        <span class="host">Adian Radiatus</span>
                        <span class="summ_item">Leon Vynehall has new music in the mix and his collaborator Kenzie TTH in the studio</span>
                    </div>
                </a>
            </div>
        </div>
    </div>    
</section>
@endsection