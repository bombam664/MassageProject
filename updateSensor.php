<?php
include("connectDB.php");

$Sensor_name=$_POST['Sensor_name'];
$MachineID=$_POST['machineID'];
$LessonDID=$_POST['LessonDID'];
$CustomerID=$_POST['CustomerID'];
$A_force=$_POST['A_force'];
$A_time=$_POST['A_time'];
$Count_time=$_POST['Count_time'];

$sql="SELECT * FROM data_sensor WHERE Sensor_name='$Sensor_name' AND MachineID='$MachineID' AND LessonDID='$LessonDID' AND CustomerID='$CustomerID'";

$query = mysqli_query($conn,$sql);
$row = $query->fetch_array();

if($row){
    $sqla="UPDATE data_sensor SET A_force='$A_force', A_time='$A_time', Count_time='$Count_time' 
     WHERE Sensor_name='$Sensor_name' AND MachineID='$MachineID' AND LessonDID='$LessonDID' AND CustomerID='$CustomerID'";

        $querya = mysqli_query($conn,$sqla);
        if($querya){
            echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=updateSensor'>";
        }else{
            echo 'NO OK'.$sqla;
        }
    
}else{
     $sqlb="INSERT INTO data_sensor(Sensor_name, MachineID, LessonDID, CustomerID, A_force, A_time, Count_time)
     VALUES('$Sensor_name', '$MachineID', '$LessonDID', '$CustomerID', '$A_force', '$A_time', '$Count_time')";

        $queryb = mysqli_query($conn,$sqlb);
        if($queryb){
            echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=updateSensor'>";
        }else{
            echo 'NO OK'.$sqlb;
        }
}

mysqli_close($conn);
?>
