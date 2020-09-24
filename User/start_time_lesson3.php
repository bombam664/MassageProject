<?php
include("../connectDB.php");
session_start();
$CustomerID=$_SESSION['CustomerID'];

// -----get value end_time_lesson1-----
$LessonID=$_GET['LessonID'];
$Name_lesson=$_GET['Name_lesson'];
// -----get value end_time_lesson1-----

date_default_timezone_set('Asia/Bangkok');
$startTime=date("h:i:s");
$DateLog=date("Y-m-d");

 if(!$LessonID){
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=404page'>";
 }else{
$sql="SELECT * FROM lesson_details WHERE LessonID=$LessonID AND Question=3";
$query = mysqli_query($conn,$sql);
while($row=$query->fetch_assoc()){
    $LessonDID=$row['LessonDID'];
    $Question=$row['Question'];

    if($Question==3){

        $sqla="INSERT INTO timeonlesson(CustomerID,LessonDID,Time_start,logDate)VALUES('$CustomerID','$LessonDID','$startTime','$DateLog')";
        $querya = mysqli_query($conn,$sqla);
        if($querya){
            echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=lesson3&LessonID=$LessonID&Name_lesson=$Name_lesson'>";
        }else{
            echo 'NO OK'.$sqla;
        }
     }else{
         echo "no ok. $sql";
     }

}
 }
mysqli_close($conn);
?>