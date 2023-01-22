<?php
include("../connectDB.php");
$sql = "SELECT * FROM customer";
$query = mysqli_query($conn, $sql);

?>
<div class="container-fluid">
    <nav class="navbar navbar-light bg-light justify-content-between">
        <p class="navbar-brand">ข้อมูลผู้ใช้งาน</p>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" id="myInput" placeholder="Search" aria-label="Search">
        </form>
    </nav>
    <div class="table-responsive"  style="height:100vh;">
        <div class="block-scorescrollbar">
            <table class="table table-bordered text-center">
                <thead class=" table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ไอดี</th>
                        <th scope="col">ชื่อ-นามสกุล</th>
                        <th scope="col">เพศ</th>
                        <th scope="col">ชื่อเข้าใช้งาน</th>
                        <th scope="col">รหัสผ่าน</th>
                        <th scope="col">แก้ไข / ลบ</th>
                    </tr>
                </thead>
                <tbody  id="myTable">
                    <?php
                    while ($row = $query->fetch_assoc()) {
                        $row['CustomerID'];
                        
                        
                    ?>
                        <tr>
                            <th scope="row"><?php
            $i += 1;
            echo $i;
            
            ?></th>
                             <td><?php echo $row['CustomerID']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Gender']; ?></td>
                            <td><?php echo $row['Username']; ?></td>
                            <td><?php echo $row['Password']; ?></td>
                            <td>
                                <a href="?module=FormEditUser&CustomerID=<?php echo $row['CustomerID']; ?>" class="btn btn-success">แก้ไข</a> &nbsp;
                                <a href="?module=DeleteUser&CustomerID=<?php echo $row['CustomerID'];?>" class="btn btn-danger" onclick="return confirm('ต้องการลบข้อมูลโปรดยืนยัน !')">ลบ</a>
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
