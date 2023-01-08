<?php
	require("header.php");
?>
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
	<form name="sentMessage" id="contactForm" novalidate="novalidate" onsubmit="sendEmail(); reset(); return false">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
        <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send Message</button>
         </div>
        </form>	
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
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
function sendEmail(){
    Email.send({
    Host : "smtp.gmail.com",
    Username : "username",
    Password : "password",
    To : 'nimtn88@gmail.com',
    From : document.getElementById("email").value,
    Subject : "This is the subject",
    Body : "Khách hàng: " +  document.getElementById("name").value
            + "<br> Email: " +  document.getElementById("email").value
            + "<br> Lời nhắn: " +  document.getElementById("message").value
}).then(
  message => alert("đã gửi")
);
    }
</script>
<?php
require("footer.php");
?>