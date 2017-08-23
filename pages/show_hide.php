<?php
session_start();
include '../config/config.php';
include '../config/dbselect.php';
include '../phpFunction/getdatafromdb.php';
if (isset($_SESSION['username']) && isset($_SESSION['role_id'])&& $_SESSION['role_id'] == '1') {
     
}  else {
    header( 'Location: ../login.php' );
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
             
          
                <article>
                    <div class="row">
                <div class="col-md-3">
                    <?php
                    $active_TT = 'active';
                    include '../templates/main_nav.php'; ?>
                </div>
                <div class="col-md-8">
                    <center>
                     
                        <div class="bg-white">
                     <center>  <div class="timetable-head"> ACTIVATE TIME TABLE</div></center>

                    
                     <div class="desc"><?php
                       $sql = "SELECT * FROM `show_hide_admin`";
                       
                       $result = mysqli_query($link, $sql);
                       if($result){
                           
                           $row = mysqli_fetch_assoc($result);
                     
    if($row['show_hide']==1){  
        $show_hide = 'shown'; $disabled = ''; } 
        else {  $show_hide = 'hidden'; 
}
                           
                       }  else {
                           echo 'Error: '.  mysqli_error($link);                           
}
                       
                       ?>
                         <div><h4>The Time Table has been <?php echo $show_hide;?> to normal users. Click the switch below to change the status</h4></div>
                         <div>
                             <br><br>
                             <a href="./show_HideExternal.php">
                                 <img src="../img/<?php echo $show_hide;?>.png" width="300" height="150" class=" img-responsive">
                             </a>
                         </div>     
                        
                    </div>
                     </div>
                    </center>
                    <br><br>
                </div>
                    </div>
                </article>
  <?php
 include '../templates/footer.php';
  mysqli_close($link);