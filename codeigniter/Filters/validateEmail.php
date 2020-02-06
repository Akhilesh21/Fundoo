<?php
echo "Enter email address: ";
$email = readline();
$vemail = filter_var($email, FILTER_VALIDATE_EMAIL);
if($vemail == FALSE){
    echo "Invalid Email \n";
}else{
    echo "Email is Valid ". $vemail ."\n";
}
?>