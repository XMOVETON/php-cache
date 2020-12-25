Убрать кэширование 
========

Вы изменили файл, а сайт не хочет показывать новые стили?
Заюзайте наш маленький скрипт, который решит вашу проблему.

Пример использование:
```php
<?php

require 'Cache.php';

Cache::add('css', 'public/css/style.css');

$v = Cache::get();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cache</title>
    <link rel="stylesheet" href="public/css/style.css?v=<?php echo $v['css']?>">
</head>
<body>
    
</body>
</html>
```