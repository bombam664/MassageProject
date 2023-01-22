<?php
include("../connectDB.php");
$CustomerID = $_GET['CustomerID'];
$sql = "SELECT * FROM customer WHERE CustomerID=$CustomerID";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);
if (!$row) {
    echo "Not found CustomerID=$CustomerID";
} else {
?>
    <form action="?module=UpdateUser" method="post">

        <div class="card">
            <div class="card-body">
                <h1>แก้ไขข้อมูลผู้ใช้งาน</h1>
                <div class="form-group">
                    <label for="name">ชื่อ-นามสกุล</label>
                    <input type="name" class="form-control  form-control-lg" id="name" name="name" value="<?php echo $row['Name']; ?>">
                </div>
                <div class="form-group">
                    <label for="gender">เพศ</label>
                    <select class="form-control form-control-lg" id="gender" name="gender">
                        <option <?php if ($row['Gender'] == 'ชาย') { ?> selected="selected" <?php
                                                                                        }
                                                                                            ?> value="ชาย">ชาย</option>
                        <option <?php if ($row['Gender'] == 'หญิง') { ?> selected="selected" <?php
                                                                                        }
                                                                                            ?> value="หญิง">หญิง</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="username">ชื่อเข้าใช้งาน</label>
                    <input type="username" class="form-control  form-control-lg" id="username" name="username" value="<?php echo $row['Username']; ?>">
                </div>
                <div class="form-group">
                    <label for="password">รหัสผ่าน</label>
                    <input type="text" class="form-control  form-control-lg" id="password" name="password" value="<?php echo $row['Password']; ?>">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control  form-control-lg" name="CustomerID"  value="<?php echo $row['CustomerID']; ?>">
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