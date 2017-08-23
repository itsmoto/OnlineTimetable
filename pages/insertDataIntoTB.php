<?php
session_start();
include '../config/config.php';
include '../config/dbselect.php';
include '../phpFunction/getdatafromdb.php';
if (isset($_SESSION['username']) && isset($_SESSION['role_id'])&& $_SESSION['role_id'] == '1') {
     
}  else {
    header( 'Location: ../login.php' );
}
$ref  = @mysqli_real_escape_string($link,$_GET['ref']);
$token= @mysqli_real_escape_string($link,$_GET['token']);
$result1 = mysqli_query($link, "SELECT levelofstudy, program,yearofstudy FROM accessed_timetable WHERE ref='$ref' AND token='$token'");
if($result1){
   if(mysqli_num_rows($result1)==1){
        while ($row = mysqli_fetch_array($result1)) {
            $levelofstudy  = $row['levelofstudy'];
            $program       = $row['program'];
            $yearofstudy   = $row['yearofstudy'];
 }
}else {
    header('refresh:3; selectCourseToenter.php');
     exit('Error: No TimeTable found...');
}      
   }else{
       echo mysqli_error($link);       
       exit();
}

                            
$course101 = @mysqli_real_escape_string($link,$_POST['course101']); $venue101 = @mysqli_real_escape_string($link,$_POST['venue101']); $lecturer101 = @mysqli_real_escape_string($link,$_POST['lecturer101']);
$course102 = @mysqli_real_escape_string($link,$_POST['course102']); $venue102 = @mysqli_real_escape_string($link,$_POST['venue102']); $lecturer102 = @mysqli_real_escape_string($link,$_POST['lecturer102']);
$course103 = @mysqli_real_escape_string($link,$_POST['course103']); $venue103 = @mysqli_real_escape_string($link,$_POST['venue103']); $lecturer103 = @mysqli_real_escape_string($link,$_POST['lecturer103']);
$course104 = @mysqli_real_escape_string($link,$_POST['course104']); $venue104 = @mysqli_real_escape_string($link,$_POST['venue104']); $lecturer104 = @mysqli_real_escape_string($link,$_POST['lecturer104']);
$course105 = @mysqli_real_escape_string($link,$_POST['course105']); $venue105 = @mysqli_real_escape_string($link,$_POST['venue105']); $lecturer105 = @mysqli_real_escape_string($link,$_POST['lecturer105']);
$course106 = @mysqli_real_escape_string($link,$_POST['course106']); $venue106 = @mysqli_real_escape_string($link,$_POST['venue106']); $lecturer106 = @mysqli_real_escape_string($link,$_POST['lecturer106']);
$course107 = @mysqli_real_escape_string($link,$_POST['course107']); $venue107 = @mysqli_real_escape_string($link,$_POST['venue107']); $lecturer107 = @mysqli_real_escape_string($link,$_POST['lecturer107']);
$course108 = @mysqli_real_escape_string($link,$_POST['course108']); $venue108 = @mysqli_real_escape_string($link,$_POST['venue108']); $lecturer108 = @mysqli_real_escape_string($link,$_POST['lecturer108']);
$course109 = @mysqli_real_escape_string($link,$_POST['course109']); $venue109 = @mysqli_real_escape_string($link,$_POST['venue109']); $lecturer109 = @mysqli_real_escape_string($link,$_POST['lecturer109']);
$course110 = @mysqli_real_escape_string($link,$_POST['course110']); $venue110 = @mysqli_real_escape_string($link,$_POST['venue110']); $lecturer110 = @mysqli_real_escape_string($link,$_POST['lecturer110']);
$course111 = @mysqli_real_escape_string($link,$_POST['course111']); $venue111 = @mysqli_real_escape_string($link,$_POST['venue111']); $lecturer111 = @mysqli_real_escape_string($link,$_POST['lecturer111']);
$course112 = @mysqli_real_escape_string($link,$_POST['course112']); $venue112 = @mysqli_real_escape_string($link,$_POST['venue112']); $lecturer112 = @mysqli_real_escape_string($link,$_POST['lecturer112']);
$course113 = @mysqli_real_escape_string($link,$_POST['course113']); $venue113 = @mysqli_real_escape_string($link,$_POST['venue113']); $lecturer113 = @mysqli_real_escape_string($link,$_POST['lecturer113']);
$course114 = @mysqli_real_escape_string($link,$_POST['course114']); $venue114 = @mysqli_real_escape_string($link,$_POST['venue114']); $lecturer114 = @mysqli_real_escape_string($link,$_POST['lecturer114']);
$course115 = @mysqli_real_escape_string($link,$_POST['course115']); $venue115 = @mysqli_real_escape_string($link,$_POST['venue115']); $lecturer115 = @mysqli_real_escape_string($link,$_POST['lecturer115']);
$course116 = @mysqli_real_escape_string($link,$_POST['course116']); $venue116 = @mysqli_real_escape_string($link,$_POST['venue116']); $lecturer116 = @mysqli_real_escape_string($link,$_POST['lecturer116']);
$course117 = @mysqli_real_escape_string($link,$_POST['course117']); $venue117 = @mysqli_real_escape_string($link,$_POST['venue117']); $lecturer117 = @mysqli_real_escape_string($link,$_POST['lecturer117']);
$course118 = @mysqli_real_escape_string($link,$_POST['course118']); $venue118 = @mysqli_real_escape_string($link,$_POST['venue118']); $lecturer118 = @mysqli_real_escape_string($link,$_POST['lecturer118']);
$course119 = @mysqli_real_escape_string($link,$_POST['course119']); $venue119 = @mysqli_real_escape_string($link,$_POST['venue119']); $lecturer119 = @mysqli_real_escape_string($link,$_POST['lecturer119']);
$course120 = @mysqli_real_escape_string($link,$_POST['course120']); $venue120 = @mysqli_real_escape_string($link,$_POST['venue120']); $lecturer120 = @mysqli_real_escape_string($link,$_POST['lecturer120']);
$course121 = @mysqli_real_escape_string($link,$_POST['course121']); $venue121 = @mysqli_real_escape_string($link,$_POST['venue121']); $lecturer121 = @mysqli_real_escape_string($link,$_POST['lecturer121']);
$course122 = @mysqli_real_escape_string($link,$_POST['course122']); $venue122 = @mysqli_real_escape_string($link,$_POST['venue122']); $lecturer122 = @mysqli_real_escape_string($link,$_POST['lecturer122']);
$course123 = @mysqli_real_escape_string($link,$_POST['course123']); $venue123 = @mysqli_real_escape_string($link,$_POST['venue123']); $lecturer123 = @mysqli_real_escape_string($link,$_POST['lecturer123']);
$course124 = @mysqli_real_escape_string($link,$_POST['course124']); $venue124 = @mysqli_real_escape_string($link,$_POST['venue124']); $lecturer124 = @mysqli_real_escape_string($link,$_POST['lecturer124']);
$course125 = @mysqli_real_escape_string($link,$_POST['course125']); $venue125 = @mysqli_real_escape_string($link,$_POST['venue125']); $lecturer125 = @mysqli_real_escape_string($link,$_POST['lecturer125']);
                           
                            
                                     
 $sql  = "UPDATE `activetime` SET course='$course101',venue='$venue101',lecturer='$lecturer101' WHERE days=101 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course102',venue='$venue102',lecturer='$lecturer102' WHERE days=102 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course103',venue='$venue103',lecturer='$lecturer103' WHERE days=103 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course104',venue='$venue104',lecturer='$lecturer104' WHERE days=104 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course105',venue='$venue105',lecturer='$lecturer105' WHERE days=105 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course106',venue='$venue106',lecturer='$lecturer106' WHERE days=106 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course107',venue='$venue107',lecturer='$lecturer107' WHERE days=107 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course108',venue='$venue108',lecturer='$lecturer108' WHERE days=108 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course109',venue='$venue109',lecturer='$lecturer109' WHERE days=109 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course110',venue='$venue110',lecturer='$lecturer110' WHERE days=110 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course111',venue='$venue111',lecturer='$lecturer111' WHERE days=111 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course112',venue='$venue112',lecturer='$lecturer112' WHERE days=112 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course113',venue='$venue113',lecturer='$lecturer113' WHERE days=113 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course114',venue='$venue114',lecturer='$lecturer114' WHERE days=114 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course115',venue='$venue115',lecturer='$lecturer115' WHERE days=115 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course116',venue='$venue116',lecturer='$lecturer116' WHERE days=116 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course117',venue='$venue117',lecturer='$lecturer117' WHERE days=117 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course118',venue='$venue118',lecturer='$lecturer118' WHERE days=118 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course119',venue='$venue119',lecturer='$lecturer119' WHERE days=119 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course120',venue='$venue120',lecturer='$lecturer120' WHERE days=120 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course121',venue='$venue121',lecturer='$lecturer121' WHERE days=121 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course122',venue='$venue122',lecturer='$lecturer122' WHERE days=122 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course123',venue='$venue123',lecturer='$lecturer123' WHERE days=123 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
 $sql .= "UPDATE `activetime` SET course='$course124',venue='$venue124',lecturer='$lecturer124' WHERE days=124 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1);";
$sql .= "UPDATE `activetime` SET course='$course125',venue='$venue125',lecturer='$lecturer125' WHERE days=125 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)";

  
 $result = mysqli_multi_query($link, $sql);
 
 if ($result){
      header("refresh:5; insertTB.php?ref=".$ref."&token=".$token);
      echo 'Please wait...';
     //echo '<a href="insertTB.php?ref='.$ref.'&token='.$token.'">OK</a>';
 }  else {
     echo 'failed'.  mysqli_error($link);
 }
 
 