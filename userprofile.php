<?php
	require("header.php");
    $_SESSION['name'];
    $_SESSION['phone'];
    $_SESSION['diachi'];
    $_SESSION['email'];
    $_SESSION['bday'];
    $_SESSION['type'];
?>
     <!-- Page Header Start -->
<section class="container-fluid bg-secondary mb-2">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">THÔNG TIN CÁ NHÂN</h1>
</section>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="d-flex justify-content-center mt-5">
        <div class="text-center mb-4">
        </div>
                <div class="contact-form ">
                <?php
                    if(isset($_SESSION['id'])){
                        $id = $_SESSION['id'];
                        $sql = "SELECT*FROM `tbl_nguoidung` WHERE `nguoidung_id` = '$id'";
                        $query = mysqli_query($conn, $sql);
                        while($nd_id = mysqli_fetch_array($query)){
                    ?>
                    <form action="updaterun.php" method="POST" role="form" class="justify-content-center">
                        <div class="control-group mb-3">
                            <?php if($_SESSION['name'] == 'admin'){?>
                            <input type="text" class="form-control" name="name" disabled = "disabled" value ="<?php echo $nd_id['ten_nd']?>">
                            <?php }else{?>
                            <input type="text" class="form-control" name="name" disabled = "disabled" value ="<?php echo $nd_id['ten_nd']?>">
                            <?php }?>
                        </div>
                        <div class="control-group mb-3">
                            <input type="email" class="form-control" name="email" disabled = "disabled" value ="<?php echo $nd_id['email']?>">
                        </div>
                        <div class="control-group mb-3">
                            <input type="text" class="form-control" name="bday" disabled = "disabled" value ="<?php echo $nd_id['ngaysinh']?>">
                        </div>
                        <div class="control-group mb-3">
                            <input type="tel" class="form-control" name="phone" disabled = "disabled" value ="<?php echo $nd_id['sdt']?>">
                        </div>
                        <div class="control-group mb-3">
                            <input type="text" class="form-control" name="diachi" disabled = "disabled" value ="<?php echo $nd_id['diachi']?>">
                        </div>
                        <div class="d-flex row-12 ml-0 pl-0">
                        <div class="d-grid mt-3 col-6 p-0"> 
                            <button class="btn btn-primary btn-d-xl-flex " id="submitButton" name="update"style="width:150px">
                                <a class ="text-light" href="updateprofile.php?id=<?php echo $_SESSION['id']?>">Sửa Thông Tin</a>
                            </button>
                        </div>
                        <div class="d-grid mt-3 col-6">
                            <button class="btn btn-primary btn-xl" id="submitButton" name="update"style="width:150px">
                                <a class ="text-light" href="updatepass.php?id=<?php echo $_SESSION['id']?>">Sửa Mật khẩu</a>
                            </button>
                        </div>
                        </div>

                    <?php
                    } 
                    }
                    ?>
                    </form>
                    <?php if($_SESSION['type'] == '0') {?>
                        <form action="admin/admin.php">
                            <div class="d-grid mt-3"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Dashboard</button></div>
                        </form>
                    <?php }?>
                </div>
            </div>

    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <?php
	require("footer.php");
?>