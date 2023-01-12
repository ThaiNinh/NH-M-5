<?php
include 'config.php';
$_SESSION['name'];
$_SESSION['type'];
if($_SESSION['type'] == 1){
    echo 'Không làm admin đòi vào à?';
    die();
}
if(isset($_SESSION['id'])){
    $hoadon_id=$_GET['hoadon_id'];
    $sql ="DELETE FROM `tbl_hoadon` WHERE hoadon_id =$hoadon_id";
    
    $query=mysqli_query($conn, $sql);
    if($query){
        echo "<script>window.alert('Xóa thành công');</script>";
        echo "<script>window.location.href='orderhis.php';</script>";  
          
    }
}
?>