<?php
echo "Enter the email: ";
$email = readline();
//$email =  "akhilesh////*****@gmail.com";
$semail = filter_var($email, FILTER_SANITIZE_EMAIL);
$vemail = filter_var($semail, FILTER_VALIDATE_EMAIL);
if($vemail){
    echo "valid and sanitized email: ".$vemail."\n";
}else{
    echo "Invalid email";
}
?>