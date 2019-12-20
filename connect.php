<?php
    //1.Connect server
    $conn = new mysqli("localhost","root","12345678","usercar-003-2") ;
    if($conn->connect_errno){
        die("Connect failed: ".$conn->connect_error);
    }
?>