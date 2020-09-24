<?php
session_start();
 $_SESSION['CustomerID'];
 $_SESSION['Name'];
 if(!$_SESSION['Name'] || !$_SESSION['CustomerID']){
    $message = "เข้าแบบนี้ไม่น่ารักเลยนะ !";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=../index.php'>";
}else{

$module=$_REQUEST['module'];
if($module=="") {
$content="./main.php";
} else {
$content="$module.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Massage Learning Kit</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include("navbar.php");?>
    <?php include($content); ?>
</body>
</html>
<?php
}
?>