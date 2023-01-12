<!DOCTYPE html>
<html lang="en">
    
    <body class="sb-nav-fixed">
        <?php 
        // VIẾT CÁC CÂU LỆNH THỰC HIỆN THÊM MỚI TIN TỨC Ở ĐÂY 

        // 1. Kết nối đến máy chủ dữ liệu và đến csdl mà bạn muốn lấy, thêm mới, sửa, xóa dữ liệu
            include("database/dbcon.php");
        // 2. Lấy được ra các dữ liệu từ trang thanhtoan.php chuyển sang
        $id= $_SESSION['id'];
        // $giaohang_id = $_POST['giaohang_id'];
        $loaigiaohang_id = $_POST['loaigh_id'];
        $thanhtoan_id = $_POST['thanhtoan_id'];
        $ten = $_POST['txtHovaten'];
        $sodienthoai = $_POST['txtSodienthoai'];
        $diachi = $_POST['txtDiachi'];
        $ghichu = $_POST['txtGhichu'];

// hóa đơn 
        $sql1 = "INSERT INTO tbl_hoadon (hoadon_id, nguoidung_id, thanhtoan_id, ngaynhap, ten_nn, diachi_nn, sdt_nn, ghichu, tinhtrangdh) 
        VALUES ('','".$id."','".$thanhtoan_id."',current_timestamp(),'".$ten."', '".$diachi."','".$sodienthoai."','".$ghichu."','0')";
        $thanh_toan = mysqli_query($conn, $sql1);
        
        if($thanh_toan){
            $sql2="SELECT max(hoadon_id) from tbl_hoadon";
                $mahd = mysqli_query($conn, $sql2);
                $row1 = mysqli_fetch_array($mahd);

            $sql3 = "SELECT a.giohang_id,a.so_luong_cart,a.size,a.sanpham_id,b.dongia, b.hinhanh
            FROM `tbl_giohang` AS a JOIN `tbl_sanpham` AS b WHERE a.sanpham_id=b.sanpham_id AND a.nguoidung_id='".$id."'";

            # Thực thi câu lệnh truy vấn
            $giohang = mysqli_query($conn, $sql3);
            $y = 0;
            // echo (mysqli_fetch_array($giohang).length);
            // array = [sp1, sp2, sp3]
            // for (i < array.length) 
//  for($)
            # Hiển thị ra CSDL mà bạn vừa lấy được
            // $row2 = mysqli_fetch_array($giohang);
            // for($i=0;$i<=count($row2);++$i){
            //     echo (count($row2));
            //     $row2[$i][$y];
            //     $row2['thanhtien'] = $row2['so_luong_cart'] * $row2['dongia'];                
            //     $sql4= "INSERT INTO tbl_cthoadon( hoadon_id, sanpham_id,  soluong, thanhtien,hinhanh) 
            //     VALUES ('".$row1['max(hoadon_id)']."','".$row2['sanpham_id']."', '".$row2['so_luong_cart']."','".$row2['thanhtien']."','".$row2['hinhanh']."')";
            // // echo ($sql4);
            //     $thanh_toan = mysqli_query($conn, $sql4);
            // }

            while ($row2 = mysqli_fetch_array($giohang))
                {
                    $y++;
                    $row2['thanhtien'] = $row2['so_luong_cart'] * $row2['dongia'];
                    $sql4= "INSERT INTO tbl_cthoadon( hoadon_id, sanpham_id,  soluong, thanhtien,hinhanh) 
                    VALUES ('".$row1['max(hoadon_id)']."','".$row2['sanpham_id']."', '".$row2['so_luong_cart']."','".$row2['thanhtien']."','".$row2['hinhanh']."')";
                // echo ($sql4);
                    $thanh_toan = mysqli_query($conn, $sql4);
                }

              
            // $sql5 = "SELECT * FROM tbl_hoadon join tbl_giaohang 
            // WHERE tbl_hoadon.giaohang_id=tbl_giaohang.giaohang_id";
            // $giaohang = mysqli_query($conn, $sql5);
            // $row3 = mysqli_fetch_array($giaohang);

            // $sqll="SELECT max(giaohang_id) from tbl_giaohang";
            // $max = mysqli_query($conn, $sqll);
            // $roww = mysqli_fetch_array($max);
            // // echo ($roww['max(giaohang_id)']);
            // $r3 = $roww['max(giaohang_id)'] + 1;

            $sql5 = "SELECT * FROM ";
            $sql6="INSERT INTO tbl_giaohang (giaohang_id, hoadon_id, nguoidung_id, loaigh_id) 
            VALUES('','".$row1['max(hoadon_id)']."','".$id."', '".$loaigiaohang_id."')";
            $van_chuyen = mysqli_query($conn, $sql6);


//làm tiếp từ đây, soi dữ liệu

            $sql8="INSERT INTO tbl_ctthanhtoan (thanhtoan_id, nguoidung_id, hoadon_id, tinhtrang_tt) 
            values('".$thanhtoan_id."','".$id."','".$row1['max(hoadon_id)']."', '0')";
            $thanhtoandon = mysqli_query($conn, $sql8);

          
        }
                                        
       // 5. Hiển thị ra thông báo bạn đã thêm mới tin tức thành công và đẩy về trang trang_chu.php
        $sql9="DELETE from tbl_giohang WHERE nguoidung_id='".$id."'";
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