<?php
include("../connectDB.php");
$sql = "SELECT t.TotalScoreID,c.Name,l.Name_lesson,t.Totalscore,t.DateScore 
FROM totalscore t
LEFT JOIN customer c
ON t.CustomerID = c.CustomerID
RIGHT JOIN lesson l
ON t.lessonID = l.lessonID 
WHERE t.CustomerID != 'null'";
$query = mysqli_query($conn, $sql);

?>

<div class="container-fluid">
    <nav class="navbar navbar-light bg-light justify-content-between">
        <p class="navbar-brand">ข้อมูลคะแนนรวม</p>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" id="myInput" placeholder="Search" aria-label="Search">
        </form>
    </nav>
    <div class="table-responsive" style="height: 50vh;">
        <div class="block-scorescrollbar">
            <table class="table table-bordered text-center">
                <thead class=" table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ชื่อ-นามสกุล</th>
                        <th scope="col">บทเรียน</th>
                        <th scope="col">คะแนน</th>
                        <th scope="col">วันที่บันทึก</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php
                    while ($row = $query->fetch_assoc()) {
                        $row['TotalScoreID'];
                        
                    ?>

                        <tr>
                            <th scope="row"><?php
            $i += 1;
            echo $i;
            
            ?></th>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Name_lesson']; ?></td>
                            <td><?php echo $row['Totalscore']; ?></td>
                            <td><?php echo $row['DateScore']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>

            </table>
        </div>
    </div>
<?php
$sqla="SELECT s.ScoreID, c.Name, l.Name_lesson, s.Question, s.Signal_point, s.Score_force, s.Score_time, s.Score, s.DateScoreS
FROM score s
LEFT JOIN customer c
ON s.CustomerID = c.CustomerID
RIGHT JOIN lesson l
ON s.lessonID = l.lessonID
WHERE s.CustomerID !='null'";
$querya = mysqli_query($conn, $sqla);
?>
    <nav class="navbar navbar-light bg-light justify-content-start">
        <p class="navbar-brand">ข้อมูลคะแนนย่อย</p>

    </nav>
    <div class="table-responsive" style="height: 50vh;">
        <div class="block-scorescrollbar">
            <table class="table table-bordered text-center">
                <thead class=" table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ชื่อ-นามสกุล</th>
                        <th scope="col">บทเรียน</th>
                        <th scope="col">คำถามที่</th>
                        <th scope="col">จุดสัญญาณ</th>
                        <th scope="col">แรง</th>
                        <th scope="col">เวลา</th>
                        <th scope="col">คะแนน</th>
                        <th scope="col">วันที่บันทึก</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                <?php
                    while ($row = $querya->fetch_assoc()) {
                        $row['ScoreID'];
                    ?>
                    <tr>
                        <th scope="row"><?php 
                        $j+=1;
                         echo $j; 
                         ?></th>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Name_lesson']; ?></td>
                        <td><?php echo $row['Question']; ?></td>
                        <td><?php echo $row['Signal_point']; ?></td>
                        <td><?php echo $row['Score_force']; ?></td>
                        <td><?php echo $row['Score_time']; ?></td>
                        <td><?php echo $row['Score']; ?></td>
                        <td><?php echo $row['DateScoreS']; ?></td>
                    </tr>
                    <?php
                    }
                    ?>

                </tbody>

            </table>
        </div>
    </div>
</div>
<?php
mysqli_close($conn);
?>