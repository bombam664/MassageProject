<?php
include("../connectDB.php");
$sql = "SELECT e.EnrollID , c.Name , l.Name_lesson, e.Enroll_timestamp 
FROM enroll_lesson e
RIGHT JOIN customer c 
ON e.CustomerID = c.CustomerID 
LEFT JOIN lesson l
ON e.LessonID = l.LessonID
WHERE e.CustomerID != 'null'";
$query = mysqli_query($conn, $sql);

?>
<div class="container-fluid">
    <nav class="navbar navbar-light bg-light justify-content-between">
        <p class="navbar-brand">ข้อมูลการลงเรียน</p>
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
                        <th scope="col">วันเวลาเข้าใช้งาน</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php
                    while ($row = $query->fetch_assoc()) {
                        $row['EnrollID'];
                        
                    ?>
                        <tr>
                            <th scope="row"><?php
            $i += 1;
            echo $i;
            
            ?></th>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Name_lesson']; ?></td>
                            <td><?php echo $row['Enroll_timestamp']; ?></td>
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