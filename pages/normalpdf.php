<?php
session_start();
include '../config/config.php';
include '../config/dbselect.php';
include '../fpdf181/fpdf.php';
include '../phpFunction/getdatafromdb.php';

$ref = @mysqli_real_escape_string($link,$_GET['ref']); 
$token =  @mysqli_real_escape_string($link,$_GET['token']); 

$result = mysqli_query($link, "SELECT levelofstudy, program,yearofstudy FROM accessed_timetable WHERE ref='$ref' AND token='$token'");
if ($result) {
    $div_diplay_error_msg = '';
    $article_height = '';
    if (mysqli_num_rows($result) == 1) {
        while ($row = mysqli_fetch_array($result)) {
            $levelofstudy = $row['levelofstudy'];
            $program = $row['program'];
            $yearofstudy = $row['yearofstudy'];
        }
    } else {

        echo $div_diplay_error_msg = '<div> <h3>Opps An error Occur... You are automatically redirected to <a href="../index.php">Home</a> pages.</h3></div>';
        header("refresh:5; ../index.php");
        die();
    }
} else {
    echo mysqli_error($link);
}

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Times', 'BU', 12);
//$pdf->Image('../img/favicon.png',75,10,30,50);
$timetable = year_and_draft_array(); // return array contain current timetable
$pdf->Cell(0, 8, 'ONLINE TIMETABLE ('.$timetable['year'].') - '.strtoupper($timetable['drafts']), 0, 1, 'C');
$title = "TimeTable FOR " . strtoupper($program) . " - " . strtoupper($yearofstudy);
$pdf->Cell(0, 8, $title, 0, 1, 'C');
$pdf->Ln(5);
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(190, 7, "MONDAY", 0, 0, "C");
$pdf->SetFillColor(137,156,251);  
$pdf->ln();
for ($i = 1; $i <= 1; $i++){
    $pdf->Cell(27, 6, "TIME", 1, 0, "C",1);
    $pdf->Cell(58, 6, "COURSE", 1, 0, "C",1);
    $pdf->Cell(63, 6, "VENUE", 1, 0, "C",1);
    $pdf->Cell(42, 6, "LECTURER", 1, 0, "C",1);
    $pdf->Ln();
}
$pdf->SetFont('Times', '', 12);  //monday
$sql = "SELECT * FROM `activetime` WHERE days>='101' AND days<='105' AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)";
$link = $GLOBALS['link'];
$executed = mysqli_query($link, $sql);
if ($executed) {
    $no = 1;
    while ($row = mysqli_fetch_array($executed)) {
        if($no % 2 == 1){//odd number
        $pdf->SetFillColor(238,238,238);  
      }else{
          $pdf->SetFillColor(255,255,255); //even number

      }
        $pdf->Cell(27, 6, $row['time'], 1, 0, "C",1);
        $pdf->Cell(58, 6, $row['course'], 1, 0, "C",1);
        $pdf->Cell(63, 6, $row['venue'], 1, 0, "C",1);
        $pdf->Cell(42, 6, $row['lecturer'], 1, 0, "C",1);
        $pdf->Ln();
    $no++;}
} else {
    die("sql: " . mysqli_error($link));
}
$pdf->ln(7);
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(190, 7, "TUESDAY", 0, 0, "C");
$pdf->ln();
$pdf->SetFillColor(137,156,251);  
for ($i = 1; $i <= 1; $i++) {
    $pdf->Cell(27, 6, "TIME", 1, 0, "C",1);
    $pdf->Cell(58, 6, "COURSE", 1, 0, "C",1);
    $pdf->Cell(63, 6, "VENUE", 1, 0, "C",1);
    $pdf->Cell(42, 6, "LECTURER", 1, 0, "C",1);
    $pdf->Ln();
}
$pdf->SetFont('Times', '', 12);  //tuesday
$sql1 = "SELECT * FROM `activetime` WHERE days>='106' AND days<='110' AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)";
$executed1 = mysqli_query($link, $sql1);
if ($executed1) {
    $no = 1;
    while ($row = mysqli_fetch_array($executed1)) {
        if($no % 2 == 1){//odd number
        $pdf->SetFillColor(238,238,238);  
      }else{
          $pdf->SetFillColor(255,255,255); //even number

      }
        $pdf->Cell(27, 6, $row['time'], 1, 0, "C",1);
        $pdf->Cell(58, 6, $row['course'], 1, 0, "C",1);
        $pdf->Cell(63, 6, $row['venue'], 1, 0, "C",1);
        $pdf->Cell(42, 6, $row['lecturer'], 1, 0, "C",1);
        $pdf->Ln();
        $no++;
    }
} else {
    die("sql: " . mysqli_error($link));
}
$pdf->ln(7);
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(190, 7, "WENDSDAY", 0, 0, "C");
$pdf->ln();
$pdf->SetFillColor(137,156,251);  
for ($i = 1; $i <= 1; $i++) {
    $pdf->Cell(27, 6, "TIME", 1, 0, "C",1);
    $pdf->Cell(58, 6, "COURSE", 1, 0, "C",1);
    $pdf->Cell(63, 6, "VENUE", 1, 0, "C",1);
    $pdf->Cell(42, 6, "LECTURER", 1, 0, "C",1);
    $pdf->Ln();
}
$pdf->SetFont('Times', '', 12);  //wensday
$sql2 = "SELECT * FROM `activetime` WHERE days>='111' AND days<='115' AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)";
$executed2 = mysqli_query($link, $sql2);
if ($executed2) {
    $no =1;
    while ($row = mysqli_fetch_array($executed2)) {
        if($no % 2 == 1){//odd number
        $pdf->SetFillColor(238,238,238);  
      }else{
          $pdf->SetFillColor(255,255,255); //even number

      }
        $pdf->Cell(27, 6, $row['time'], 1, 0, "C",1);
        $pdf->Cell(58, 6, $row['course'], 1, 0, "C",1);
        $pdf->Cell(63, 6, $row['venue'], 1, 0, "C",1);
        $pdf->Cell(42, 6, $row['lecturer'], 1, 0, "C",1);
        $pdf->Ln();
        $no ++;
    }
} else {
    die("sql: " . mysqli_error($link));
}
$pdf->ln(7);

