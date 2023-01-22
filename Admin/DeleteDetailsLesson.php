<?php
include("../connectDB.php");
 $LessonDID=$_GET['LessonDID'];
 $LessonID=$_GET['LessonID'];
 $Name_lesson=$_GET['Name_lesson'];
$sql="DELETE FROM lesson_details WHERE LessonDID='$LessonDID' AND LessonID='$LessonID'";
$query=mysqli_query($conn,$sql);
if($query){
//     echo "ลบข้อมูลสำเร็จ";
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=DetailsLesson&LessonID=$LessonID&Name_lesson=$Name_lesson'>";
}else{
    echo "No ok .$sql";
}
mysqli_close($conn);
?>