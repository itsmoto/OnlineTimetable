<?php
session_start();
include '../config/config.php';
include '../config/dbselect.php';
include '../phpFunction/getdatafromdb.php';
if (isset($_SESSION['username']) && isset($_SESSION['role_id'])&& $_SESSION['role_id'] == '2') {
     
}  else {
    header( 'Location: ../login.php' );
}

$timetable = year_and_draft_array();
$error_msg = '';

                       $sql = "SELECT * FROM `name_of_timetable` WHERE status=1";
                       $result = mysqli_query($link, $sql);
                       if ($result){
                            if(mysqli_num_rows($result)==1){
                            $true_false = 'true'; $disabled = '';                       
                            } 
                            else{
                            $true_false = 'false'; 
                            $disabled = 'disabled'; 
                            
           $error_msg = '<div class="error">It seems like none of time table has been switched on. Contact administrator to switch On the TimeTable.</div>';
                            
                            mysqli_close($link);
                                }                           
                              }else{
                                  mysqli_error($link);
                              }
                      
                            if(isset($_POST['btn-edit'])){
                            $levelofstudy =  @$_POST['levelofstudy'];
                            $yearofstudy  =  @$_POST['yearofstudy'];
                            $program      =  @$_POST['program'];
                            
                            if($levelofstudy==""){
                          
                                $error_msg = '<div class="error">Failed: Select level of study</div>';                    
                           
                            }else {
                               if($program==""){
                          
                               $error_msg = ' <div class="error">Failed: Select program </div>';
                         
                            }else {
                            if($yearofstudy==""){
                                   
                               $error_msg = ' <div class="error"> Failed: Select year</div>';
                                   
                            }else{
                                $sql = "SELECT * FROM `activetime` WHERE level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)";
                                $exe = mysqli_query($link,$sql);
                                if($exe){
                                        if(mysqli_num_rows($exe)==25){
                                            $ref = substr(md5("BABA".time()),0,10);
                                            $token = substr(md5(time()."MAMA"),0,10);                                      
                                            $sql = "INSERT INTO accessed_timetable ( levelofstudy,yearofstudy,program, ref, token) VALUES ('$levelofstudy','$yearofstudy','$program','$ref','$token')";
                                            $result =  mysqli_query($link,$sql);
                                            if($result){
                                           //kiporo bado hakifanyi kazi
                                            header("location: ./insertTB.php?ref=".$ref."&token=".$token."");
                                            }
                                            }else{
                                            $count = 101;
                                            while($count<126){
                                            $time = returnTime($count);   
                                            $sql_create_25rows = "INSERT INTO activetime(yearofstudy, program, days , time , year_of_timetable, drafts, level_of_study) Values('$yearofstudy','$program','$count','$time',(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1),(SELECT drafts FROM `name_of_timetable` WHERE status = 1),'$levelofstudy')";
                                            mysqli_query($link,$sql_create_25rows);
                                            $count++;
                                            }
                                            $ref = substr(md5("BABA".time()),0,10);
                                            $token = substr(md5(time()."MAMA"),0,10);                                      
                                            $sql = "INSERT INTO accessed_timetable (levelofstudy,yearofstudy,program, ref, token) VALUES ('$levelofstudy','$yearofstudy','$program','$ref','$token')";
                                            $result =  mysqli_query($link,$sql);
                                            if($result){
                                            $_SESSION['link_session']= $ref; //kiporo bado hakifanyi kazi
                                            header("location: ./insertTB.php?ref=".$ref."&token=".$token."");
                                            }
                                            }
                                        }                     
                                }
                                  }
                            }}
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
        <article>
                <div class="row">
                <div class="col-md-3">
                    <?php
                    $insert_TT = 'active';
                    include '../templates/main_nav_for_normal.php'; ?>
                </div>
                <div class="col-md-5 col-md-offset-1">

                        
                    <div class="bg-white">
                            <div class="timetable-head ">MODIFY TIME TABLE <?php echo '('.(isset($timetable['year'])?$timetable['year']:'1999/2000').') - '.strtoupper((isset($timetable['drafts'])?$timetable['drafts']:'Firstdraft'));?></div>
                            <center> 
                                <?php echo $error_msg;?>
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                                
                           
                                <div class=" form-group">
                                        <select id="levelofstudy" name="levelofstudy" <?php echo $disabled;?> class=" form-control" >
                                          <option value="" disabled selected>Level of study</option>
                                            <option value="certificate">Certificate</option>
                                            <option  value="diploma">Diploma</option>
                                            <option  value="undergraduate">Undergraduate</option>
                                            <option  value="postgraduate">Postgraduate</option>
                                        </select>
                                    </div>
                               
                                <div class=" form-group">
                                        <select id="SelectaddOption" name="yearofstudy" class=" form-control">
                                            <option disabled selected>Year of study</option>
                                           
                                        </select>
                                    </div>
                                
                                <div class=" form-group">
                                    <select name="program" id="SelectCourse" class=" form-control" >
                                            <option disabled selected>Select Program</option>
                                        </select>
                                    </div>
                                <div class=" form-group">
                                    <button type="submit" value="Edit" name="btn-edit" id="btn" class=" btn btn-block btn-timetable" onclick="return <?php echo $true_false;?>">
            <i class=" glyphicon glyphicon-edit"></i> 
                                        Insert/Fill
        </button>
                                </div>
                        </form>
                            
                            <script type="text/javascript">
                                
                                $('#levelofstudy').change(function(){
                                    
                                $("#SelectCourse").empty(); 
                                
                                    var LOFSTUDY = $('#levelofstudy option:selected').text();

                                  $.post('ajax.php',{levelofstudy:LOFSTUDY},function(result){
                                      var opt = "<option disabled selected>Select program</option>";
                                        $("#SelectCourse").append(opt,result);
                                      //$('#SelectCourse').html(result).show();
                                  });
                                });
                            </script>
           </center>         </div>

                 
      
                </div>
                </div>
                </article>
<?php
include '../templates/footer.php';


