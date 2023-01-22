<?php
header('Content-Type: application/json');
include('../connectDB.php');

$sqla="SELECT
SUM(IF(WEEKDAY(`Enroll_timestamp`)=1,1,0)) AS `Mon`,
SUM(IF(WEEKDAY(`Enroll_timestamp`)=2,1,0)) AS `Tue`,
SUM(IF(WEEKDAY(`Enroll_timestamp`)=3,1,0)) AS `Wed`,
SUM(IF(WEEKDAY(`Enroll_timestamp`)=4,1,0)) AS `Thu`,
SUM(IF(WEEKDAY(`Enroll_timestamp`)=5,1,0)) AS `Fri`, 
SUM(IF(WEEKDAY(`Enroll_timestamp`)=6,1,0)) AS `Sat`,
SUM(IF(WEEKDAY(`Enroll_timestamp`)=7,1,0)) AS `Sun` 
FROM enroll_lesson tol
LEFT JOIN customer cus 
ON tol.CustomerID = cus.CustomerID
WHERE cus.Gender='ชาย'";
 $querya = mysqli_query($conn, $sqla);

 $sqlb="SELECT
SUM(IF(WEEKDAY(`Enroll_timestamp`)=0,1,0)) AS `Mon`,
SUM(IF(WEEKDAY(`Enroll_timestamp`)=1,1,0)) AS `Tue`,
SUM(IF(WEEKDAY(`Enroll_timestamp`)=2,1,0)) AS `Wed`,
SUM(IF(WEEKDAY(`Enroll_timestamp`)=3,1,0)) AS `Thu`,
SUM(IF(WEEKDAY(`Enroll_timestamp`)=4,1,0)) AS `Fri`, 
SUM(IF(WEEKDAY(`Enroll_timestamp`)=5,1,0)) AS `Sat`,
SUM(IF(WEEKDAY(`Enroll_timestamp`)=6,1,0)) AS `Sun` 
FROM enroll_lesson tol
LEFT JOIN customer cus 
ON tol.CustomerID = cus.CustomerID
WHERE cus.Gender='หญิง'";
 $queryb = mysqli_query($conn, $sqlb);

 $dataA = array();
 $dataB = array();

 foreach($querya as $row){
     $dataA[] = $row;
 }
 foreach($queryb as $row2){
    $dataB[] = $row2;
}

mysqli_close($conn);
echo json_encode([$dataA,$dataB]);
?>