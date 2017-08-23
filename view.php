<?php
session_start();
include './config/config.php';
include './config/dbselect.php';
include './phpFunction/getdatafromdb.php';
$ref  = @mysqli_real_escape_string($link,$_GET['ref']);
$token= @mysqli_real_escape_string($link,$_GET['token']);
$result = mysqli_query($link, "SELECT levelofstudy, program,yearofstudy FROM accessed_timetable WHERE ref='$ref' AND token='$token'");
if($result){
    $div_diplay_error_msg = '';
    $article_height ='';
    if(mysqli_num_rows($result)==1){
        while ($row = mysqli_fetch_array($result)) {
            $levelofstud = $row['levelofstudy'];
            $prog        = $row['program'];
            $year        = $row['yearofstudy'];
     }
     if (checkIfTimeTableExist($levelofstud,$prog, $year)){
        $article_height ='style="height: 300px;"';
        $div_diplay_error_msg = '<div><h3>The time table has not yet been uploaded.. Come back later, go back <a href="../index.php">Home</a></h3></div>';
        $display_none = "display: none;";
        }
    }else{
        $article_height ='style="height: 300px;"';
        $div_diplay_error_msg = '<div> <h3>Opps An error Occur... You are automatically redirected to <a href="../index.php">Home</a> pages.</h3></div>';
        $display_none = "display: none;";
        header("refresh:5; ./index.php");
    }
    }else{
        echo mysqli_error($link);}
$timetable = year_and_draft_array();
?>
<html>
    <?php
    include './templates/head_tag_for_index.php';
    ?>
  <body>
         <?php include './templates/header_for_index.php';
    ?>
                <article <?php echo $article_height;?>>
                      <div class="row">
                      
                          <div class="col-md-8 col-md-offset-2 text-center">
                    <?php echo $div_diplay_error_msg; ?>
                   
                        <div style="<?php echo $display_none ; ?> " class="bg-white">
                            <div class="timetable-head">TIME TABLE <?php echo '('.(isset($timetable['year'])?$timetable['year']:'1999/2000').') - '.strtoupper((isset($timetable['drafts'])?$timetable['drafts']:'Firstdraft'));?> FOR <?php echo strtoupper($prog).' - '.strtoupper($year);?></div>
                        
                            <div class="box-part">
                                <div ><h4>MONDAY</h4></div>
                           
                            <table class="table table-responsive table-bordered table-striped table-hover">
                                <thead>
                            <tr>
                                <th >Time</th><th >course</th><th>Venue</th><th>Lecturer</th>
                            </tr>
                                </thead>
                                <tbody>
                               <?php
                  getRowFromDB(101,105,$levelofstud,$prog,$year);
                     ?>
                                </tbody>
                        </table>
                        </div>   
                        
                        <div  class="box-part">
                            <div><h4>TUESDAY</h4></div>
               
                        <table class="table table-responsive table-bordered table-striped table-hover">
                            <thead>
                            <tr >
                                <th >Time</th><th >course</th><th>Venue</th><th>Lecturer</th>
                            </tr>
                            </thead>
                            <tbody>
                               <?php
                               
                  getRowFromDB(106,110,$levelofstud,$prog,$year);
                              
                              ?>
                            </tbody>
                        </table>
                        </div>
                        
                        <div  class="box-part">
                            <div ><h4>WENDSDAY</h4></div>
                           
                        <table class="table table-responsive table-bordered table-striped table-hover">
                            <thead>
                            <tr >
                               <th >Time</th><th>course</th><th>Venue</th><th>Lecturer</th>
                            </tr>
                        </thead>
                        <tbody>
                               <?php
                               
                  getRowFromDB(111,115,$levelofstud,$prog,$year);
                              
                              ?>
                        </tbody>
                        </table>
                        </div>
                        
                        <div  class="box-part">
                            <div ><h4>THURSDAY</h4></div>
                           
                        <table class="table table-responsive table-bordered table-striped table-hover">
                            <thead>
                            <tr >
                               <th >Time</th><th>course</th><th>Venue</th><th>Lecturer</th>
                            </tr>
                            </thead>
                            <tbody>
                               <?php                               
                  getRowFromDB(116,120,$levelofstud,$prog,$year);                             
                              ?>
                            </tbody>
                        </table>
                        </div>
                        
                        <div  class="box-part">
                            <div ><h4>FRIDAY</h4></div>
                           
                        <table class="table table-responsive table-bordered table-striped table-hover">
                            <thead>
                               
                            <tr >
                                <th >Time</th><th>course</th><th>Venue</th><th>Lecturer</th>
                            </tr>
                            </thead>
                            <tbody>
                               <?php
                               
                  getRowFromDB(121,125,$levelofstud,$prog,$year);
                              
                              ?>
                            </tbody>
                        </table>
                        </div>
                     
                            <br>
                            <a target="blank" href="./pages/normalpdf.php?ref=<?php echo $ref.'&token='.$token;?>" class="btn btn-block btn-timetable"><i class=" glyphicon glyphicon-download"></i> Download PDF</a>              
                       
            
                    </div>
                   
                    <br>
                    <br>
                </div>
        
                      </div>
                </article>
        
<?php
 include './templates/footer.php';
         