<?php
session_start();
include '../config/config.php';
include '../config/dbselect.php';
if (isset($_SESSION['username']) && isset($_SESSION['role_id'])&& $_SESSION['role_id'] == '1') {
     
}  else {
    header( 'Location: ../login.php' );
}

                       $sql = "SELECT * FROM `show_hide_admin`";
                       
                       $result = mysqli_query($link, $sql);
                       if($result){
                           
                           $row = mysqli_fetch_assoc($result);
                     
    if($row['show_hide']==1){  
        $sql1 = "UPDATE `show_hide_admin` SET `show_hide` =0 WHERE `show_hide` = 1";
        $result = mysqli_query($link, $sql1); 
    if(!$result){ echo 'Error: '.  mysqli_error($link);}
        mysqli_close($link);        header("location: show_hide.php");} 
    else {  
        $sql2 = "UPDATE `show_hide_admin` SET `show_hide` =1 WHERE `show_hide` = 0";
        $result = mysqli_query($link, $sql2);

    if(!$result){ echo 'Error: '.  mysqli_error($link);}
        
        mysqli_close($link); 
         header("location: show_hide.php");
}
 }  else {
        echo 'Error: '.  mysqli_error($link);                           
}
                       
                       ?>
