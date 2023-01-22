<?php

header('Content-Type: application/json');
include('../connectDB.php');
$timeA=date('Y'); 

$sql="SELECT YEAR(`Enroll_timestamp`) AS `year`, 
SUM(IF(MONTH(`Enroll_timestamp`)=1,1,0)) AS `Jan`, 
SUM(IF(MONTH(`Enroll_timestamp`)=2,1,0)) AS `Feb`, 
SUM(IF(MONTH(`Enroll_timestamp`)=3,1,0)) AS `Mar`, 
SUM(IF(MONTH(`Enroll_timestamp`)=4,1,0)) AS `Apr`,
SUM(IF(MONTH(`Enroll_timestamp`)=5,1,0)) AS `May`,
SUM(IF(MONTH(`Enroll_timestamp`)=6,1,0)) AS `Jun`,
SUM(IF(MONTH(`Enroll_timestamp`)=7,1,0)) AS `Jul`, 
SUM(IF(MONTH(`Enroll_timestamp`)=8,1,0)) AS `Aug`,
SUM(IF(MONTH(`Enroll_timestamp`)=9,1,0)) AS `Sep`,
SUM(IF(MONTH(`Enroll_timestamp`)=10,1,0)) AS `Oct`, 
SUM(IF(MONTH(`Enroll_timestamp`)=11,1,0)) AS `Nov`, 
SUM(IF(MONTH(`Enroll_timestamp`)=12,1,0)) AS `Dec`
FROM `enroll_lesson` GROUP BY `YEAR` Having YEAR = '$timeA' ";
$query = mysqli_query($conn, $sql);

$dataYear = array();

foreach ($query as $row) {
  $dataYear[] = $row;  
}



mysqli_close($conn);
echo json_encode($dataYear);
?>