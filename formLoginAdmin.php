<?php
 $Username=$_GET['Username'];
?>

<form action="?module=CheckAdmin" method="post"
 style="display: flex;
 flex-direction: column;
 justify-content: center;
 align-items: center;">

    <h2 style="text-align:center;margin:10px;color:#707070;">รหัสผ่าน</h2>
    <input type="hidden" name="Username" value="<?php echo $Username; ?>">
    <input type="password" name="Password"
     style="border: 2px solid #707070;
     border-radius:10px;
     margin:10px;" required>
     
    <button type="submit" 
    style="height:7vh;
    width:20vw;
    border:1px solid #707070;
    border-radius:20px;
    margin:20px;
    color:#707070;
    font-weight:bold;
    font-size:20px;">ตกลง</button>
</form>