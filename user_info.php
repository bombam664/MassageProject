<?php
include("connectDB.php");
session_start();
 $Username=$_GET['Username'];
 $Password=$_GET['Password'];


$sql = "SELECT * FROM customer WHERE Username='$Username' AND Password='$Password'";
$query = mysqli_query($conn,$sql);
$row = $query->fetch_array();
if($row>0){
    $_SESSION['login_user']=$Username;
    $_SESSION['CustomerID'] = $row['CustomerID'];
    $_SESSION['Name'] = $row['Name'];
     header('location:User');
}else{
    echo 'No oK. $sql';
}
mysqli_close($conn);
?>

