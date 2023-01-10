<!DOCTYPE html>
<html lang="en">
    
    <body class="sb-nav-fixed">
        <?php 
        // VIẾT CÁC CÂU LỆNH THỰC HIỆN THÊM MỚI TIN TỨC Ở ĐÂY 

        // 1. Kết nối đến máy chủ dữ liệu và đến csdl mà bạn muốn lấy, thêm mới, sửa, xóa dữ liệu
            include("database/dbcon.php");
        // 2. Lấy được ra các dữ liệu từ trang thanhtoan.php chuyển sang
        $id= $_SESSION['name'];
        $giaohang_id = $_POST['giaohang_id'];
        $thanhtoan_id = $_POST['thanhtoan_id'];
        $ten = $_POST['txtHovaten'];
        $sodienthoai = $_POST['txtSodienthoai'];
        $diachi = $_POST['txtDiachi'];
        $ghichu = $_POST['txtGhichu'];

        $sql1 = "INSERT INTO tbl_hoadon (hoadon_id, nguoidung_id, giaohang_id, thanhtoan_id, ngaynhap, ten_nn, diachi_nn, sdt_nn, ghichu, tinhtrangdh) 
        VALUES (NULL,'".$id."','".$giaohang_id."','".$thanhtoan_id."',current_timestamp(),'".$ten."', '".$diachi."','".$sodienthoai."','".$ghichu."','0')";
        $thanh_toan = mysqli_query($conn, $sql1);
        
        if($thanh_toan){
            $sql2="SELECT max(hoadon_id) from tbl_hoadon";
                $mahd = mysqli_query($conn, $sql2);
                $row1 = mysqli_fetch_array($mahd);

            $sql3 = "SELECT a.giohang_id,a.so_luong_cart,a.size,a.sanpham_id,b.dongia 
            FROM `tbl_giohang` AS a JOIN `tbl_sanpham` AS b WHERE a.sanpham_id=b.sanpham_id";

            # Thực thi câu lệnh truy vấn
            $giohang = mysqli_query($conn, $sql3);
            $y = 0 ;
            # Hiển thị ra CSDL mà bạn vừa lấy được
            while ($row2 = mysqli_fetch_array($giohang))
                {
                    $y++;
                    $row2['thanhtien'] = $row2['so_luong_cart'] * $row2['dongia'];
                    $sql4= "INSERT INTO tbl_cthoadon( hoadon_id, sanpham_id,  so_luong_cart, thanhtien,hinhanh) 
                    VALUES ('".$row1['max(hoadon_id)']."','".$row2['sanpham_id']."', '".$row2['so_luong_cart']."','".$row2['thanhtien']."','".$row2['hinhanh']."')";
                    $thanh_toan = mysqli_query($conn, $sql4);
                }
 
            $sql5 = "SELECT * FROM tbl_hoadon join tbl_giaohang 
            WHERE tbl_hoadon.giaohang_id=tbl_giaohang.giaohang_id";
            $giaohang = mysqli_query($conn, $sql5);
            $row3 = mysqli_fetch_array($giaohang);

            $sql6="INSERT INTO tbl_giaohang (giaohang_id, hoadon_id, nguoidung_id, hinhthuc_gh) 
            VALUES('".$row3['giaohang_id']."','".$row1['max(hoadon_id)']."','".$row3['nguoidung_id']."', '".$row3['hinhthuc_gh']."')";
            $van_chuyen = mysqli_query($conn, $sql6);


//làm tiếp từ đây, soi dữ liệu
            $sql7 = "SELECT * FROM `tbl_hoadon` AS a JOIN `tbl_thanhtoan` AS b 
            WHERE a.thanhtoan_id=b.thanhtoan_id";
            $tt = mysqli_query($conn, $sql7);
            $row4 = mysqli_fetch_array($tt);

            $sql8="INSERT INTO tbl_ctthanhtoan (thanhtoan_id, nguoidung_id, hoadon_id, tinhtrang_tt) 
            values('".$row4['thanhtoan_id']."','".$row4['nguoidung_id']."','".$row1['max(hoadon_id)']."', '0')";
            $thanhtoandon = mysqli_query($conn, $sql8);

        }
                                        
       // 5. Hiển thị ra thông báo bạn đã thêm mới tin tức thành công và đẩy về trang trang_chu.php
        $sql9="DELETE from tbl_giohang ";
        $xoagiohang = mysqli_query($conn, $sql9);
        echo "
             <script type='text/javascript'>
                  alert('Bạn đã đặt hàng thành công!');
             </script>";

        echo "
             <script type='text/javascript'>
                  window.location.href='index.php';
             </script>";     

        ?> 
    </body>
</html>