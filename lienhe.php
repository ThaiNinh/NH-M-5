<?php
	require("header.php");
?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            // https://dashboard.emailjs.com/admin/account
            emailjs.init('EunUEOtWKhB8SzNve');
        })();
    </script>
    <script type="text/javascript">
        function SendMail(){
            var params={
                from_name:document.getElementById("name").value,
                email_id:document.getElementById("email").value,
                message:document.getElementById("message").value,
            }
            // insertMessageUser(idUSer,params) // Insert message in DB
            console.log(params)
            emailjs.send("service_93v3q9j","template_3q5b7yq",params).then(function(res, err){
                if (err) console.log(err)
                console.log('ok')
                alert("Thành công"+res.status);
            })
        }
    </script>
<!-- Page Header Start -->
<section class="container-fluid bg-secondary">
        <div  class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px;">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Liên hệ với chúng tôi</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Trang chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Gửi lời nhắn đến chúng tôi</p>
            </div>
        </div>
</section>

<div class="contact-form d-flex justify-content-center mt-5">
    <div id="success"></div>
	<div name="sentMessage" id="contactForm" novalidate="novalidate" >
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Tên của bạn"
                                required="required" data-validation-required-message="Hãy nhập tên" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder=" Email"
                                required="required" data-validation-required-message="Nhập email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" placeholder="Lời nhắn"
                                required="required"
                                data-validation-required-message="Nhập lời nhắn"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
        <button class="btn btn-primary py-2 px-4" type="submit" onclick="SendMail()">Gửi lời nhắn</button>
         </div>
        </div>	
    <!--<form name="sentMessage" id="contactForm" novalidate="novalidate" action="mail.php" method="POST" autocomplete="off" >
    	<div class="control-group">
        <input type="text" class="form-control" name="name" placeholder="Nhập tên của bạn" required="required" data-validation-required-message="Hãy nhập tên của bạn"style="width:400px;">
        <p class="help-block text-danger"></p>
    	</div>
   		
		<div class="control-group">
        <input type="email" class="form-control" name="email" placeholder="Nhập Email của bạn" required="required" data-validation-required-message="Hãy nhập Email của bạn"style="width:400px;">
 		<p class="help-block text-danger"></p>
        </div>
                
		<div class="control-group">
        <textarea class="form-control" rows="6" name="message" placeholder="Lời nhắn" required="required" data-validation-required-message="Hãy nhập Lời nhắn của bạn"style="width:400px;"></textarea>
        <p class="help-block text-danger"></p>
        </div>
        
		<div>
        <button class="btn btn-primary py-2 px-4" type="submit" name="submit" id="sendMessageButton">Gửi</button>
        </div>
    </form>-->
</div>
<?php
require("footer.php");
?>