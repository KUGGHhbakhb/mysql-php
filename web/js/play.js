var play = document.getElementById("play");
var ponse = document.getElementById("ponse");
var meter = document.getElementById("meter");
var load = document.getElementById("load");
var video1 = document.getElementsByTagName("video")[0];
play.onclick = function () {
    video1.play();
}
ponse.onclick = function () {
    if (video1.paused) {
        video1.play();
    } else{
        video1.pause();
    }
}
load.onclick = function () {
    video1.load();
    video1.autoplay=true;
}
meter.onclick = function () {
    if (video1.muted) {
        video1.muted=false;
    }else{
        video1.muted=true;
    }
}