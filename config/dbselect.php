<?php

$database_name = "onlinetimetable";

$dbSelect = mysqli_select_db($link,$database_name);

if($dbSelect==FALSE){
    
    die("Could not select the Database. Error: ".mysql_error($link));
    
}

?>
