<?php
include("../connectDB.php");
session_start();
$CustomerID = $_SESSION['CustomerID'];
$LessonID = $_GET['LessonID'];
$Name_lesson = $_GET['Name_lesson'];
$Quiz = 2;

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
    echo "<META HTTP-EQUIV='Refresh' CONTENT='2;URL=?module=lesson2&LessonID=$LessonID&Name_lesson=$Name_lesson'>";
?>

    <!-- ----------question array---------------- -->
    <?php
    while ($row = $query->fetch_assoc()) {
        $row['LessonDID'];


    ?>
        <!-- ----------question array---------------- -->

        <p style=" background-color: #F1EBEB;"><?php echo $Name_lesson; ?></p>
        <nav class="lesson-title">
            <p>สัญญาณที่ <?php echo $row['Question']; ?></p>
        </nav>
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
            <div class="lesson-boxtext">
                <p>
                    กดตามจุดที่แสดงไว้ ด้วยเเรง <?php echo $row['Q_force']; ?> ปอนด์
                    เป็นเวลา <?php echo $row['Q_time']; ?> วินาที
                    แล้วดูการแสดงค่าที่ด้านขวาของรููปภาพ
                </p>
            </div>
        </section>
        <section class="boxlesson2">
            <div class="control-progress">
                <div class="block-progress">
                    <p>แรง(p)</p>
                    <div class="block-details">
                        <p style="margin-right:60px;"><?php echo $row['A_force']; ?>/<?php echo $row['Q_force']; ?></p>
                        <div class="progress">
                            <?php
                            $p1 = $row['Q_force'];
                            $p2 = $p1 / 100;
                            $p3 = $row['A_force'];;
                            $p4 = $p3 / $p2;

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
                        <div class="progress">
                            <?php
                            $s1 = $date->format('s');
                            $s2 = $s1 / 100;
                            $s3 = $date1->format('s');
                            $s4 = $s3 / $s2;


                            if ($s4 < 90) {
                                $s5 = $s4 - 10;
                                $color2 = '#f1f1f1';
                            } elseif ($s4 >= 90 && $s4 < 100) {
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
                            <div class="value-progrees" style="width:<?php echo $s5; ?>%;background-color:<?php echo $color2; ?>;">&nbsp;</div>
                        </div>
                    </div>

                </div>

            </div>


        </section>
        <header>
            <a href="?module=back_end_time_lesson2&LessonID=<?php echo $LessonID; ?>&Name_lesson=<?php echo $Name_lesson; ?>&LessonDID=<?php echo $row['LessonDID']; ?>">
                <img src="./assets_img/icon/back.svg" alt="back" width="50">
            </a>
            <div style="display:flex;flex-direction:row;">
                <div class="<?php
                            if ($Quiz == 1) {
                                echo $SetBadge = 'badgeCheck';
                            } elseif ($Quiz > 1) {
                                echo $SetBadge = 'badgeThen';
                            } else {
                                echo $SetBadge = 'badge';
                            }
                            ?>
        " onClick="location.href='?module=start_time_lesson1&LessonID=<?php echo $LessonID; ?>&Name_lesson=<?php echo $Name_lesson; ?>'">
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
        " onClick="location.href='?module=start_time_lesson2&LessonID=<?php echo $LessonID; ?>&Name_lesson=<?php echo $Name_lesson; ?>'">
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
        " onClick="location.href='?module=start_time_lesson3&LessonID=<?php echo $LessonID; ?>&Name_lesson=<?php echo $Name_lesson; ?>'">
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
        " onClick="location.href='?module=start_time_lesson4&LessonID=<?php echo $LessonID; ?>&Name_lesson=<?php echo $Name_lesson; ?>'">
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
        " onClick="location.href='?module=start_time_lesson5&LessonID=<?php echo $LessonID; ?>&Name_lesson=<?php echo $Name_lesson; ?>'">
                    <p>5</p>
                </div>
            </div>
            <a href="?module=end_time_lesson2&LessonID=<?php echo $LessonID; ?>&Name_lesson=<?php echo $Name_lesson; ?>&LessonDID=<?php echo $row['LessonDID']; ?>"><img src="./assets_img/icon/nextpage.svg" alt="next" width="50"></a>
        </header>

        <!-- ----------close question array---------------- -->
<?php
    }
}
mysqli_close($conn);
?>