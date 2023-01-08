<?php
    include 'config.php';
    $hoadon_id=$_GET['giohang_id'];
    $sql="SELECT a.hoadon_id,c.tensp,b.soluong,a.ngaynhap, b.thanhtien  FROM `tbl_hoadon` AS a 
    JOIN `tbl_cthoadon` AS b ON a.hoadon_id=b.hoadon_id 
    JOIN `tbl_sanpham` AS c ON b.sanpham_id=c.sanpham_id WHERE a.hoadon_id= '".$hoadon_id."'";
   //  IN (SELECT DISTINCT giohang_id FROM `tbl_giohang`)";

    // $sql_lietke_dh="SELECT c.giohang_id, b.ten_nd, b.diachi,b.email,b.sdt,a.ngaynhap FROM `tbl_hoadon` AS a JOIN `tbl_nguoidung` AS b 
	// ON a.nguoidung_id=b.nguoidung_id JOIN `tbl_giohang` AS c ON a.giaohang_id=c.giohang_id 
	// WHERE b.phanquyen=1 IN (SELECT DISTINCT giohang_id FROM `tbl_giohang`)"; 
    // $query = mysqli_query($conn, $sql_lietke_dh);

    $query = mysqli_query($conn,$sql);
    
?>
    
<table style="width: 100%" border="1" style="border-collapse: collapse;">
    <tr>
        <th>STT</th>
        <th>Mã hóa đơn</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Ngày đặt</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
        
    </tr>
    <?php
    $i=0;
    $tongtien=0;
    while($row=mysqli_fetch_array($query)){
        $i++;
        $thanhtien = $row['thanhtien'] * $row['soluong'];
        $tongtien += $thanhtien; 
    ?>
  
    <tr>
        <td><?php echo $i ?></td>
        <td name="giohang_id"><?php echo $row['hoadon_id'] ?></td>
        <td><?php echo $row['tensp'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><?php echo $row['ngaynhap'] ?></td>
        <td><?php echo number_format($row['thanhtien'],0,',','.').'vnđ' ?></td>
        <td><?php echo number_format($thanhtien,0,',','.' ). 'vnđ' ?></td>
        
    </tr>
    <?php
    }
?>
    <tr>
        <td colspan = "6">
            <p> Tổng tiền : <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p>
    </td>
    </tr>
</table>
