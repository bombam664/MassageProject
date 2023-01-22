<?php

header('Content-Type: application/json');
include('../connectDB.php');

$sql="SELECT cus.Gender, les.Name_lesson , tol.Totalscore/100 as totalScore
FROM totalscore tol
LEFT JOIN customer cus 
ON tol.CustomerID = cus.CustomerID
RIGHT JOIN lesson les 
ON tol.LessonID = les.LessonID 
WHERE tol.TotalScoreID!='null' AND cus.Gender='ชาย'
GROUP BY tol.LessonID
ORDER BY tol.LessonID";

$query = mysqli_query($conn, $sql);

$sqlb="SELECT cus.Gender, les.Name_lesson , tol.Totalscore/100 as totalScore
FROM totalscore tol
LEFT JOIN customer cus 
ON tol.CustomerID = cus.CustomerID
RIGHT JOIN lesson les 
ON tol.LessonID = les.LessonID 
WHERE tol.TotalScoreID!='null' AND cus.Gender='หญิง'
GROUP BY tol.LessonID
ORDER BY tol.LessonID";

$queryb = mysqli_query($conn, $sqlb);

$sqlt="SELECT * FROM lesson";
$queryt = mysqli_query($conn, $sqlt);

$datatitle = array();
$datatotala = array();
$datatotalb = array();

foreach ($query as $row) {
    $datatotala[] = $row;  
  }
  foreach ($queryb as $rowb) {
    $datatotalb[] = $rowb;  
  }
  foreach ($queryt as $rowt) {
    $datatitle[] = $rowt;  
  }
mysqli_close($conn);
echo json_encode([$datatotala,$datatotalb,$datatitle]);
?>