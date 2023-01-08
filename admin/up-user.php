<?php
include 'config.php';
$id = $_GET['id'];
    $sql = "UPDATE `tbl_nguoidung` SET `phanquyen`= 0 WHERE nguoidung_id='$id'";
    $query = mysqli_query($conn, $sql);
    if($query){
    header("location: user.php");
    }

?>