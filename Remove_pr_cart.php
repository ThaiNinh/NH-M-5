<?php
require "./Config/Connectdb.php";

session_start();
    
$id = $_GET['id'];
$size = $_GET['size'];
$id_user = $_SESSION['id'];

    
$sql_remove_item_cart = "DELETE FROM tbl_giohang WHERE sanpham_id = $id AND nguoidung_id = $id_user AND size = $size";
$data_cart = executeQuery($sql_remove_item_cart, true) ?: [];

header('Location: ./Cart.php?user='.$id_user);

?>
