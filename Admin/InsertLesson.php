<?php
include("../connectDB.php");
 $NameLesson=$_POST['NameLesson'];
$sql="INSERT INTO lesson(Name_lesson)VALUES('$NameLesson')";
$query = mysqli_query($conn, $sql);
if($query){
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=Lesson'>";
}else{
 echo "no Ok .$sql";
}
mysqli_close($conn);
?>