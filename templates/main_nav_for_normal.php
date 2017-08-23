<nav>
    <ul>
        <li> 
            <a href="./setting.php" class="<?php echo isset($home)?$home:NULL;?>">
                <i class=" glyphicon glyphicon-home"></i>
                Home
            </a> 
        </li>
        <li> 
            <a href="./selectCourseToenter.php" class="<?php echo isset($insert_TT)?$insert_TT:NULL;?>">
                <i class=" glyphicon glyphicon-edit"></i> 
                Insert/Fill TimeTable
            </a> 
        </li>

        <li> 
            <a href="../index.php" >
                <i class=" glyphicon glyphicon-eye-open"></i> 
                View TimeTable
            </a> 
        </li>
        <li> 
            <a href="change_my_pasword.php" class="<?php echo isset($change_pass)?$change_pass:NULL;?>">
                <i class=" glyphicon glyphicon-lock"></i>
                Change My Password
            </a>
        </li>
        <li> 
            <a href="../logout.php">
                <i class=" glyphicon glyphicon-log-out"></i>
                Log out
            </a> 
        </li>
    </ul>
</nav>
