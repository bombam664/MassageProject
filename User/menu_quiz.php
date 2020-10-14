<?php
include("../connectDB.php");
session_start();
$CustomerID = $_SESSION['CustomerID'];

$sql = "SELECT en.EnrollID, en.CustomerID, COUNT(en.LessonID) as countLesID ,les.LessonID ,les.Name_lesson 
FROM enroll_lesson en 
LEFT JOIN lesson les
 ON en.LessonID=les.LessonID
WHERE  en.CustomerID = $CustomerID
GROUP BY en.LessonID 
ORDER by en.LessonID";
$query = mysqli_query($conn, $sql);
?>

<section class="block-lesson">
    <h1 class="title-menu">แบบทดสอบ Massage Learning</h1>
    <?php
    while ($row = $query->fetch_assoc()) {
        $row['EnrollID'];
        $row['countLesID'];
        $row['LessonID'];
    ?>


        <div class="block-row">
            <a href="?module=enroll_quiz&LessonID=<?php echo $row['LessonID']; ?>&Name_lesson=<?php echo $row['Name_lesson'];  ?>" class="lesson">
                <div class="btn-menuLesson">
                    <p><?php echo $row['Name_lesson']; ?></p>
                    <img src="./assets_img/icon/next.svg" alt="next" class="img-button">
                </div>
            </a>

        </div>

    <?php
    }
    mysqli_close($conn);

    ?>
</section>