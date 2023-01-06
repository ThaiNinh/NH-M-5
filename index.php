<!--<?php
	//include("function/login.php");
	//include("function/customer_signup.php");
	include("database/dbcon.php");
	$user = (isset($_SESSION['name'])) ? $_SESSION['name']: [];
?>-->
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
			<?php if(isset($_SESSION['name'])) {?>
				<a href="userprofile.php" class="d-none d-lg-inline-flex text" style="text-decoration: none">
				<?php echo $_SESSION['name']?>
				<span>&#160;<i class="fa-solid fa-user-large icon-2x"></i>&ensp;</span></a>
				
				<a href="logout.php" class="d-none d-lg-inline-flex page-item text"style="text-decoration: none">
				Đăng Xuất
				<span>&#160;<i class="fa-solid fa-right-from-bracket"></i></span></a>
				
				<?php }else {?>
				<a href="login.php" class="d-none d-lg-inline-flex page-item text"style="text-decoration: none">
				Đăng Nhập 
				<span>&#160;<i class="fa-solid fa-right-to-bracket"></i>&ensp;</span> </a>
				<a href="register.php" class="nd-none d-lg-inline-flex page-item text"style="text-decoration: none">
				Đăng Ký
				 <span>&#160;<i class="fa-regular fa-registered"></i></span> </a>
				<?php }?>

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

<section class="s1 row-fluid pb-0" id="s1">
<div class="slide-container active">
	<div class="slide justify-content-center align-content-center">
		<div class="content col-5 ">
			<span>Shoe 1</span>
			<h3>Shoessss</h3>
			<p>aaaaaaaaaaaa </p>
			<a href="#"class="btn1" style="border-radius: 3.5rem;">Thêm vào giỏ hàng</a>
		</div>
		<div class="image col-6">
			<img src="img/slide/1.png" class="shoe"alt="">
			
		</div>
	</div>
</div>

<div class="slide-container ">
	<div class="slide justify-content-center align-content-center">
		<div class="content col-5">
			<span>Shoe 2</span>
			<h3>Shoessss</h3>
			<p>aaaaaaaaaaa </p>
			<a href="#"class="btn1"style="border-radius: 3.5rem;">Thêm vào giỏ hàng</a>
		</div>
		<div class="image col-6">
			<img src="img/slide/2.png" class="shoe"alt="">
			
		</div>
	</div>
</div>

<div class="slide-container">
	<div class="slide justify-content-center align-content-center">
		<div class="content col-5">
			<span>Shoe 3</span>
			<h3>Shoessss</h3>
			<p>aaaaaaaaaaaaaaaaaaaaaa </p>
			<a href="#"class="btn1"style="border-radius: 3.5rem;">Thêm vào giỏ hàng</a>
		</div>
		<div class="image col-6">
			<img src="img/slide/3.png" class="shoe"alt="">
			
		</div>
	</div>
</div>

<div class="slide-container">
	<div class="slide jjustify-content-center align-content-center">
		<div class="content col-5">
			<span>Shoe 4</span>
			<h3>Shoessss</h3>
			<p>aaaaaaaaaaaa </p>
			<a href="#"class="btn1"style="border-radius: 3.5rem;">Thêm vào giỏ hàng</a>
		</div>
		<div class="image col-6">
			<img src="img/slide/4.png" class="shoe"alt="">
			
		</div>
	</div>
</div>
<div id="prev" class="fa-solid fa-chevron-left" onclick="prev();"></div>
<div id="next" class="fa-solid fa-chevron-right" onclick="next();"></div>

</section>

<section id="loaisanpham">
	<h1 class="text-lg-center font-weight-light m-0 font-italic"style="font-size:3.5rem; color:#D19C97; letter-spacing: 1px;">LỰA CHỌN HÀNG ĐẦU CHO</h1>