$pdf->SetFont('Times', 'B', 14);
$pdf->Cell(190, 7, "THURSDAY", 0, 0, "C");
$pdf->ln();
$pdf->SetFillColor(137,156,251);  
for ($i = 1; $i <= 1; $i++) {
    $pdf->Cell(27, 6, "TIME", 1, 0, "C",1);
    $pdf->Cell(58, 6, "COURSE", 1, 0, "C",1);
    $pdf->Cell(63, 6, "VENUE", 1, 0, "C",1);
    $pdf->Cell(42, 6, "LECTURER", 1, 0, "C",1);
    $pdf->Ln();
}
$pdf->SetFont('Times', '', 12);  //thursday
$sql3 = "SELECT * FROM `activetime` WHERE days>='116' AND days<='120' AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)";
$executed3 = mysqli_query($link, $sql3);
if ($executed3) {
     $no = 1;
    while ($row = mysqli_fetch_array($executed3)) {
        if($no % 2 == 1){//odd number
        $pdf->SetFillColor(238,238,238);  
      }else{
          $pdf->SetFillColor(255,255,255); //even number

      }
        $pdf->Cell(27, 6, $row['time'], 1, 0, "C",1);
        $pdf->Cell(58, 6, $row['course'], 1, 0, "C",1);
        $pdf->Cell(63, 6, $row['venue'], 1, 0, "C",1);
        $pdf->Cell(42, 6, $row['lecturer'], 1, 0, "C",1);
        $pdf->Ln();
        $no++;
    }
} else {
    die("sql: " . mysqli_error($link));
}
$pdf->ln(7);

$pdf->SetFont('Times', 'B', 14);
$pdf->Cell(190, 7, "FRIDAY", 0, 0, "C");
$pdf->ln();
$pdf->SetFillColor(137,156,251);  
for ($i = 1; $i <= 1; $i++){
    $pdf->Cell(27, 6, "TIME", 1, 0, "C",1);
    $pdf->Cell(58, 6, "COURSE", 1, 0, "C",1);
    $pdf->Cell(63, 6, "VENUE", 1, 0, "C",1);
    $pdf->Cell(42, 6, "LECTURER", 1, 0, "C",1);
    $pdf->Ln();
}
$pdf->SetFont('Times', '', 12);  //friday
$sql4 = "SELECT * FROM `activetime` WHERE days>='121' AND days<='125' AND level_of_study='$levelofstudy' AND program='$program' AND yearofstudy='$yearofstudy' AND year_of_timetable=(SELECT year_of_timetable FROM `name_of_timetable` WHERE status = 1) AND drafts=(SELECT drafts FROM `name_of_timetable` WHERE status = 1)";
$executed4 = mysqli_query($link, $sql4);
if ($executed4) {
    $no = 1;
    while ($row = mysqli_fetch_array($executed4)) {
        if($no % 2 == 1){//odd number
        $pdf->SetFillColor(238,238,238);  
      }else{
          $pdf->SetFillColor(255,255,255); //even number

      }
        $pdf->Cell(27, 6, $row['time'], 1, 0, "C",1);
        $pdf->Cell(58, 6, $row['course'], 1, 0, "C",1);
        $pdf->Cell(63, 6, $row['venue'], 1, 0, "C",1);
        $pdf->Cell(42, 6, $row['lecturer'], 1, 0, "C",1);
        $pdf->Ln();
    $no++;}
} else {
    die("sql: " . mysqli_error($link));
}


$pdf->Output("TIMETABLE_" . $levelofstudy . "_" . $program . "_" . $yearofstudy . ".pdf", "I");
?>
  