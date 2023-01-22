
<div class="container-fluid">
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="#">Dashboard</a>
    </nav>
    <?php
    include("../connectDB.php");
    $sql = "SELECT COUNT(CustomerID) AS User FROM customer";
    $query = mysqli_query($conn, $sql);
    while ($row = $query->fetch_assoc()) {
        $row['User'];
    ?>

        <div class="row p-2">
            <div class="col-md-3 col-6">
                <div class="card m-1 bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title"> สมาชิก </h5>
                        <p class="card-text text-right display-4 font-weight-bold"><?php echo $row['User']; ?> คน</p>
                    </div>
                </div>
            </div>
        <?php
    }

        ?>
        <?php
        $sqlb = "SELECT COUNT(LessonID) as Les FROM lesson";
        $queryb = mysqli_query($conn, $sqlb);
        while ($row = $queryb->fetch_assoc()) {
            $row['Les'];

        ?>
            <div class="col-md-3 col-6">
                <div class="card m-1 bg-danger text-white">
                    <div class="card-body">
                        <h5 class="card-title"> บทเรียน </h5>
                        <p class="card-text text-right display-4 font-weight-bold"><?php echo $row['Les']; ?> บท</p>
                    </div>
                </div>
            </div>
        <?php
        }

        ?>
        <?php
        $sqlc = "SELECT COUNT(EnrollID) as EnrollLes FROM enroll_lesson";
        $queryc = mysqli_query($conn, $sqlc);
        while ($row = $queryc->fetch_assoc()) {
            $row['EnrollLes'];

        ?>

            <div class="col-md-3 col-6">
                <div class="card m-1 bg-warning text-white">
                    <div class="card-body">
                        <h5 class="card-title"> ลงทะเบียนเรียน </h5>
                        <p class="card-text text-right display-4 font-weight-bold"><?php echo $row['EnrollLes']; ?> ครั้ง</p>
                    </div>
                </div>
            </div>
        <?php
        }

        ?>
        <?php
        $sqld = "SELECT COUNT(Enroll_quizID) as EnrollQuiz FROM enroll_quiz";
        $queryd = mysqli_query($conn, $sqld);
        while ($row = $queryd->fetch_assoc()) {
            $row['EnrollQuiz'];

        ?>
            <div class="col-md-3 col-6">
                <div class="card m-1 bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title"> ลงทะเบียนทำแบบทดสอบ </h5>
                        <p class="card-text text-right display-4 font-weight-bold"><?php echo $row['EnrollQuiz']; ?> ครั้ง</p>
                    </div>
                </div>
            </div>
        </div>
    <?php
        }
        mysqli_close($conn);
    ?>
    <div class="row p-2">
        <div class="col-md-8 col-12">
            <div class="card m-1" style="height: 50vh;">
                <div class="card-body">
                    <h1>ปี <?php echo date('Y'); ?></h1>
                    <canvas id="myyear" style="width:100%; height:86%;"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12">
            <div class="card m-1" style="height: 50vh;">
                <div class="card-body">
                    <h1>เพศ</h1>
                    <canvas id="mygender" style="width:100%; height:86%;"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12 col-12">
            <h1>ปริมาณการใช้งาน(ครั้ง)</h1>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-md-6 col-12">
            <div class="card m-1" style="height: 50vh;">
                <div class="card-body">
                    <h3>บทเรียน</h3>
                    <canvas id="mylesson" style="width:100%; height:86%;"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="card m-1" style="height: 50vh;">
                <div class="card-body">
                    <h3>แบบทดสอบ</h3>
                    <canvas id="myquiz" style="width:100%; height:86%;"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-md-6 col-12">
            <div class="card m-1" style="height: 50vh;">
                <div class="card-body">
                    <h3>เวลา</h3>
                    <canvas id="mytime" style="width:100%; height:86%;"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="card m-1" style="height: 50vh;">
                <div class="card-body">
                    <h3>วัน</h3>
                    <canvas id="mydate" style="width:100%; height:86%;"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12 col-12">
            <h1>ผลการใช้งาน(ค่าเฉลี่ยความถูกต้อง)</h1>
        </div>
    </div>
    <div class="row p-2">
    <div class="col-md-12 col-12">
            <div class="card m-1" style="height: 50vh;">
                <div class="card-body">
                <canvas id="myscore" style="width:100%; height:100%;"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>