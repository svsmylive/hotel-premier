const introVideoContainer = document.querySelector('.intro-section__video');
const video = document.createElement('video');

// Установка атрибутов видео до загрузки
video.src = '/assets/videos/intro-video-small.mp4';
video.loop = true;
video.muted = true; // Убедитесь, что видео без звука
video.autoplay = true; // Автозапуск
video.playsInline = true; // Поддержка для мобильных устройств

// После загрузки данных видео, добавьте его в DOM
video.addEventListener('loadeddata', () => {
    introVideoContainer.appendChild(video);
    introVideoContainer.classList.remove('loading');
    video.play().catch(err => {
        console.error('Автоматическое воспроизведение не удалось:', err);
    });
});

video.load();
