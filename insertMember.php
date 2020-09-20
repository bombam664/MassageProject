<?php
include("connectDB.php");
 $Name=$_POST['name'];
 $Gender=$_POST['gender'];
 $Username=$_POST['username'];
 $Password=$_POST['password'];

  $sql="SELECT * FROM customer WHERE Username='$Username'";
  $query=mysqli_query($conn,$sql);
  $row = $query->fetch_array();
  if($row){
    $message = "ชื่อผู้ใช้งานมีในระบบแล้วกรุณาเปลี่ยนแปลง";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0;URL=?module=formRegister'>";
  }else{
    $sqla="INSERT INTO customer(Name ,Gender, Username ,Password)VALUES('$Name','$Gender','$Username','$Password')";
    $querya=mysqli_query($conn,$sqla);
      if($querya){
 	    // echo "ok";
	    echo "<META HTTP-EQUIV='Refresh' CONTENT='1;URL=?module=user_info&Username=$Username&Password=$Password'>";
    }else{
  	echo "no ok .$sqla";
    }
    
  }
  
mysqli_close($conn);
