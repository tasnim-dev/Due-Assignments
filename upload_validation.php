<?php
    
    if(isset ($_POST['submit'])){
        $target_file ="upload/" . basename($_FILES['frozen']['name']);
        
        $actualOrFake = getimagesize($_FILES['frozen'] ['tmp_name']);
            if($actualOrFake !== false){
                echo "File is ".$actualOrFake['mime'] ;
                //file exist or not
                if(file_exists($target_file)){
                    echo "Sorry! File is already exists.<br>";
                } else{
                    //limit file size
                    if($_FILES['frozen']['size'] > 500000){
                        echo "Sorry! Your file is too large.<br>";
                    } else {
                        //set image file type
                        $imgFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        if($imgFileType != 'jpg' && $imgFileType != 'jpeg' && $imgFileType != 'png' 
                            && $imgFileType != 'gif') {
                                echo "Sorry! File type not allowed.<br>";
                            } else{
                                //file uploading
                                move_uploaded_file($_FILES['frozen']['tmp_name'], $target_file);
                            }
                    }  
                } 
                } else {
                        echo "Sorry, File is not valid!<br>";
                    }
            
    } 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="frozen">
        <input type="submit" value="upload" name="submit">
    </form>
    
</body>
</html>