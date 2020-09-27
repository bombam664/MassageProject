<?php
session_start();
unset($_SESSION['CustomerID']);
unset($_SESSION['Name']);

echo "<META HTTP-EQUIV='Refresh' CONTENT='1;URL=index.php'>";

?>