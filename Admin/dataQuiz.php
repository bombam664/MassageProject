<?php

header('Content-Type: application/json');
include('../connectDB.php');

$sqla="SELECT COUNT(en.LessonID) as sumQuizm ,
 les.Name_lesson , cus.Gender
  FROM enroll_quiz en
LEFT JOIN lesson les
ON en.LessonID = les.LessonID
RIGHT JOIN customer cus
ON en.CustomerID = cus.CustomerID
WHERE cus.Gender='ชาย' AND les.LessonID!='null'
GROUP BY en.LessonID
 ORDER BY en.LessonID";
$querya = mysqli_query($conn, $sqla);

$sqlb="SELECT COUNT(en.LessonID) as sumQuizf ,
 les.Name_lesson as nameLesson , cus.Gender
  FROM enroll_quiz en
LEFT JOIN lesson les
ON en.LessonID = les.LessonID
RIGHT JOIN customer cus
ON en.CustomerID = cus.CustomerID
WHERE cus.Gender='หญิง' AND les.LessonID!='null'
GROUP BY en.LessonID
 ORDER BY en.LessonID";
$queryb = mysqli_query($conn, $sqlb);

$dataQuizm = array();
$dataQuizf = array();

foreach ($querya as $row) {
  $dataQuizm[] = $row;  
}
foreach ($queryb as $rowb) {
  $dataQuizf[] = $rowb;  
}



mysqli_close($conn);
echo json_encode([$dataQuizm,$dataQuizf]);
?>