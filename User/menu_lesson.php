<?php
include("../connectDB.php");
$sql = "SELECT * FROM lesson";
$query = mysqli_query($conn, $sql);
?>

<section class="block-lesson">
    <h1 class="title-menu">บทเรียน Massage Learning</h1>
    <?php
    while ($row = $query->fetch_assoc()) {
        $row['LessonID'];
    ?>


        <div class="block-row">
            <a href="?module=enroll_lesson&LessonID=<?php echo $row['LessonID']; ?>&Name_lesson=<?php echo $row['Name_lesson'];  ?>" class="lesson">
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