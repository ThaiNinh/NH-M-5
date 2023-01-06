<?php
include 'database/dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xu Store</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel = "stylesheet" type = "text/css" href="eshopper-1.0.0/css/style.css" media="all">
	<link rel = "stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
	<link rel = "stylesheet" href="fontawesome-free-6.2.1-web/css/all.css">
	<link rel = "stylesheet" href="./stylecss.css">
	<script src="eshopper-1.0.0/js/main.js"></script>
</head>
<body>
<div class="container-fluid">
	<header class="row py-2 px-5 justify-content-between">
		<div class="col d-sm-none d-lg-block">
			<a href="index.html" class="font-monospace font-weight-light " style="color:black; font-size:3rem; text-decoration: none; letter-spacing: 5px;">XU STORE</a>		
		</div>
		<div class="col text-right">
			<a class="d-none d-lg-inline-flex page-item text" href="#" style="text-decoration: none">
			Đăng kí</a>
			<span class="text-black-50"><i class="fa-solid fa-grip-lines-vertical"></i></span>
			<a class="d-none d-lg-inline-flex page-item text" href="#" style="text-decoration: none">
			Đăng nhập</a>
		
		</div>	

		<nav class="row justify-content-between" style="width:100%">
			<nav class="menu navbar navbar-expand-lg py-3 py-lg-0 px-0">
				  <div class="collapse navbar-collapse ">
					<ul class="navbar-nav me-auto col-6">			  
					  <li class="nav-item">
						<a class="nav-link active " aria-current="page" href="index.html">
							<i class="fas fa-home"></i>
							Trang chủ<span class="ui-button-icon-only"></span>
						</a>				
					  </li>
					  
					  <li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">
							<i class="fa-solid fa-users-between-lines"></i>
							Về chúng tôi<span class="ui-button-icon-only"></span>
						</a>				
					  </li>
					  
					  <li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<i class="fa-solid fa-bars"></i>
						Sản phẩm<span class="ui-button-icon-only"></span>
						</a>
						<div class="dropdown-menu rounded-0 m-0">
							<a href="#" class="dropdown-item">Giày nam</a>
							<a href="#" class="dropdown-item">Giày nữ</a>
							<a href="#" class="dropdown-item">Giày trẻ em</a>
						</div>
					  </li>

					  <li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">
							<i class="fa-regular fa-newspaper"></i>
							Tin tức<span class="ui-button-icon-only"></span>
						</a>				
					  </li>
					  <li class="nav-item">
						<a class="nav-link active" aria-current="page" href="lienhe.php">
							<i class="fa-solid fa-phone"></i>
							Liên hệ<span class="ui-button-icon-only"></span>
						</a>				
					  </li>

					  <li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">
							<i class="fa-solid fa-question"></i>
							Hỏi đáp<span class="ui-button-icon-only"></span>
						</a>				
					  </li>

					</ul>
					<div class="col-lg-5 col-7 text-left">
						<form action="">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search for products">
								<div class="input-group-append">
									<span class="input-group-text bg-transparent text-primary">
										<i class="fa fa-search"></i>
									</span>
								</div>
							</div>
						</form>
					</div>
					<div class="col-4">
						<a href="" class="btn border">
							<i class="fas fa-heart text-primary"></i>
							<span class="badge">0</span>
						</a>
						
						<a href="" class="btn border">
							<i class="fas fa-shopping-cart text-primary"></i>
							<span class="badge">0</span>
						</a>
					</div>


					
				  </div>
	
			  </nav>
		</nav>
	</header>
</div>
<section class=" d-flex flex-column align-items-center justify-content-center" style="min-height: 200px">
			<h2 class="section-title px-5" style="background-color: none"><span class="px-2" style="z-index:auto">Liên hệ với chúng tôi</span></h2>
</section>

<div class="contact-form d-flex justify-content-center m-0 p-0">
    <div id="success"></div>
    <form name="sentMessage" id="contactForm" novalidate="novalidate">
    	<div class="control-group">
        <input type="text" class="form-control" id="name" placeholder="Nhập tên của bạn" required="required" data-validation-required-message="Hãy nhập tên của bạn"style="width:400px;">
        <p class="help-block text-danger"></p>
    	</div>
   		
		<div class="control-group">
        <input type="email" class="form-control" id="email" placeholder="Nhập Email của bạn" required="required" data-validation-required-message="Hãy nhập Email của bạn"style="width:400px;">
 		<p class="help-block text-danger"></p>
        </div>
                
		<div class="control-group">
        <textarea class="form-control" rows="6" id="message" placeholder="Lời nhắn" required="required" data-validation-required-message="Hãy nhập Lời nhắn của bạn"style="width:400px;"></textarea>
        <p class="help-block text-danger"></p>
        </div>
        
		<div>
        <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Gửi</button>
        </div>
    </form>
</div>


<footer class="container-fluid card text-dark bg-secondary mt-4 pt-2">
	<div class="row px-xl-5 pt-5">
		<div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
			<a href="" class="text-decoration-none">
				<h1 class="mb-4 display-5 font-weight-semi-bold">XU STORE</h1>
			</a>
			<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
			<p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i></p>
			<p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i></p>
			<p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i></p>
		</div>
		<div class="col-lg-8 col-md-12">
			<div class="row">
				<div class="col-md-4 mb-5">
					<h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
					<div class="d-flex flex-column justify-content-start">
						<a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
						<a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
						<a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
						<a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
						<a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
						<a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
					</div>
				</div>
				<div class="col-md-4 mb-5">
					<h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
					<div class="d-flex flex-column justify-content-start">
						<a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Home</a>
						<a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
						<a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
						<a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
						<a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
						<a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
					</div>
				</div>
				<div class="col-md-4 mb-5">
					<h5 class="font-weight-bold text-dark mb-4">Theo dõi chúng tôi</h5>
					<div class="d-flex flex-column justify-content-start">
						<p class="mb-2"><i class="fa-brands fa-facebook text-primary mr-3"></i></p>
						<p class="mb-2"><i class="fa-brands fa-facebook-messenger text-primary mr-3"></i></p>
						<p class="mb-0"><i class="fa-brands fa-instagram text-primary mr-3"></i></i></p>
					</div>
					<h5 class="font-weight-bold text-dark mb-4"> Chấp nhận thanh toán</h5>
					<div class="d-flex flex-column justify-content-start">
						<img class="img-fluid" src="img/payments.png" alt="">
					</div>

					</div>
				</div>
			</div>
		</div>
	</div>
<hr class="border-2">
	<div class="row border-top border-light mx-xl-5 py-4">
		<div class="col-md-6 px-xl-0">
			<p class="mb-md-0 text-center text-md-left text-dark">
				<a class="text-dark font-weight-semi-bold" href="">Xu Store</a>. HVNH. Nhóm 5
			</p>
		</div>
	</div>
</footer>
</body>

<script>
	const dropdown =  document.querySelector('.dropdown-toggle');
	// dropdown.classList.toggle('active');

	dropdown.addEventListener('click',handleClick)

	function handleClick(){
		document.querySelector('.dropdown-menu').classList.toggle('active');
	}
</script>
</html>
