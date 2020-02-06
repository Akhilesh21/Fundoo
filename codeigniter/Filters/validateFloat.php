<?php
echo "Enter the price";
$price =  readline();
$vprice = filter_var($price, FILTER_VALIDATE_FLOAT);
if($vprice == FALSE)
?>