<div class="row px-xl-5">
	
	<div class="col-md-4 pb-4" >
		<div class="cat-item d-flex flex-column border-1 mb-3">
			<a href="#"class="mx-auto d-block"style="text-decoration: none;">
			<img src="https://i.pinimg.com/564x/4f/aa/f0/4faaf0790aa6e38a372cb57f5d731c6c.jpg" alt="" class="img-fluid rounded" style="width:320px" >
			<h5 class="text-center font-weight-bold m-2" style="color:#D19C97;letter-spacing: 2px">NAM </h5>	
			</a>
		</div>		
	</div>

	<div class="col-md-4 pb-4" >
		<div class="cat-item d-flex flex-column border-1 mb-3">
			<a href="#"class="mx-auto d-block"style="text-decoration: none;">
			<img src="https://i.pinimg.com/564x/2e/27/30/2e2730667ec9f000187bd9bbcb073a7a.jpg" alt="" class="img-fluid rounded"style="width:320px" >
			<h5 class="text-center font-weight-bold m-2" style="color:#D19C97; letter-spacing: 2px">NỮ </h5>	
			</a>
		</div>		
	</div>
	<div class="col-md-4 pb-4" >
		<div class="cat-item d-flex flex-column border-1 mb-3">
			<a href="#"class="mx-auto d-block"style="text-decoration: none;">
			<img src="https://i.pinimg.com/564x/9e/d0/18/9ed0180d96edbcd79e2f7ccca52a017f.jpg" alt="" class="img-fluid rounded"style="width:360px">
			<h5 class="text-center font-weight-bold m-2" style="color:#D19C97;letter-spacing: 2px">TRẺ EM </h5>	
			</a>
		</div>		
	</div>

</div>
</section>

<section id="tintuc" class="m-0">
	<div class="row">
		<div class="col-12 col-xl-6">
			<div class="card-img">
				<a href="">
					<img class="img-fluid" src="https://i.pinimg.com/564x/74/d7/66/74d7664f5fd9bad81e090c67848fd68e.jpg" alt="">
				</a>
			</div>
			<div class="card-body">
				<a class="card-title" href=""style="font-family: futura-pt,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
				text-align: left; font-weight: 600; font-size: 20px; margin-top: 7px; color: #000;text-decoration:none">Xu hướng mới: Những chiếc giày mùa đông</a>
				<p class="card-text"style="font-family: futura-pt,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
				text-align: left; font-size: 16px;">
					<a class="" href="" style="text-decoration:none; color: #000">
						Thể hiện sự năng động của bạn
					</a>
				</p>
				<a class="card-link" href=""style="font-family: futura-pt,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
				text-align: left; font-weight: 600;text-decoration-line:underline"> SHOP NOW</a>
			</div>
		</div>
		<div class="col-12 col-xl-6">
			<div class="card-img">
				<a href="">
					<img class="img-fluid" src="https://i.pinimg.com/564x/e4/d7/47/e4d7470d3ca19fedc9764c721bc4f2cd.jpg" alt="">
				</a>
			</div>
			<div class="card-body">
				<a class="card-title" href=""style="font-family: futura-pt,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
				text-align: left; font-weight: 600; font-size: 20px; margin-top: 7px; color: #000;text-decoration:none">Xu hướng mới: Những chiếc giày mùa đông</a>
				<p class="card-text"style="font-family: futura-pt,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
				text-align: left; font-size: 16px;">
					<a class="" href="" style="text-decoration:none; color: #000">
						Thể hiện sự năng động của bạn
					</a>
				</p>
				<a class="card-link" href=""style="font-family: futura-pt,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
				text-align: left; font-weight: 600;text-decoration-line:underline"> SHOP NOW</a>
			</div>
		</div>

	</div>
</section>
<!--
<section id="s4"class="m-0 pt-0">
	<hr class="line">
	<div>
		<h1 class="text-lg-center font-weight-light m-0 font-italic"style="font-size:3.5rem; color:#D19C97; letter-spacing: 1px;">LỰA CHỌN HÀNG ĐẦU CHO</h1>
	</div>
	<div class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active" style="height: 410px;">
				<img class="img-fluid" src="" alt="Image">
				<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
					<div class="p-3" style="max-width: 700px;">
						<a href="" class="btn btn-light py-2 px-3">Shop Now1</a>
					</div>
				</div>
			</div>
			<div class="carousel-item" style="height: 410px;">
				<img class="img-fluid" src="" alt="Image">
				<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
					<div class="p-3" style="max-width: 700px;">
						<a href="" class="btn btn-light py-2 px-3">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
			<div class="btn btn-dark" style="width: 45px; height: 45px;">
				<span class="carousel-control-prev-icon mb-n2"></span>
			</div>
		</a>
		<a class="carousel-control-next" href="#header-carousel" data-slide="next">
			<div class="btn btn-dark" style="width: 45px; height: 45px;">
				<span class="carousel-control-next-icon mb-n2"></span>
			</div>
		</a>
	</div>


	</div>

