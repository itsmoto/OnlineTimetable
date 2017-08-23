<?php
session_start();
include '../config/config.php';
include '../config/dbselect.php';
if (isset($_SESSION['username']) && isset($_SESSION['role_id'])&& $_SESSION['role_id'] == '1') {
     
}  else {
    header( 'Location: ../login.php' );
}
                    $id  = @mysqli_real_escape_string($link,$_GET['id']);
                       $sql = "SELECT * FROM `login` where id = $id";
                       if($_SESSION['id'] != $id){
                       $result = mysqli_query($link, $sql);
                       if($result){
                             if(mysqli_num_rows($result)==1){
                                 $res =mysqli_query($link, "DELETE FROM `login` WHERE id= $id");
                                 if ($res) {
                                       header('location: remove_account.php');            
                                 } else {
                                      header('location: remove_account.php');             
                                 }  
                       }  else {
                             header('location: remove_account.php');            
                       }
                       
                                 }

                       }  else {
                           header('location: remove_account.php');            
}