<?php 
include("../connectDB.php");
session_start();
 $CustomerID=$_SESSION['CustomerID'];
 $LessonID=$_GET['LessonID'];
 $Name_lesson=$_GET['Name_lesson'];

$sql="INSERT INTO enroll_lesson(CustomerID ,LessonID)VALUES('$CustomerID','$LessonID')";
$query=mysqli_query($conn,$sql);
if($query){
     // echo "ok";
     echo "<META HTTP-EQUIV='Refresh' CONTENT='1;URL=?module=start_time_lesson1&LessonID=$LessonID&Name_lesson=$Name_lesson'>";
}else{
    echo "no ok .$sql";
}
mysqli_close($conn);
?>