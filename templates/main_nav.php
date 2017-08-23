<nav>
    <ul>
        <li> 
            <a href="./setting.php" class="<?php echo isset($home)?$home:NULL;?>">
                <i class=" glyphicon glyphicon-home"></i>
                Home
            </a> 
        </li>
        <li> 
            <a href="./listoftimetable.php" class="<?php echo isset($list_TT)?$list_TT:NULL;?>">
                <i class=" glyphicon glyphicon-list"></i> 
                List of TimeTables
            </a> 
        </li>

        <li> 
            <a href="./selectCourseToenter.php" class="<?php echo isset($insert_TT)?$insert_TT:NULL;?>">
                <i class=" glyphicon glyphicon-edit"></i> 
                Insert/Fill TimeTable
            </a> 
        </li>
        <li> 
            <a href="./show_hide.php" class="<?php echo isset($active_TT)?$active_TT:NULL;?>">
                <i class=" glyphicon glyphicon-check "></i> 
                Activate TimeTable
            </a> 
        </li>

        <li> 
            <a href="../index.php"  class="<?php echo isset($view_TT)?$view_TT:NULL;?>">
                <i class=" glyphicon glyphicon-eye-open"></i> 
                View TimeTable
            </a> 
        </li>

        <li> 
            <a href="./create_timetable.php" class="<?php echo isset($cre_Timetable)?$cre_Timetable:NULL;?>">
                <i class=" glyphicon glyphicon-time"></i> 
                Create TimeTable 
            </a> 
        </li>
        <li> 
            <a href="./create_account.php" class="<?php echo isset($cre_account)?$cre_account:NULL;?>">
                <i class=" glyphicon glyphicon-plus"></i> 
                Create Account
            </a> 
        </li>
        <li> 
            <a href="remove_account.php" class="<?php echo isset($rem_account)?$rem_account:NULL;?>">
                <i class=" glyphicon glyphicon-remove"></i> 
                Remove Account
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
