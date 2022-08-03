// if document loaded
$(document).ready(function () {
    // function mendapatkan menit
    function getMinutes(t) {
        let min = parseInt(parseInt(t) / 60);
        let sec = parseInt(t % 60);
        if (sec < 10) {
            sec = "0" + sec;
        }
        if (min < 10) {
            min = "0" + min;
        }
        return min + ":" + sec;
    }

    // function if you hover the span volume
    function volumeLineControl(target) {
        target.mouseenter((ev) => {
            let count = 0;
            let value = ev.target.dataset.volLevel;
            target.removeClass("hover");
            target.removeClass("active-whitin");

            while (target[count]) {
                target[count].classList.add("active-whitin");
                ev.target.classList.add("hover");

                if (target[count] == ev.target) {
                    break;
                }
                count++;
            }
            $("#indicatorVol")[0].innerHTML = value;
        });

        // jika ada volume line yang di klik
        $(
            ".audio-controller > .right > #volume-controller > .volume-bar"
        ).click(() => {
            let count = 0;

            target.removeClass("active");
            while (target[count]) {
                if (target[count].classList.contains("hover")) {
                    target[count].classList.add("active");

                    break;
                }
                count++;
            }
        });

        $(".audio-controller > .right > #volume-controller").mouseleave(() => {
            checkingActive(target);
        });
    }

    // function untuk mengecek element yang aktif
    function checkingActive(target) {
        let count = 0;
        let value;

        // checking element active
        while (target[count]) {
            if (target[count].classList.contains("active")) {
                let active = target[count];
                target.removeClass("hover");
                target.removeClass("active-whitin");

                let countin = 0;
                while (target[countin]) {
                    target[countin].classList.add("active-whitin");

                    if (target[countin] == active) {
                        target[countin].classList.add("hover");
                        value = target[count].dataset.volLevel;

                        // mengubah indikator volume
                        $("#indicatorVol")[0].innerHTML = value;
                        break;
                    }
                    countin++;
                }

                break;
            }
            count++;
        }
    }

    // function jika btn back/forward interval diclick
    function trackIntervalControl(target) {
        if (target.length !== 0) {
            const backIntervalBtn = target[2];
            const forwardIntervalBtn = target[3];
            console.log(target);
            backIntervalBtn.addEventListener("mouseup", (ev) => {
                ev.target.classList.add("rotateLeft");
                setTimeout(() => {
                    ev.target.classList.remove("rotateLeft");
                }, 700);

                setTimeout(() => {
                    //tambahkan action dibawah ini jika back interval diklik
                    $("audio")[0].currentTime -= 10;
                    if (!$("audio")[0].isPlayed) {
                        $("audio")[0].pause();
                        $("audio")[0].isPlayed = true;
                        $(
                            ".duration-notation > #currentTime"
                        )[0].parentNode.classList.remove("hidden");
                    }
                }, 500);

                onTimeUpdate();
            });

            forwardIntervalBtn.addEventListener("mouseup", (ev) => {
                ev.target.classList.add("rotateRight");
                setTimeout(() => {
                    ev.target.classList.remove("rotateRight");
                }, 700);

                setTimeout(() => {
                    //tambahkan action dibawah ini jika forward interval diklik
                    $("audio")[0].currentTime += 10;
                    if (!$("audio")[0].isPlayed) {
                        $("audio")[0].pause();
                        $("audio")[0].isPlayed = true;
                        $(
                            ".duration-notation > #currentTime"
                        )[0].parentNode.classList.remove("hidden");
                    }
                }, 500);

                onTimeUpdate();
            });

            $(".audio-controller > .left > div").on("click", () => {
                const modal = $(".audio-player .playback-setting-modal");
                modal.toggleClass("hidden");
            });
        }
    }

    // setBarProgress
    function setBarProgress() {
        let progress =
            ($("audio")[0].currentTime / $("audio")[0].duration) * 100;
        $(".p-bar .p-point")[0].style.left = "calc(" + progress + "% - 2px";
        $(".p-bar .progress")[0].style.width = progress + "%";
    }

    //function bar progress di click atau di hover

    function addBarProgresEv() {
        let durationB;
        const bubbleGo = $("#goto")[0];
        $(".p-bar.no-progress").on("mousemove", (ev) => {
            let progress =
                ev.originalEvent.layerX / ev.delegateTarget.offsetWidth +
                0.0012422361;
            let left =
                (ev.originalEvent.layerX / ev.delegateTarget.offsetWidth) *
                    100 +
                0.01;
            durationB = Number($("audio")[0].duration * progress).toFixed(6);

            bubbleGo.innerHTML = getMinutes(durationB);

            bubbleGo.style.left = "calc(" + left + "% - 2em";
            bubbleGo.classList.remove("hidden");
        });
        $(".p-bar.no-progress").click(() => {
            let newCurrent = durationB;
            // tambahkan action saat progress bar di click
            $("audio")[0].currentTime = Number(newCurrent);
            if (!$("audio")[0].isPlayed) {
                $("audio")[0].pause();
                $("audio")[0].isPlayed = true;
                $(
                    ".duration-notation > #currentTime"
                )[0].parentNode.classList.remove("hidden");
            }
        });

        $(".p-bar.no-progress").on("mouseleave", (ev) => {
            bubbleGo.classList.add("hidden");
        });
    }

    // onTimeUpdate
    function onTimeUpdate() {
        let t = $("audio")[0].currentTime;

        // update currentTime
        $(".duration-notation > #currentTime")[0].innerHTML = getMinutes(t);

        t = $("audio")[0].duration - t;
        // update sisa duration
        $(".duration-notation > #duration")[0].innerHTML = getMinutes(t);
        setBarProgress();

        // jika end audio
        if (
            $("audio")[0].ended &&
            $("#playBtn > *").filter(".active")[0].dataset.playerState ==
                "pause"
        ) {
            togglePlayPause();
            //   document.querySelector('#icon-play').style.display = 'block';
            //   document.querySelector('#icon-pause').style.display = 'none';
            //   this.pauseToPlay(this.indexAudio);
            //    if (this.indexAudio < listAudio.length-1) {
            //     var index = parseInt(this.indexAudio)+1 this.loadNewTrack(index);
            //   }
            // }
        }
    }

    // function toggle play / pause
    function addTogglePlayPause() {
        let playerState;

        $("#playBtn").click(() => {
            togglePlayPause();

            playerState =
                $("#playBtn > *").filter(".hidden")[0].dataset.playerState;

            // lakukan sesuatu jika state tertentu
            if (playerState === "play") {
                // jika state play
                $("audio")[0].play();
                $("audio")[0].isPlayed = true;
                $(
                    ".duration-notation > #currentTime"
                )[0].parentNode.classList.remove("hidden");
            } else if (playerState === "pause") {
                // jika state pause
                $("audio")[0].pause();
            }
        });
    }

    function togglePlayPause() {
        const uiplay = $("#playBtn > *")[0];
        const uipause = $("#playBtn > *")[1];
        // toggle class hidden
        uiplay.classList.toggle("hidden");
        uipause.classList.toggle("hidden");
        // toggle class active
        uiplay.classList.toggle("active");
        uipause.classList.toggle("active");
    }

    volumeLineControl(
        $(
            ".audio-controller > .right > #volume-controller > .volume-bar > .volume-line"
        )
    );
    trackIntervalControl($(".audio-controller > .center > button"));
    addBarProgresEv();
    addTogglePlayPause();

    // const judulRuleMargin = $(".judul-rule")[0].style.margin;

    // if ($(window).innerWidth() <= 700) {
    //     $("button#share_btn").addClass("hidden");
    //     $(".judul-rule")[0].style.margin = "5px 0px 15px 9.2em";
    //     $(".detail-item.fg-2 > div")[0].style.textAlign = "center";
    //     $(".detail-item.fg-2 > div").removeClass(["ms-5", "ps-2"]);
    // }else{

    // }
});
