<?php
// Определите массив с описаниями ошибок
$errorMessages = [
    400 => [
        "title" => "400 Bad Request",
        "message" => "Oops! Something Went Wrong<br>We're sorry, but it seems that there was a problem with your request. The server couldn't understand the request, possibly due to incorrect syntax or unsupported parameters. Please double-check your input and try again. If the issue persists, feel free to contact our support team for assistance."
    ],
    401 => [
        "title" => "401 Unauthorized",
        "message" => "Access Denied<br>Uh-oh! It looks like you don't have the necessary permissions to access this resource. Please make sure you are logged in and have the correct credentials. If you believe this is an error, kindly contact our support team for further assistance. We apologize for any inconvenience."
    ],
    403 => [
        "title" => "403 Forbidden",
        "message" => "Server or website configuration is blocking you from viewing this page"
    ],
    404 => [
        "title" => "404 Not Found",
        "message" => "Page Not Found<br>Oh no! The page you are looking for seems to have vanished into the digital abyss. It's possible that the link is outdated or the resource has been moved. Please check the URL for typos or go back to the homepage. If you believe this is an error, let us know, and we'll do our best to track down the missing page. Thanks for your understanding!"
    ],
    500 => [
        "title" => "500 Internal Server Error",
        "message" => "Oops! Something Went Wrong on Our End<br>We're experiencing technical difficulties, and our server is currently unable to fulfill your request. The error is on our side, and we apologize for any inconvenience this may have caused. Our team is working diligently to resolve the issue. In the meantime, please try again later. If the problem persists, feel free to contact our support team, and we'll do our best to assist you. Thank you for your patience."
    ],
    503 => [
        "title" => "503 Service Unavailable",
        "message" => "The page you are looking for might have been removed, had its name changed or is temporarily unavailable."
    ]
];

// Получите код ошибки из параметра GET
$errorCode = isset($_GET['code']) ? (int)$_GET['code'] : 0;

// Проверьте, является ли код ошибки допустимым
if (!array_key_exists($errorCode, $errorMessages)) {
    $errorCode = 404; // Установите 404 по умолчанию, если код не распознан
}

// Установите заголовок HTTP с кодом ошибки
http_response_code($errorCode);

// Выведите HTML-страницу с ошибкой
echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error {$errorCode}</title>
    <style>
        @import 'https://fonts.googleapis.com/css?family=Inconsolata';

        html {
            min-height: 100%;
        }

        body {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #000000;
            background-image: radial-gradient(#11581E, #041607);
            font-family: 'Inconsolata', Helvetica, sans-serif;
            font-size: 1.5rem;
            color: rgba(128, 255, 128, 0.8);
            text-shadow:
                0 0 1ex rgba(51, 255, 51, 1),
                0 0 2px rgba(255, 255, 255, 0.8);
        }

        .overlay {
            pointer-events: none;
            position: absolute;
            width: 100%;
            height: 100%;
            background:
            repeating-linear-gradient(
                180deg,
                rgba(0, 0, 0, 0) 0,
                rgba(0, 0, 0, 0.3) 50%,
                rgba(0, 0, 0, 0) 100%);
            background-size: auto 4px;
            z-index: 99;
        }

        .overlay::before {
            content: "";
            pointer-events: none;
            position: absolute;
            display: block;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(
                0deg,
                transparent 0%,
                rgba(32, 128, 32, 0.2) 2%,
                rgba(32, 128, 32, 0.8) 3%,
                rgba(32, 128, 32, 0.2) 3%,
                transparent 100%);
            background-repeat: no-repeat;
            animation: scan 7.5s linear 0s infinite;
        }

        @keyframes scan {
            0%        { background-position: 0 -100vh; }
            35%, 100% { background-position: 0 100vh; }
        }

        .terminal {
            box-sizing: inherit;
            position: absolute;
            height: 100%;
            width: 1000px;
            max-width: 100%;
            padding: 4rem;
            text-transform: uppercase;
        }

        .output {
            color: rgba(128, 255, 128, 0.8);
            text-shadow:
                0 0 1px rgba(51, 255, 51, 0.4),
                0 0 2px rgba(255, 255, 255, 0.8);
        }

        .output::before {
            content: "> ";
        }

        a {
            color: #fff;
            text-decoration: none;
        }

        a::before {
            content: "[";
        }

        a::after {
            content: "]";
        }

        .errorcode {
            color: white;
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="terminal">
        <h1>Error <span class="errorcode">{$errorMessages[$errorCode]['title']}</span></h1>
        <p class="output">{$errorMessages[$errorCode]['message']}</p>
    </div>
</body>
</html>
HTML;
?>