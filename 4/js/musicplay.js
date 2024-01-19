(function () {
    var mySong = document.getElementsByClassName("mySong");
    var icon = document.getElementsByClassName("icon");
    var currentIndex = mySong.length - 1; // Индекс в коллекции для текущей итерации

    icon[currentIndex].onclick = function(){
        var currentSong = mySong[currentIndex];
        if(currentSong.paused) {
            currentSong.play();
            this.src = "icons/pause.svg";
        } else {
            currentSong.pause();
            this.src = "icons/play.svg";
        }
    }
})();