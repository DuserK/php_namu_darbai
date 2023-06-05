<?php

$color = $_GET['color'] ?? 'color';

$checkboxNo = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
$checkboxNoLength = rand(3,10);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9 uzduotis</title>
</head>
<body style="background:black">
    
    <form action="http://localhost/bit/php_namu_darbai/WEB_mechanika/09uzd.php" method = "post">
       
       <?php for ($i = 0; $i < $checkboxNoLength; $i++) {
            echo '<label style="color:pink" for= "'.$i. '"/>'.$checkboxNo[$i].'</label>';
            echo '<input type="checkbox" id=" '.$i.'">';
        }
       ?>
        <button>Change the color</button>



    </form>

</body>
</html>