<?php

require 'src/Cache.php';

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