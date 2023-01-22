<?php
include("../connectDB.php");
$sql = "SELECT LessonID, Name_lesson FROM lesson";
$query = mysqli_query($conn, $sql);

?>

<nav class="navbar justify-content-end">

    <button class="btn btn-info btn-lg my-2 my-sm-0" data-toggle="modal" data-target="#exampleModalCenter">เพิ่ม</button>

</nav>
<!-- Modal -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <form action="?module=InsertLesson" method="post">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">เพิ่มบทเรียน</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="NameLesson">ชื่อบทเรียน</label>
                        <input type="text" name="NameLesson" class="form-control" id="NameLesson"  placeholder="บทเรียน">
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


<div class="container-fluid"  style="height:100vh;">
    <nav class="navbar navbar-light bg-light justify-content-between">
        <p class="navbar-brand">ข้อมูลการบทเรียน</p>
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
                        <th scope="col">ไอดี</th>
                        <th scope="col">บทเรียน</th>
                        <th scope="col">ข้อมูลภายใน / แก้ไข / ลบ</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php
                    while ($row = $query->fetch_assoc()) {
                        $row['LessonID'];
                        
                    ?>
                        <tr>
                            <th scope="row"><?php
            $i += 1;
            echo $i;
            
            ?></th>
                            <td><?php echo $row['LessonID']; ?></td>
                            <td><?php echo $row['Name_lesson']; ?></td>
                            <td>
                                <a href="?module=DetailsLesson&LessonID=<?php echo $row['LessonID']; ?>&Name_lesson=<?php echo $row['Name_lesson']; ?>" class="btn btn-primary">ข้อมูลภายใน</a>
                                <a href="?module=FormEditLesson&LessonID=<?php echo $row['LessonID']; ?>" class="btn btn-success">แก้ไข</a>
                                <a href="?module=DeleteLesson&LessonID=<?php echo $row['LessonID']; ?>" class="btn btn-danger" onclick="return confirm('ต้องการลบข้อมูลโปรดยืนยัน !')">ลบ</a>
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