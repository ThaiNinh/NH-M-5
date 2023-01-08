<?php
include 'config.php';
$user = (isset($_SESSION['name'])) ? $_SESSION['name']: [];
//$user = $_SESSION['name'];

?>
<?php 
require("header.php");
?>
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0"><a href="shop.php">Shop</a></p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Shop Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-3 col-md-12" style="z-index:-1">                
                <!-- Color Start -->
                <div class="border-bottom mb-4 pb-4">
                    <h5 class="font-weight-semi-bold mb-4">Loại Sản Phẩm</h5>
                    <form>
                        <?php
                        $sql1="SELECT * FROM `tbl_loaisp`";
                        $query1= mysqli_query($conn, $sql1);
                        ?>
                    <?php while($row_loaisp = mysqli_fetch_array($query1)){ ?>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="radio" class="custom-control-input" name="loaisp_id" id="<?php echo $row_loaisp['loaisp_id']?>">
                            <label class="custom-control-label" for="<?php echo $row_loaisp['loaisp_id']?>"><a href="shop.php?loaisp_id=<?php echo $row_loaisp['loaisp_id']?>"><?php echo $row_loaisp['tenloaisp']?></a></label>
                        </div>
                    <?php }?>
                    </form>
                </div>
                <!-- Color End -->

                <!-- Size End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <div class="row pb-3">

                    <?php
                    if(isset($_GET['loaisp_id']) && ($_GET['loaisp_id'] > 0)){
                        $iddm = $_GET['loaisp_id'];
                        $sql="SELECT * FROM `tbl_sanpham` WHERE `loaisp_id` = '$iddm'";
                        $query= mysqli_query($conn, $sql);
                    }
                    else{
                        $sql="SELECT * FROM `tbl_sanpham`";
                        $query= mysqli_query($conn, $sql);
                    }
                    ?>
                    <?php while($row_tensp = mysqli_fetch_array($query)){ ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-<?php echo $row_tensp['sanpham_id']?>.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"><?php echo $row_tensp['tensp']?></h6>
                                <div class="d-flex justify-content-center">
                                    <h6><?php echo $row_tensp['dongia']?></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <?php }?>

                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
<?php 
require("footer.php");
?>