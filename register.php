<?php

include 'config.php';

$err = [];
if(isset($_POST['name'])){
    $name= $_POST['name'];
    $phone= $_POST['phone'];
    $email= $_POST['email'];
    $diachi= $_POST['diachi'];
    $bday= $_POST['bday'];
    $pass= md5($_POST['password']);
    $cpass= md5($_POST['cpassword']);
    if(empty($name))
        $err['name'] = 'Chưa nhập tên';
    if(empty($phone))
        $err['phone'] = 'Chưa nhập số điện thoại';
    if(empty($email))
        $err['email'] = 'Chưa nhập email';
    if(empty($diachi))
        $err['diachi'] = 'Chưa nhập địa chỉ';
    if(empty($bday))
        $err['bday'] = 'Chưa nhập ngày sinh';
    if(empty($pass))
        $err['password'] = 'Chưa nhập mật khẩu';
    if($pass != $cpass){
        $err['cpassword'] = 'Xác nhận mật khẩu sai';
    }
    $warning;
    $sql1= "SELECT*FROM `tbl_nguoidung` WHERE `ten_nd` = '$name'";
    $query=mysqli_query($conn, $sql1);
    $data1=mysqli_fetch_array($query);
    if($data1 == NULL && empty($err)){
        $sql = "INSERT INTO `tbl_nguoidung`(`ten_nd`, `sdt`, `diachi`, `email`, `password`, `ngaysinh`, `phanquyen`)
        VALUES ('$name','$phone','$diachi','$email','$pass','$bday','1')";
       $query = mysqli_query($conn, $sql);
       header("location:login.php");    
    }
    else{
        $warning = 'Tên tài khoản đã tồn tại!';
    }

    //var_dump(!empty($err));
}
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
    <style>
            .has-error{
                color: red;
            }
        </style>

</head>

<body>
    <!-- Topbar Start -->

	<header class="row py-2 px-5 justify-content-between">
		<div class="col d-sm-none d-lg-block">
			<a class="font-monospace font-weight-light " style="color:black; font-size:3rem; text-decoration: none; letter-spacing: 5px;">XU STORE</a>		
		</div>
		<div class="col text-right">
        <a href="login.php" class="d-none d-lg-inline-flex page-item text"style="text-decoration: none">
		Đăng Nhập 
		<span>&#160;<i class="fa-solid fa-right-to-bracket"></i>&ensp;</span> </a>
		<a href="register.php" class="nd-none d-lg-inline-flex page-item text"style="text-decoration: none">
		Đăng Ký
		<span>&#160;<i class="fa-regular fa-registered"></i></span> </a>		
		</div>	
    
	<nav class="row justify-content-between" style="width:100%">
			<nav class="menu navbar navbar-expand-lg py-3 py-lg-0 px-0">
				<div class="collapse navbar-collapse ">
					<ul class="navbar-nav me-auto col-7">			  
					  <li class="nav-item">
						<a class="nav-link active " aria-current="page" href="#">
							<i class="fas fa-home"></i>
							Trang chủ<span class="ui-button-icon-only"></span>
						</a>				
					  </li>
					  
					  <li class="nav-item">
						<a class="nav-link active" aria-current="page" href="gioithieu.html">
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
							<a href="shop.php?loaisp_id=1" class="dropdown-item">Giày nam</a>
							<a href="shop.php?loaisp_id=2" class="dropdown-item">Giày nữ</a>
							<a href="shop.php?loaisp_id=3" class="dropdown-item">Giày trẻ em</a>
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


					</ul>
					<div class="col-lg-4 col-6 text-left">
                        <div class="input-group">
                	    <form name="sform" action="timkiem.php?quanly=timkiem" method="POST">
                        <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
                        <div class="input-group-append">
							
							<button class="input-group-text bg-transparent text-primary" name="timkiem" type="submit" value="tìm kiếm">
                                <i class="fa fa-search"></i>
                            </button>
							
                        </div>                  
                        </form>
				        </div>
					</div>
					<div class="col-2">			
						<a href="" class="btn border">
							<i class="fas fa-shopping-cart text-primary"></i>
							<span class="badge">0</span>
						</a>
					</div>
				</div>	
			</nav>
		</nav>
	</header>


    <!-- Page Header Start -->
<section class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">ĐĂNG KÝ</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Trang Chủ</a></p>
        </div>
</section>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="d-flex justify-content-center mt-5">
        <div class="text-center mb-4">
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="" method="post" role="form">
                        <div class="control-group mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Tên Tài Khoản">
                            <div class="has-error mb-3">
                                <span> <?php echo (isset($err['name']))?$err['name']:''?><?php echo (isset($warning))?$warning:''?></span>
                            </div>
                        </div>
                        <div class="control-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <div class="has-error mb-3">
                                <span> <?php echo (isset($err['name']))?$err['name']:''?></span>
                                
                            </div>
                        </div>
                        <div class="control-group mb-3">
                            <input type="date" class="form-control" name="bday" placeholder="Ngày Sinh">
                            <div class="has-error mb-3">
                                <span> <?php echo (isset($err['name']))?$err['name']:''?></span>
                            </div>
                        </div>
                        <div class="control-group mb-3">
                            <input type="tel" class="form-control" name="phone" placeholder="Số Điện Thoại">
                            <div class="has-error mb-3">
                                <span> <?php echo (isset($err['name']))?$err['name']:''?></span>
                            </div>
                        </div>
                        <div class="control-group mb-3">
                            <input type="text" class="form-control" name="diachi" placeholder="Địa Chỉ">
                            <div class="has-error mb-3">
                                <span> <?php echo (isset($err['name']))?$err['name']:''?></span>
                            </div>
                        </div>
                        <div class="control-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Mật Khẩu">
                            <div class="has-error mb-3">
                                <span> <?php echo (isset($err['name']))?$err['name']:''?></span>
                            </div>
                        </div>
                        <div class="control-group mb-3">
                            <input type="password" class="form-control" name="cpassword" placeholder="Xác Nhận Mật Khẩu">
                            <div class="has-error mb-3">
                                <span> <?php echo (isset($err['name']))?$err['name']:''?></span>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Đăng Ký</button>
                        </div>
                    </form>
                </div>
            </div>
           
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <?php
require("footer.php");
?>