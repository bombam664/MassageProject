<?php
include("../connectDB.php");
$LessonID = $_GET['LessonID'];
$sql = "SELECT * FROM lesson WHERE LessonID='$LessonID'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
if (!$row) {
    echo "Not found CustomerID=$CustomerID";
} else {
?>
<form action="?module=UpdateLesson" method="post">
    <div class="card">
        <div class="card-body">
        <h1>แก้ไขข้อมูลบทเรียน</h1>
            <div class="form-group">
                <label for="Name_lesson">ชื่อบทเรียน</label>
                <input type="text" class="form-control" id="Name_lesson" name="Name_lesson" value="<?php echo $row['Name_lesson']; ?>">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control"  name="LessonID" value="<?php echo $row['LessonID']; ?>">
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end m-3">
        <button type="reset" class="btn btn-danger btn-lg">ยกเลิก</button>&nbsp;
        <button type="submit" class="btn btn-success btn-lg">ตกลง</button>
        </div>

</form>

<?php
}
mysqli_close($conn);
?>