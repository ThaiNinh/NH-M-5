<?php
	require("header.php");
?>
<?php		
	$id=$_GET['id'];
	$sql_bv= "SELECT * FROM `tbl_baiviet` WHERE baiviet_id= '$id'";
	$query_bv_all = mysqli_query($conn,$sql_bv);
	$query_bv =mysqli_query($conn,"SELECT * FROM `tbl_baiviet` WHERE baiviet_id= '$id'");
	$row_titler=mysqli_fetch_array($query_bv);
?>
<h3>Bài viết: <?php echo $row_titler['tenbaiviet'] ?></h3>
<section class="s1 row-fluid pb-0" id="s1">
	<h3>Bài viết: <?php echo $row_titler['tenbaiviet'] ?></h3>
<div class="slide-container active">
	<div class="slide justify-content-center align-content-center">	
<div class="faqs-w3l py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
<ul class="baiviet">
	<?php 
	while($row_bv=mysqli_fetch_array($query_bv_all)){
		?>
	<li>
	<a>
	<h2><?php echo $row_bv['tenbaiviet']?></h2>
		<img src="./img/<?php echo $row_bv['anh']?>">
		<p class="tittle_product"><?php echo ($row_bv['noidung_bv'])?></p>
	</a>
	</li>
	<?php 
}
	 ?>
	 </ul>
	 </div>
</div>
</div>
</div>
</section>

<?php 
require("footer.php");
?>