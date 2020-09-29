<?php
include("../connectDB.php");
session_start();
 $CustomerID=$_SESSION['CustomerID'];
 $LessonID=$_GET['LessonID'];
 $Totalscore=$_GET['Totalscore'];

$sql="INSERT INTO totalscore(CustomerID,LessonID,Totalscore) VALUES('$CustomerID','$LessonID','$Totalscore')";
$query=mysqli_query($conn,$sql);
 if($query){
// 	echo "ok";
	 echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=menu_quiz'>";
 }else{
 	echo "no ok .$sql";
 }
mysqli_close($conn);
?>