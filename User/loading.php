<?php 
$LessonID=$_GET['LessonID'];
$Name_lesson=$_GET['Name_lesson'];
echo "<META HTTP-EQUIV='Refresh' CONTENT='3;URL=?module=quiz1&LessonID=$LessonID&Name_lesson=$Name_lesson'>";
?>
<section class="manual">
    <div class="block-load">
        <img src="../assets/Logo.svg" class="img-loading" alt="logo">
        <div class="block-ball">
            <marquee behavior="alternate" Direction="up" class="control-marquee" scrollamount="6">
            <div class="ball"></div>
            </marquee>
            <marquee behavior="alternate" Direction="up" class="control-marquee" scrollamount="5">
            <div class="ball"></div>
            </marquee>
            <marquee behavior="alternate" Direction="up" class="control-marquee" scrollamount="4">
            <div class="ball"></div>
            </marquee>
        </div>
    </div>
</section>