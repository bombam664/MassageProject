<?php
include("../connectDB.php");
 $SensorID=$_GET['SensorID'];
$sql="DELETE FROM data_sensor WHERE SensorID='$SensorID'";
$query=mysqli_query($conn,$sql);
if($query){
    // echo "ลบข้อมูลสำเร็จ";
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=DataSensor'>";
}else{
    echo "No ok .$sql";
}
mysqli_close($conn);
?>