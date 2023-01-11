<?php
	require("header.php");

if(isset($_POST['name'])){
    $name= $_POST['name'];
    $pass = $_POST['password'];
    $hashingpass = md5($pass);
    $sql= "SELECT*FROM `tbl_nguoidung` WHERE ten_nd = '$name' AND password = '$hashingpass'";
    $query=mysqli_query($conn, $sql);
    $checkName = mysqli_num_rows($query);
    $data = mysqli_fetch_array($query);
    if($checkName == 1){
            $_SESSION['name']=$data['ten_nd'];
            $_SESSION['id']=$data['nguoidung_id'];
            $_SESSION['type'] = $data['phanquyen'];
            $_SESSION['phone'] = $data['sdt'];
            $_SESSION['diachi'] = $data['diachi'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['bday'] = $data['ngaysinh'];
            header("location: index.php");
        }
    }
?>

<!-- Page Header Start -->
<section class="container-fluid bg-secondary">
        <div  class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px;">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Đăng nhập</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Trang chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Đăng nhập</p>
            </div>
        </div>
</section>
    <!-- Page Header End -->
    <!-- Contact Start -->
<div class="container-fluid pt-5">
        <div class="center px-xl-5">
            <div class=" mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <div class="d-flex justify-content-center">
                    <form action="" method="post" role="form">
                        <div class="control-group mb-3 bg-light">
                            <input type="text" class="form-control" name="name" placeholder="Tên Tài Khoản">
                            <div class="has-error mb-3">
                                <span> <?php echo (isset($err['name']))?$err['name']:''?></span>
                            </div>
                        </div>
                        <div class="control-group mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Mật Khẩu">
                            <div class="has-error mb-3">
                                <span> <?php echo (isset($err['name']))?$err['name']:''?></span>
                            </div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Đăng Nhập</button>
                        </div>
                    </form>
                    </div>

                </div>
            </div>
        </div>
   </section>
    <!-- Contact End -->
    <!-- Footer Start -->
	<?php
	require("footer.php");
?>