<section class="top-sec" id="main-sec">
    <div class="main-sec-overlay"></div>
    <div id="video-bg">
        <div id="player"></div>
        <script>
            // 2. This code loads the IFrame Player API code asynchronously.
            var tag = document.createElement('script');

            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

            // 3. This function creates an <iframe> (and YouTube player)
            //    after the API code downloads.
            var player;
            function onYouTubeIframeAPIReady() {
                player = new YT.Player('player', {
                    height: '100%',
                    width: '100%',
                    videoId: 'M7lc1UVf-VE',
                    events: {
                        'onReady': onPlayerReady,
                        'onStateChange': onPlayerStateChange
                    }
                });
            }

            // 4. The API will call this function when the video player is ready.
            function onPlayerReady(event) {
                event.target.playVideo().mute();
            }
            function onPlayerStateChange(event){}
            function stopVideo(){}
        </script>
    </div>
    <div class="content">
        <h1>Блоки из автоклавного ячеичного бетона</h1>
        <div class="descr">
            <p>Производство и поставка высокачественных изделий из автоклавного ячеистого бетона и силикатного кирпича</p>
        </div><a class="btn-catalog" href="<?php echo base_url() ?>user/category/1">В каталог</a>
    </div><a class="mouse-icon" href="#">
        <div class="wheel"></div></a>
</section>