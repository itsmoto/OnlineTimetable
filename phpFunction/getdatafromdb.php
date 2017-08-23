<?php

function year_and_draft_array() {
    $arr = array();
    $sql = "SELECT * FROM `name_of_timetable` where status = 1";
    $link = $GLOBALS['link']; //access variable outside the function
    $executed = mysqli_query($link, $sql);
    if ($executed) {
        while ($row = mysqli_fetch_array($executed)) {
            $arr['year'] = $row['year_of_timetable'];
            $arr['drafts'] = $row['drafts'];
        }
    }
    return $arr;
}

function checkIfTimeTableExist($levelofstudy = "", $program = "", $yearofstudy = 1) {

    $sql = "SELECT * FROM `activetime` WHERE days>='101' AND days<='125' AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1) GROUP BY course";
    $link = $GLOBALS['link'];
    $executed = mysqli_query($link, $sql);
    if ($executed) {
        if (mysqli_num_rows($executed) == 0) {
            return true;
        } else {
            return false;
        }
    } else {
        die("sql: " . mysqli_error($link));
    }
}

function getRowFromDB($start = 0, $end = 0, $levelofstudy = "", $program = "", $yearofstudy = 1, $boolen = false) {
    $sql = "SELECT * FROM `activetime` WHERE days>='$start' AND days<='$end' AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)";
    $link = $GLOBALS['link'];
    $executed = mysqli_query($link, $sql);
    if ($executed) {
        $counter = 1;
        while ($row = mysqli_fetch_array($executed)) {
            ?>                                    
            <tr>
                <td class="tdDetailsView <?php echo "OddEven" . $counter; ?>"><?php echo $row['time']; ?></td><td  class="tdDetailsView <?php echo "OddEven" . $counter; ?>"><?php echo $row['course']; ?></td><td class="tdDetailsView <?php echo "OddEven" . $counter; ?>"><?php echo $row['venue']; ?></td> <td class="tdDetailsView <?php echo "OddEven" . $counter; ?>"><?php echo $row['lecturer']; ?></td>   
            </tr> 
            <?php
            $counter++;
        }
    } else {
        die("sql: " . mysqli_error($link));
    }
}

function getListOfTimeTable() {
    $sql = "SELECT * FROM `name_of_timetable`ORDER BY id DESC";
    $link = $GLOBALS['link']; //access variable outside the function
    $executed = mysqli_query($link, $sql);

    if ($executed) {

        while ($row = mysqli_fetch_array($executed)) {
            ?>
            <tr>
                <td><?php echo $row['year_of_timetable']; ?> </td> 
                <td ><?php echo $row['drafts']; ?></td>  
                <td>
                    <a href="../pages/statusTB.php?year_of_timetable=<?php echo $row['year_of_timetable'] . "&drafts=" . $row['drafts'] . ""; ?>" ><?php echo $row['status'] == '1' ? 'On' : 'Off'; ?></a>
                </td> 
                <td>
                    <a href="#./edit_timetable.php?year_of_timetable=<?php echo $row['year_of_timetable'] . "&drafts=" . $row['drafts'] . ""; ?>" title="Edit this draft" class="edit" > 
                        <i class=" glyphicon glyphicon-edit"></i>
                    </a>
                    <a title="Delete this Time table" style=" color: red;" class="edit" onclick="return confirm('Please confirm deletion')" href="../pages/deleteTB.php?year_of_timetable=<?php echo $row['year_of_timetable'] . "&drafts=" . $row['drafts'] . ""; ?>">
                        <i class="glyphicon glyphicon-remove-circle"></i>
                    </a>
                </td>
            </tr>
            <?php
        }
    }
}

function cryptPass($input, $round = 9) { //best method for cryption of password
    $salt = ""; //use this method to encrypt pass for DB
    $saltChars = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));

    for ($index = 0; $index < 22; $index++) {
        $salt .= $saltChars[array_rand($saltChars)];
    }
    return crypt($input, sprintf('$2y$%02d$', $round) . $salt);
}

function returnTime($count = 0) {

    if ($count == 101) {
        return "0700-0900";
    } else if ($count == 102) {
        return "0900-1100";
    } else if ($count == 103) {
        return "1100-1300";
    } else if ($count == 104) {
        return "1500-1700";
    } else if ($count == 105) {
        return "1700-1900";
    } else if ($count == 106) {
        return "0700-0900";
    } else if ($count == 107) {
        return "0900-1100";
    } else if ($count == 108) {
        return "1100-1300";
    } else if ($count == 109) {
        return "1500-1700";
    } else if ($count == 110) {
        return "1700-1900";
    } else if ($count == 111) {
        return "0700-0900";
    } else if ($count == 112) {
        return "0900-1100";
    } else if ($count == 113) {
        return "1100-1300";
    } else if ($count == 114) {
        return "1500-1700";
    } else if ($count == 115) {
        return "1700-1900";
    } else if ($count == 116) {
        return "0700-0900";
    } else if ($count == 117) {
        return "0900-1100";
    } else if ($count == 118) {
        return "1100-1300";
    } else if ($count == 119) {
        return "1500-1700";
    } else if ($count == 120) {
        return "1700-1900";
    } else if ($count == 121) {
        return "0700-0900";
    } else if ($count == 122) {
        return "0900-1100";
    } else if ($count == 123) {
        return "1100-1300";
    } else if ($count == 124) {
        return "1500-1700";
    } else {
        return "1700-1900";
    }
}

