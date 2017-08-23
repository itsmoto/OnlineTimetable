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
                   $list_TT = 'active'; 
                    include '../templates/main_nav.php'; ?>
                </div>
                <div class="col-md-8">
                    <div class="bg-white">
                        <center>  <div class="timetable-head"><b>LIST OF TIME TABLES</b></div> 
                        <table class="table table-responsive table-bordered table-striped table-hover text-center">
                            <thead>
                                <tr>
                                    <th>YEAR</th> <th >DRAFTS</th><th >STATUS</th><th>ACTION</th>
                                <tr>
                            </thead>
                            <tbody>
                            <?php 
                            getListOfTimeTable();
                            ?>
                            </tbody>
                           
                        </table>
                         </center>
                </div>
                </div>
            </div> 

                   
                      
                </article>
          
 <?php
 include '../templates/footer.php';