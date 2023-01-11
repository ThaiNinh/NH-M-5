 	<?php
	require("header.php");
	?>

	
 <?php

	if(isset($_POST['timkiem'])){

	$tukhoa = $_POST['tukhoa'];
	
	//$sql= "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.tensp LIKE '%$tukhoa%' ORDER BY sanpham_id DESC";
	$sql_product = mysqli_query($conn,"SELECT * FROM tbl_sanpham WHERE tbl_sanpham.tensp LIKE '%$tukhoa%' ORDER BY sanpham_id DESC");		


	}		
	?> 
    <section class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Từ khóa tìm kiếm : <?php echo $_POST['tukhoa'] ?></h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Trang chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0"><a href="shop.php">Cửa hàng</a></p>
            </div>
        </div>
    </section>
	<div class="row px-xl-5 pt-2 ">
		<?php
		while($row_tensp = mysqli_fetch_array($sql_product)){ 
		?>

				<div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="./img/<?php echo $row_tensp['sanpham_id']?>.jpg" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"><?php echo $row_tensp['tensp']?></h6>
                                
								<div class="d-flex justify-content-center">
                                <h6><?php echo $row_tensp['dongia']?></h6>
								</div>
                        	</div>
                            <div class="card-footer d-flex justify-content-center bg-light border">
                            	<a href="./Detail_product.php?id=<?= $row_tensp['sanpham_id']?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Xem chi tiết</a>                            </div>
                       	</div>
				</div> 	
        <?php }?>
	</div>

