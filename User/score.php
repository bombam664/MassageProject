<?php
include("../connectDB.php");
session_start();
$CustomerID = $_SESSION['CustomerID'];
$LessonID = $_GET['LessonID'];
$LessonDID = $_GET['LessonDID'];
$Quiz = $_GET['Quiz'];
 $Question = $_GET['Question'];
$PointSensor = $_GET['PointSensor'];
$PointForce = $_GET['PointForce'];
$PointTime = $_GET['PointTime'];
$Name_lesson = $_GET['Name_lesson'];
?>

<section class="manual">
    <div class="block-score">
        <div class="title-score">
            <p style="margin-left: 50px;">แบบทดสอบ ข้อที่ <?php echo $Quiz ?></p>
        </div>
        <div class="block-score-row">
            <div class="score-box1">
                <div class="score-text">
                    <p>สัญญาณ<?php echo $Question ?></p>
                    <?php
                    if ($PointSensor == 'true') {
                        echo '<img src="./assets_img/icon/true.svg" alt="true" class="img-score">';
                        $ScorePoint = 1;
                    } else {
                        echo '<img src="./assets_img/icon/false.svg" alt="false" class="img-score">';
                        $ScorePoint = 0;
                    }
                    ?>

                </div>
                <div class="score-text">
                    <p>แรง</p>
                    <?php
                    if ($PointForce == 'true') {
                        echo '<img src="./assets_img/icon/true.svg" alt="true" class="img-score">';
                        $ScoreForce = 1;
                    } else {
                        echo '<img src="./assets_img/icon/false.svg" alt="false" class="img-score">';
                        $ScoreForce = 0;
                    }
                    ?>
                </div>
                <div class="score-text">
                    <p>เวลา</p>
                    <?php
                    if ($PointTime == 'true') {
                        echo '<img src="./assets_img/icon/true.svg" alt="true" class="img-score">';
                        $ScoreTime = 1;
                    } else {
                        echo '<img src="./assets_img/icon/false.svg" alt="false" class="img-score">';
                        $ScoreTime = 0;
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
$ResultScore = $ScorePoint + $ScoreForce + $ScoreTime;
$sql = "INSERT INTO score(CustomerID,LessonID,Question,Signal_point,Score_force,Score_time,Score)
VALUES('$CustomerID','$LessonID','$Question','$PointSensor','$PointForce','$PointTime','$ResultScore')";
$query = mysqli_query($conn, $sql);
if ($query) {
        // echo "ok";
    if ($Quiz == 1) {
        $MyRandom =3;
        echo "<META HTTP-EQUIV='Refresh' CONTENT='4;URL=?module=quiz2&LessonID=$LessonID&Quiz=$Quiz&MyRandom=$MyRandom&Name_lesson=$Name_lesson'>";    
    }elseif ($Quiz == 2) {
        $MyRandom =4;
        echo "<META HTTP-EQUIV='Refresh' CONTENT='4;URL=?module=quiz2&LessonID=$LessonID&Quiz=$Quiz&MyRandom=$MyRandom&Name_lesson=$Name_lesson'>";
    } elseif ($Quiz == 3) {
        $MyRandom = 5;
        echo "<META HTTP-EQUIV='Refresh' CONTENT='4;URL=?module=quiz2&LessonID=$LessonID&Quiz=$Quiz&MyRandom=$MyRandom&Name_lesson=$Name_lesson'>";
    } elseif ($Quiz == 4) {
        $MyRandom = 2;
        echo "<META HTTP-EQUIV='Refresh' CONTENT='4;URL=?module=quiz2&LessonID=$LessonID&Quiz=$Quiz&MyRandom=$MyRandom&Name_lesson=$Name_lesson'>";
    } else {
        echo "<META HTTP-EQUIV='Refresh' CONTENT='4;URL=?module=totalscore&LessonID=$LessonID'>";
    }
} else {
    echo "no ok .$sql";
}

mysqli_close($conn);

?>