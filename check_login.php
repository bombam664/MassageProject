<?php
include("connectDB.php");
    session_start();
    $Username=$_POST['username'];
    $Password=$_POST['password'];


$sql = "SELECT * FROM customer WHERE Username='$Username' AND Password='$Password'";
$query = mysqli_query($conn,$sql);
$row = $query->fetch_array();
if($Username=='admin' AND $Password=='1234'){
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=formLoginAdmin&Username=$Username'>"; 
}elseif($row>0){
    $_SESSION['login_user']=$Username;
    $_SESSION['CustomerID'] = $row['CustomerID'];
    $_SESSION['Name'] = $row['Name'];
    header('location:User');
}else{
    $message = "รหัสผู้ใช้งาน หรือ รหัสผ่านไม่ถูกต้อง";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
}

mysqli_close($conn);
?>