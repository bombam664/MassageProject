<?php
session_start();
$_SESSION['CustomerID'];
$_SESSION['Name'];
?>
<div class="block-background-main">
    <div class="block-text">
        <div class="text-name lg">
            <p>สวัสดีจ้า <?php echo $_SESSION['Name']; ?></p>
        </div>
            <p>ยินดีต้อนรับเข้าสู่เว็บไซต์แห่งการเรียนรู้</p>
    </div>
     
    <div class="block-menu">
        <div class="block-card block-card-2">
            <a href="?module=menu_lesson">
                <div class="body-card" >
                    <img src="./assets_img/lesson.svg" alt="บทเรียน" class="img-responsive">
                    <p>บทเรียน</p>
                </div>
            </a>
            <a href="?module=scoreboard">
            <div class="body-card">
                <img src="./assets_img/score.svg" alt="คะแนน" class="img-responsive">
                <p>คะแนน</p>
            </div>
            </a>
        </div>
        <div class="block-card">
            <a href="?module=menu_quiz">
                <div class="body-card">
                    <img src="./assets_img/practice.svg" alt="แบบทดสอบ" class="img-responsive">
                    <p>แบบทดสอบ</p>
                </div>
            </a>
            <a href="?module=manual">
                <div class="body-card">
                    <img src="./assets_img/manual.svg" alt="คู่มือ" class="img-responsive">
                    <p>คู่มือ</p>
                </div>
            </a>
            
        
        </div>
       
    </div>
</div>


   