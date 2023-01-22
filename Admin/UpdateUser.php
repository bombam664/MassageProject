<?php
include("../connectDB.php");
$CustomerID=$_POST['CustomerID'];
$Name=$_POST['name'];
$Gender=$_POST['gender'];
$Username=$_POST['username'];
$Password=$_POST['password'];

$sql="UPDATE customer SET Name='$Name', Gender='$Gender', Username='$Username', Password='$Password' WHERE CustomerID='$CustomerID'";
$query=mysqli_query($conn,$sql);
if($query){
    echo "แก้ไขข้อมูลสำเร็จ";
    echo "<META HTTP-EQUIV='Refresh' CONTENT='2;URL=?module=FormEditUser&CustomerID=$CustomerID'>";
}else{
    echo "No ok .$sql";
}

?>