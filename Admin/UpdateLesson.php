<?php
include("../connectDB.php");
echo $LessonID=$_POST['LessonID'];
echo $Name_lesson=$_POST['Name_lesson'];


$sql="UPDATE lesson SET Name_lesson='$Name_lesson' WHERE LessonID='$LessonID'";
$query=mysqli_query($conn,$sql);
if($query){
    // echo "แก้ไขข้อมูลสำเร็จ";
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=FormEditLesson&LessonID=$LessonID'>";
}else{
    echo "No ok .$sql";
}

?>