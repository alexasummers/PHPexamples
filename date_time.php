<!DOCTYPE html>
<html>
<body>
<?php

date_default_timezone_set('America/Chicago'); //Set the time zone to be central time

$date_1=date("M d, Y"); //ex: Oct 28, 2014
$date_2=date("l, F d, Y"); //ex: Tuesday, October 28, 2014
$date_time_1=date("l, F d, Y g:i:s A"); //ex: Tuesday, October 28, 2014 6:24:20 PM
$date_time_2=date("l, F d, Y G:i:s"); //ex: Tuesday, October 28, 2014 18:24:20  

if(checkdate(2,30,2004)) //checks if the given date (month,day,year) is valid
        echo "date is valid";
else
    echo "date is invalid ";
        

echo " $date_1 | ";
echo " $date_2 | ";
echo " $date_time_1 | ";
echo " $date_time_2 ";

 
?>


</body>
</html>
