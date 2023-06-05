<?php

$error = $_GET['error'] ?? 0;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink</title>
</head>
<body style="background: pink">
    <form action="http://localhost/bit/php_namu_darbai/WEB_mechanika/rose.php" method="post">
        <button type="submit">GO TO ROSE</button>
    </form>

    <?php if ($error==1) { ?>
            <h1>Ka cia darai</h1>
    <?php }?>

</body>
</html>