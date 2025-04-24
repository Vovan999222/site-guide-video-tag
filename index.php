<?php
function get_default_language() {
    if(isset($_COOKIE['user_lang'])) {
        return $_COOKIE['user_lang'];
    }

    $ip = $_SERVER['REMOTE_ADDR'];
    $geo = @json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
    
    $lang = 'uk';
    if(isset($geo->countryCode)) {
        $country = strtoupper($geo->countryCode);
        $lang_map = [
            'UA' => 'uk',
            'RU' => 'ru',
            'US' => 'en',
            'GB' => 'en'
        ];
        $lang = $lang_map[$country] ?? 'uk';
    }
    return $lang;
}

$lang = $_GET['lang'] ?? get_default_language();
setcookie('user_lang', $lang, time() + (86400 * 30), "/");

$translations = [
    'uk' => [
        'title' => 'Що таке тег video у html?',
        'h1' => 'Що таке тег video у html?',
        'content' => [
            'main_question' => 'Що таке тег video у html?',
            'main_description' => 'Тег video - це спеціальний тег у мові розмітки HTML, який використовується для вставлення відео на веб-сторінку. Він дозволяє вам показувати відео прямо на вашому веб-сайті, без необхідності використання зовнішніх відеопрогравачів. Як працює тег відео?',
            'features_title' => 'Основні риси тегу video:',
            'src_attr' => '1. Атрибут src (Source):',
            'src_desc' => 'Вказує шлях до відеофайлу. Наприклад: src="ваше_відео.mp4".',
            'controls_attr' => '2. Атрибут controls (Елементи керування):',
            'controls_desc' => 'Додає панель управління відтворенням (play, pause, гучність тощо). Додається так: controls.',
            'size_attrs' => '3. Атрибути width і height (Ширина і висота):',
            'size_desc' => 'Визначають розміри відео в пікселях. Наприклад: width="1000" height="600".',
            'autoplay_attr' => '4. Атрибут autoplay (Автовідтворення):',
            'autoplay_desc' => 'Починає відтворення автоматично, як тільки сторінка завантажується. Додається так: autoplay.',
            'loop_attr' => '5. Атрибут loop (Повторення):',
            'loop_desc' => 'Робить відео автоматично повторюваним після завершення відтворення. Додається так: loop.',
            'poster_attr' => '6. Атрибут poster (Постер):',
            'poster_desc' => 'Показує зображення, поки відео не завантажено чи не почне відтворюватися. Додається так: poster="зображення.jpg".',
            'fallback_text' => '7. Текст для старих браузерів:',
            'fallback_desc' => 'Ви можете включити текст між відкриваючим і закриваючим тегами video, який буде відображений, якщо браузер не підтримує тег video.',
            'variants_title' => 'Тег video може працювати в вашому коді у двох варіантах.',
            'local_title' => 'Локально:',
            'example_title' => 'Як виглядає відео на вашому сайті:',
            'code_variant' => 'Варіант коду № 2:',
            'external_example' => 'Як вставити відео з зовнішнього плеєру на прикладі ютубу:',
            'code_example' => 'Як виглядає код:',
            'player_title' => 'Як працює на сайті:',
            'player_text' => 'Ось так можна додати відео на вашому сайті.',
            'lang_section' => 'Мови програмування та посилання на репозиторій',
            'lang_stats' => 'Мови програмування: html(81,3%), css(8,1%), javascript(10,6%).',
            'repo_link' => 'Репозиторій: <a href="https://github.com/Vovan999222/site-guide-video-tag">клік.com</a>'
        ]
    ],
    'ru' => [
        'title' => 'Что такое тег video в html?',
        'h1' => 'Что такое тег video в html?',
        'content' => [
            'main_question' => 'Что такое тег video в html?',
            'main_description' => 'Тег video - это специальный тег в языке розметки HTML, который используеться для вставки видео на веб-страницу. Он позволяет вам показывать видео прямо на вашем веб-сайте, без необходимости использования внешних відеопроигрователей. Как работает тег видео?',
            'features_title' => 'Основные особенности тега video:',
            'src_attr' => '1. Атрибут src (Source):',
            'src_desc' => 'Указывает путь к видеофайлу. Например: src="ваше_видео.mp4".',
            'controls_attr' => '2. Атрибут controls (Элементы управления):',
            'controls_desc' => 'Добавляет панель управления воспроизведением (play, pause, громкость и т.д.). Добавляется так: controls.',
            'size_attrs' => '3. Атрибуты width и height (Ширина и высота):',
            'size_desc' => 'Определяют размеры видео в пикселях. Например: width="1000" height="600".',
            'autoplay_attr' => '4. Атрибут autoplay (Автовоспроизведение):',
            'autoplay_desc' => 'Начинает воспроизведение автоматически, как только страница загружается. Добавляется так: autoplay.',
            'loop_attr' => '5. Атрибут loop (Повторение):',
            'loop_desc' => 'Делает видео автоматически повторяющимся после завершения воспроизведения. Добавляется так: loop.',
            'poster_attr' => '6. Атрибут poster (Постер):',
            'poster_desc' => 'Показывает изображение, пока видео не загружено или не начнет воспроизводиться. Добавляется так: poster="изображение.jpg".',
            'fallback_text' => '7. Текст для старых браузеров:',
            'fallback_desc' => 'Вы можете включить текст между открывающим и закрывающим тегами video, который будет отображен, если браузер не поддерживает тег video.',
            'variants_title' => 'Тег video может работать в вашем коде в двух вариантах.',
            'local_title' => 'Локально:',
            'example_title' => 'Как выглядит видео на вашем сайте:',
            'code_variant' => 'Вариант кода № 2:',
            'external_example' => 'Как вставить видео из внешнего плеера на примере YouTube:',
            'code_example' => 'Как выглядит код:',
            'player_title' => 'Как работает на сайте:',
            'player_text' => 'Вот так можно добавить видео на вашем сайте.',
            'lang_section' => 'Языки программирования и ссылка на репозиторий',
            'lang_stats' => 'Языки программирования: html(81,3%), css(8,1%), javascript(10,6%).',
            'repo_link' => 'Репозиторий: <a href="https://github.com/Vovan999222/site-guide-video-tag">клик.com</a>'
        ]
    ],
    'en' => [
        'title' => 'What is the video tag in html?',
        'h1' => 'What is the video tag in html?',
        'content' => [
            'main_question' => 'What is the video tag in html?',
            'main_description' => 'The video tag is a special tag in the HTML markup language that is used to embed videos on a web page. It allows you to display videos directly on your website, without the need for external video players. How does the video tag work?',
            'features_title' => 'Main features of the video tag:',
            'src_attr' => '1. src attribute (Source):',
            'src_desc' => 'Specifies the path to the video file. Example: src="your_video.mp4".',
            'controls_attr' => '2. controls attribute:',
            'controls_desc' => 'Adds a playback control panel (play, pause, volume etc). Added like this: controls.',
            'size_attrs' => '3. width and height attributes:',
            'size_desc' => 'Determine the video dimensions in pixels. Example: width="1000" height="600".',
            'autoplay_attr' => '4. autoplay attribute:',
            'autoplay_desc' => 'Starts playing automatically when the page loads. Added like this: autoplay.',
            'loop_attr' => '5. loop attribute:',
            'loop_desc' => 'Makes the video automatically repeat after playback ends. Added like this: loop.',
            'poster_attr' => '6. poster attribute:',
            'poster_desc' => 'Displays an image until the video is loaded. Added like this: poster="image.jpg".',
            'fallback_text' => '7. Fallback text:',
            'fallback_desc' => 'You can include text between the video tags that will be displayed if the browser doesn\'t support the video tag.',
            'variants_title' => 'The video tag can work in two ways:',
            'local_title' => 'Locally:',
            'example_title' => 'Video appearance on your site:',
            'code_variant' => 'Code option № 2:',
            'external_example' => 'How to embed video from external player (YouTube example):',
            'code_example' => 'Code example:',
            'player_title' => 'How it works on the site:',
            'player_text' => 'This is how you can add video to your site.',
            'lang_section' => 'Programming languages and repository link',
            'lang_stats' => 'Programming languages: html(81.3%), css(8.1%), javascript(10.6%).',
            'repo_link' => 'Repository: <a href="https://github.com/Vovan999222/site-guide-video-tag">click</a>'
        ]
    ]
];

