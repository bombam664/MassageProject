<?php
include("../connectDB.php");
$sql = "SELECT t.TimeonlesID, c.Name, l.Name_lesson, ld.Question, t.Time_start, t.Time_end, t.logDate
FROM timeonlesson t
LEFT JOIN customer c
ON t.CustomerID = c.CustomerID
RIGHT JOIN lesson_details ld
ON t.LessonDID = ld.LessonDID
RIGHT JOIN lesson l
ON ld.LessonID = l.LessonID
WHERE t.CustomerID != 'null'";
$query = mysqli_query($conn, $sql);
?>
<div class="container-fluid">
<nav class="navbar navbar-light bg-light justify-content-between">
        <p class="navbar-brand">ข้อมูลช่วงเวลาในการเรียนแต่ละข้อ</p>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" id="myInput" placeholder="Search" aria-label="Search">
        </form>
    </nav>
    <div class="table-responsive" style="height: 100vh;">
        <div class="block-scorescrollbar">
            <table class="table table-bordered text-center">
                <thead class=" table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ชื่อ-นามสกุล</th>
                        <th scope="col">บทเรียน</th>
                        <th scope="col">คำถามที่</th>
                        <th scope="col">เวลาเข้า</th>
                        <th scope="col">เวลาออก</th>
                        <th scope="col">วันที่เรียน</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php
                    while ($row = $query->fetch_assoc()) {
                        $row['TimeonlesID'];
                        
                        
                    ?>
                        <tr>
                            <th scope="row"><?php
            $i += 1;
            echo $i;
            
            ?></th>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Name_lesson']; ?></td>
                            <td><?php echo $row['Question']; ?></td>
                            <td><?php echo $row['Time_start']; ?></td>
                            <td><?php echo $row['Time_end']; ?></td>
                            <td><?php echo $row['logDate']; ?></td>
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