function getTokenForAbout($type_of_about = "") {
    // $type_of_about= "About Us"
    $token = md5($type_of_about . "hoksnssjjk      jsdskghh@#79287");
    //used to genetare token only
    return $token;
}

/* SHOW OPERSTING SYSTEM AND BROWSER CLASS
  This class will return information from browser in an array format including
  the browser name, browser version, and also the operating system name.
  Get Browser and Operating System Information with PHP

  Long time ago I needed to get browser information with PHP
 * and I wrote a class which uses the preg_match_all function with 
 * regular expressions to get information from the browser. 
 * This class will return information from browser in an array 
 * format including the browser name, browser version, and also the 
 * operating system name.  It helped me so I shared to help others. 
 *  */

class OS_BR {

    private $agent = "";
    private $info = array();

    function __construct() {
        $this->agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : NULL;
        $this->getBrowser();
        $this->getOS();
    }

    function getBrowser() {
        $browser = array("Navigator" => "/Navigator(.*)/i",
            "Firefox" => "/Firefox(.*)/i",
            "Internet Explorer" => "/MSIE(.*)/i",
            "Google Chrome" => "/chrome(.*)/i",
            "MAXTHON" => "/MAXTHON(.*)/i",
            "Opera" => "/Opera(.*)/i",
        );
        foreach ($browser as $key => $value) {
            if (preg_match($value, $this->agent)) {
                $this->info = array_merge($this->info, array("Browser" => $key));
                $this->info = array_merge($this->info, array(
                    "Version" => $this->getVersion($key, $value, $this->agent)));
                break;
            } else {
                $this->info = array_merge($this->info, array("Browser" => "UnKnown"));
                $this->info = array_merge($this->info, array("Version" => "UnKnown"));
            }
        }
        return $this->info['Browser'];
    }

    function getOS() {
        $OS = array("Windows" => "/Windows/i",
            "Linux" => "/Linux/i",
            "Unix" => "/Unix/i",
            "Mac" => "/Mac/i"
        );

        foreach ($OS as $key => $value) {
            if (preg_match($value, $this->agent)) {
                $this->info = array_merge($this->info, array("Operating System" => $key));
                break;
            }
        }
        return $this->info['Operating System'];
    }

    function getVersion($browser, $search, $string) {
        $browser = $this->info['Browser'];
        $version = "";
        $browser = strtolower($browser);
        preg_match_all($search, $string, $match);
        switch ($browser) {
            case "firefox": $version = str_replace("/", "", $match[1][0]);
                break;

            case "internet explorer": $version = substr($match[1][0], 0, 4);
                break;

            case "opera": $version = str_replace("/", "", substr($match[1][0], 0, 5));
                break;

            case "navigator": $version = substr($match[1][0], 1, 7);
                break;

            case "maxthon": $version = str_replace(")", "", $match[1][0]);
                break;

            case "google chrome": $version = substr($match[1][0], 1, 10);
        }
        return $version;
    }

    function showInfo($switch) {
        $switch = strtolower($switch);
        switch ($switch) {
            case "browser": return $this->info['Browser'];
                break;

            case "os": return $this->info['Operating System'];
                break;

            case "version": return $this->info['Version'];
                break;

            case "all" : return array($this->info["Version"],
                    $this->info['Operating System'], $this->info['Browser']);
                break;

            default: return "Unkonw";
                break;
        }
    }

}

/* How TO USE IT
  // using
  // create an new instant of OS_BR class
 * 
  $obj = new OS_BR();
 * 
  // // if you want to show one by one information then try showInfo() function

  // get browser
 * 
  echo $obj->showInfo('browser');

  // get browser version
  echo $obj->showInfo('version');

  // get Operating system
  echo $obj->showInfo('os');

  // get all information and it returns an array
  echo "<pre>".print_r($obj->showInfo("all"),true)."</pre>";
 *
 */

function set_visitors() {
    $link = $GLOBALS['link'];
    $obj = new OS_BR();
    $browser = $obj->showInfo('browser') . ' ' . $obj->showInfo('version');
    $os = $obj->showInfo('os');
    $ip_addr = substr(sha1($_SERVER['REMOTE_ADDR']), 0, 10);
    $i_vi = isset($_COOKIE['i_vi']) ? $_COOKIE['i_vi'] : NULL;
    if ($i_vi != $ip_addr) {
        
        if ($res = mysqli_query($link, "SELECT * FROM `visitors` where `visitor_token` = '$ip_addr'")) {
            if (mysqli_num_rows($res) > 0) {
               
                setcookie("i_vi", $ip_addr, strtotime('+300 days'), "/");
            } else {
                setcookie("i_vi", $ip_addr, strtotime('+300 days'), "/");
                $sql = "INSERT INTO `visitors` ( `visitor_ip`, `visitor_os`, `visitor_browser`, `visitor_token`) VALUES ('" . $_SERVER['REMOTE_ADDR'] . "', '$os', '$browser', '$ip_addr')";
                mysqli_query($link, $sql);
            }
        }
    }
}

function get_visitors() {
    $link = $GLOBALS['link'];
    $sql = "SELECT count(visitor_token) as total_visitor FROM `visitors`";
    if($result = mysqli_query($link, $sql));
    if ($result) {
        $row = mysqli_fetch_array($result);
        return $row['total_visitor'];
    }
    
}

set_visitors(); //ipo hapa ili pages zote ziweze access hii function

