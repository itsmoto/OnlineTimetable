<?php
session_start();
if(isset($_SESSION['username'])){
  
    session_destroy();
    header("location: ./login.php");
}  else {
    die("<h2>Error: Internal error try again later!!!</h2>");
}
