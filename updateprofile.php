<?php
	require("header.php");
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
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <?php
                    if(isset($_GET['id'])){
                        $id = $_GET['id'];
                        $sql = "SELECT*FROM `tbl_nguoidung` WHERE `nguoidung_id` = '$id'";
                        $query = mysqli_query($conn, $sql);
                        while($nd_id = mysqli_fetch_array($query)){
                    ?>
                    <form action="updaterun.php" method="POST" role="form">
                        <div class="control-group mb-3">
                            <?php if($_SESSION['name'] == 'admin'){?>
                            <input type="hidden" class="form-control" name="name" value ="<?php echo $nd_id['ten_nd']?>">
                            <?php }else{?>
                            <input type="text" class="form-control" name="name" value ="<?php echo $nd_id['ten_nd']?>">
                            <span> <?php echo (isset($warning))?$warning:''?></span>
                            <?php }?>
                        </div>
                        <div class="control-group mb-3">
                            <input type="email" class="form-control" name="email" value ="<?php echo $nd_id['email']?>">
                        </div>
                        <div class="control-group mb-3">
                            <input type="text" class="form-control" name="bday" value ="<?php echo $nd_id['ngaysinh']?>">
                        </div>
                        <div class="control-group mb-3">
                            <input type="tel" class="form-control" name="phone" value ="<?php echo $nd_id['sdt']?>">
                        </div>
                        <div class="control-group mb-3">
                            <input type="text" class="form-control" name="diachi" value ="<?php echo $nd_id['diachi']?>">
                        </div>
                        <div class="d-grid mt-3">
                            <button class="btn btn-primary btn-xl" type="submit" name="update"style="width:150px">Sửa Thông Tin</button>
                        </div>
                        </form>
                    <?php
                    } 
                }
                    ?>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <?php
	require("footer.php");
?>