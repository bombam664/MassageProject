<?php
$module=$_REQUEST['module'];
if($module=="") {
$content="./login.php";
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
    <?php include($content); ?>
</body>
</html>