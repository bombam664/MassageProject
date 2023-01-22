<?php
header('Content-Type: application/json');
include('../connectDB.php');
$sqla="SELECT COUNT(tol.EnrollID) AS timer , cus.Gender 
FROM enroll_lesson tol 
LEFT JOIN customer cus 
ON tol.CustomerID = cus.CustomerID
 where CAST(tol.Enroll_timestamp as time)
 between '00:00:00' and '06:00:00' and cus.Gender='ชาย'";
  
$querya = mysqli_query($conn, $sqla);

$sqlb="SELECT COUNT(tol.EnrollID) AS timer , cus.Gender 
FROM enroll_lesson tol 
LEFT JOIN customer cus 
ON tol.CustomerID = cus.CustomerID
 where CAST(tol.Enroll_timestamp as time)
  between '06:00:00' and '12:00:00' 
  and cus.Gender='ชาย'";
  
$queryb = mysqli_query($conn, $sqlb);

$sqlc="SELECT COUNT(tol.EnrollID) AS timer , cus.Gender 
FROM enroll_lesson tol 
LEFT JOIN customer cus 
ON tol.CustomerID = cus.CustomerID
 where CAST(tol.Enroll_timestamp as time)
  between '12:00:00' and '18:00:00' 
  and cus.Gender='ชาย'";
  
$queryc = mysqli_query($conn, $sqlc);

$sqld="SELECT COUNT(tol.EnrollID) AS timer , cus.Gender 
FROM enroll_lesson tol 
LEFT JOIN customer cus 
ON tol.CustomerID = cus.CustomerID
 where CAST(tol.Enroll_timestamp as time)
  between '18:00:00' and '00:00:00' 
  and cus.Gender='ชาย'";
  
$queryd = mysqli_query($conn, $sqld);

// -----------------------------------------------------------

$sqlf1="SELECT COUNT(tol.EnrollID) AS timer , cus.Gender 
FROM enroll_lesson tol 
LEFT JOIN customer cus 
ON tol.CustomerID = cus.CustomerID
 where CAST(tol.Enroll_timestamp as time)
  between '00:00:00' and '06:00:00' 
  and cus.Gender='หญิง'";
  
$queryf1 = mysqli_query($conn, $sqlf1);

$sqlf2="SELECT COUNT(tol.EnrollID) AS timer , cus.Gender 
FROM enroll_lesson tol 
LEFT JOIN customer cus 
ON tol.CustomerID = cus.CustomerID
 where CAST(tol.Enroll_timestamp as time)
  between '06:00:00' and '12:00:00' 
  and cus.Gender='หญิง'";
  
$queryf2 = mysqli_query($conn, $sqlf2);

$sqlf3="SELECT COUNT(tol.EnrollID) AS timer , cus.Gender 
FROM enroll_lesson tol 
LEFT JOIN customer cus 
ON tol.CustomerID = cus.CustomerID
 where CAST(tol.Enroll_timestamp as time)
  between '12:00:00' and '18:00:00' 
  and cus.Gender='หญิง'";
  
$queryf3 = mysqli_query($conn, $sqlf3);

$sqlf4="SELECT COUNT(tol.EnrollID) AS timer , cus.Gender 
FROM enroll_lesson tol 
LEFT JOIN customer cus 
ON tol.CustomerID = cus.CustomerID
 where CAST(tol.Enroll_timestamp as time)
  between '18:00:00' and '00:00:00' 
  and cus.Gender='หญิง'";
  
$queryf4 = mysqli_query($conn, $sqlf4);


$datamf = array();
$dataff = array();

foreach ($querya as $row1) {
    $datamf[] = $row1;  
  }
  foreach ($queryb as $row2) {
    $datamf[] = $row2;  
  }
  foreach ($queryc as $row3) {
    $datamf[] = $row3;  
  }
  foreach ($queryd as $row4) {
    $datamf[] = $row4;  
  }
  foreach ($queryf1 as $row5) {
    $dataff[] = $row5;  
  }
  foreach ($queryf2 as $row6) {
    $dataff[] = $row6;  
  }
  foreach ($queryf3 as $row7) {
    $dataff[] = $row7;  
  }
  foreach ($queryf4 as $row8) {
    $dataff[] = $row8;  
  }
mysqli_close($conn);
echo json_encode([$datamf,$dataff]);
?>