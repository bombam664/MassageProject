<?php
include("../connectDB.php");
$sql = "SELECT * FROM data_sensor";
$query = mysqli_query($conn, $sql);
echo "<META HTTP-EQUIV='Refresh' CONTENT='2;URL=?module=DataSensor'>";
?>
<div class="container-fluid">
    <nav class="navbar navbar-light bg-light justify-content-between">
        <p class="navbar-brand">ข้อมูลการส่งค่าเซนเซอร์</p>
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
                        <th scope="col">ชื่อจุดเซนเซอร์</th>
                        <th scope="col">รหัสเครื่อง</th>
                        <th scope="col">ข้อคำถาม</th>
                        <th scope="col">ไอดีผู้ใช้</th>
                        <th scope="col">แรง</th>
                        <th scope="col">เวลา</th>
                        <th scope="col"> ลบ</th>
                    </tr>
                </thead>
                <tbody  id="myTable">
                    <?php
                    while ($row = $query->fetch_assoc()) {
                        $row['SensorID'];
                          
                    ?>
                        <tr>
                            <th scope="row"><?php
            $i += 1;
            echo $i;
            
            ?></th>
                            <td><?php echo $row['Sensor_name']; ?></td>
                            <td><?php echo $row['MachineID']; ?></td>
                            <td><?php echo $row['LessonDID']; ?></td>
                            <td><?php echo $row['CustomerID']; ?></td>
                            <td><?php echo $row['A_force']; ?></td>
                            <td><?php echo $row['A_time']; ?></td>
                            <td>
                                <a href="?module=DeleteSensor&SensorID=<?php echo $row['SensorID'];?>" class="btn btn-danger" onclick="return confirm('ต้องการลบข้อมูลโปรดยืนยัน !')">ลบ</a>
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
</div>
