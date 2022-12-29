<?php 


    $counter= $_COOKIE['counter'] ?? '';
    $counter++;

    setcookie("counter", $counter, time()+ (86400 * 30), '/');

    if(isset($_COOKIE['counter'])){
        $counter += $_COOKIE['counter'];
    } else{

    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie</title>
</head>
<body>
    
    <?php
        echo "Visitors :".$counter;
     ?>

</body>
</html>