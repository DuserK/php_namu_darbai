<?php

$color = $_GET['color'] ?? '000000';

echo $color;

if(preg_match('/^[0-9a-f]{6}$/', $color));


?>


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
            background: <?= $color ?>;
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin:0;
        }
        a {
            color: skyblue;
            font-size: 3em;
            padding: 40px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
        }
    </style>
<body>
    <form action="http://localhost/bit/php_namu_darbai/WEB_mechanika/03uzd.php" method = "get">

        <input type="color" name= "color">
        <button type = "submit">Rodyti spalva</button>
    </form>
</body>
</html>