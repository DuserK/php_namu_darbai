<?php

$color = $_GET['color'] ?? 'green';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $color = 'yellow';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body{
        background: <?= $color ?>;
    }
</style>
<body>
    <form action="http://localhost/bit/php_namu_darbai/WEB_mechanika/06uzd.php" method="get">
        <button type="submit">GET</button>
    </form>
    <form action="http://localhost/bit/php_namu_darbai/WEB_mechanika/06uzd.php" method="post">
        <button type="submit">POST</button>
    </form>
</body>
</html>