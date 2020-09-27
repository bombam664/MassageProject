<form action="?module=insertMember" method="post">
<div class="block-card">
       <div class="body-card">
            <div class="box lg">
                <div class="box-login">
                    <img src="./assets/Logo.svg" alt="LOGO" class="img-logo">
                </div> 
            </div>
            <div class="box2 sm">
                <div class="box-form">
                    <div class="control-form title-form" style="margin-bottom:10px;">
                        <p>ลงทะเบียน</p>
                    </div>
                    <div class="control-form"> 
                    <img src="./assets/name.svg" alt="fullname" width="20px">
                        <input type="text" name="name" placeholder="ชื่อ" required>
                    </div>
                    <div class="control-form"> 
                    <img src="./assets/gender.svg" alt="user" width="20px">
                        <select name="gender" id="gender" class="SelectGender">
                            <option value="ชาย">ชาย</option>
                            <option value="หญิง">หญิง</option>
                        </select>
                    </div>
                    <div class="control-form"> 
                    <img src="./assets/user.svg" alt="user" width="20px">
                        <input type="text" name="username" placeholder="ชื่อผู้ใช้งาน" required>
                    </div>
                    <div class="control-form"> 
                    <img src="./assets/padlock.svg" alt="user" width="20px">
                        <input type="password" name="password" placeholder="รหัสผ่าน" required>
                    </div>
                  <div class="control-form" style="border:0;margin-bottom:10px;">
                      <button type="submit" class="btn">ยืนยัน</button>
                  </div>
                  <p style="color:#707070;text-align:right;">เข้าสู่ระบบใช้งาน
                        <a href="?module=login" class="nevigation-link">
                            คลิก
                        </a>
                    </p>

                </div>
            </div>
           
           
       </div> 
    </div>
</form>
