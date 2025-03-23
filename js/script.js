var video = document.getElementById('videoPlayer1');
var videoSrc = 'video/720/720.m3u8';
        
if (Hls.isSupported()) {
    var hls = new Hls();
    hls.loadSource(videoSrc);
    hls.attachMedia(video);
    hls.on(Hls.Events.MANIFEST_PARSED, function () {
        video.play();
    });
} else if (video.canPlayType('application/vnd.apple.mpegurl')) {
    video.src = videoSrc;
    video.addEventListener('canplay', function () {
        video.play();
    });
} else {
    console.error("Этот браузер не поддерживает HLS.");
}

var video = document.getElementById('video2');
var videoSrc = 'video/720/720.m3u8';
        
if (Hls.isSupported()) {
    var hls = new Hls();
    hls.loadSource(videoSrc);
    hls.attachMedia(video);
    hls.on(Hls.Events.MANIFEST_PARSED, function () {
        video.play();
    });
} else if (video.canPlayType('application/vnd.apple.mpegurl')) {
    video.src = videoSrc;
    video.addEventListener('canplay', function () {
        video.play();
    });
} else {
    console.error("Этот браузер не поддерживает HLS.");
}