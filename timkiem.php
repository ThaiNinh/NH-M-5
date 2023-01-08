 	<?php
	require("header.php");
	?>

	
 <?php
 	include("config.php");
	if(isset($_POST['timkiem'])){

	$tukhoa = $_POST['tukhoa'];
	
	//$sql= "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.tensp LIKE '%$tukhoa%' ORDER BY sanpham_id DESC";
	$sql_product = mysqli_query($conn,"SELECT * FROM tbl_sanpham WHERE tbl_sanpham.tensp LIKE '%$tukhoa%' ORDER BY sanpham_id DESC");		


	}		
	?> 
<h3>Từ khóa tìm kiếm : <?php echo $_POST['tukhoa'] ?></h3>
		<?php
		while($row_tensp = mysqli_fetch_array($sql_product)){ 
		?>
				<div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-<?php echo $row_tensp['sanpham_id']?>.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"><?php echo $row_tensp['tensp']?></h6>
                                <div class="d-flex justify-content-center">
                                    <h6><?php echo $row_tensp['dongia']?></h6><h6 class="text-muted ml-2"><del><?php echo $row_tensp['dongia']?></del></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Chi tiết</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Thêm vào giỏ</a>
                            </div>
                        </div>
        		</div>
		<?php
		} 
		?>