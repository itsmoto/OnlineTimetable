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
$change_pass = 'active';
include '../templates/main_nav.php'; ?>
                </div>
                <div class="col-md-5 col-md-offset-1 ">
                    <div class=" bg-white">
                           <center> <div class=" timetable-head"><b>CHANGE MY PASSWORD</b></div></center>
                            
<?php
if (isset($_POST['btn-pass'])) {

    
    $password1 = mysqli_real_escape_string($link, $_POST['password1']);
    $password2 = mysqli_real_escape_string($link, $_POST['password2']);


    if ( isset($password1) && isset($password2) && !empty($password1) && !empty($password2)) {
        if ($password1 == $password2) {
            $hashed_pass = sha1($password1);
                    $sql = "UPDATE `login` SET `pass_hash` = '$hashed_pass' WHERE `id` =".$_SESSION['id'];
                    $result = mysqli_query($link, $sql);
                    if ($result) {
                        echo '<div class="no-error">Password Changed</div>';
                    }
                
            
        } else {
            echo '<div class="error">Passwords are not the same</div>';
        }
    } else {
        echo '<div class="error">Fill out all fields</div>';
    }
}
?>
                                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                                        <div class=" form-group">
                                            <input class="form-control" type="text" value="<?php echo $_SESSION['username'];?>" disabled=""/>
                                        </div>

                                        <div class=" form-group">
                                            <input  class="form-control" type="password" name="password1" placeholder="New Password" maxlength="15"  required=""/>
                                        </div>
                                        <div class=" form-group">
                                            <input  class="form-control" type="password" name="password2" placeholder="Confirm Password" maxlength="15"  required=""/>
                                        </div>
                                        
                                        <div class=" form-group">                               
                                            <button type="submit"  name="btn-pass"  class=" btn btn-block btn-timetable" onclick=""/>
                                            Change Password
                                            </button>
                                        </div>

                                    </form>
                      
                        </div>
                   
                </div>
            </div>
        </article>
<?php
include '../templates/footer.php';

