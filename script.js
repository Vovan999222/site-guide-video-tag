const images = ["image/image-004.jpg", "image/image-005.jpg", "image/image-006.jpg", "image/image-007.png"];  // Додайте шляхи до ваших картинок
let currentImageIndex = 0;

function showImage(index) {
    const displayedImage = document.getElementById('displayedImage');
    displayedImage.src = images[index];
}

function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    showImage(currentImageIndex);
}

function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    showImage(currentImageIndex);
}

function openFullscreen() {
    const displayedImage = document.getElementById('displayedImage');

    if (displayedImage.requestFullscreen) {
        displayedImage.requestFullscreen();
    } else if (displayedImage.mozRequestFullScreen) { /* Firefox */
        displayedImage.mozRequestFullScreen();
    } else if (displayedImage.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
        displayedImage.webkitRequestFullscreen();
    } else if (displayedImage.msRequestFullscreen) { /* IE/Edge */
        displayedImage.msRequestFullscreen();
    }
}

document.addEventListener('DOMContentLoaded', function () {
    showImage(currentImageIndex);
});

function redirect() {
    var selectedPage = document.getElementById("redirectSelect").value;
    if (selectedPage) {
      window.location = selectedPage;
    }
}
