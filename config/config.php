<?php

$server = "localhost";
$user = "root";
$pass= "";


$link = mysqli_connect($server, $user, $pass);

if($link==FALSE){
    
    die("Could not connect to Database. Error: ".  mysqli_connect_error($link));
}

?>