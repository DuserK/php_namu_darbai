<?php
$color = $_SERVER['REQUEST_METHOD'] = 'POST'? 'yellow' : 'green';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06 užduotis</title>
</head>
<body style = "background: <?= $color ?>;">
    <form action="">
        <button type = "submit">GET</button>
    </form>

    <form action="" method = "post">
        <button type = "submit">POST</button>
    </form>
</body>
</html>