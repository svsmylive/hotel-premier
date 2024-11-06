const introVideoContainer = document.querySelector('.intro-section__video');
const video = document.createElement('video');

video.addEventListener('loadeddata', () => {
  introVideoContainer.appendChild(video);
  introVideoContainer.classList.remove('loading');
  video.play();
});

video.src = './assets/videos/intro-video-small.mp4';
video.loop = true;
video.autoplay = true;
video.muted = true;
video.playsInline = true;

video.load();
