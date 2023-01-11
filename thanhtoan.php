<?php
	require("header.php");
?>
<?php
    $id_nguoidung=$_SESSION['nguoidung_id'];
    $sanpham_id=$_SESSION['sanpham_id'];
    $soluong=$_SESSION['so_luong_cart'];
    $size=$_SESSION['so_size'];
    $insert_giohang="INSERT INTO `tbl_giohang`( `sanpham_id`, `so_luong_cart`, `nguoidung_id`, `size`) 
    VALUES ('".$sanpham_id."','".$soluong."','".$id_nguoidung"','".$size."')";
    $cart
?>