$content = $translations[$lang] ?? $translations['uk'];

$currentMonth = date('n');
$backgroundImage = ($currentMonth == 12 || $currentMonth <= 2) 
    ? 'image/2280021.jpg' 
    : 'image/228446.jpg';
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang, ENT_QUOTES, 'UTF-8') ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8') ?></title>
    <link rel="icon" href="icon/1.ico" type="image/x-icon">
    <link rel="shortcut icon" href="icon/1.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slider.css">
    <script src="js/playerjs2.js" type="text/javascript"></script>
    <script src="lang.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url("<?php echo $backgroundImage; ?>") no-repeat center center fixed;
            background-size: cover;
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <header>
        <h1 data-translate="h1"><?= htmlspecialchars($content['h1'], ENT_QUOTES, 'UTF-8') ?></h1>
        <div class="language-switcher">
            <select id="languageSelect">
                <option value="uk" <?= $lang === 'uk' ? 'selected' : '' ?>>Українська</option>
                <option value="ru" <?= $lang === 'ru' ? 'selected' : '' ?>>русский</option>
                <option value="en" <?= $lang === 'en' ? 'selected' : '' ?>>English</option>
            </select>
        </div>
    </header>

    <section class="container">
        <h2 data-translate="main_question"><?= htmlspecialchars($content['content']['main_question'], ENT_QUOTES, 'UTF-8') ?></h2>
        <p data-translate="main_description"><?= htmlspecialchars($content['content']['main_description'], ENT_QUOTES, 'UTF-8') ?></p>
        <h2 data-translate="features_title"><?= htmlspecialchars($content['content']['features_title'], ENT_QUOTES, 'UTF-8') ?></h2>
        <p data-translate="src_attr"><?= htmlspecialchars($content['content']['src_attr'], ENT_QUOTES, 'UTF-8') ?></p>
        <p data-translate="src_desc"><?= htmlspecialchars($content['content']['src_desc'], ENT_QUOTES, 'UTF-8') ?></p>
        <p data-translate="controls_attr"><?= htmlspecialchars($content['content']['controls_attr'], ENT_QUOTES, 'UTF-8') ?></p>
        <p data-translate="controls_desc"><?= htmlspecialchars($content['content']['controls_desc'], ENT_QUOTES, 'UTF-8') ?></p>
        <p data-translate="size_attrs"><?= htmlspecialchars($content['content']['size_attrs'], ENT_QUOTES, 'UTF-8') ?></p>
        <p data-translate="size_desc"><?= htmlspecialchars($content['content']['size_desc'], ENT_QUOTES, 'UTF-8') ?></p>
        <p data-translate="autoplay_attr"><?= htmlspecialchars($content['content']['autoplay_attr'], ENT_QUOTES, 'UTF-8') ?></p>
        <p data-translate="autoplay_desc"><?= htmlspecialchars($content['content']['autoplay_desc'], ENT_QUOTES, 'UTF-8') ?></p>
        <p data-translate="loop_attr"><?= htmlspecialchars($content['content']['loop_attr'], ENT_QUOTES, 'UTF-8') ?></p>
        <p data-translate="loop_desc"><?= htmlspecialchars($content['content']['loop_desc'], ENT_QUOTES, 'UTF-8') ?></p>
        <p data-translate="poster_attr"><?= htmlspecialchars($content['content']['poster_attr'], ENT_QUOTES, 'UTF-8') ?></p>
        <p data-translate="poster_desc"><?= htmlspecialchars($content['content']['poster_desc'], ENT_QUOTES, 'UTF-8') ?></p>
        <p data-translate="fallback_text"><?= htmlspecialchars($content['content']['fallback_text'], ENT_QUOTES, 'UTF-8') ?></p>
        <p data-translate="fallback_desc"><?= htmlspecialchars($content['content']['fallback_desc'], ENT_QUOTES, 'UTF-8') ?></p>
        <h2 data-translate="variants_title"><?= htmlspecialchars($content['content']['variants_title'], ENT_QUOTES, 'UTF-8') ?></h2>
        <h2 data-translate="local_title"><?= htmlspecialchars($content['content']['local_title'], ENT_QUOTES, 'UTF-8') ?></h2>
        <img src="image/image-000.png">
        <h2 data-translate="example_title"><?= htmlspecialchars($content['content']['example_title'], ENT_QUOTES, 'UTF-8') ?></h2>
        <video id="videoPlayer1" controls width="1000"></video>
        <h2 data-translate="code_variant"><?= htmlspecialchars($content['content']['code_variant'], ENT_QUOTES, 'UTF-8') ?></h2>
        <img src="image/image-002.png">
        <h2 data-translate="player_title"><?= htmlspecialchars($content['content']['player_title'], ENT_QUOTES, 'UTF-8') ?></h2>
        <video id="video2" controls width="1000" poster="image/poster.jpg"></video>
        <h2 data-translate="external_example"><?= htmlspecialchars($content['content']['external_example'], ENT_QUOTES, 'UTF-8') ?></h2>
        <div class="slider-container">
        <div class="slides">
            <div class="slide">
                <img src="image/image-004.jpg" onclick="openFullscreenImage(this.src)">
            </div>
            <div class="slide">
                <img src="image/image-005.jpg" onclick="openFullscreenImage(this.src)">
            </div>
            <div class="slide">
                <img src="image/image-006.jpg" onclick="openFullscreenImage(this.src)">
            </div>
            <div class="slide">
                <img src="image/image-007.png" onclick="openFullscreenImage(this.src)">
            </div>
        </div>
        <button class="prev" onclick="prevSlide()">&#10094;</button>
        <button class="next" onclick="nextSlide()">&#10095;</button>
    </div>
        <h2 data-translate="code_example"><?= htmlspecialchars($content['content']['code_example'], ENT_QUOTES, 'UTF-8') ?></h2>
        <img src="image/image-007.png">
    </section>

    <section class="container">
        <h2 data-translate="player_title"><?= htmlspecialchars($content['content']['player_title'], ENT_QUOTES, 'UTF-8') ?></h2>
        <div id="player"></div>
        <p data-translate="player_text"><?= htmlspecialchars($content['content']['player_text'], ENT_QUOTES, 'UTF-8') ?>&#128521;</p>
    </section>

    <section class="container">
        <h2 data-translate="lang_section"><?= htmlspecialchars($content['content']['lang_section'], ENT_QUOTES, 'UTF-8') ?></h2>
        <p data-translate="lang_stats"><?= htmlspecialchars($content['content']['lang_stats'], ENT_QUOTES, 'UTF-8') ?></p>
        <p data-translate="repo_link"><?= $content['content']['repo_link'] ?></p>
    </section>

    <footer>
        <p>&copy; 2024-<?= date('Y') ?> <?= htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8') ?></p>
    </footer>

    <script>
        var player = new Playerjs({id:"player", file:"[720p]video/720/video-720.m3u8,[1080p]video/1080/video-1080.m3u8"});
    </script>
    <script>
        const translations = <?= json_encode($translations, JSON_HEX_TAG | JSON_HEX_APOS | JSON_UNESCAPED_UNICODE) ?>;
        const currentLang = '<?= addslashes($lang) ?>';
    </script>
    <script src="js/hls.js@latest"></script>
    <script src="js/script1.js"></script>
    <script src="script.js"></script>
</body>
</html>
