<?php
session_start();
$_SESSION['CustomerID'];
$_SESSION['Name'];
?>
<nav style="background-color: #40acc1;">
    <a href="?module=main">
        <img src="./assets_img/logo_heading.svg" alt="logo" class="logo-heading">
    </a>
    <div class="dropdown" style=" float:right;">
        <div class="box_menu_hamberger">
            <div class="menu_hamberger"></div>
            <div class="menu_hamberger"></div>
            <div class="menu_hamberger"></div>
        </div>
        <div class="dropdown-content">
            <a href="#" style="background-color:#f1f1f1;border-radius: 10px;color:#707070;"><img src="./assets_img/icon/user.svg" alt="avatar" class="icon-menu"><?php echo $_SESSION['Name'];?></a>
            <a href="?module=contact"><img src="./assets_img/icon/email.svg" alt="e-mail" class="icon-menu">ติดต่อสอบถาม</a>
            <a href="../logout.php"><img src="./assets_img/icon/exit.svg" alt="exit" class="icon-menu">ออกจากระบบ</a>
        </div>
    </div>
</nav>