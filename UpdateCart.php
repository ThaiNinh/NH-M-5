<?php 
require_once "./Config/Connectdb.php";

if (isset($_GET)) {
    $qty = $_GET['qty'];
    $id_gio_hang = $_GET['giohang_id'];
    $update = "UPDATE `tbl_giohang` SET `so_luong_cart`= $qty WHERE giohang_id = $id_gio_hang";
    executeQuery($update,true);
    var_dump(123);
}