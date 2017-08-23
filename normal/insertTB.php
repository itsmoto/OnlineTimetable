<?php
session_start();
        include '../config/config.php';
        include '../config/dbselect.php';
        include '../phpFunction/getdatafromdb.php';
if (isset($_SESSION['username']) && isset($_SESSION['role_id'])&& $_SESSION['role_id'] == '2') {
     
}  else {
    header( 'Location: ../login.php' );
}

$ref  = @mysqli_real_escape_string($link,$_GET['ref']);
$token= @mysqli_real_escape_string($link,$_GET['token']);
$result = mysqli_query($link, "SELECT levelofstudy, program,yearofstudy FROM accessed_timetable WHERE ref='$ref' AND token='$token'");
if($result){ $article_height ='';
        $div_diplay_error_msg = '';
        $display_none = "";
   if(mysqli_num_rows($result)==1){
        while ($row = mysqli_fetch_array($result)) {
            $levelofstudy  = $row['levelofstudy'];
            $program       = $row['program'];
            $yearofstudy   = $row['yearofstudy'];
     }
}else{
        $article_height ='style="height: 400px;"';
        $div_diplay_error_msg = '<div> <h3>Opps An error Occur... You are automatically redirected to <a href="./selectCourseToenter.php">Select TimeTable</a> page.</h3></div>';
        $display_none = "display: none;";
        header("refresh:5; ./selectCourseToenter.php");
    }      
   }else{
       echo mysqli_error($link);
}


?>

<!DOCTYPE html>

<html>
<?php
include '../templates/head_tag.php';
?>

    <body>

<?php
include '../templates/header.php';
?>
        <article <?php echo $article_height;?>>
                <div class="row">
                <div class="col-md-3">
                    <?php
                    $insert_TT = 'active';
                    include '../templates/main_nav_for_normal.php'; ?>
                </div>
                <div class="col-md-8">
          

                        <?php
             
                                
                            

if($res101 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=101 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row101 = mysqli_fetch_array($res101);
       
    
}
if($res102 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=102 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row102 = mysqli_fetch_array($res102);
       
    
}if($res103 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=103 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row103 = mysqli_fetch_array($res103);
       
    
}if($res104 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=104 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row104 = mysqli_fetch_array($res104);
 }if($res105 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=105 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row105 = mysqli_fetch_array($res105);
 }
   if($res106 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=106 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row106 = mysqli_fetch_array($res106);
 }
   if($res107 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=107 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row107 = mysqli_fetch_array($res107);
 }
   if($res108 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=108 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row108 = mysqli_fetch_array($res108);
 }
   if($res109 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=109 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row109 = mysqli_fetch_array($res109);
 }
   if($res110 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=110 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row110 = mysqli_fetch_array($res110);
 }
   if($res111 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=111 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row111 = mysqli_fetch_array($res111);
 }
   if($res112 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=112 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row112 = mysqli_fetch_array($res112);
 }
   if($res113 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=113 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row113 = mysqli_fetch_array($res113);
 }
   if($res114 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=114 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row114 = mysqli_fetch_array($res114);
 }
   if($res115 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=115 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row115 = mysqli_fetch_array($res115);
 }
   if($res116 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=116 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row116 = mysqli_fetch_array($res116);
 }
   if($res117 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=117 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row117 = mysqli_fetch_array($res117);
 }
   if($res118 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=118 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row118 = mysqli_fetch_array($res118);
 }
   if($res119 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=119 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row119 = mysqli_fetch_array($res119);
 }
   if($res120 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=120 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row120 = mysqli_fetch_array($res120);
 }
   if($res121 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=121 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row121 = mysqli_fetch_array($res121);
 }
   if($res122 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=122 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row122 = mysqli_fetch_array($res122);
 }
   if($res123 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=123 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row123 = mysqli_fetch_array($res123);
 }
   if($res124 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=124 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row124 = mysqli_fetch_array($res124);
 }
   if($res125 = mysqli_query($link, "SELECT course,venue,lecturer FROM `activetime` WHERE days=125 AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)")){
    
    $row125 = mysqli_fetch_array($res125);
 }
mysqli_close($link);  
                        ?>
