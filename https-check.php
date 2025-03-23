<?php
// Перевіряємо, чи використовується HTTPS
if ((!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on')) {
    // Встановлюємо статус "403 Forbidden" для HTTP-запитів
    http_response_code(403);
    // Отримуємо поточний URL для формування HTTPS-посилання
    $current_url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $secure_url = "https://" . $current_url;
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Небезпечне з'єднання</title>
    <style>
        body {
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0; 
            background: #000; 
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .warning-container {
            max-width: 800px;
            padding: 20px;
            border: 2px solid #ff4444;
            border-radius: 10px;
            background: #1a1a1a;
        }

        .https-link {
            color: #44ff44;
            text-decoration: none;
            font-weight: bold;
            border: 2px solid #44ff44;
            padding: 12px 24px;
            border-radius: 5px;
            margin-top: 20px;
            display: inline-block;
            transition: all 0.3s;
        }

        .https-link:hover {
            background: #44ff44;
            color: #000;
        }

        .lock-icon {
            font-size: 3em;
            margin-bottom: 15px;
            color: #ff4444;
        }
    </style>
</head>
<body>
    <div class="warning-container">
        <div class="lock-icon">🔒</div>
        <h1>Увага! Небезпечне з'єднання</h1>
        <p>Цей сайт вимагає використання безпечного HTTPS-з'єднання.</p>
        <p>Ваші дані можуть бути під загрозою!</p>
        <a href="<?php echo $secure_url; ?>" class="https-link" id="secureLink">Перейти на безпечну версію</a>
        <p style="margin-top: 20px; font-size: 0.9em; color: #aaa;">Поточний URL: <?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?>
        </p>
    </div>
</body>
</html>
<?php
    exit(); // Зупиняємо подальше виконання скрипту
}
?>