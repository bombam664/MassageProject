<?php
include("../connectDB.php");
$LessonID=$_POST['LessonID'];
$Name_lesson=$_POST['Name_lesson'];
$Question=$_POST['Question'];
$img=$_POST['img'];
$badge_img=$_POST['badge_img'];
$Q_force=$_POST['Q_force'];
$Q_time=$_POST['Q_time'];

$sql="INSERT INTO lesson_details(LessonID, Question, img, badge_img, Q_force, Q_time)
VALUES('$LessonID','$Question','$img','$badge_img','$Q_force','$Q_time')";
$query = mysqli_query($conn, $sql);
if($query){
    // echo 'OK';
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=DetailsLesson&LessonID=$LessonID&Name_lesson=$Name_lesson'";
}else{
 echo "no Ok .$sql";
}

?>