<?php
echo "Enter the price :";
$price = readline();
$vprice = filter_var($price, FILTER_VALIDATE_FLOAT);
if ($vprice) {
    echo "price is valid " . $vprice . "\n";
} else {
    echo "Invalid Price\n";
}
