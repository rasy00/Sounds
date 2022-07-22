@extends("sub.layouts.master")

@section("konten")
      {{-- section audio-player  --}}
      <section class="audio-player">
        <audio autoplay hidden ontimeupdate="onTimeUpdate()">
           {{-- <source src="horse.ogg" type="audio/ogg" />  --}}
          <source src="../assets/resources/coba.mp3" type="audio/mpeg" />
          Your browser does not support the audio element.
        </audio>
        <div class="background"></div>
        <div class="hero-space detail d-flex">
          <div class="space mx-4"></div>
          <div class="detail-item fg-1">
            <img class="float-end" src="https://ichef.bbci.co.uk/images/ic/320x320/p0cjyr4p.jpg" alt="" />
          </div>
          <div class="detail-item fg-2">
            <div class="my-3 ms-5 ps-2">
              <div class="judul">
                <a href="#" class="link-none fs-4 fw-semibold">Gangster</a>
              </div>
              <hr class="judul-rule" />
              <div class="descripsi">
                <span class="fs-5 d-inline-block">Gangster: The Story of Curtis Warren</span>
              </div>
              <p class="fs-6">Introducing Gangster: The Story of Curtis Warren</p>
            </div>

          </div><button class="share-btn position-absolute d-flex justify-content-center align-items-center" style="border-radius:50%; margin-left:95%; font-size:1.5em; width:1.8em;height:1.8em; border:1px solid transparent"><i class="icofont-share position-absolute"></i></button>
        </div>
        <div class="canva-player py-5 my-3">
          <div class="track-duration">
            <div class="p-bar no-progress">
              <div class="progress"><button class="p-point"></button></div>
              <div id="goto" class="hidden">00:00</div>
              <div class="hidden duration-notation d-flex justify-content-between" style="transition: all 300ms ease-in-out;">
                <span id="currentTime">00:00</span>
                <span id="duration">00:00</span>
              </div>
            </div>
          </div>
          <div class="audio-controller d-flex justify-content-between">
            <div class="right audio-controller-item d-flex align-items-center justify-content-start">
              <button id="volume-controller" class="d-flex flex-nowrap align-items-center">
                <i class="icofont-ui-volume"></i>
                <div class="volume-bar d-flex align-items-end">
                  <span class="volume-line active-whitin" data-vol-level="1"></span><span class="volume-line active-whitin" data-vol-level="2"></span><span class="volume-line active-whitin" data-vol-level="3"></span
                  ><span class="volume-line active-whitin" data-vol-level="4"></span><span class="volume-line hover active" data-vol-level="5"></span><span class="volume-line" data-vol-level="6"></span
                  ><span class="volume-line" data-vol-level="7"></span><span class="volume-line" data-vol-level="8"></span><span class="volume-line" data-vol-level="9"></span><span class="volume-line" data-vol-level="10"></span
                  ><span id="indicatorVol">5</span>
                </div>
              </button>
            </div>
            <div class="center d-flex audio-controller-item justify-content-evenly align-items-center">
              <button id="previousBtn">
                <svg width="52" height="52" viewBox="0 0 48 48" focusable="false">
                  <path
                    id="previousButtonChevron"
                    class="btn-audio"
                    d="M16.9954676,31.996911 L16.9954676,16.0004999 L18.495178,16.0004999 L18.495178,31.996911 L16.9954676,31.996911 Z M18.495178,23.9984555 L30.9927648,16 L30.9927648,20.0792123 L24.3585458,23.9984555 L30.9927648,27.9181986 L30.9927648,31.996911 L18.495178,23.9984555 Z"
                    focusable="false"
                  ></path>
                </svg>
              </button>
              <button id="nextBtn" class="od-4">
                <svg width="52" height="52" viewBox="0 0 48 48" focusable="false">
                  <path
                    id="nextButtonChevron"
                    class="btn-audio"
                    d="M29.5034828,32 L29.5034828,16 L31.0034828,16 L31.0034828,32 L29.5034828,32 Z M17.0034828,20.0803 L17.0034828,16.0003 L29.5034828,23.9998 L17.0034828,31.9998 L17.0034828,27.9203 L23.6399828,23.9998 L17.0034828,20.0803 Z"
                    focusable="false"
                  ></path>
                </svg>
              </button>
              <button id="backIntervalBtn" class="od-1">
                <svg width="52" height="52" viewBox="0 0 48 48" focusable="false">
                  <path
                    id="backInterval"
                    class="btn-audio"
                    d="M23.9785895,8.59327393 C23.926122,8.59327393 23.8224363,8.59327393 23.8224363,8.59327393 L22.3845769,8.5920247 L25.6962756,5.28657205 L23.9298697,3.52391381 L17.3039737,10.1348191 L23.9298697,16.7457244 L25.6962756,14.9830662 L22.4158075,11.7088442 L23.8224363,11.7113426 C23.8224363,11.7113426 23.926122,11.7100934 23.9785895,11.7100934 C31.9124254,11.7100934 38.3446914,18.1286179 38.3446914,26.0462138 C38.3446914,33.9638098 31.9124254,40.3823343 23.9785895,40.3823343 C16.0435044,40.3823343 9.61248769,33.9638098 9.61248769,26.0462138 C9.61248769,26.0299739 9.61498614,26.0149832 9.61498614,25.9987433 L6.49192052,25.9987433 C6.49192052,26.0149832 6.48942206,26.0299739 6.48942206,26.0462138 C6.48942206,35.6852436 14.3195722,43.4991538 23.9785895,43.4991538 C33.6376069,43.4991538 41.467757,35.6852436 41.467757,26.0462138 C41.467757,16.4071841 33.6376069,8.59327393 23.9785895,8.59327393"
                    focusable="false"
                  ></path>
                </svg>
                <span class="position-absolute notasi-interval" data-skip-duration="min 10">10</span>
              </button>
              <button id="forwardIntervalBtn" class="od-3">
                <svg width="52" height="52" viewBox="0 0 48 48" focusable="false">
                  <path
                    id="forwardInterval"
                    class="btn-audio"
                    d="M23.9911839,8.58201848 C24.043535,8.58201848 24.1469905,8.58201848 24.1469905,8.58201848 L25.5816575,8.58077203 L22.2773116,5.28265844 L24.0397956,3.52391381 L30.6509802,10.120141 L28.8872498,11.8801321 L24.0397956,16.7176146 L22.2773116,14.9576235 L25.5504962,11.6919177 L24.1469905,11.6931642 C24.1469905,11.6931642 24.043535,11.6919177 23.9911839,11.6919177 C16.0749635,11.6919177 9.656979,18.0961912 9.656979,25.9962078 C9.656979,33.8962244 16.073717,40.3004979 23.9911839,40.3004979 C31.9074044,40.3004979 38.3253889,33.8962244 38.3253889,25.9962078 C38.3253889,25.9800039 38.322896,25.9650465 38.322896,25.9488426 L41.4390275,25.9488426 C41.4390275,25.9650465 41.4415204,25.9800039 41.4415204,25.9962078 C41.4415204,35.6138361 33.6287555,43.4103971 23.9911839,43.4103971 C14.3536124,43.4103971 6.54084749,35.6138361 6.54084749,25.9962078 C6.54084749,16.3785795 14.3536124,8.58201848 23.9911839,8.58201848"
                    focusable="false"
                  ></path>
                </svg>
                <span class="position-absolute notasi-interval" data-skip-duration="plus 10">10</span>
              </button>
              <button id="playBtn" class="od-2 cs-pointer">
                <i class="icofont-play-alt-2 d-inline-block active" data-player-state="play"><i class="icofont-ui-play"></i></i>
                <div class="border-pause hidden" data-player-state="pause"><i class="icofont-ui-pause"></i></div>
              </button>
            </div>
            <div class="left audio-controller-item d-flex justify-content-end align-items-center">
              <div id="playbackSetting "><i class="icofont-gear"></i></div>
            </div>
          </div>
        </div>
        <div class="playback-setting-modal hidden">
          <div class="inner-container">
            <div class="header">Playback Setting</div>
            <div class="main d-flex px-3 justify-content-between">
              <div class="desc">
                <div class="fs-4">Autoplay</div>
                <div>Play next item automatically</div>
              </div>
              <div class="btn-auto-play">
                <label class="switch">
                  <input type="checkbox" />
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="triangle"></div>
        </div>
      </section>
      {{-- end section audio-player  --}}

       {{-- section description   --}}
      <section class="description-container">
        <div class="release-information"><span class="fw-bold">Released On:</span> 01 Juli 2022</span></div>
        <div class="shortdesc-information">The story of Curtis Warren - one of Britain's biggest and wealthiest drug barons.</div>
        <p class="more-episodes">More episodes </p>
        <div class="episodes-information container-scroll">
          <div class="episodes container-content">
            <ul>
             @for ($a = 0; $a < 11; $a++)
              <li>
                <a href="#" class="content">
                  <div class="content-item">
                    <div class="cover">
                      <div class="play-overlay">
                        <img src="https://ichef.bbci.co.uk/images/ic/320x320/p0cjyr4p.jpg" alt="">
                          <div class="bg-overlay">
                            <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" class="icon-overlay" aria-hidden="true" focusable="false">
                              <path d="M3 32l26-16L3 0z"></path>
                            </svg>
                          </div>
                      </div>
                    </div>
                    <div class="data">
                        <p class="judul">Gangstah</p>
                        <p class="summ">4. Perverted Therapy</p>
                        <p class="duration">30 mins</p>
                    </div>
                  </div>
                </a>
              </li>
             @endfor
            </ul>
          </div>
          <div class="button-slide">
            <button type="button" class="btn slide-left" disabled ><i class="icofont-curved-left"></i></button>
            <button type="button" class="btn slide-right"><i class="icofont-curved-right"></i></button>
          </div>
          <div class="gel gel-right"></div>
          <div class="gel gel-left"></div>
        </div>
      </section>
      {{-- end section description  --}}

      {{-- recommended section --}}
      <section class="recommended-container">
        <div class="header d-flex justify-content-between align-items-end">
            <h1>Recommended</h1>
            <a>more recomends</a>
        </div>
        <div class="recommended-list">
            <ul>
                @for ($a = 0; $a < 10; $a++)
                    <li class="recommended-item">
                        <a href="#" class="content">
                            <div class="content-item">
                                <div class="cover">
                                    <div class="play-overlay">
                                        <img src="https://ichef.bbci.co.uk/images/ic/320x320/p0cjyr4p.jpg" alt="">
                                        <div class="bg-overlay">

                                        </div>
                                    </div>
                                    </div>
                                <div class="data">
                                    <p class="judul">Gangstah</p>
                                    <p class="summ">30 episodes</p>

                                </div>
                            </div>
                        </a>
                    </li>
                @endfor


            </ul>
        </div>
      </section>
      {{-- end recommended section --}}
@endsection
