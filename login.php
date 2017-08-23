<?php
session_start();
include './config/config.php';
include './config/dbselect.php';
include './phpFunction/getdatafromdb.php';
if (isset($_SESSION['username']) && isset($_SESSION['role_id'])) {
    if ($_SESSION['role_id'] == '1') {
        header('Location: pages/setting.php');
    } elseif ($_SESSION['role_id'] == '2') {
        header('Location: normal/setting.php');
    }
}
$error_msg = '';
if (isset($_POST['btn-login'])) {

    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    if ($username == "" && $password == "") {
        $error_msg = '    <div class="error"> Login failed: Type password and username </div>';
    } else if ($password == "") {
        $error_msg = ' <div class="error"> Login failed: Type a password </div>';
    } else if ($username == "") {
        $error_msg = ' <div class="error"> Login failed: Type a username </div>';
    } else {

        $sql = "SELECT * FROM login WHERE username='$username'";

        $result = mysqli_query($link, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);

            if (sha1($password) == $row['pass_hash']) {
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $row['id'];
                $_SESSION['role_id'] = $row['role_id'];
                if (isset($_SESSION['username']) && $_SESSION['role_id'] == '1') {
                    header("location: ./pages/setting.php");
                } elseif (isset($_SESSION['username']) && $_SESSION['role_id'] == '2') {
                    header("location: ./normal/setting.php");
                }
            } else {
                $error_msg = '<div class="error"> Login failed: Wrong username/password </div>';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
    <?php
    include './templates/head_tag_for_index.php';
    ?>
    <body>
        <?php
        include './templates/header_for_index.php';
        ?>

        <article>

            <div class=" row">
                <div class=" col-md-4 col-md-offset-4">
                    <div class="bg-white"> <center> <div class="timetable-head"><b>ADMINISTRATOR LOGIN</b></div></center>

                        <?php
                        echo $error_msg;
                        ?>

                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                            <div class=" form-group has-feedback" >
                                <input class=" form-control" type="text" name="username" placeholder="Username"/>
                                <i class="glyphicon glyphicon-user form-control-feedback text-muted"></i>
                            </div>

                            <div class=" form-group has-feedback">
                                <input class=" form-control" type="password" name="password" placeholder="Password"/>
                                <i class="glyphicon glyphicon-lock form-control-feedback  text-muted"></i>
                            </div>
                            <div class=" form-group">                               
                                <button type="submit" value="Login" name="btn-login" title="click here to login" id="btn" class="btn btn-block btn-timetable">
                                    <i class="glyphicon glyphicon-log-in"> </i>
                                    Login
                                </button>
                            </div>

                        </form> 
                    </div>
                </div>
            </div>
        </center>
    </article>


    <div class="clear"></div>
<?php
include './templates/footer_for_index.php';
