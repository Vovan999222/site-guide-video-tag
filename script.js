let slideIndex = 0;

function showSlide(index) {
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length;
    slides.style.transform = `translateX(${-index * 100}%)`;
    slideIndex = index;
}

function nextSlide() {
    slideIndex = (slideIndex + 1) % document.querySelectorAll('.slide').length;
    showSlide(slideIndex);
}

function prevSlide() {
    slideIndex = (slideIndex - 1 + document.querySelectorAll('.slide').length) % document.querySelectorAll('.slide').length;
    showSlide(slideIndex);
}

function openFullscreenImage(src) {
    const fullscreenDiv = document.createElement('div');
    fullscreenDiv.className = 'fullscreen-image';
    
    const img = document.createElement('img');
    img.src = src;
    img.alt = 'Полноэкранный просмотр';
    
    fullscreenDiv.appendChild(img);
    document.body.appendChild(fullscreenDiv);
    
    fullscreenDiv.addEventListener('click', function() {
        document.body.removeChild(fullscreenDiv);
    });
}

document.addEventListener('DOMContentLoaded', function () {
    showSlide(slideIndex);
});

function redirect() {
    var selectedPage = document.getElementById("redirectSelect").value;
    if (selectedPage) {
      window.location = selectedPage;
    }
}
