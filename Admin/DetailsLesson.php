<?php
include("../connectDB.php");
$LessonID = $_GET['LessonID'];
$Name_lesson=$_GET['Name_lesson'];
$sql = "SELECT ld.LessonDID,l.LessonID ,l.Name_lesson, ld.Question, ld.img, ld.badge_img, ld.Q_force, ld.Q_time , ld.CountTime
FROM lesson_details ld
LEFT JOIN lesson l 
ON ld.LessonID = l.LessonID
WHERE ld.LessonID='$LessonID'";

$query = mysqli_query($conn, $sql);
?>
<nav class="navbar justify-content-end">

    <button class="btn btn-info btn-lg my-2 my-sm-0" data-toggle="modal" data-target="#exampleModalCenter">เพิ่ม</button>

</nav>
<!-- Modal -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <form action="?module=InsertDetailLesson" method="post">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มคำถามบทเรียน</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                        <label for="NameLesson">บทเรียน</label>
                        <input type="text" class="form-control" value="<?php echo $Name_lesson; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">คำถามที่</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="Question">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="NameLesson">รูปภาพ</label>
                        <input type="text" name="img" class="form-control" placeholder="รูปภาพ">
                    </div>
                    <div class="form-group">
                        <label for="NameLesson">จุดกดนวดสัญญาณ</label>
                        <input type="text" name="badge_img" class="form-control" placeholder="จุดกดนวดสัญญาณ">
                    </div>
                    <div class="form-group">
                        <label for="NameLesson">แรง</label>
                        <input type="text" name="Q_force" class="form-control" placeholder="แรง">
                    </div>
                    <div class="form-group">
                        <label for="NameLesson">เวลา</label>
                        <input type="text" name="Q_time" class="form-control" placeholder="เวลา">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="LessonID" class="form-control" value="<?php echo $LessonID; ?>">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="Name_lesson" class="form-control" value="<?php echo $Name_lesson; ?>">
                    </div>
                    
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                    <button type="submit" class="btn btn-primary">บันทึก</button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="container-fluid">
    <nav class="navbar navbar-light bg-light justify-content-between">
        <p class="navbar-brand">ข้อมูลรายละเอียดคำถาม</p>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" id="myInput" placeholder="Search" aria-label="Search">
        </form>
    </nav>
    <div class="table-responsive">
        <div class="block-scorescrollbar">
            <table class="table table-bordered text-center">
                <thead class=" table-dark">
                    <tr>
                        <th scope="col">#</th>
                        
                        <th scope="col">ชื่อบทเรียน</th>
                        <th scope="col">คำถามที่</th>
                        <th scope="col">รูปภาพ</th>
                        <th scope="col">จุดกดนวดสัญญาณ</th>
                        <th scope="col">แรง</th>
                        <th scope="col">เวลา</th>
                        <th scope="col">จับเวลา</th>
                        <th scope="col">แก้ไข / ลบ</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php
                    while ($row = $query->fetch_assoc()) {
                        $row['LessonDID'];
                
                    ?>
                        <tr>
                            <th scope="row"><?php
            $i += 1;
            echo $i;
            
            ?></th>
                            
                            <td><?php echo $row['Name_lesson']; ?></td>
                            <td><?php echo  $row['Question']; ?></td>
                            <td><?php echo   $row['img']; ?></td>
                            <td><?php echo   $row['badge_img']; ?></td>
                            <td><?php echo   $row['Q_force']; ?></td>
                            <td><?php echo   $row['Q_time']; ?></td>
                            <td><?php echo   $row['CountTime']; ?></td>

                            <td>
                                <a href="?module=FormEditDetailsLesson&LessonID=<?php echo $row['LessonID']; ?>&LessonDID=<?php echo $row['LessonDID'];?>" class="btn btn-success">แก้ไข</a>
                                <a href="?module=DeleteDetailsLesson&LessonID=<?php echo $row['LessonID']; ?>&LessonDID=<?php echo $row['LessonDID'];?>&Name_lesson=<?php echo $Name_lesson;?>" 
                                class="btn btn-danger" onclick="return confirm('ต้องการลบข้อมูลโปรดยืนยัน !')">ลบ</a>
                            </td>
                        </tr>
                    <?php
                    }
                    mysqli_close($conn);
                    ?>

                </tbody>

            </table>
        </div>
    </div>
</div>