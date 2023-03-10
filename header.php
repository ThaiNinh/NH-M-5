<?php
	include("database/dbcon.php");
	$user = (isset($_SESSION['name'])) ? $_SESSION['name']: [];
	$sqlloaisanpham ="SELECT * FROM `tbl_loaisp` Order by loaisp_id";
	$query=mysqli_query($conn,$sqlloaisanpham);

    function check_cart(){ 
        if(isset($_SESSION['id'])){
            $id_user = $_SESSION['id'];
            echo "./Cart.php?user=$id_user";
        } else {
            echo "";
        }
    }
    

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
        <link rel="stylesheet" href="./publics/Css/cart_page.css">
        <style>
            .has-error{
                color: red;
            }
        </style>
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
                    ????ng Xu???t
                    <span>&#160;<i class="fa-solid fa-right-from-bracket"></i></span></a>

                <?php }else {?>
                <a href="login.php" class="d-none d-lg-inline-flex page-item text" style="text-decoration: none">
                    ????ng Nh???p
                    <span>&#160;<i class="fa-solid fa-right-to-bracket"></i>&ensp;</span> </a>
                <a href="register.php" class="nd-none d-lg-inline-flex page-item text" style="text-decoration: none">
                    ????ng K??
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
                                    Trang ch???<span class="ui-button-icon-only"></span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="gioithieu.php">
                                    <i class="fa-solid fa-users-between-lines"></i>
                                    V??? ch??ng t??i<span class="ui-button-icon-only"></span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="fa-solid fa-bars"></i>
                                    S???n ph???m<span class="ui-button-icon-only"></span>
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

                            
                            <?php 
	                        $sql_danhmuctin ="SELECT * FROM `tbl_dmtin` Order by dmtin_id";
	                        $query_dmtin=mysqli_query($conn,$sql_danhmuctin)

                            ?>
					        <li class="nav-item dropdown">
						    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
							<i class="fa-regular fa-newspaper"></i>
							Tin t???c<span class="ui-button-icon-only"></span>
							<div class="dropdown-menu rounded-0 m-0">
							
							<?php
							while ($row=mysqli_fetch_array($query_dmtin)){
							
							?>
							<a href="dmbaiviet.php?id=<?php echo $row['dmtin_id'];?>" class="dropdown-item"><?php echo $row['tendm'];?></a>
							<?php } ?>
							
						</a>				
					  </li>
                            
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="lienhe.php">
                                    <i class="fa-solid fa-phone"></i>
                                    Li??n h???<span class="ui-button-icon-only"></span>
                                </a>
                            </li>

                           

                        </ul>
                        <div class="col-lg-4 col-6 text-left">

                            <div class="input-group">
                                <form name="sform" action="timkiem.php?quanly=timkiem" method="POST" class="input-group-append">
                                    <input type="text" class="form-control" placeholder="T??m ki???m s???n ph???m..."
                                        name="tukhoa">
                                   
                                        <span>
                                            <button class="input-group-text bg-transparent text-primary" name="timkiem"
                                                type="submit" value="t??m ki???m">

                                                <i class="fa fa-search icon-3x icon-align-center"></i>
                                            </button>
                                        </span>

                                   

                                </form>

                            </div>
 
                        </div>
                        <div class="col-4">
                            <a href="<?= check_cart() ?>" class="btn border">
                                <i class="fas fa-shopping-cart text-primary"></i>
                                <span class="badge"></span>
                            </a>
                        </div>



                    </div>

                </nav>
            </nav>
        </header>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
            integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer">

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
</script></script>
    </div>