<?php 


    $name='';

    if(isset($_COOKIE['cup'])){
        $name = $_COOKIE['cup'];
    } else{
    setcookie("cup", "coffee", time()+ (86400 * 30), "/"); //86400 = 1day
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
        echo $_COOKIE["cup"];
     ?>

</body>
</html>