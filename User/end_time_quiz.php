<?php
include("../connectDB.php");
session_start();
 $CustomerID = $_SESSION['CustomerID'];

 $LessonID = $_GET['LessonID'];
 $LessonDID = $_GET['LessonDID'];
 $Quiz = $_GET['Quiz'];
 $Question = $_GET['Question'];
 $PointSensor = $_GET['PointSensor'];
 $PointForce = $_GET['PointForce'];
 $PointTime = $_GET['PointTime'];
 $Name_lesson = $_GET['Name_lesson'];

date_default_timezone_set('Asia/Bangkok');
$endTime=date("h:i:s");

$sql="SELECT * FROM timeonquiz 
WHERE TimeonquizID = (SELECT MAX(TimeonquizID) 
FROM timeonquiz 
WHERE CustomerID=$CustomerID AND LessonDID=$LessonDID)";

$query = mysqli_query($conn,$sql);
while($row=$query->fetch_assoc()){
    $TimeonquizID=$row['TimeonquizID'];
     $LessonDID=$row['LessonDID'];


    if ($LessonDID==$LessonDID) {
        $sqla="UPDATE timeonquiz SET Time_end='$endTime' WHERE TimeonquizID='$TimeonquizID'";
        $querya = mysqli_query($conn,$sqla);
        if($querya){
            echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=score&LessonID=$LessonID
            &LessonDID=$LessonDID&Quiz=$Quiz&Question=$Question
            &PointSensor=$PointSensor&PointForce=$PointForce
            &PointTime=$PointTime&Name_lesson=$Name_lesson'>";
            
        }else{
            echo "NO OK .$sqla";
        }
    } else {
        echo "NO OK .$sql";
    }

}

mysqli_close($conn);
?>