<?php
require_once "../Config/Connectdb.php";
require_once "../Config/LinkAll.php";
include 'index.php';
?>
<?php
$sql= "SELECT * FROM tbl_loaisp";
$sql_loaisp = mysqli_query($conn, $sql);
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <div class="card-body">
        <?php
                if(isset($_GET['sanpham_id'])){
                        $id = $_GET['sanpham_id'];
                        $sql = "SELECT*FROM `tbl_sanpham` WHERE `sanpham_id` = '$id'";
                        $query = mysqli_query($conn, $sql);
                        while($sp = mysqli_fetch_array($query)){
                    ?>
            <form method="POST" enctype="multipart/form-data" action="thsuasp.php">
                <input type ="hidden" name ="sanpham_id" value ="<?php echo $id;?>" id="">
                <div class="form-group">
                    <label for="">Tên sản phẩm </label>
                    <input type="text" name="tensp" class="form-control" value="<?php echo $sp['tensp'];?>" required >
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm </label><br>
                    <input type="file" name="hinhanh">
                </div>
                <div class="form-group">
                    <label for="">Mô tả </label>
                    <input type="text" name="mota" class="form-control" value="<?php echo $sp['mota'];?>" required>
                </div>
                <div class="form-group">
                    <label for="">Đơn giá </label>
                    <input type="number" name="dongia" class="form-control" value="<?php echo $sp['dongia'];?>">
                </div>
                <div class="form-group">
                    <label for="">Số lượng</label>
                    <input type="number" name="so_luong" class="form-control" value="<?php echo $sp['so_luong'];?>">
                </div>
                <div class="form-group">
                    <label for="">Trạng thái sản phẩm</label>
                    <input type="number" name="trangthaisp" class="form-control" value="<?php echo $sp['trangthaisp'];?>">
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
                    <input type="datetime" name="ngay_tao" class="form-control"value="<?php echo $sp['ngay_tao'];?>">
                </div>
                <div class="form-group">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                      <input name="submit" class="btn btn-success" type="submit" value="Lưu" />
                    </div>
                </div>
            </form>
            <?php
                    } 
                }
                    ?>
        </div>
    </div>

</div>
<?php
require_once("footer.php");
?>