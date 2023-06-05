
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>U1</title>
</head>
    <style>
        body {
            background: <?= isset($_GET['color']) && $_GET['color'] ==1 ? 'crimson' : 'black'?>;
        }
        a {
            color: skyblue;
            font-size: 3em;
            padding: 40px;
        }
    </style>
<body>
    <a href="http://localhost/bit/php_namu_darbai/WEB_mechanika/01uzd.php">Linkas 1</a>
    <a href="http://localhost/bit/php_namu_darbai/WEB_mechanika/01uzd.php?color=1">Linkas 2</a>
</body>
</html>