<?php
require "./Config/Connectdb.php";

// session_start();
// $email_user = $_SESSION['user']['email'];
    
$id = $_GET['id'];
$size = $_GET['size'];

    
$sql_remove_item_cart = "DELETE FROM `tbl_giohang` WHERE sanpham_id = $id AND id_user = 1 AND size = $size";
$data_cart = executeQuery($sql_remove_item_cart, true) ?: [];

header('Location: ./Cart.php?user=1');

?>