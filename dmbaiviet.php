<?php
require("header.php");
?>
<?php
$id = $_GET['id'];
$sql_bv = "SELECT * FROM `tbl_baiviet` WHERE tbl_baiviet.dmtin_id= '$id' ORDER by baiviet_id desc";
$query_bv = mysqli_query($conn, $sql_bv);
$sql_cate = "SELECT * FROM tbl_dmtin WHERE tbl_dmtin.dmtin_id='$id'";
$query_cate = mysqli_query($conn, $sql_cate);
$row_titler = mysqli_fetch_array($query_cate);
?>
<h3>Danh mục bài viết: <?php echo $row_titler['tendm'] ?></h3>
<section class="container-fluid bg-secondary mb-5">
	<div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 170px">
		<h1 class="font-weight-semi-bold text-uppercase mb-3">Hãy đón xem tin tức mới từ chúng tôi</h1>
		<div class="d-inline-flex">
			<p class="m-0"><a href="index.php">Trang chủ</a></p>
			<p class="m-0 px-2">-</p>
			<p class="m-0"><a href="shop.php">Cửa hàng</a></p>
		</div>
	</div>
</section>

<div class="row px-xl-6 pt-2 pl-6 ">
	<?php
	while ($row_bv = mysqli_fetch_array($query_bv)) {
		?>
		<div class="col-lg-4 col-md-6 col-sm-12 pb-1">
			<div class="card product-item border-0 mb-4">
				<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
					<a href="baiviet.php?id=<?php echo $row_bv['baiviet_id'] ?>">
						<img class="img-fluid w-100" src="./img/<?php echo $row_bv['anh'] ?>" alt="">
						<p class="tittle_product"> Tên Bài viết: <?php echo ($row_bv['tenbaiviet']) ?></p>
						<p class="tittle_product"> Tóm tắt: <?php echo ($row_bv['tomtat']) ?></p>
					</a>

				</div>
			</div>
		</div>
		<?php
	}
	?>
</div>
</section>
<?php
require("footer.php");
?>