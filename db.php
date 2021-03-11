<?php
    define("hostname","localhost");
    define("user","Golf");
    define("password","XjM7zhOoVfCD0ub8");
    define("dbname","bookstore");

?>

<?php

    $conn=new mysqli(hostname,user,password,dbname);
    if(!$conn) die ("ติดต่อฐานข้อมูลไม่ได้".$conn-> connection);
    else echo"DB connected";
    
?>