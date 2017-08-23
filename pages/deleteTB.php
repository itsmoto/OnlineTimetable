<?php
session_start();
include '../config/config.php';
include '../config/dbselect.php';
include '../phpFunction/getdatafromdb.php';
if (isset($_SESSION['username']) && isset($_SESSION['role_id'])&& $_SESSION['role_id'] == '1') {
     
}  else {
    header( 'Location: ../login.php' );
}


$year_of_timetable = @$_GET['year_of_timetable'];
$drafts = @$_GET['drafts'];

$sql_check="SELECT * FROM name_of_timetable WHERE year_of_timetable='$year_of_timetable' AND drafts='$drafts'";

$result_check = mysqli_query($link, $sql_check);
if($result_check){
if(mysqli_num_rows($result_check)>0){

$sql = "DELETE FROM name_of_timetable WHERE year_of_timetable='$year_of_timetable' AND drafts='$drafts';";
$sql .= "DELETE FROM program_and_course WHERE year_of_timetable='$year_of_timetable' AND drafts='$drafts';";
$sql .= "DELETE FROM activetime WHERE year_of_timetable='$year_of_timetable' AND drafts='$drafts'";

$result = mysqli_multi_query($link, $sql);
    if($result){        mysqli_close($link);
                header("location: listoftimetable.php");}  else {
    echo 'Error: '.  mysqli_errno($link);mysqli_close($link);
}

}  else {
    echo 'Time table to be deleted not found..<br> redirecting automatically'; mysqli_close($link);   
}
}  else {
    echo 'Error: '.  mysqli_error($link);  
    mysqli_close($link);
}
mysqli_close($link);