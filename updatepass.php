<?php
// include 'config.php';
require("header.php");
if(!isset($_SESSION["id"])) 
{
    header("location:login.php"); 
}
?>

    <!-- Page Header Start -->
    <section class="container-fluid bg-secondary mb-2">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">THÔNG TIN CÁ NHÂN</h1>
    </section>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid">
        <div class="text-center mb-4">
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <?php
                    if(isset($_SESSION['id'])){
                        $id = $_SESSION['id'];
                        $sql = "SELECT*FROM `tbl_nguoidung` WHERE `nguoidung_id` = '$id'";
                        $query = mysqli_query($conn, $sql);
                        while($nd_id = mysqli_fetch_array($query)){
                    ?>
                    <form action="updaterun.php" method="POST" role="form">
                        <div class="control-group mb-3">
                            <input type="text" class="form-control" name="name" disabled = "disabled" value ="<?php echo $nd_id['ten_nd']?>">
                        </div>
                        <div class="control-group mb-3">
                            <label>Current Password:- </label>
                            <input type="password" name="currentPassword" class="form-control">
                        </div>
                        <div class="control-group mb-3">
                            <label>New Password:- </label>
                            <input type="password" name="newPassword"  class="form-control">
                        </div>
                        <div class="control-group mb-3">
                            <label>Confirm New Password:-</label>
                            <input type="password" name="passwordConfirm"  class="form-control">
                        </div>
                        <div class="d-grid mt-3">
                            <button class="btn btn-primary btn-xl" type="submit" name="change_password">Đổi Mật Khẩu</button>
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

    <?php
	require("footer.php");
?>