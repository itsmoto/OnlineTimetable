<?php
session_start();
include '../config/config.php';
include '../config/dbselect.php';
include '../phpFunction/getdatafromdb.php';
if (isset($_SESSION['username']) && isset($_SESSION['role_id'])&& $_SESSION['role_id'] == '2') {
     
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
                    $home = 'active';
                    include '../templates/main_nav_for_normal.php'; ?>
                </div>
                <div class="col-md-8" id="f">
                    <div class="container-fluid">
                        
                        <!--Start two items row-->
                        <div class="row">
     
                     <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="glyphicon glyphicon-eye-open text-primary"></i>
                                    <h3>View TimeTable</h3>
                                    <p class="text-muted">Share, Advertise and View posted business from all-over Mzumbe Community. eg: <b>Samsung Galaxy S5 for sale</b></p>
                                </div>
                            </div>
                            
                             <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="glyphicon glyphicon-edit text-primary"></i>
                                    <h3>Insert/Fill TimeTable</h3>
                                    <p class="text-muted">Share, Advertise and View posted business from all-over Mzumbe Community. eg: <b>Samsung Galaxy S5 for sale</b></p>
                                </div>
                            </div>
                     <div class="col-md-6">
                                <div class="feature-item">
                                    <i class="glyphicon glyphicon-lock text-primary"></i>
                                    <h3>Change Password</h3>
                                    <p class="text-muted">Share, Advertise and View posted business from all-over Mzumbe Community. eg: <b>Samsung Galaxy S5 for sale</b></p>
                                </div>
                            </div>
                        </div>
                    <!--End two items row-->
                    </div>
                </div>
            </div> 
        </article>





        <?php
        include '../templates/footer.php';
        