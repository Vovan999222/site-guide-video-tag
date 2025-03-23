<?php
// Определяем текущий месяц (1-12)
$currentMonth = date('n');
// Устанавливаем фоновое изображение в зависимости от сезона
$backgroundImage = ($currentMonth == 12 || $currentMonth <= 2) 
    ? 'image/2280021.jpg' 
    : 'image/228446.jpg';
?>
<!DOCTYPE html>
<html lang="en">
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
    <title>What is the video tag in html?</title>
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
    <h1>What is the video tag in html?</h1>
    <div class="language-switcher">
    <select id="redirectSelect" onchange="redirect()">
        <option value="">Choose language</option>
        <option value="https://volodimir225.free.nf/">Ukraine</option>
        <option value="ru.php">ru</option>
        <option value="en.php">English</option>
    </select>
    </div>
</header>

<section class="container">
    <h2>What is the video tag in html?</h2>
    <p>The video tag is a special tag in the HTML markup language used to insert a video into a web page. It allows you to display videos directly on your website, without the need for external video players. How does the video tag work?</p>
    <h2>The main features of the video tag:</h2>
    <p>1. Attribute src (Source):</p>
    <p>Shows the path to the video file. Example: src="video.mp4".</p>
    <p>2. Attribute controls (Control elements):</p>
    <p>Adds a playback control panel (play, pause, volume etc). Added like this: controls.</p>
    <p>3. Attributes width and height (Width and height):</p>
    <p>Determine the size of the video in pixels. Example: width="1000" height="600".</p>
    <p>4. Attribute autoplay:</p>
    <p>Starts playing automatically as soon as the page loads. Added like this: autoplay.</p>
    <p>5. Attribute loop (Repetition):</p>
    <p>Makes the video automatically repeat after playback ends. Added like this: loop.</p>
    <p>6. Attribute poster:</p>
    <p>Shows the image until the video is loaded or starts playing. Added like this: poster="image.jpg".</p>
    <p>7. Text for older browsers:</p>
    <p>You can include the text between the opening and closing video tags, which will be displayed if the browser does not support the video tag or cannot play the specified video format.</p>
    <h2>The video tag can work in your code in two ways.</h2>
    <h2>Locally:</h2>
    <img src="image/image-000.png">
    <h2>What does a video look like on your site:</h2>
        <video id="videoPlayer1" controls width="1000"></video>
    <h2>Code option № 2:</h2>
    <img src="image/image-002.png">
    <h2>What it looks like:</h2>
        <video id="video2" controls width="1000" poster="image/poster.jpg"></video>
    <h2>How can you insert a video from an external player using YouTube as an example:</h2>
    <div class="image-container">
    <img id="displayedImage" src="image/image-004.jpg">
    <button onclick="prevImage()">Back</button>
    <button onclick="nextImage()">Next</button>
    <button onclick="openFullscreen()">Fullscreen</button>
    </div>
    <h2>What the code looks like:</h2>
    <img src="image/image-007.png">
</section>

<section class="container">
    <h2>How the site works:</h2>
    <div id="player"></div>
    <p>Here's how to add video to your site.&#128521;</p>
</section>

<section class="container">
    <h2>Programming languages and repository link</h2>
    <p>Programming languages: html(81,3%), css(8,1%),javascript(10,6%).</p>
    <p>Repository: <a href="https://github.com/Vovan999222/site-guide-video-tag">click</a></p>
</section>

<footer>
    <p>© 2024 What is the video tag in html</p>
</footer>
<script>
    var player = new Playerjs({id:"player", file:"[1080p]video/1080/1080.m3u8"});
</script>
<script src="script.js"></script>
<script src="js/hls.js@latest"></script>
<script src="js/script.js"></script>
</body>
</html>
