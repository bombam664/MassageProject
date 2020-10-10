<form action="?module=check_login" method="post">
    <div class="block-card">
        <div class="body-card">
            <div class="box lg">
                <div class="box-login">
                    <img src="./assets/logo.svg" alt="LOGO" class="img-logo">
                </div>
            </div>
            <div class="box2 sm">
                <div class="box-form">
                    <div class="control-form title-form">
                        <p>เข้าสู่ระบบ</p>
                    </div>
                    <div class="control-form">
                        <img src="./assets/user.svg" alt="user" width="20px">
                        <input type="text" name="username" placeholder="ชื่อผู้ใช้งาน" required>
                    </div>
                    <div class="control-form">
                        <img src="./assets/padlock.svg" alt="password" width="20px">
                        <input type="password" name="password" placeholder="รหัสผ่าน" required>
                    </div>
                    <div class="control-form" style="border:0;margin-top:10px;margin-bottom: 10px;">
                        <button type="submit" class="btn">เข้าสู่ระบบ</button>
                    </div>
                    
                    <p style="color:#707070;text-align:right;">ลงทะเบียนใช้งาน
                        <a href="?module=formRegister" class="nevigation-link">
                            คลิก
                        </a>
                    </p>
                    

                </div>
            </div>
        </div>

    </div>
</form>