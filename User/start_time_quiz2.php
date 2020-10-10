<?php
include("../connectDB.php");
session_start();
 $CustomerID = $_SESSION['CustomerID'];
 $LessonID = $_GET['LessonID'];
 $Quiz = $_GET['Quiz'];
 $MyRandom = $_GET['MyRandom'];
 $Name_lesson = $_GET['Name_lesson'];

date_default_timezone_set('Asia/Bangkok');
$startTime=date("h:i:s");
$DateLog=date("Y-m-d");

if(!$LessonID){
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=404page'>";
 }else{
    $sql="SELECT * FROM lesson_details WHERE LessonID=$LessonID AND Question=$MyRandom";
    $query = mysqli_query($conn,$sql);
    while($row=$query->fetch_assoc()){
       $LessonDID=$row['LessonDID'];
        $Question=$row['Question'];

        if($Question==$MyRandom){

            $sqla="INSERT INTO timeonquiz(CustomerID,LessonDID,Time_start,logDate)VALUES('$CustomerID','$LessonDID','$startTime','$DateLog')";
            $querya = mysqli_query($conn,$sqla);
            if($querya){
                echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=quiz2&LessonID=$LessonID&Quiz=$Quiz&MyRandom=$MyRandom&Name_lesson=$Name_lesson'>";
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