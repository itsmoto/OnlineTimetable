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
$rem_account = 'active';
include '../templates/main_nav.php'; ?>
                </div>
                <div class="col-md-8">

                    <center>

                        <div class=" bg-white">
                            
                    
                            <div class="timetable-head">
                            REGISTERED USERS
                        </div>
                            <table class=" table table-responsive table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Username</th>
                                        <th>Role</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead> 
                                <tbody>
                            
<?php
$sql = "SELECT * FROM login";
$rv = mysqli_query($link, $sql);
$no = 1;
while ($row = mysqli_fetch_array($rv)) {
    if($_SESSION['id'] != $row['id']){
    ?>
                                    <tr class=" text-center">    
                    <td><?php echo $no;?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['role_id']=='1'?'Administrator':'Normal User'; ?></td>
                    <td>*****************</td>
                    <td><a onclick=" return confirm('Do you want to delete <?php echo $row['username']; ?>?')" href="./process_remove_account.php?id=<?php echo $row['id'];?>"><i class=" glyphicon glyphicon-remove-circle"> </i> Delete</a></td> 
        </tr>  
                            
<?php $no++;}}
?>
                            </tbody>
</table>         </div>
            </div>
        </article>
<?php
include '../templates/footer.php';

