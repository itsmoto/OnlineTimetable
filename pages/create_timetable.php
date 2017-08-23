<?php
session_start();
include '../config/config.php';
include '../config/dbselect.php';
include '../phpFunction/getdatafromdb.php';
if (isset($_SESSION['username']) && isset($_SESSION['role_id'])&& $_SESSION['role_id'] == '1') {
     
}  else {
    header('Location: ../login.php');
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
                    $cre_Timetable = 'active';
                    include '../templates/main_nav.php'; 
                    ?>
                </div>
                <div class="col-md-8">
                    <center>
                        <div class="bg-white">
                            <div class="timetable-head">CREATE A NEW TIME TABLE</div>

                            <?php
                            if (isset($_POST['btn-maketimetable'])) {


                                $yearoftimetable = mysqli_real_escape_string($link, $_POST['yearoftimetable']);
                                $drafts = mysqli_real_escape_string($link, $_POST['drafts']);

                                $cert = $_POST['cert'];
                                $diplo = $_POST['diplo'];
                                $under = $_POST['under'];
                                $post = $_POST['post'];

                                if (!empty($yearoftimetable) && isset($yearoftimetable)) {
                                    $sql_checkTB_if_exits = "SELECT * FROM `name_of_timetable` WHERE 	year_of_timetable='$yearoftimetable' AND drafts = '$drafts'";
                                    $result_TBexits = mysqli_query($link, $sql_checkTB_if_exits);
                                    if (mysqli_num_rows($result_TBexits) > 0) {
                                        ?>
                                        <div class="error">Time table has already created, If you want to edit time table go to <a href="listoftimetable.php">list of time table</a> to edit</div>
                                        <?php
                                    } else {
                                        $resut = FALSE;
                                        $sql_ttb = "INSERT INTO `name_of_timetable` (`year_of_timetable`, `drafts`, `status`) VALUES ( '$yearoftimetable', '$drafts', '0');";
                                        $resut = mysqli_query($link, $sql_ttb);
                                        /* Inserting certificate program */
                                        foreach ($cert as $program) {
                                            if(trim($program) !=''){
                                              $program =  mysqli_real_escape_string($link,$program );
                                            $sql_cert = "INSERT INTO `program_and_course` (`level_of_study`, `program`, `year_of_timetable`, `drafts`) VALUES ( 'certificate', '$program', '$yearoftimetable', '$drafts');";
                                           $resut = mysqli_query($link, $sql_cert);
                                            
                                            }
                                        }
                                        /* End inserting certificate program */

                                        /* Inserting undergraduate program */
                                        foreach ($under as $program) {
                                            if(trim($program) !=''){
                                                $program =  mysqli_real_escape_string($link,$program );
                                            $sql_under = "INSERT INTO `program_and_course` (`level_of_study`, `program`, `year_of_timetable`, `drafts`) VALUES ( 'undergraduate', '$program', '$yearoftimetable', '$drafts');";
                                         $resut =   mysqli_query($link, $sql_under);
                                            }
                                        }
                                        /* End inserting undergraduate program */

                                        /* Inserting Diploma program */
                                        foreach ($diplo as $program) {
                                            if(trim($program) !=''){
                                                $program =  mysqli_real_escape_string($link,$program );
                                            $sql_diplo = "INSERT INTO `program_and_course` (`level_of_study`, `program`, `year_of_timetable`, `drafts`) VALUES ( 'diploma', '$program', '$yearoftimetable', '$drafts');";
                                          $resut =  mysqli_query($link, $sql_diplo);
                                            }
                                        }
                                        /* End inserting diploma program */

                                        /* Inserting postgrte program */
                                        foreach ($post as $program) {
                                            if(trim($program) !=''){
                                                $program =  mysqli_real_escape_string($link,$program );
                                            $sql_post = "INSERT INTO `program_and_course` (`level_of_study`, `program`, `year_of_timetable`, `drafts`) VALUES ( 'postgraduate', '$program', '$yearoftimetable', '$drafts');";
                                            mysqli_query($link, $sql_post);
                                            }
                                        }
                                        /* End inserting postgrte program */
     
                                        if ($resut) {
                                            ?>    
                                            <div class="no-error">Time table has successfully been saved</div>
                                            <?php
                                        } else {
                                            echo 'Error: ' . mysqli_error($link);
                                        }
                                    }
                                } else {
                                    ?>
                                    <div class="error">Type the year of time table</div>
                                    <?php
                                }
                            }
                            ?>

                            <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                <table class="table table-bordered">
                                    <tr>
                                        <td style="text-align: right; font-weight: bold;">Year of TimeTable:</td> 
                                        <td><select  class="form-control"  type="text" name="yearoftimetable" required="">
                                                <option value="" selected=""> Choose Year </option>
                                                <?php
                                                $y = date('Y');
                                                while ($y < (date('Y') + 3)) {
                                                    echo'<option value="' . $y . '/' . ($y + 1) . '">' . $y . '/' . ($y + 1) . '</option>';
                                                    $y++;
                                                }
                                                ?>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td style="text-align: right; font-weight: bold;">Draft:</td> 
                                        <td> <select name="drafts" class=" form-control">                                               
                                                <option value="firstdraft">First Draft</option>
                                                <option  value="seconddraft">Second Draft</option>
                                                <option value="finaldraft">Final Draft</option>
                                            </select>
                                        </td>
                                    </tr>

                                </table>

                                <table  class="table table-bordered create_table" >
                                    <thead>
                                        <tr >
                                            <td class="timetable-head">Certificate </td>
                                            <td class="timetable-head">Diploma</td> 
                                            <td  class="timetable-head">Undergraduate</td> 
                                            <td class="timetable-head">Postgraduate </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Certificate)..." name="cert[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Diploma)..." name="diplo[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Undergraduate)..." name="under[]"></td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Postgraduate)..." name="post[]">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Certificate)..." name="cert[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Diploma)..." name="diplo[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Undergraduate)..." name="under[]"></td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Postgraduate)..." name="post[]">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Certificate)..." name="cert[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Diploma)..." name="diplo[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Undergraduate)..." name="under[]"></td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Postgraduate)..." name="post[]">
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Certificate)..." name="cert[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Diploma)..." name="diplo[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Undergraduate)..." name="under[]"></td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Postgraduate)..." name="post[]">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Certificate)..." name="cert[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Diploma)..." name="diplo[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Undergraduate)..." name="under[]"></td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Postgraduate)..." name="post[]">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Certificate)..." name="cert[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Diploma)..." name="diplo[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Undergraduate)..." name="under[]"></td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Postgraduate)..." name="post[]">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Certificate)..." name="cert[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Diploma)..." name="diplo[]">
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Undergraduate)..." name="under[]"></td>
                                            <td>
                                                <input class="form-control" type="text" placeholder="program (Postgraduate)..." name="post[]">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>    
                                <div class=" form-group">
                                    <div class="col-md-6">
                                        <button class="btn btn-block btn-timetable" type="submit" name="btn-maketimetable">
                                            <i class="glyphicon glyphicon-time"></i> Create TimeTable
                                        </button>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-block btn-timetable add-row ">
                                            <i class="glyphicon glyphicon-plus"></i>     Add program
                                        </a>
                                    </div>

                                </div>

                            </form>
                            <br>
                            <br>  
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <br>
        </article>


        <?php
        include '../templates/footer.php';
        