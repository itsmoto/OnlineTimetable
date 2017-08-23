<?php
session_start();
include '../config/config.php';
include '../config/dbselect.php';
include '../phpFunction/getdatafromdb.php';

$levofstudy = @ mysqli_real_escape_string($link,$_REQUEST['levelofstudy']);

 
$exec = mysqli_query($link,"SELECT * FROM program_and_course WHERE level_of_study='$levofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)");
 
if(mysqli_num_rows($exec)>0){ 
    while ($row = mysqli_fetch_array($exec)){
         echo '<option value="'.$row['program'].'">'.$row['program'].'</option>'; } mysqli_close($link);    
}  else {
    echo '<br>hakuna';
}

?>

