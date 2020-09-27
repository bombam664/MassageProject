<?php 
include("../connectDB.php");
session_start();
$CustomerID=$_SESSION['CustomerID'];
$LessonID=$_GET['LessonID'];
 $sql="SELECT ScoreID, CustomerID, LessonID, Question, Signal_point, Score_force, Score_time, Score 
 FROM score as Q 
 WHERE ScoreID=(SELECT max(ScoreID) 
 FROM score WHERE Question=1 AND CustomerID=$CustomerID AND LessonID=$LessonID )";
 $query=mysqli_query($conn,$sql);
 while($row=$query->fetch_assoc()){
    $row['ScoreID'];
    $Score1=$row['Score'];
 }

    ?>
    <?php
     $sql2="SELECT ScoreID, CustomerID, LessonID, Question, Signal_point, Score_force, Score_time, Score 
     FROM score as Q 
     WHERE ScoreID=(SELECT max(ScoreID) 
     FROM score WHERE Question=2 AND CustomerID=$CustomerID AND LessonID=$LessonID )";
     $query=mysqli_query($conn,$sql2);
     while($row=$query->fetch_assoc()){
        $row['ScoreID'];
         $Score2=$row['Score'];
     }
    ?>
        <?php
     $sql3="SELECT ScoreID, CustomerID, LessonID, Question, Signal_point, Score_force, Score_time, Score 
     FROM score as Q 
     WHERE ScoreID=(SELECT max(ScoreID) 
     FROM score WHERE Question=3 AND CustomerID=$CustomerID AND LessonID=$LessonID )";
     $query=mysqli_query($conn,$sql3);
     while($row=$query->fetch_assoc()){
        $row['ScoreID'];
         $Score3=$row['Score'];
     }
    ?>
     <?php
     $sql4="SELECT ScoreID, CustomerID, LessonID, Question, Signal_point, Score_force, Score_time, Score 
     FROM score as Q 
     WHERE ScoreID=(SELECT max(ScoreID) 
     FROM score WHERE Question=4 AND CustomerID=$CustomerID AND LessonID=$LessonID )";
     $query=mysqli_query($conn,$sql4);
     while($row=$query->fetch_assoc()){
        $row['ScoreID'];
         $Score4=$row['Score'];
     }
    ?>
     <?php
     $sql5="SELECT ScoreID, CustomerID, LessonID, Question, Signal_point, Score_force, Score_time, Score 
     FROM score as Q 
     WHERE ScoreID=(SELECT max(ScoreID) 
     FROM score WHERE Question=5 AND CustomerID=$CustomerID AND LessonID=$LessonID )";
     $query=mysqli_query($conn,$sql5);
     while($row=$query->fetch_assoc()){
        $row['ScoreID'];
         $Score5=$row['Score'];
     }
    ?>
    <?php 
    $Score=$Score1+$Score2+$Score3+$Score4+$Score5;
    ?>
    

<section class="manual">
    <div class="block-totalscore img-totalscore">
        <div class="title-totalscore">
            <p>คะแนนรวม</p>
        </div>
        <div class="box-totalscore">
            <p class="detail-totalscore"><?php echo $Score; ?></p>
            <p>คะแนน</p>
        </div>
    </div>
    <div class="totalscore-tab"></div>
    <a href="?module=insertTotalscore&LessonID=<?php echo $LessonID; ?>&Totalscore=<?php echo $Score; ?>"
     class="btn-totalscore">
        <p>ทำแบบทดสอบถัดไป</p>
    </a>
  
</section>
<?php
 mysqli_close($conn);
?>