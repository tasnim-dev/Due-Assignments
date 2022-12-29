<?php

    $bDay=mktime(12,00,00,07,07,1996);//mktime(hour,min,sec,month,day,year)
    echo "Birthday is " . date("Y-m-d h:i:sa",$bDay);


?>
<br>
<?php

    $dob='1996-07-07';
    $year = (date('Y') - date('Y',strtotime($dob)));

    echo $year;
?>