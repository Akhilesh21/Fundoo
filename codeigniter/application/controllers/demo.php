<?php
if($_SERVER['REQUEST_METHOD']=="GET")
{
    echo "Hello world";
}else if($_SERVER['REQUEST_METHOD']=="POST"){
    echo "hello post";
}else{
    http_response_code(405);
}

?>