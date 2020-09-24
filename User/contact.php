
<form class="block-contact">
    <div class="block-card2">
    <h1 class="title-contact">ติดต่อ/แจ้งปัญหา</h1>
        <div class="contact-form">
            <input type="name" name="name" id="name" placeholder="ชื่อผู้แจ้ง" required/>
            <input type="email" name="email" id="email" placeholder="อีเมลล์ผู้แจ้ง" required/>
        </div>
        <div class="contact-form2">
            <textarea name="comment" id="comment" placeholder="ข้อความที่แจ้ง" cols="30" rows="10" required></textarea>
        </div>
        <div class="contact-form3">
            <a class="btn-contact" onclick="insert_value()">ส่งข้อความ</a>
        </div>
    </div>
    
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
var script_url="https://script.google.com/macros/s/AKfycbyAl9vD0PLyaqBM1mQc827CJeh1GfDR4gCqVrjfVWrYlooVy5tv/exec";
function insert_value(){
var name = $("#name").val();
var email = $("#email").val();
var comment = $("#comment").val();

var url = script_url+"?callback=ctrl&name="+name+"&email="+email+"&comment="+comment+"&action=insert";
var request = jQuery.ajax({
    crossDomain: true,url: url,method: "GET",dataType: "jsonp"
    
});
if(confirm('ส่งข้อความสำเร็จ')){
    window.location.reload();  
}
}
</script>
