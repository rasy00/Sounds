// declarate a function prototype for fakeScroll
(function(root, factory){
    var define = define || {};
    if( typeof define === 'function' && define.amd )
        define([], factory);
    else if( typeof exports === 'object' && typeof module === 'object' )
        module.exports = factory();
    else if(typeof exports === 'object')
        exports["FakeScroll"] = factory()
    else
        root.FakeScroll = factory()
  }(this, function(){
    raf = window.requestAnimationFrame || function(cb) { return window.setTimeout(cb, 1000 / 60) };

    function FakeScroll(targetElm, settings){
        if( !targetElm ) return;

        this.settings = Object.assign({}, this.defaults, settings || {})

        this.state = {}
        this.listeners = {}

        this.DOM = this.build(targetElm)
        this.events.binding.call(this, this.DOM)

        // run "moveBar" once
        setTimeout(this.events.callbacks.onScrollResize.bind(this))
    }

    FakeScroll.prototype = {
        defaults : {
            classname : "",
            track     : false // "smooth" will enable smooth scroll
        },

        /**
         * Build the DOM needed
         */
        build( targetElm ){
            var DOM = {};
                scopeHTML = `<div class="fakeScroll__wrap">
                                <div class="fakeScroll__content"></div>
                             </div>
                             <div class='fakeScroll__track ${this.settings.classname}'>
                                <div class="fakeScroll__bar">
                                    <div class="bt_con">
                                        <div class="hr_black_1">
                                            <div class="hr_black"></div>
                                            <div class="hr_black"></div>
                                        </div>
                                        <div class="hr_black_1">
                                            <div class="hr_black"></div>
                                            <div class="hr_black"></div>
                                        </div>
                                        
                                    </div>
                                </div>
                             </div>`,
                fragment = document.createDocumentFragment();

            // move all the children of the target element into a fragment
            while( targetElm.childNodes.length ){
                fragment.appendChild(targetElm.childNodes[0]);
            }

            targetElm.insertAdjacentHTML('afterbegin', scopeHTML);

            DOM.scope = targetElm;
            DOM.scrollWrap = targetElm.firstElementChild;
            DOM.scrollContent = DOM.scrollWrap.firstElementChild;
            DOM.scrollContent.appendChild(fragment);

            DOM.track = DOM.scrollWrap.nextElementSibling;
            DOM.bar = DOM.track.firstElementChild;

            DOM.scope.classList.add("fakeScroll");

            return DOM;
        },

        destroy(){
            this.events.off.call(this, window, 'resize', 'onScrollResize');
        },

        get scrollRatio(){
            return this.state.scrollRatio
        },

        events : {
            on(elm, eName, cbName){
                // to be able tp unbind the events, callback refferece must be saved somewhere
                eName.split(' ').forEach(e => {
                    if( !(cbName in this.events.callbacks) ) console.warn(cbName, " doesn't exist in Callbacks: ", this.events.callbacks);

                    this.listeners[e] = this.events.callbacks[cbName].bind(this);
                    elm.addEventListener(e, this.listeners[e])
                });

                return this.events;
            },

            off(elm, eName, cbName){
                eName.split(' ').forEach(e => elm.removeEventListener(e, this.listeners[e]))
                return this.events;
            },

            binding(DOM){
                this.events.on.call(this, DOM.scrollContent, 'scroll', 'onScrollResize')
                           .on.call(this, DOM.scope, 'mouseenter', 'onScrollResize')
                           .on.call(this, DOM.bar, 'mousedown', 'onBarMouseDown')
                           .on.call(this, window, 'resize', 'onScrollResize')

                if( this.settings.track )
                    this.events.on.call(this, DOM.track, 'click', 'onTrackClick')
            },

            /**
             * events only binded when Bar element gets a "mousedown" event
             * @param  {[type]} onOff [description]
             * @return {[type]}       [description]
             */
            drag(onOff){
                this.events[onOff].call(this, document, 'mousemove', 'onDrag')
                           [onOff].call(this, document, 'mouseup', 'onStopDrag')
            },

            callbacks : {
                onScrollResize(){
                    this.moveBar.call(this);
                    this.DOM.scope.classList.toggle('fakeScroll--hasBar', this.state.ratio < 1)

                    // debounce - get track bounds
                    clearTimeout(this.listeners.timeout__resize);
                    this.listeners.timeout__resize = setTimeout(this.getTrackBounds.bind(this), 200)
                },

                onDrag(e){
                    var delta = e.pageY - this.state.lastPageY;

                    raf(() => {
                        var sTop = document.documentElement.scrollTop,
                            isDragWithinTrackBounds = e.pageY >= (this.state.trackBounds.top + sTop) && e.pageY <= (this.state.trackBounds.bottom + sTop);

                        if( isDragWithinTrackBounds )
                            this.DOM.scrollContent.scrollTop = this.state.drag + delta / this.state.ratio;
                        // update variables when mouse position is outside the Track bounds
                        else{
                            this.state.drag = this.DOM.scrollContent.scrollTop;
                            this.state.lastPageY = e.pageY;
                        }
                    });
                },

                onStopDrag(e){
                    [this.DOM.bar, document.body].map(el => el.classList.remove('fakeScroll--grabbed'))
                    this.events.drag.call(this, 'off');
                    setTimeout(()=>{ this.state.drag = false })
                },

                onBarMouseDown(e){
                    this.state.drag = this.DOM.scrollContent.scrollTop;
                    this.state.lastPageY = e.pageY;

                    [this.DOM.bar, document.body].map(el => el.classList.add('fakeScroll--grabbed'))
                    this.events.drag.call(this, 'on');
                },

                onTrackClick(e){
                    if( this.state.drag ) return;

                    var perc         = (e.clientY - this.state.trackBounds.top) / (this.state.trackBounds.height - this.state.trackBounds.topPad - this.state.trackBounds.bottomPad),
                        scrollHeight = this.DOM.scrollContent.scrollHeight,
                        ownHeight    = this.DOM.scrollWrap.clientHeight,
                        newScrollTop = perc * (scrollHeight - ownHeight);

                    if( this.settings.track == 'smooth' ){
                        this.DOM.scrollContent.style.scrollBehavior = 'smooth';
                        setTimeout(()=>{ this.DOM.scrollContent.style.scrollBehavior = 'unset' }, 500)
                    }

                    this.DOM.scrollContent.scrollTop = newScrollTop;
                }
            }
        },

        getTrackBounds(){
            var bounds = this.DOM.track.getBoundingClientRect(),
                styles = window.getComputedStyle(this.DOM.track, null);

            bounds.topPad = parseInt(styles.paddingTop, 10);
            bounds.bottomPad = parseInt(styles.paddingBottom, 10);

            this.state.trackBounds = bounds;
            return bounds;
        },

        moveBar(){
            // if( !this.DOM.scrollContent ) return false;

            var _scrollContent = this.DOM.scrollContent,
                scrollHeight = _scrollContent.scrollHeight,
                ownHeight   = this.DOM.scrollWrap.clientHeight;

            this.state.ratio = this.DOM.track.clientHeight / scrollHeight
            this.state.scrollRatio = this.DOM.scrollContent.scrollTop / (_scrollContent.scrollHeight - ownHeight)


            // update fake scrollbar location on the Y axis using requestAnimationFrame
            raf(()=> {
                var height = (ownHeight / scrollHeight) * 100,
                    top = (_scrollContent.scrollTop / scrollHeight ) * 100;

                this.DOM.bar.style.cssText = `height  : ${height}%;
                                              top     : ${top}%;
                                              display : ${scrollHeight <= ownHeight ? 'none' : ''}`;

                this.settings.onChange && this.settings.onChange({scrollRatio:this.state.scrollRatio })
            });

        }
    }

    /**
     * Extend the DOM with "fakeScroll" method. The chances of the same name already be taken are slim to none,
     * But you should now; it's your code you're putting this into.
     */
    Element.prototype.fakeScroll = function( settings ){
        this._fakeScroll = this._fakeScroll || new FakeScroll(this, settings || {});
        return this._fakeScroll;
    }

    return FakeScroll
}));


// if document loaded
$(document).ready(function () {
    document.getElementsByClassName("episodes")[0].fakeScroll();
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
        ).click(function(){
            let count = 0;

            target.removeClass("active");
            while (target[count]) {
                if (target[count].classList.contains("hover")) {
                    target[count].classList.add("active");

                    break;
                }
                count++;
            }

            $("audio")[0].volume =  (Number(count)+1)/10;
           
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

    document.getElementsByTagName("audio")[0].ontimeupdate = onTimeUpdate;
});
