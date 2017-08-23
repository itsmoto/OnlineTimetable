
<header>
    <div class="timetable-brand ">
        <a href="index.php">
            <img src="img/log-header2.png" alt="TimeTable" height="45"/>
        </a>
    </div>
    <div class="timetable-admin">
     <?php
    if (isset($_SESSION['username']) && isset($_SESSION['role_id'])&& $_SESSION['role_id'] == '1') {
     ?>
        <div> <ul>
                <li><a href="#" class="admin-link"><i class=" glyphicon glyphicon-user"></i> Admin</a>
                <ul class="ul-admin">
                    <li ><a href="pages/setting.php" ><i class=" glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="logout.php" ><i class=" glyphicon glyphicon-log-out"></i> LogOut</a></li>
                </ul>
            </li>
            </ul>
        </div>
        <?php
} elseif (isset($_SESSION['username']) && isset($_SESSION['role_id'])&& $_SESSION['role_id'] == '2') {
?>
        <div> <ul>
                <li><a href="#" class="admin-link"><i class=" glyphicon glyphicon-user"></i> Admin</a>
                <ul class="ul-admin">
                    <li ><a href="normal/setting.php" ><i class=" glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="logout.php" ><i class=" glyphicon glyphicon-log-out"></i> LogOut</a></li>
                </ul>
            </li>
            </ul>
        </div>
            <?php
}
     ?>   
    </div>
</header>