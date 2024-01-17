const toggler = document.querySelector(".toggler");
const navMenu = document.querySelector("#navMenu");

toggler.addEventListener('click', function () {
    navMenu.classList.toggle("active")
});

const scroll = document.getElementById("scroll");

scroll.addEventListener('click', () => {
    document.querySelector(".get-started").scrollIntoView({ behavior: 'smooth' });
})


function playOverlayedVideo(videoName) {
    const container = document.getElementById('video-overlay')

    container.innerHTML = `<video autoplay src="VID/${videoName}" class = 'center' id='video' ></video> `

    enterFullScreen(document.getElementById("video"))
    container.removeAttribute("hidden")

}

document.addEventListener('fullscreenchange', (event) => {
    if (document.fullscreenElement) return;
    const container = document.getElementById('video-overlay');
    container.setAttribute("hidden", true);
    container.innerHTML = ''
});


function enterFullScreen(element) {
    if (element.requestFullscreen) {
        element.requestFullscreen();
    } else if (element.mozRequestFullScreen) {
        element.mozRequestFullScreen();     // Firefox
    } else if (element.webkitRequestFullscreen) {
        element.webkitRequestFullscreen();  // Safari
    } else if (element.msRequestFullscreen) {
        element.msRequestFullscreen();      // IE/Edge
    }
};