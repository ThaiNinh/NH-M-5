<?php
include 'config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql ="DELETE FROM `tbl_nguoidung` WHERE `nguoidung_id` =$id";
    $query=mysqli_query($conn, $sql);
    if($query){
        header('location: user.php');
    }
}
?>