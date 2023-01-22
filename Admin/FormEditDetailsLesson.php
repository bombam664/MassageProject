<?php
include("../connectDB.php");
$LessonID = $_GET['LessonID'];
$LessonDID = $_GET['LessonDID'];
$sql = "SELECT * FROM lesson_details WHERE LessonID='$LessonID' AND LessonDID='$LessonDID'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
if (!$row) {
    echo "Not found LessonID=.$LessonID";
} else {
?>
    <form action="?module=UpdateDetailsLesson" method="post">
        <div class="card">
            <div class="card-body">
                <h1>แก้ไขข้อมูลบทเรียนในแต่ข้อ</h1>
                <div class="form-group">
                    <label for="exampleFormControlInput1">คำถามที่</label>
                    <select class="form-control form-control-lg" id="Question" name="Question">
                        <option <?php if ($row['Question'] == 1) { ?> selected="selected" <?php
                                                                                        }
                                                                                            ?> value="1">1</option>
                        <option <?php if ($row['Question'] == 2) { ?> selected="selected" <?php
                                                                                        }
                                                                                            ?> value="2">2</option>
                        <option <?php if ($row['Question'] == 3) { ?> selected="selected" <?php
                                                                                        }
                                                                                            ?> value="3">3</option>
                        <option <?php if ($row['Question'] == 4) { ?> selected="selected" <?php
                                                                                        }
                                                                                            ?> value="4">4</option>
                        <option <?php if ($row['Question'] == 5) { ?> selected="selected" <?php
                                                                                        }
                                                                                            ?> value="5">5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">รูปภาพ</label>
                    <input type="text" class="form-control" name="img" value="<?php echo $row['img']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">จุดกดนวดสัญญาณ</label>
                    <input type="text" class="form-control" name="badge_img" value="<?php echo $row['badge_img']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">แรง</label>
                    <input type="text" class="form-control" name="Q_force" value="<?php echo $row['Q_force']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">เวลา</label>
                    <input type="text" class="form-control" name="Q_time" value="<?php echo $row['Q_time']; ?>">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">เวลา</label>
                    <input type="text" class="form-control" name="CountTime" value="<?php echo $row['CountTime']; ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="LessonID" value="<?php echo $row['LessonID'] ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="LessonDID" value="<?php echo $row['LessonDID'] ?>">
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