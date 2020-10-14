<?php
include("../connectDB.php");
session_start();
$CustomerID = $_SESSION['CustomerID'];
$sql = "SELECT a.TotalScoreID, a.CustomerID,b.Name_lesson, a.Totalscore, a.DateScore 
FROM totalscore a 
LEFT JOIN lesson b
ON a.LessonID = b.LessonID 
WHERE CustomerID=$CustomerID";

$query = mysqli_query($conn, $sql);
?>
<section class="scoreboard">
    <h1 class="title-menu">บทเรียน Massage Learning</h1>
    <div class="block-scoreboard">
        <div class="table-scoreboard" style="background-color:#fff;font-size:20px;font-weight:bold;">
            <p class="heading-text">บทเรียน</p>
            <p>คะแนน</p>
        </div>
        <?php
        while ($row = $query->fetch_assoc()) {
            $row['TotalScoreID'];

        ?>
            <?php
            $arr = array($row['TotalScoreID']);
            foreach ($arr as &$i) {
                $i = $i++;
            }
            ?>
            <div class="table-scoreboard">
                <div class="text-scoreboard">
                    <p style="margin-right: 20px;"><?php echo $i; ?></p>
                    <p><?php echo $row['Name_lesson']; ?></p>
                </div>
                <p><?php echo $row['Totalscore']; ?> /15</p>
            </div>
            
        <?php
        }
        mysqli_close($conn);
        ?>

    </div>
</section>