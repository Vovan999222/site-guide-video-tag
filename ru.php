<?php
// Определяем текущий месяц (1-12)
$currentMonth = date('n');
// Устанавливаем фоновое изображение в зависимости от сезона
$backgroundImage = ($currentMonth == 12 || $currentMonth <= 2) 
    ? 'image/2280021.jpg' 
    : 'image/228446.jpg';
?>
<!DOCTYPE html>
<html lang="ru">
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
    <title>Что такое тег video в языке html?</title>
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
    <h1>Что такое тег video в языке html?</h1>
    <div class="language-switcher">
    <select id="redirectSelect" onchange="redirect()">
        <option value="">Выберите язык</option>
        <option value="https://volodimir225.free.nf/">Українська</option>
        <option value="ru.php">російська</option>
        <option value="en.php">English</option>
    </select>
    </div>
</header>

<section class="container">
    <h2>Что такое тег video в языке html?</h2>
    <p>Тег video - это специальный тег в языке розметки HTML, который используеться для вставки видео на веб-страницу. Он позволяет вам показывать видео прямо на вашем веб-сайте, без необходимости использования внешних відеопроигрователей. Как работает тег видео?</p>
    <h2>Основные особенности тега video:</h2>
    <p>1. Атрибут src (Source):</p>
    <p>Указывает путь к видеофайлу. Например: src="ваше_видео.mp4".</p>
    <p>2. Атрибут controls (Елементы управления):</p>
    <p>Добавляет панель управления воспроизведения (play, pause, громкость т.д.). Добавляется так: controls.</p>
    <p>3. Атрибуты width и height (Ширина и высота):</p>
    <p>Обозначают видео в пикселях. Например: width="1000" height="600".</p>
    <p>4. Атрибут autoplay (Автовоспроизведение):</p>
    <p>Начинает воспроизведение автоматически, как только страница загружается. Добавляется так: autoplay.</p>
    <p>5. Атрибут loop (Повторение):</p>
    <p>Делает видео автоматически повторяющим после завершения воспроизведения. Добавляется так: loop.</p>
    <p>6. Атрибут poster (Постер):</p>
    <p>Показывает избражение, пока видео не загружено или не начнет воспроизводиться. Добавляется так: poster="избражение.jpg".</p>
    <p>7. Текст для старых браузеров:</p>
    <p>Вы можете включить текст между открывающими и закрывающими тегами video, который будет избражен, если браузер не поддерживает тег video или не может воспроизвести указанный формат видео.</p>
    <h2>Тег video может работать в вашем коде в двух вариантах.</h2>
    <h2>Локально:</h2>
    <img src="image/image-000.png">
    <h2>Как выглядит видео на вашем сайте:</h2>
        <video id="videoPlayer1" controls width="1000"></video>
    <h2>Вариант кода № 2:</h2>
    <img src="image/image-002.png">
    <h2>Как выглядит:</h2>
        <video id="video2" controls width="1000" poster="image/poster.jpg"></video>
    <h2>Как можно вставить видео из внешнего плэера на примере ютуба:</h2>
    <div class="image-container">
    <img id="displayedImage" src="image/image-004.jpg">
    <button onclick="prevImage()">Назад</button>
    <button onclick="nextImage()">Вперед</button>
    <button onclick="openFullscreen()">На весь экран</button>
    </div>
    <h2>Как выглядит код:</h2>
    <img src="image/image-007.png">
</section>

<section class="container">
    <h2>Как работает на сайте:</h2>
    <div id="player"></div>
    <p>Вот так можна добавить видео на вашем сайте.&#128521;</p>
</section>

<section class="container">
    <h2>Языки програмирования и ссылка на репозиторий</h2>
    <p>Языки програмирования: html(81,3%), css(8,1%),javascript(10,6%).</p>
    <p>Репозиторий: <a href="https://github.com/Vovan999222/site-guide-video-tag">клик.com</a></p>
</section> 

<footer>
    <p>© 2024 Что такое тег video в языке html</p>
</footer>
<script>
    var player = new Playerjs({id:"player", file:"[1080p]video/1080/1080.m3u8"});
</script>
<script src="script.js"></script>
<script src="js/hls.js@latest"></script>
<script src="js/script.js"></script>
</body>
</html>
