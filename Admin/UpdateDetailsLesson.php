<?php
include("../connectDB.php");
$LessonID=$_POST['LessonID'];
$LessonDID=$_POST['LessonDID'];
 $Question=$_POST['Question'];
$img=$_POST['img'];
$badge_img=$_POST['badge_img'];
$Q_force=$_POST['Q_force'];
$Q_time=$_POST['Q_time'];
$CountTime=$_POST['CountTime'];

$sql="UPDATE lesson_details SET  Question='$Question', img='$img',badge_img='$badge_img', Q_force='$Q_force', Q_time='$Q_time' ,CountTime='$CountTime'
WHERE LessonDID='$LessonDID' AND LessonID='$LessonID' ";
$query=mysqli_query($conn,$sql);
if($query){
//     // echo "แก้ไขข้อมูลสำเร็จ";
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=FormEditDetailsLesson&LessonID=$LessonID&LessonDID=$LessonDID'>";
}else{
    echo "No ok .$sql";
}
mysqli_close($conn);
?>