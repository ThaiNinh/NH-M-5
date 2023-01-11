<?php
	require("header.php");
?>

<?php	
	
	$id=$_GET['id'];
	$sql_bv= "SELECT * FROM `tbl_baiviet` WHERE tbl_baiviet.dmtin_id= '$id' ORDER by baiviet_id desc";
	$query_bv =mysqli_query($conn,$sql_bv);
	$sql_cate="SELECT * FROM tbl_dmtin WHERE tbl_dmtin.dmtin_id='$id'";
	$query_cate=mysqli_query($conn,$sql_cate);
	$row_titler=mysqli_fetch_array($query_cate);

?>
<section class="s1 row-fluid pb-0" id="s1">
<div class="slide-container active">
	<div class="slide justify-content-center align-content-center">
		<!-- help -->
<div class="faqs-w3l py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
<h3>Danh mục bài viết: <?php echo $row_titler['tendm'] ?></h3>
<ul class="product_list">
	<?php 
	while($row_bv=mysqli_fetch_array($query_bv)){
		?>
	<li>
	<a href="header.php?quanly=baiviet&baiviet_id=<?php echo $row_bv['baiviet_id']?>">
		<img src="admin/img/<?=$row_bv['anh']?>">
		<p class="tittle_product"> Tên Bài viết: <?php echo ($row_bv['tenbaiviet'])?></p>
		<p class="tittle_product"> Tóm tắt: <?php echo ($row_bv['tomtat'])?></p>
	</a>
	</li>

	<?php 
}
	 ?>
	 </div>
</div>
</div>
</section>


</ul>
		<?php 
require("footer.php");
?>