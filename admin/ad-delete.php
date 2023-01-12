<?php
include 'config.php';
$_SESSION['name'];
$_SESSION['type'];
if($_SESSION['type'] == 1){
    echo 'Không làm admin đòi vào à?';
    die();
}
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql ="DELETE FROM `tbl_loaisp` WHERE loaisp_id =$id";
    $query=mysqli_query($conn, $sql);
    if($query){
        header('location: loaisp.php');
    }
}
?>