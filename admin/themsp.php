<?php

require_once "../Config/Connectdb.php";
require_once "../Config/LinkAll.php";
include 'index.php';
?>
<?php
$sql= "SELECT * FROM tbl_loaisp";
$sql_loaisp = mysqli_query($conn, $sql);
$sanpham = mysqli_query($conn, "select * from tbl_sanpham");

if(isset($_POST['submit'])){

    
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


    $sql = "INSERT INTO `tbl_sanpham`(`sanpham_id`, `tensp`, `hinhanh`, `mota`, `dongia`, `so_luong`, `trangthaisp`, `loaisp_id`, `ngay_tao`)
     VALUES ('','" . $tensp . "','" . $file_name . "','" . $mota . "','" . $gia . "','" . $soluong . "','" . $trangthai . "','" . $loaisp . "',current_timestamp())";
    $query = mysqli_query($conn, $sql);

    if($query){
        // header('location: dssanpham.php');
        echo "<script>window.alert('Thêm thành công');</script>";
        echo "<script>window.location.href='dssanpham.php';</script>";
    }
    else {
        echo "lỗi";
    }
    
   
}
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm </label>
                    <input type="text" name="tensp" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm </label><br>
                    <input type="file" name="hinhanh" >
                </div>
                <div class="form-group">
                    <label for="">Mô tả </label>
                    <input type="text" name="mota" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Đơn giá </label>
                    <input type="number" name="dongia" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" name="so_luong" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Trạng thái sản phẩm</label>
                    <input type="number" name="trangthaisp" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Loại sản phẩm</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="loaisp_id">
                        <?php
                        while($row=mysqli_fetch_assoc($sql_loaisp)){?>
                            <option value="<?php echo $row['loaisp_id'];?>"><?php echo $row['tenloaisp'];?>
                        <?php }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Ngày tạo</label>
                    <input type="datetime" name="ngay_tao" class="form-control">
                </div>
                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                      <input name="submit" class="btn btn-success" type="submit" value="Lưu" />
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>