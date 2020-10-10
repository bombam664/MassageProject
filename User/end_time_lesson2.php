<?php
include("../connectDB.php");
session_start();
 $CustomerID=$_SESSION['CustomerID'];

// -----get value lesson1-----
$LessonID=$_GET['LessonID'];
$LessonDID=$_GET['LessonDID'];
$Name_lesson=$_GET['Name_lesson'];
 // -----get value lesson1-----

date_default_timezone_set('Asia/Bangkok');
 $endTime=date("h:i:s");

 if (!$LessonID) {
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=404page'>";
} else {
$sql="SELECT * FROM timeonlesson WHERE
 TimeonlesID = (SELECT MAX(TimeonlesID) 
FROM timeonlesson 
WHERE CustomerID=$CustomerID AND LessonDID=$LessonDID)";
$query = mysqli_query($conn,$sql);
while($row=$query->fetch_assoc()){
    $TimeonlesID=$row['TimeonlesID'];
    $LessonDID=$row['LessonDID'];
    if($LessonDID==$LessonDID){
        
        $sqla="UPDATE timeonlesson SET Time_end='$endTime' WHERE TimeonlesID='$TimeonlesID'";
        $querya = mysqli_query($conn,$sqla);
        if($querya){
            // echo "OK";
            echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=start_time_lesson3&LessonID=$LessonID&Name_lesson=$Name_lesson'>";
        }else{
            echo 'NO OK'.$sqla;
        }
    }else{
        echo "no ok .$sql";   
}
}
}
mysqli_close($conn);
?>