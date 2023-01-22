<?php
include("../connectDB.php");
$LessonID=$_GET['LessonID'];
$sql="DELETE FROM lesson WHERE LessonID='$LessonID'";
$query=mysqli_query($conn,$sql);
if($query){
    // echo "ลบข้อมูลสำเร็จ";
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=Lesson'>";
}else{
    echo "No ok .$sql";
}
mysqli_close($conn);
?>