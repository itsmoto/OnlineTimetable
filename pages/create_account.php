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
$cre_account = 'active';
include '../templates/main_nav.php'; ?>
                </div>
                <div class="col-md-5 col-md-offset-1 ">
                    <div class=" bg-white">
                           <center> <div class=" timetable-head"><b>REGISTER A NEW ADMINISTRATOR</b></div></center>
                            
<?php
if (isset($_POST['btn-register'])) {

    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password1 = mysqli_real_escape_string($link, $_POST['password1']);
    $password2 = mysqli_real_escape_string($link, $_POST['password2']);
    $role_id = mysqli_real_escape_string($link, $_POST['role_id']);

    if (isset($username) && isset($password1) && isset($password2) && !empty($username) && !empty($password1) && !empty($password2)) {
        if ($password1 == $password2) {
            $sql_check_username = "SELECT * FROM login WHERE username = '$username'";
            $result_check_username = mysqli_query($link, $sql_check_username);
            if ($result_check_username) {
                if (mysqli_num_rows($result_check_username) > 0) {
                    echo '<div class="error">username: "' . $username . '" has already been used</div>';
                } else {
                    $hashed_pass = sha1($password1);
                    $sql = "INSERT INTO login(username,pass_hash,role_id) VALUES('$username','$hashed_pass','$role_id')";
                    $result = mysqli_query($link, $sql);
                    if ($result) {
                        echo '<div class="no-error">Account Created</div>';
                    }
                }
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
                                            <input class="form-control" type="text" name="username" placeholder="Enter Username" maxlength="15" minlength="4" required=""/>
                                        </div>
                                        <div class=" form-group">
                                            <select class=" form-control" name="role_id" required="">
                                                <option value="" selected="">Role</option>
                                                <option value="1">Administrator</option>
                                                <option value="2">Normal User</option>
                                            </select>    
                                        </div>
                                        <div class=" form-group">
                                            <input  class="form-control" type="password" name="password1" placeholder="Enter Password" maxlength="15" minlength="6" required=""/>
                                        </div>
                                        <div class=" form-group">
                                            <input  class="form-control" type="password" name="password2" placeholder="Enter Password Again" maxlength="15" minlength="6" required=""/>
                                        </div>
                                        
                                        <div class=" form-group">                               
                                            <button type="submit" name="btn-register"  class=" btn btn-block btn-timetable" onclick=""/>
                                            Create Account
                                            </button>
                                        </div>

                                    </form>
                      
                        </div>
                   
                </div>
            </div>
        </article>
<?php
include '../templates/footer.php';

