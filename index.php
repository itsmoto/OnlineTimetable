<?php
session_start();
include 'config/config.php';
include 'config/dbselect.php';
include './phpFunction/getdatafromdb.php';
 $timetable = year_and_draft_array();
 $error_msg = '';
                       $sql = "SELECT * FROM `show_hide_admin`";
                     $result = mysqli_query($link, $sql);
			if($result){
                           $row = mysqli_fetch_assoc($result);
			if($row['show_hide']==1){ // $true_false = 'true'; $disabled = ''; 						   
					   $sql1= "SELECT * FROM name_of_timetable WHERE status=1";         
					   $result1 = mysqli_query($link, $sql1);
                       if($result1){					   
                       if(mysqli_num_rows($result1)==1){  $true_false = 'true'; $disabled = ''; }  
					   else {  $true_false = 'false'; $disabled = 'disabled'; 
                                    
              $error_msg = '      <div class="error">You cant access the TimeTable right now....</div>';
                     
                       }  
                       }  else {
                           echo 'Error: query:-'.$sql1.'. type of error:- '.  mysqli_error($link);                           
}						  						   
						   }  else {  $true_false = 'false'; $disabled = 'disabled'; 
                                                
                  $error_msg = '  <div class="error">TimeTable has not yet been published....</div>';
}                          
                       }  else {
                           echo 'Error: '.  mysqli_error($link);                           
}              
                       
                                //<!---------------------->
                        
                            if(isset($_GET['btn-View'])){
                            $levelofstudy = @$_GET['levelofstudy'];
                            $yearofstudy  = @$_GET['yearofstudy'];
                            $program      = @$_GET['program'];
                            
                            if($levelofstudy==""){
                                
                           $error_msg = ' <div class="error">Failed: select level of study</div>';
                               
                            } else {
                               if($program==""){
                           
                          $error_msg = '  <div class="error"> Failed: select program  </div>';
                           
                               } else {
                               if($yearofstudy==""){
                         
                          $error_msg = '  <div class="error"> Failed: select year   </div> ';
                             
                               }else{  $ref = substr(md5("BABA".time()),0,10);
                                       $token = substr(md5(time()."MAMA"),0,10);                                      
                                       $sql = "INSERT INTO accessed_timetable ( levelofstudy, 	yearofstudy, program, ref, token) VALUES ('$levelofstudy','$yearofstudy','$program','$ref','$token')";
                                       $result =  mysqli_query($link,$sql);
                                       if ($result){
                                       
                                       header("location: view.php?ref=".$ref."&token=".$token."");
                                       }}
                     
                                   }
                         }
                            }
                            ?> 
<html>           
    <?php include './templates/head_tag_for_index.php';
    ?>
    <body>
         <?php include './templates/header_for_index.php';
    ?>
<article>    
    <div class=" row">
        <div class=" col-md-4 col-md-offset-4">
                <div class="bg-white">                                       
                    <div class="timetable-head text-center"><b>TIME TABLE <?php echo '('.(isset($timetable['year'])?$timetable['year']:'1999/2000').') - '.strtoupper((isset($timetable['drafts'])?$timetable['drafts']:'Firstdraft'));?></b></div>
                    <?php echo $error_msg; ?>   
                    <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                               <div class=" form-group">
                                   <select id="levelofstudy" name="levelofstudy" <?php echo $disabled; ?> class="form-control">
                                          <option value="" disabled selected>Level of study</option>
                                            <option value="certificate">Certificate</option>
                                            <option  value="diploma">Diploma</option>
                                            <option  value="undergraduate">Undergraduate</option>
                                            <option  value="postgraduate">Postgraduate</option>
                                        </select>
                               </div>
                               <div class=" form-group">
                                   <select id="SelectaddOption" name="yearofstudy" class=" form-control">
                                            <option value="0" disabled selected>Year of study</option>
                                           
                                        </select>
                               </div>
                               <div class=" form-group">
                                   <select name="program" id="SelectCourse" class=" form-control" >
                                            <option value="0" disabled selected>Select Program</option>
                                        </select>
                               </div>
                        
                               <div class=" form-group">
                                   <button type="submit" name="btn-View" value="on" id="btn" onclick=" return <?php echo $true_false; ?>" class=" btn btn-block btn-timetable"> 
                                       <i class=" glyphicon glyphicon-eye-open"></i>  View
                                   </button>
                               </div>
                           </form> 
</div>
</div>
</div>
   
   
                </article>
          
                
            <div class="clear"></div>
     
         <?php
 include './templates/footer_for_index.php';
