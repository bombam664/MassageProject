<?php
session_start();
$Username=$_POST['Username'];
$Password=$_POST['Password'];
if($Username=='admin' and $Password=='s4dG[J_qG'){
    $_SESSION['login_user']=$Username;
    $_SESSION['Admin'] ='admin';
    $_SESSION['Name'] = 'Adminstation';
    header('location:Admin');
    
}else{
    $message = "รหัสเข้าใช้งานไม่ถูกต้อง";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
}
?>