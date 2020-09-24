<?php
include("../connectDB.php");
session_start();
$CustomerID = $_SESSION['CustomerID'];
$LessonID = $_GET['LessonID'];
$Quiz = $_GET['Quiz'];
$Quiz2 = $Quiz + 1;
$MyRandom = $_GET['MyRandom'];
$Name_lesson = $_GET['Name_lesson'];
$sql = "SELECT les.LessonID, les.LessonDID , les.Question , les.img ,les.badge_img , les.Q_force , les.Q_time
,da.SensorID,da.machineID,da.CustomerID,da.A_force,da.A_time,da.Count_time
FROM lesson_details les
LEFT JOIN data_sensor da
on les.LessonDID = da.LessonDID 
WHERE LessonID=$LessonID AND Question=$MyRandom AND CustomerID=$CustomerID";

$query = mysqli_query($conn, $sql);
if (!$LessonID) {
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=404page'>";
} else {
?>


    <!-- ----------question array---------------- -->
    <?php
    while ($row = $query->fetch_assoc()) {
        $row['LessonDID'];


    ?>
        <!-- ----------question array---------------- -->
        <p style=" background-color: #F1EBEB;"><?php echo $Name_lesson; ?></p>
        <nav class="lesson-title">
            <p>แบบทดสอบ สัญญาณที่ <?php echo $row['Question']; ?></p>
        </nav>
        <section class="boxlesson">
            <div class="card-imgbackground" style="background-image: url('./assets_img/lesson/<?php echo $row['img']; ?>');<?php echo $row['badge_img']; ?>">
                <?php
                $A_force = $row['A_force'];
                if ($A_force > 0) {
                    $badge = 'background-color:#40BFC1;border:2px solid #ffffff;';
                    $PointSensor = 'true';
                } else {
                    $badge = 'background-color:#F7CDA3;border:0;';
                    $PointSensor = 'false';
                }
                ?>
                <div class="badge-img" style="<?php echo $badge; ?>"></div>
            </div>
            <div class="lesson-boxtext">
                <p>
                    กดจุดที่ถูกต้องด้วยเเรงเเละเวลาที่กำหนด
                    แล้วดูการแสดงค่าที่ด้านขวาของรูปภาพ
                </p>
            </div>
        </section>
        <section class="boxlesson2">
        <div class="Count_time">
                <?php
                // -------------Count time-----------------
                $data2 = array($row['Count_time']);
                $date2 = new DateTime('0000-00-00 00:00:00');
                $h = 0;
                $m = 0;
                $s = 0;
                foreach ($data2 as $time) {
                    $a = explode(":", $time);
                    $h = $h + $a[0];
                    $m = $m + $a[1];
                    $s = $s + $a[2];
                }
                $date2->modify("$h hour $m min $s sec");
                $date2->format('s');
                ?>
                <p>เวลา &nbsp;<p style="font-size:35px;color:#E30C0C;"><?php echo $date2->format('s'); ?></p>&nbsp; วินาที</p>
            </div>
            <div class="control-progress">
                <div class="block-progress">
                    <p>แรง(p)</p>
                    <div class="block-details">
                        <p style="margin-right:60px;"><?php echo $row['A_force']; ?>/<?php echo $row['Q_force']; ?></p>
                        <div class="progress" style="padding-bottom:4.5px;">
                            <?php
                            $p1 = $row['Q_force'];
                            $p2 = $p1 / 100;
                            $p3 = $row['A_force'];
                            $p4 = $p3 / $p2;

                            if ($p4 < 90) {
                                $p5 = $p4 - 10;
                                $color1 = '#f1f1f1';
                                $PointForce = 'false';
                            } elseif ($p4 >= 90 && $p4 <= 100) {
                                $p5 = $p4 - 10;
                                $color1 = '#7CFC00';
                                $PointForce = 'true';
                            } elseif ($p4 > 100) {
                                $p5 = '100';
                                $color1 = '#FF0000';
                                $PointForce = 'false';
                            } else {
                                $p5 = '100';
                                $color1 = '#FF0000';
                                $PointForce = 'false';
                            }
                            ?>
                            <div class="value-progrees" style="width:<?php echo $p5 ?>%;background-color:<?php echo $color1; ?>;">&nbsp;</div>
                        </div>
                    </div>

                </div>

                <div class="block-progress">
                    <p>เวลา(s)</p>
                    <div class="block-details">
                        <?php
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

                        ?>
                        <p style="margin-right:25px;"><?php echo $date1->format('s'); ?>/<?php echo $date->format('s'); ?></p>
                        <div class="progress" style="padding-bottom:4.5px;">
                            <?php
                            $s1 = $date->format('s');
                            $s2 = $s1 / 100;
                            $s3 = $date1->format('s');
                            $s4 = $s3 / $s2;


                            if ($s4 < 90) {
                                $s5 = $s4 - 10;
                                $color2 = '#f1f1f1';
                                $PointTime = 'false';
                            } elseif ($s4 >= 90 && $s4 < 100) {
                                $s5 = $s4 - 10;
                                $color2 = '#7CFC00';
                                $PointTime = 'true';
                            } elseif ($s4 > 100) {
                                $s5 = '100';
                                $color2 = '#FF0000';
                                $PointTime = 'false';
                            } else {
                                $s5 = '100';
                                $color2 = '#FF0000';
                                $PointTime = 'false';
                            }
                            ?>
                            <div class="value-progrees" style="width:<?php echo $s5; ?>%;background-color:<?php echo $color2; ?>;">&nbsp;</div>
                        </div>
                    </div>

                </div>

            </div>
            
            <?php
            // $c1 = 0;
            $c1=$date2->format('s');
            $c2 = 0;
            if ($c1 == $c2) {
                $Question = $row['Question'];
                $LessonDID = $row['LessonDID'];
                $modal = "block";
            } else {
                // echo "ok";
                echo "<META HTTP-EQUIV='Refresh' CONTENT='2;URL=?module=quiz2&LessonID=$LessonID
                &Quiz=$Quiz&MyRandom=$MyRandom&Name_lesson=$Name_lesson'>";
                $modal = "none";
            }

            ?>
        </section>
        <header style="justify-content: center;">
            <div style="display:flex;flex-direction:row;">
                <div class="<?php
                            if ($Quiz2 == 1) {
                                echo $SetBadge = 'badgeCheck';
                            } elseif ($Quiz2 > 1) {
                                echo $SetBadge = 'badgeThen';
                            } else {
                                echo $SetBadge = 'badge';
                            }
                            ?>
    ">
                    <p>1</p>
                </div>
                <div class="<?php
                            if ($Quiz2 == 2) {
                                echo $SetBadge = 'badgeCheck';
                            } elseif ($Quiz2 > 2) {
                                echo $SetBadge = 'badgeThen';
                            } else {
                                echo $SetBadge = 'badge';
                            }
                            ?>
    ">
                    <p>2</p>
                </div>
                <div class="<?php
                            if ($Quiz2 == 3) {
                                echo $SetBadge = 'badgeCheck';
                            } elseif ($Quiz2 > 3) {
                                echo $SetBadge = 'badgeThen';
                            } else {
                                echo $SetBadge = 'badge';
                            }
                            ?>
    ">
                    <p>3</p>
                </div>
                <div class="<?php
                            if ($Quiz2 == 4) {
                                echo $SetBadge = 'badgeCheck';
                            } elseif ($Quiz2 > 4) {
                                echo $SetBadge = 'badgeThen';
                            } else {
                                echo $SetBadge = 'badge';
                            }
                            ?>
        
    ">
                    <p>4</p>
                </div>
                <div class="<?php
                            if ($Quiz2 == 5) {
                                echo $SetBadge = 'badgeCheck';
                            } else {
                                echo $SetBadge = 'badge';
                            }
                            ?>
    ">
                    <p>5</p>
                </div>

            </div>
        </header>

        <div  class="modal" style="display:<?php echo $modal; ?>">
            <div class="modal-content">
                <div style="text-align:center;">
                    <p class="text-modal">
                        <img src="./assets_img/icon/clock.png" alt="alarm-clock" class="img-modal">
                        หมดเวลา!!!
                    </p>
                    <p>กดถัดไปเพื่อดูผลการทดสอบสัญญาณ</p>
                </div>

                <div class="block-modal">
                    <a href="?module=score&
                LessonID=<?php echo $LessonID; ?>&LessonDID=<?php echo $LessonDID; ?>
                &Question=<?php echo $Question; ?>&PointSensor=<?php echo $PointSensor; ?>
                &PointForce=<?php echo $PointForce; ?>&PointTime=<?php echo $PointTime; ?>
                &Quiz=<?php echo $Quiz2; ?>&Name_lesson=<?php echo  $Name_lesson; ?>" class="btn-modal">
                        ถัดไป
                    </a>
                </div>
            </div>

        </div>

        <!-- ----------close question array---------------- -->
<?php
    }
}
mysqli_close($conn);
?>