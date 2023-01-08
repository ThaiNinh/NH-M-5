<?php

include 'database/dbcon.php';

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
    //var_dump(!empty($err));
    $warning;
    $sql1= "SELECT*FROM tbl_nguoidung WHERE ten_nd = '$name'";
    $query=mysqli_query($conn, $sql1);
    $data1=mysqli_fetch_array($query);
    if($data1 == NULL && empty($err)){
        $sql = "INSERT INTO tbl_nguoidung`(ten_nd`, sdt, diachi, email, password, ngaysinh, phanquyen)
        VALUES ('$name','$phone','$diachi','$email','$pass','$bday','1')";
       $query = mysqli_query($conn, $sql);
       header("location:login.php");    
    }
    else{
        $warning = 'Tên tài khoản đã tồn tại!';
    }
    
}
?>
<?php
	require("header.php");
?>
    <!-- Page Header Start -->
    <section class="container-fluid bg-secondary">
        <div  class="d-flex flex-column align-items-center justify-content-center" style="min-height: 200px;">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Đăng ký</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Trang chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Đăng ký</p>
            </div>
        </div>
    </section>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid pt-5">
        <div class="text-center mb-4">
        </div>
        <div class=" px-xl-5">
            <div class="mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <div class="d-flex justify-content-center">
                    <form action="" method="post" role="form" >
                        <div class="control-group mb-3 ">
                            <input type="text" class="form-control" name="name" placeholder="Tên Tài Khoản">
                            <div class="has-error mb-3">
                                <span> <?php echo (isset($err['name']))?$err['name']:''?></span>
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
<span> <?php echo (isset($err['name']))?$err['name']:''?><?php echo (isset($warning))?$warning:''?></span>
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
    </div>
    <!-- Contact End -->

<?php
	require("header.php");
?>
