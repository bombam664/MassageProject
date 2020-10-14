<?php
include("../connectDB.php");
session_start();
$CustomerID = $_SESSION['CustomerID'];
$LessonID = $_GET['LessonID'];
$Name_lesson = $_GET['Name_lesson'];
$Quiz = 1;

$sql = "SELECT les.LessonID, les.LessonDID , les.Question , les.img ,les.badge_img , les.Q_force , les.Q_time
,da.SensorID,da.machineID,da.CustomerID,da.A_force,da.A_time
FROM lesson_details les
LEFT JOIN data_sensor da
on les.LessonDID = da.LessonDID 
WHERE LessonID=$LessonID AND Question=$Quiz AND CustomerID=$CustomerID";

$query = mysqli_query($conn, $sql);

if (!$LessonID) {
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=404page'>";
} else {
    echo "<META HTTP-EQUIV='Refresh' CONTENT='2;URL=?module=lesson1&LessonID=$LessonID&Name_lesson=$Name_lesson'>";

?>



    <!-- ----------question array---------------- -->
    <?php
    while ($row = $query->fetch_assoc()) {
        $row['LessonDID'];


    ?>
        <!-- ----------question array---------------- -->


        <nav class="lesson-title">
            <p><?php echo $Name_lesson; ?></p>
        </nav>

        <header>
            <div class="<?php
                        if ($Quiz == 1) {
                            echo $SetBadge = 'badgeCheck';
                        } elseif ($Quiz > 1) {
                            echo $SetBadge = 'badgeThen';
                        } else {
                            echo $SetBadge = 'badge';
                        }
                        ?>
        " onClick="location.href='?module=select_end_time_lesson&LessonID=<?php echo $LessonID; ?>
        &Name_lesson=<?php echo $Name_lesson; ?>&LessonDID=<?php echo $row['LessonDID']; ?>&SelectQ=<?php echo $SelectQ = 1; ?>'">
                <p>1</p>
            </div>
            <div class="<?php
                        if ($Quiz == 2) {
                            echo $SetBadge = 'badgeCheck';
                        } elseif ($Quiz > 2) {
                            echo $SetBadge = 'badgeThen';
                        } else {
                            echo $SetBadge = 'badge';
                        }
                        ?>
        " onClick="location.href='?module=select_end_time_lesson&LessonID=<?php echo $LessonID; ?>
        &Name_lesson=<?php echo $Name_lesson; ?>&LessonDID=<?php echo $row['LessonDID']; ?>&SelectQ=<?php echo $SelectQ = 2; ?>'">
                <p>2</p>
            </div>
            <div class="<?php
                        if ($Quiz == 3) {
                            echo $SetBadge = 'badgeCheck';
                        } elseif ($Quiz > 3) {
                            echo $SetBadge = 'badgeThen';
                        } else {
                            echo $SetBadge = 'badge';
                        }
                        ?>
        " onClick="location.href='?module=select_end_time_lesson&LessonID=<?php echo $LessonID; ?>
        &Name_lesson=<?php echo $Name_lesson; ?>&LessonDID=<?php echo $row['LessonDID']; ?>&SelectQ=<?php echo $SelectQ = 3; ?>'">
                <p>3</p>
            </div>
            <div class="<?php
                        if ($Quiz == 4) {
                            echo $SetBadge = 'badgeCheck';
                        } elseif ($Quiz > 4) {
                            echo $SetBadge = 'badgeThen';
                        } else {
                            echo $SetBadge = 'badge';
                        }
                        ?>
        " onClick="location.href='?module=select_end_time_lesson&LessonID=<?php echo $LessonID; ?>
        &Name_lesson=<?php echo $Name_lesson; ?>&LessonDID=<?php echo $row['LessonDID']; ?>&SelectQ=<?php echo $SelectQ = 4; ?>'">
                <p>4</p>
            </div>
            <div class="<?php
                        if ($Quiz == 5) {
                            echo $SetBadge = 'badgeCheck';
                        } elseif ($Quiz > 5) {
                            echo $SetBadge = 'badgeCheck';
                        } else {
                            echo $SetBadge = 'badge';
                        }
                        ?>
        " onClick="location.href='?module=select_end_time_lesson&LessonID=<?php echo $LessonID; ?>
        &Name_lesson=<?php echo $Name_lesson; ?>&LessonDID=<?php echo $row['LessonDID']; ?>&SelectQ=<?php echo $SelectQ = 5; ?>'">
                <p>5</p>
            </div>
        </header>

        <section class="boxlesson">
            <div class="card-imgbackground" style="background-image: url('./assets_img/lesson/<?php echo $row['img']; ?>');<?php echo $row['badge_img']; ?>">
                <?php
                $A_force = $row['A_force'];
                if ($A_force > 0) {
                    $badge = '#149414';
                } else {
                    $badge = '#cccccc';
                }
                ?>
                <div class="badge-img" style="background-color:<?php echo $badge; ?>;"></div>

            </div>

        </section>

        <section class="boxlesson-text">
            <div class="boxlesson-text-card">
                <div class="background-boxlesson" style="width: 100%;height:100%;padding:10px;padding-bottom:30px;">

                    <?php

                    $p1 = $row['Q_force'];
                    $p2 = $p1 / 100;
                    $p3 = $row['A_force'];
                    // $p3 = 40;
                    $p4 = $p3 / $p2;

                    if ($p4 < 90) {
                        $force1 = '#f1f1f1';
                    } elseif ($p4 >= 90 && $p4 <= 100) {
                        $force1 = '#7CFC00';
                    } elseif ($p4 > 100) {
                        $force1 = '#FF0000';
                    } else {
                        $force1 = '#FF0000';
                    }

                    $data = array($row['Q_time']);
                    $date = new DateTime('0000-00-00 00:00:00');
                    $h = 0;
                    $m = 0;
                    $s = 0;
                    foreach ($data as $time) {
                        $a = explode(":", $time);
                        $h = $h + $a[0];
                        $m = $m + $a[1];
                        $s = $s + $a[2];
                    }
                    $date->modify("$h hour $m min $s sec");
                    $date->format('s');
                    // ---------------answer data date---------------
                    $data1 = array($row['A_time']);
                    $date1 = new DateTime('0000-00-00 00:00:00');
                    $h = 0;
                    $m = 0;
                    $s = 0;
                    foreach ($data1 as $time) {
                        $a = explode(":", $time);
                        $h = $h + $a[0];
                        $m = $m + $a[1];
                        $s = $s + $a[2];
                    }
                    $date1->modify("$h hour $m min $s sec");
                    $date1->format('s');

                    $s1 = $date->format('s');
                    $s2 = $s1 / 100;
                    $s3 = $date1->format('s');
                    // $s3 = 0;
                    $s4 = $s3 / $s2;

                    if ($s4 < 90) {
                        $time1 = '#f1f1f1';
                    } elseif ($s4 >= 90 && $s4 <= 100) {
                        $time1 = '#7CFC00';
                    } elseif ($s4 > 100) {
                        $time1 = '#FF0000';
                    } else {
                        $time1 = '#FF0000';
                    }

                    if ($force1 == '#FF0000' && $time1 == '#FF0000') {
                        echo '<p class="changtextbox1"><strong style="font-size:clamp(35px,1.5vw,35px);
                    font-weight:bold;color:#fa3333;">โอ้ยเจ็บ!</strong> กดแรงไปแล้ว</p>';
                        echo '<p class="changtextbox2">และใช้เวลามากเกินไปแล้วด้วยนะ</p>';
                    } elseif ($force1 == '#FF0000' && $time1 == '#7CFC00') {
                        echo '<p class="changtextbox1"><strong style="font-size:clamp(35px,1.5vw,35px);
                    font-weight:bold;color:#fa3333;">โอ้ยเจ็บ!</strong> กดแรงไปแล้ว</p>';
                        echo '<p  class="changtextbox2">กดเบาๆ กว่านี้อีกหน่อย</p>';
                    } elseif ($force1 == '#FF0000' && $time1 == '#f1f1f1') {
                        echo '<p class="changtextbox1"><strong style="font-size:clamp(35px,1.5vw,35px);
                    font-weight:bold;color:#fa3333;">โอ้ยเจ็บ!</strong> กดแรงไปแล้ว</p>';
                        echo '<p  class="changtextbox2">กดเบาๆ กว่านี้อีกหน่อย</p>';
                        echo '<p class="changtextbox2">และกดให้นานอีกนิดนะ</p>';
                    } elseif ($force1 == '#7CFC00' && $time1 == '#FF0000') {
                        echo '<p class="changtextbox1">ใช้เวลามากเกินไปแล้วนะ</p>';
                        echo '<p class="changtextbox2">อีกนิดเดียว ครั้งหน้าลดลงหน่อย</p>';
                    } elseif ($force1 == '#7CFC00' && $time1 == '#7CFC00') {
                        echo '<p class="changtextbox1">เย้... ยินดีด้วย</p>';
                        echo '<p class="changtextbox2">บรรลุเป้าหมายแล้วนะ</p>';
                    } elseif ($force1 == '#7CFC00' && $time1 == '#f1f1f1') {
                        echo '<p class="changtextbox1">กดให้นานอีกนิด...</p>';
                        echo '<p class="changtextbox2">เกือบถึงค่าเวลาเป้าหมายแล้ว...</p>';
                    } elseif ($force1 == '#f1f1f1' && $time1 == '#FF0000') {
                        echo '<p class="changtextbox1"><strong style="font-size:clamp(35px,1.5vw,35px);font-weight:bold;color:#fa3333;">เพิ่ม</strong> แรงอีกนิด...</p>';
                        echo '<p class="changtextbox2">ใช้เวลามากเกินไปแล้วนะ</p>';
                    } elseif ($force1 == '#f1f1f1' && $time1 == '#7CFC00') {
                        echo '<p class="changtextbox1"><strong style="font-size:clamp(35px,1.5vw,35px);font-weight:bold;color:#fa3333;">เพิ่ม</strong> แรงอีกนิด...</p>';
                        echo '<p class="changtextbox2">เกือบถึงค่าของแรงเป้าหมายแล้ว...</p>';
                    } else {
                        echo '<p class="changtextbox2" style="font-size:clamp(20px,1vw,20px);">กดตามจุดที่แสดงไว้ ด้วยเเรง ';
                        echo $row['Q_force'];
                        echo ' ปอนด์</p>';
                        echo '<p class="changtextbox2" style="font-size:clamp(20px,1vw,20px);">เป็นเวลา ';
                        echo $s1;
                        echo ' วินาที</p>';
                        echo '<p class="changtextbox2" style="font-size:clamp(20px,1vw,20px);">แล้วดูการแสดงค่าที่ด้านขวาของรูปภาพ</p>';
                    }

                    ?>

                </div>

            </div>

        </section>

        <section class="boxlesson2">
            <div class="control-progress">
                <div class="block-progress">
                    <div style="display: flex;flex-direction:row;justify-content:space-between;padding-right:40px;">
                        <p>แรง(p)</p>
                        <p><?php echo $row['Q_force']; ?></p>
                    </div>

                    <div class="block-details">
                        <p style="margin-right:40px;"><?php echo $row['A_force']; ?>/<?php echo $row['Q_force']; ?></p>

                        <div class="progress">
                            <?php
                            if ($p4 < 90) {
                                $p5 = $p4 - 10;
                                $color1 = '#f1f1f1';
                            } elseif ($p4 >= 90 && $p4 <= 100) {
                                $p5 = $p4 - 10;
                                $color1 = '#7CFC00';
                            } elseif ($p4 > 100) {
                                $p5 = '100';
                                $color1 = '#FF0000';
                            } else {
                                $p5 = '100';
                                $color1 = '#FF0000';
                            }
                            ?>
                            <div class="value-progrees" style="width:<?php echo $p5 ?>%;background-color:<?php echo $color1; ?>;">
                                <p><?php echo $p3; ?></p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="block-progress">
                    <div style="display: flex;flex-direction:row;justify-content:space-between;padding-right:40px;">
                        <p>เวลา(s)</p>
                        <p>10</p>
                    </div>
                    <div class="block-details">

                        <p style="margin-right:25px;"><?php echo $date1->format('s'); ?>/<?php echo  $date->format('s'); ?></p>
                        <div class="progress">
                            <?php
                            if ($s4 < 90) {
                                $s5 = $s4 - 10;
                                $color2 = '#f1f1f1';
                            } elseif ($s4 >= 90 && $s4 <= 100) {
                                $s5 = $s4 - 10;
                                $color2 = '#7CFC00';
                            } elseif ($s4 > 100) {
                                $s5 = '100';
                                $color2 = '#FF0000';
                            } else {
                                $s5 = '100';
                                $color2 = '#FF0000';
                            }
                            ?>
                            <div class="value-progrees" style="width:<?php echo $s5; ?>%;background-color:<?php echo $color2; ?>;">
                                <p><?php echo $s3; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <footer>
            <a href="?module=back_end_time_lesson1&LessonID=<?php echo $LessonID; ?>&Name_lesson=<?php echo $Name_lesson; ?>&LessonDID=<?php echo $row['LessonDID']; ?>">
                <img src="./assets_img/icon/back.svg" alt="back" width="50">
            </a>

            <a href="?module=end_time_lesson1&LessonID=<?php echo $LessonID; ?>&Name_lesson=<?php echo $Name_lesson; ?>&LessonDID=<?php echo $row['LessonDID']; ?>">
                <img src="./assets_img/icon/nextpage.svg" alt="next" width="50">
            </a>
        </footer>

        <!-- ----------close question array---------------- -->
<?php
    }
}
mysqli_close($conn);
?>