<?php
session_start();
include '../config/config.php';
include '../config/dbselect.php';
include '../phpFunction/getdatafromdb.php';
if (isset($_SESSION['username']) && isset($_SESSION['role_id'])&& $_SESSION['role_id'] == '1') {
     
}  else {
    header( 'Location: ../login.php' );
}

$year_of_timetable = @mysqli_real_escape_string($link, $_GET['year_of_timetable']);
$drafts = @mysqli_real_escape_string($link, $_GET['drafts']);
$sql_check = "SELECT * FROM name_of_timetable WHERE year_of_timetable='$year_of_timetable' AND drafts='$drafts'";

$result_check = mysqli_query($link, $sql_check);
if ($result_check) {
    if (mysqli_num_rows($result_check) > 0) {

        $row = mysqli_fetch_assoc($result_check);
        if ($row['status'] == 1) {
            $sql_update_off = "UPDATE name_of_timetable SET status =0 WHERE  year_of_timetable='$year_of_timetable' AND drafts='$drafts'";
            if (mysqli_query($link, $sql_update_off)) {
;
                mysqli_close($link);
                header("refresh:3; listoftimetable.php");
                die('Please wait...');
            } else {
                echo 'Error: ' . mysqli_errno($link);
                mysqli_close($link);
            }
        } elseif ($row['status'] == 0) {
            $sql_update_on = "UPDATE name_of_timetable SET status =0 WHERE  status=1;";
            $sql_update_on .= "UPDATE name_of_timetable SET status = 1 WHERE  year_of_timetable='$year_of_timetable' AND drafts='$drafts'";
            if (mysqli_multi_query($link, $sql_update_on)) {
                mysqli_close($link);
                header("refresh:3; listoftimetable.php");
                die('Please wait...');
            } else {
                echo 'Error: ' . mysqli_errno($link);
                mysqli_close($link);
            }
        }
    } else {
        echo 'Time table to be deleted not found..<br> redirecting automatically';
        mysqli_close($link);
    }
} else {
    echo 'Error: ' . mysqli_errno($link);
    mysqli_close($link);
}