</section>
-->

<section id="sanphammoi" class="m-0 pt-0">
	<hr class="line">
	<div>
		<h1 class="text-lg-center font-weight-light m-0 font-italic"style="font-size:3.5rem; color:#D19C97; letter-spacing: 1px;">SẢN PHẨM MỚI</h1>
	</div>
	<div class="row px-xl-5 pt-2 ">
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="card product-item border-0 mb-4">
				<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
					<img class="img-fluid w-100" src="img/product1/1.jpg" alt="">
				</div>
				<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
					<h6 class="text-truncate mb-3">giày</h6>
					<div class="d-flex justify-content-center">
						<h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
					</div>
				</div>
				<div class="card-footer d-flex justify-content-between bg-light border">
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi tiết</a>
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ</a>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="card product-item border-0 mb-4">
				<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
					<img class="img-fluid w-100" src="img/product1/1.jpg" alt="">
				</div>
				<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
					<h6 class="text-truncate mb-3">giày</h6>
					<div class="d-flex justify-content-center">
						<h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
					</div>
				</div>
				<div class="card-footer d-flex justify-content-between bg-light border">
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi tiết</a>
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ</a>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="card product-item border-0 mb-4">
				<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
					<img class="img-fluid w-100" src="img/product1/1.jpg" alt="">
				</div>
				<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
					<h6 class="text-truncate mb-3">giày</h6>
					<div class="d-flex justify-content-center">
						<h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
					</div>
				</div>
				<div class="card-footer d-flex justify-content-between bg-light border">
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi tiết</a>
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ</a>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="card product-item border-0 mb-4">
				<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
					<img class="img-fluid w-100" src="img/product1/1.jpg" alt="">
				</div>
				<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
					<h6 class="text-truncate mb-3">giày</h6>
					<div class="d-flex justify-content-center">
						<h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
					</div>
				</div>
				<div class="card-footer d-flex justify-content-between bg-light border">
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi tiết</a>
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ</a>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="card product-item border-0 mb-4">
				<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
					<img class="img-fluid w-100" src="img/product1/1.jpg" alt="">
				</div>
				<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
					<h6 class="text-truncate mb-3">giày</h6>
					<div class="d-flex justify-content-center">
						<h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
					</div>
				</div>
				<div class="card-footer d-flex justify-content-between bg-light border">
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi tiết</a>
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ</a>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="card product-item border-0 mb-4">
				<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
					<img class="img-fluid w-100" src="img/product1/1.jpg" alt="">
				</div>
				<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
					<h6 class="text-truncate mb-3">giày</h6>
					<div class="d-flex justify-content-center">
						<h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
					</div>
				</div>
				<div class="card-footer d-flex justify-content-between bg-light border">
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi tiết</a>
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ</a>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="card product-item border-0 mb-4">
				<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
					<img class="img-fluid w-100" src="img/product1/1.jpg" alt="">
				</div>
				<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
					<h6 class="text-truncate mb-3">giày</h6>
					<div class="d-flex justify-content-center">
						<h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
					</div>
				</div>
				<div class="card-footer d-flex justify-content-between bg-light border">
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi tiết</a>
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ</a>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
			<div class="card product-item border-0 mb-4">
				<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
					<img class="img-fluid w-100" src="img/product1/1.jpg" alt="">
				</div>
				<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
					<h6 class="text-truncate mb-3">giày</h6>
					<div class="d-flex justify-content-center">
						<h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
					</div>
				</div>
				<div class="card-footer d-flex justify-content-between bg-light border">
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi tiết</a>
					<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ</a>
				</div>
			</div>
		</div>
		
	</div>
</section>

<section class="guithu m-0 pt-0">
	<div class="content">
		<h3>Gửi phản hồi đến chúng tôi</h3>
		<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa </p>
		<form action="">
			<div class="input-group">
				<input type="text" class="form-control border-white p-4" placeholder="Điền email của bạn">
				<div class="input-group-append">
					<button class="btn btn-primary px-4"style="z-index: auto;">Send</button>
				</div>
			</div>
		</form>
	</div>

</section>

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
let slides = document.querySelectorAll('.slide-container');
let index = 0;

function next(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}
</script>
</html>
