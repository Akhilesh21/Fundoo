<?php
echo "Enter email address: ";
$email = readline();
$vemail = filter_var($email, FILTER_VALIDATE_EMAIL);
