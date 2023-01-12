<?php
include 'config.php';
$sanpham = mysqli_query($conn, "select * from tbl_sanpham");

if(isset($_POST['submit'])){
    
    $id = $_POST['sanpham_id'];
    
    $tensp = $_POST['tensp'];

    if(isset($_FILES['hinhanh'])){
        $file=$_FILES['hinhanh'];
        $file_name=$file['name'];
        move_uploaded_file($file['tmp_name'], '../img/' . $file_name);

    }

    $mota=$_POST['mota']; 
    $gia=$_POST['dongia'];
    $soluong=$_POST['so_luong'];
    $trangthai=$_POST['trangthaisp'];
    $loaisp=$_POST['loaisp_id'];

    $sql="UPDATE `tbl_sanpham` SET`tensp`='$tensp',`hinhanh`='$file_name',`mota`='$mota',`dongia`='$gia',`so_luong`='$soluong',`trangthaisp` =$trangthai, `ngay_tao`=current_timestamp() where sanpham_id='$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        // header('location: dssanpham.php');
        echo "<script>window.alert('Sửa thành công');</script>";
        echo "<script>window.location.href='dssanpham.php';</script>";
 
    }
    else {
        echo "lỗi";
    }
    
   
}
