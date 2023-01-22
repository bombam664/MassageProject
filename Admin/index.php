<?php
session_start();
if(!$_SESSION['Name']){
    $message = "เข้าแบบนี้ไม่น่ารักเลยนะ !";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=../index.php'>";
}else{
error_reporting(~E_NOTICE);
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Educational Massage</title>
    
</head>
<body>
    <table class="table" style="border:0;margin-bottom:0;">
        <tr>
            <td  colspan="2"><?php include('navbar.php'); ?></td>
        </tr>
        <tr>
            <td width="80" class="bg-dark p-0"><?php include('menu.php'); ?></td>
            <td><?php include($content); ?></td>
        </tr>
        <tr>
            <td  colspan="2" class="table-dark"><?php include('footer.php'); ?></td>
        </tr>
    </table>
        
        
        
        
  

    <script src="./js/jquery-3.5.1.min.js" ></script>  
    <script src="./js/app.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.min.js"></script>
    

</body>
</html>
<?php
}
?>