<center>
                     <?php echo $div_diplay_error_msg;?>
                     <div style="<?php echo $display_none;?>" class=" bg-white">
                     <center>  <div class=" timetable-head"> 
                             TIME TABLE FOR <?php echo strtoupper($program).' - '.strtoupper($yearofstudy);?>
                         </div>
                     </center>
                         <form method="post" action="<?php echo htmlspecialchars("insertDataIntoTB.php?ref=".$ref."&token=".$token);?>">
                             <div class=" box-part">
                                  <div ><h4>MONDAY</h4></div>
                             <table class="table table-responsive table-bordered table-striped table-hover">
                            <thead>
                            <tr >
                                <th>Time</th><th>Course</th><th>Venue</th><th>Lecturer</th>
                            </tr>
                            </thead>
                            <tbody
                            <tr>
                                <td >0700-0900</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control" name="course101" value="<?php echo $row101['course']; ?>"></td><td ><input  placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue101" value="<?php echo $row101['venue']; ?>"></td><td ><input placeholder="Lecturer" type="text" class="form-control" class="form-control"   name="lecturer101" value="<?php echo $row101['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >0900-1100</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control"  name="course102"  value="<?php echo $row102['course']; ?>"></td><td ><input  placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue102" value="<?php echo $row102['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"   name="lecturer102" value="<?php echo $row102['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >1100-1300</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control"  name="course103"  value="<?php echo $row103['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control" name="venue103"  value="<?php echo $row103['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"   name="lecturer103" value="<?php echo $row103['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >1500-1700</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control" name="course104"  value="<?php echo $row104['course']; ?>" ></td><td ><input  placeholder="Venue"  type="text" class="form-control" class="form-control" name="venue104"  value="<?php echo $row104['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"   name="lecturer104" value="<?php echo $row104['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >1700-1900</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control"  name="course105"  value="<?php echo $row105['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue105" value="<?php echo $row105['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"   name="lecturer105" value="<?php echo $row105['lecturer']; ?>"></td>
                            </tr>
                         </tbody>
                        </table>
                             </div>
                             
                          <div class=" box-part">
                                  <div ><h4>TUESDAY</h4></div>
                             <table class="table table-responsive table-bordered table-striped table-hover">
                            <thead>
                            <tr >
                                <th>Time</th><th>Course</th><th>Venue</th><th>Lecturer</th>
                            </tr>
                            </thead>
                            <tbody
                              <tr>
                                  <td >0700-0900</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control"  name="course106"  value="<?php echo $row106['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control" name="venue106" value="<?php echo $row106['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"  name="lecturer106"  value="<?php echo $row106['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >0900-1100</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control"  name="course107"  value="<?php echo $row107['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue107" value="<?php echo $row107['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"  name="lecturer107"  value="<?php echo $row107['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >1100-1300</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control" name="course108"   value="<?php echo $row108['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control" name="venue108"  value="<?php echo $row108['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"   name="lecturer108" value="<?php echo $row108['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >1500-1700</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control"  name="course109"  value="<?php echo $row109['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue109" value="<?php echo $row109['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"   name="lecturer109" value="<?php echo $row109['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >1700-1900</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control" name="course110"   value="<?php echo $row110['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue110" value="<?php echo $row110['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"   name="lecturer110" value="<?php echo $row110['lecturer']; ?>"></td>
                            </tr>
                            </tbody>
                             </table>
                          </div>
                              
                             <div class=" box-part">
                                  <div ><h4>WENDSDAY </h4></div>
                             <table class="table table-responsive table-bordered table-striped table-hover">
                            <thead>
                            <tr >
                                <th>Time</th><th>Course</th><th>Venue</th><th>Lecturer</th>
                            </tr>
                            </thead>
                            <tbody
                              <tr>
                                  <td >0700-0900</td><td ><input  placeholder="Course" type="text" class="form-control" class="form-control" name="course111"   value="<?php echo $row111['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control" name="venue111" value="<?php echo $row111['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"  name="lecturer111" value="<?php echo $row111['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >0900-1100</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control" name="course112"   value="<?php echo $row112['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue112"  value="<?php echo $row112['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"  name="lecturer112" value="<?php echo $row112['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >1100-1300</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control"  name="course113"  value="<?php echo $row113['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue113" value="<?php echo $row113['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"  name="lecturer113" value="<?php echo $row113['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >1500-1700</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control"  name="course114"  value="<?php echo $row114['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue114" value="<?php echo $row114['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"  name="lecturer114" value="<?php echo $row114['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >1700-1900</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control"  name="course115"  value="<?php echo $row115['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue115" value="<?php echo $row115['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"  name="lecturer115" value="<?php echo $row115['lecturer']; ?>"></td>
                            </tr>
                            </tbody>
                             </table>
                             </div>
                           
                               <div class=" box-part">
                                  <div ><h4>THURSDAY </h4></div>
                             <table class="table table-responsive table-bordered table-striped table-hover">
                            <thead>
                            <tr >
                                <th>Time</th><th>Course</th><th>Venue</th><th>Lecturer</th>
                            </tr>
                            </thead>
                            <tbody   
                                  
                              <tr>
                                <td >0700-0900</td><td ><input  placeholder="Course" type="text" class="form-control" class="form-control"  name="course116"  value="<?php echo $row116['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue116" value="<?php echo $row116['venue']; ?>"></td><td ><input  placeholder="Lecturer"  type="text" class="form-control" class="form-control"  name="lecturer116" value="<?php echo $row116['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >0900-1100</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control"  name="course117"  value="<?php echo $row117['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue117"  value="<?php echo $row117['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"  name="lecturer117" value="<?php echo $row117['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >1100-1300</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control"  name="course118"  value="<?php echo $row118['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue118" value="<?php echo $row118['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control" name="lecturer118"  value="<?php echo $row118['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >1500-1700</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control"  name="course119"  value="<?php echo $row119['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue119"  value="<?php echo $row119['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"  name="lecturer119" value="<?php echo $row119['lecturer']; ?>" ></td>
                            </tr>
                            <tr>
                                <td >1700-1900</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control"  name="course120"  value="<?php echo $row120['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue120" value="<?php echo $row120['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"  name="lecturer120" value="<?php echo $row120['lecturer']; ?>"></td>
                            </tr>
                            </tbody>
                             </table>
                               </div>      
                            
                            <div class=" box-part">
                                  <div ><h4> FRIDAY </h4></div>
                             <table class="table table-responsive table-bordered table-striped table-hover">
                            <thead>
                            <tr >
                                <th>Time</th><th>Course</th><th>Venue</th><th>Lecturer</th>
                            </tr>
                            </thead>
                            <tbody
                              <tr>
                                <td >0700-0900</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control"  name="course121"   value="<?php echo $row121['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue121" value="<?php echo $row121['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control" name="lecturer121"  value="<?php echo $row121['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >0900-1100</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control" name="course122"   value="<?php echo $row122['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue122"  value="<?php echo $row122['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"  name="lecturer122" value="<?php echo $row122['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >1100-1300</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control" name="course123"   value="<?php echo $row123['course']; ?>"></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue123" value="<?php echo $row123['venue']; ?>"></td><td ><input placeholder="Lecturer"  type="text" class="form-control" class="form-control"  name="lecturer123" value="<?php echo $row123['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >1500-1700</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control" name="course124"  value="<?php echo $row124['course']; ?>" ></td><td ><input placeholder="Venue"  type="text" class="form-control" class="form-control"  name="venue124" value="<?php echo $row124['venue']; ?>"></td><td ><input  placeholder="Lecturer"  type="text" class="form-control" class="form-control"  name="lecturer124" value="<?php echo $row124['lecturer']; ?>"></td>
                            </tr>
                            <tr>
                                <td >1700-1900</td><td ><input placeholder="Course" type="text" class="form-control" class="form-control"  name="course125" value="<?php echo $row125['course']; ?>" ></td><td ><input placeholder="Venue" type="text" class="form-control" class="form-control"  name="venue125" value="<?php echo $row125['venue']; ?>"></td><td ><input  placeholder="Lecturer"  type="text" class="form-control" class="form-control" name="lecturer125" value="<?php echo $row125['lecturer']; ?>"></td>
                            </tr> 
                            </tbody>
                             </table>
                            </div>
                        <button class="btn btn-block btn-timetable" type="submit" name="btn-update" >
                            Insert/Fill
                        </button>
                        </form>
                     <br>   
                 </div> </center><br><br>
                    
                 </div>
                </div>
                </article>
<?php
include '../templates/footer.php';
