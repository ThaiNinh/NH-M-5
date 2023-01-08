<?php
include 'database/dbcon.php';
    $_SESSION['name'];
    $_SESSION['phone'];
    $_SESSION['diachi'];
    $_SESSION['email'];
    $_SESSION['bday'];
    $_SESSION['type'];

?>
<?php
	require("header.php");
?>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-2">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">THÔNG TIN CÁ NHÂN</h1>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid">
        <div class="text-center mb-4">
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="" method="post" role="form">
                        <div class="control-group mb-3">
                            <input type="text" class="form-control" name="name" disabled="disabled" placeholder="<?php echo $_SESSION['name']?>">
                        </div>
                        <div class="control-group mb-3">
                            <input type="email" class="form-control" name="email" disabled="disabled" placeholder="<?php echo $_SESSION['email']?>">
                        </div>
                        <div class="control-group mb-3">
                            <input type="text" class="form-control" name="bday" disabled="disabled" placeholder="<?php echo $_SESSION['bday']?>">
                        </div>
                        <div class="control-group mb-3">
                            <input type="tel" class="form-control" name="phone" disabled="disabled" placeholder="<?php echo $_SESSION['phone']?>">
                        </div>
                        <div class="control-group mb-3">
                            <input type="text" class="form-control" name="diachi" disabled="disabled" placeholder="<?php echo $_SESSION['diachi']?>">
                        </div>
                        </form>
                        <?php if($_SESSION['type'] == '0') {?>
                        <form action="admin/admin.php">
                            <div class="d-grid mt-3"><button class="btn btn-primary btn-xl" id="submitButton" type="submit">Dashboard</button></div>
                        </form>
                        <?php }?>
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