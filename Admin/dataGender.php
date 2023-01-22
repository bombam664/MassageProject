<?php

use function PHPSTORM_META\type;

header('Content-Type: application/json');
include('../connectDB.php');
$sqla = "SELECT count(Gender) as 'female' FROM customer WHERE Gender='หญิง'";
$querya = mysqli_query($conn, $sqla);
$row = $querya->fetch_assoc();
$female = $row['female'];

$sqlb = "SELECT count(Gender) as 'male' FROM customer WHERE Gender='ชาย'";
$queryb = mysqli_query($conn, $sqlb);
$row = $queryb->fetch_assoc();

$male = $row['male'];

mysqli_close($conn);
echo json_encode([$female, $male]);
?>




