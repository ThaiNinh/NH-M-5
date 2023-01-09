<?php
	include("database/dbcon.php");
	$user = (isset($_SESSION['name'])) ? $_SESSION['name']: [];
	$sqlloaisanpham ="SELECT * FROM `tbl_loaisp` Order by loaisp_id";
	$query=mysqli_query($conn,$sqlloaisanpham);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xu Store</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="eshopper-1.0.0/css/style.css" media="all">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.css">
    <link rel="stylesheet" href="./stylecss.css">
    <script src="./eshopper-1.0.0/js/main.js"></script>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        <header class="row py-2 px-5 justify-content-between">
            <div class="col d-sm-none d-lg-block">
                <a href="index.php" class="font-monospace font-weight-light "
                    style="color:black; font-size:3rem; text-decoration: none; letter-spacing: 5px;">XU STORE</a>
            </div>
            <div class="col text-right">
                <?php if(isset($_SESSION['name'])) {?>
                <a href="userprofile.php" class="d-none d-lg-inline-flex text" style="text-decoration: none">
                    <?php echo $_SESSION['name']?>
                    <span>&#160;<i class="fa-solid fa-user-large icon-2x"></i>&ensp;</span></a>

                <a href="logout.php" class="d-none d-lg-inline-flex page-item text" style="text-decoration: none">
                    Đăng Xuất
                    <span>&#160;<i class="fa-solid fa-right-from-bracket"></i></span></a>

                <?php }else {?>
                <a href="login.php" class="d-none d-lg-inline-flex page-item text" style="text-decoration: none">
                    Đăng Nhập
                    <span>&#160;<i class="fa-solid fa-right-to-bracket"></i>&ensp;</span> </a>
                <a href="register.php" class="nd-none d-lg-inline-flex page-item text" style="text-decoration: none">
                    Đăng Ký
                    <span>&#160;<i class="fa-regular fa-registered"></i></span> </a>
                <?php }?>

            </div>

            <nav class="row justify-content-between" style="width:100%">
                <nav class="menu navbar navbar-expand-lg py-3 py-lg-0 px-0">
                    <div class="collapse navbar-collapse ">
                        <ul class="navbar-nav me-auto col-7">
                            <li class="nav-item">
                                <a class="nav-link active " aria-current="page" href="index.php">
                                    <i class="fas fa-home"></i>
                                    Trang chủ<span class="ui-button-icon-only"></span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="gioithieu.php">
                                    <i class="fa-solid fa-users-between-lines"></i>
                                    Về chúng tôi<span class="ui-button-icon-only"></span>
                                </a>
                            </li>
                            <!--<div class="nav-item dropdown show">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0 show">
                                    <a href="cart.html" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.html" class="dropdown-item">Checkout</a>
                                </div>
                            </div>-->
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-bars"></i>
                                    Sản phẩm<span class="ui-button-icon-only"></span>
                                </a>
                                <div class="dropdown-menu rounded-0 m-0">

                                    <?php
							while ($row=mysqli_fetch_array($query)){
							
							?>
                                    <a href="shop.php?loaisp_id=<?php echo $row['loaisp_id'];?>"
                                        class="dropdown-item"><?php echo $row['tenloaisp'];?></a>
                                    <?php } ?>

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
                                <a class="nav-link active" aria-current="page" href="admin/orderhis.php">
                                    <i class="fa-solid fa-shopping-cart"></i>
                                    Lịch sử mua hàng<span class="ui-button-icon-only"></span>
                                </a>
                            </li>

                        </ul>
                        <div class="col-lg-4 col-6 text-left">
                            <div class="input-group">
                                <form name="sform" action="timkiem.php?quanly=timkiem" method="POST">
                                    <input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm..."
                                        name="tukhoa">
                                    <div class="input-group-append">
                                        <span>
                                            <button class="input-group-text bg-transparent text-primary" name="timkiem"
                                                type="submit" value="tìm kiếm">

                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>

                                    </div>

                                </form>
                            </div>
                        </div>

                        <!-- <div class="col-lg-5 col-7 text-left">
						
							<div class="input-group">
								<form name="sform" action="timkiem.php?quanly=timkiem" method="POST">
									<input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm..." name="timkiem">
									<div class="input-group-append">
									<button class="input-group-text bg-transparent text-primary" name="tukhoa" type="submit" value="tìm kiếm">
										
										<i class="fa fa-search"></i>
									</button>
									</div>
								</form>	
									
							</div>
					</div> -->

                        <div class="col-4">
                            <a href="" class="btn border">
                                <i class="fas fa-heart text-primary"></i>
                                <span class="badge">0</span>
                            </a>

                            <a href="./Cart.php?user=1" class="btn border">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge">0</span>
                            </a>
                        </div>



                    </div>

                </nav>
            </nav>
        </header>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
            integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </div>