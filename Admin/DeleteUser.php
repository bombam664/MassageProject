<?php
include("../connectDB.php");
 $CustomerID=$_GET['CustomerID'];
$sql="DELETE FROM customer WHERE CustomerID='$CustomerID'";
$query=mysqli_query($conn,$sql);
if($query){
    // echo "ลบข้อมูลสำเร็จ";
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=User'>";
}else{
    echo "No ok .$sql";
}
mysqli_close($conn);
?>