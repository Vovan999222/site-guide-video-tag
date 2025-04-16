<?php
// Определяем текущий месяц (1-12)
$currentMonth = date('n');
// Устанавливаем фоновое изображение в зависимости от сезона
$backgroundImage = ($currentMonth == 12 || $currentMonth <= 2) 
    ? 'image/2280021.jpg' 
    : 'image/228446.jpg';
?>
<!DOCTYPE html>
<html lang="uk">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T99JC756');</script>
<!-- End Google Tag Manager -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T99JC756"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Що таке тег video у мові html?</title>
    <link rel="icon" href="icon/1.ico" type="image/x-icon">
    <link rel="shortcut icon" href="icon/1.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <script src="js/playerjs2.js" type="text/javascript"></script>
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background: url("<?php echo $backgroundImage; ?>") no-repeat center center fixed;
        background-size: cover;
        scroll-behavior: smooth; /* Плавна прокрутка */
    }
    </style>
</head>
<body>

<header>
    <h1>Що таке тег video у мові html?</h1>
    <div class="language-switcher">
    <select id="redirectSelect" onchange="redirect()">
        <option value="">Оберіть мову</option>
        <option value="https://volodimir225.free.nf/">Українська</option> 
        <option value="en.php">Англійська</option>
    </select>
    </div>
</header>

    <section class="container">
        <h2>Що таке тег video у мові html?</h2>
        <p>Тег video - це спеціальний тег у мові розмітки HTML, який використовується для вставлення відео на веб-сторінку. Він дозволяє вам показувати відео прямо на вашому веб-сайті, без необхідності використання зовнішніх відеопрогравачів. Як працює тег відео?</p>
        <h2>Основні риси тегу video:</h2>
        <p>1. Атрибут src (Source):</p>
        <p>Вказує шлях до відеофайлу. Наприклад: src="ваше_відео.mp4".</p>
        <p>2. Атрибут controls (Елементи керування):</p>
        <p>Додає панель управління відтворенням (play, pause, гучність тощо). Додається так: controls.</p>
        <p>3. Атрибути width і height (Ширина і висота):</p>
        <p>Визначають розміри відео в пікселях. Наприклад: width="1000" height="600".</p>
        <p>4. Атрибут autoplay (Автовідтворення):</p>
        <p>Починає відтворення автоматично, як тільки сторінка завантажується. Додається так: autoplay.</p>
        <p>5. Атрибут loop (Повторення):</p>
        <p>Робить відео автоматично повторюваним після завершення відтворення. Додається так: loop.</p>
        <p>6. Атрибут poster (Постер):</p>
        <p>Показує зображення, поки відео не завантажено чи не почне відтворюватися. Додається так: poster="зображення.jpg".</p>
        <p>7. Текст для старих браузерів:</p>
        <p>Ви можете включити текст між відкриваючим і закриваючим тегами video, який буде відображений, якщо браузер не підтримує тег video або не може відтворити вказаний формат відео.</p>
        <h2>Тег video може працювати в вашому коді у двох варіантах.</h2>
        <h2>Локально:</h2>
        <img src="image/image-000.png">
        <h2>Як виглядає відео на вашому сайті:</h2>
            <video id="videoPlayer1" controls width="1000"></video>
        <h2>Варіант коду № 2:</h2>
        <img src="image/image-002.png">
        <h2>Як виглядає на сайті:</h2>
            <video id="video2" controls width="1000" poster="image/poster.jpg"></video>
        <h2>Як вставити відео з зовнішнього плеєру на прикладі ютубу:</h2>
        <div class="image-container">
        <img id="displayedImage" src="image/image-004.jpg">
        <button onclick="prevImage()">Назад</button>
        <button onclick="nextImage()">Вперед</button>
        <button onclick="openFullscreen()">На весь экран</button>
        </div>
        <h2>Як виглядає код:</h2>
        <img src="image/image-007.png">
    </section>

    <section class="container">
        <h2>Як працює на сайті:</h2>
        <div id="player"></div>
        <p>Ось так можна додати відео на вашому сайті.&#128521;</p>
    </section>

    <section class="container">
    <h2>Мови програмування та посилання на репозиторій</h2>
    <p>Мови програмування: html(81,3%), css(8,1%),javascript(10,6%).</p>
    <p>Репозиторій: <a href="https://github.com/Vovan999222/site-guide-video-tag">клік.com</a></p>
    </section>  

    <footer>
        <p>© 2024 Що таке тег video у мові html</p>
    </footer>
    <script>
        var player = new Playerjs({id:"player", file:"[720p]video/720/720.m3u8,[1080p]video/1080/1080.m3u8"});
    </script>
    <script src="script.js"></script>
    <script src="js/hls.js@latest"></script>
    <script src="js/script.js"></script>
</body>
</html>
