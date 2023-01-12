<?php
include 'index.php';
?>
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">Sản Phẩm ID</th>
                                    <th scope="col">Loại Sản Phẩm</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql="SELECT * FROM `tbl_loaisp`";
                                    $query= mysqli_query($conn, $sql);
                                
                                ?>
                                <?php while($row_loaisp = mysqli_fetch_array($query)){ ?>
                                <tr>
                                    <td><?php echo $row_loaisp['loaisp_id']?></td>
                                    <td><?php echo $row_loaisp['tenloaisp']?></td>
                                    <td><button type="button" class="btn btn-primary ms-2" name="update"><a href="ad-update.php?id=<?php echo $row_loaisp['loaisp_id']?>" class="text-light">Sửa</a></button>
                                    <button type="button" class="btn btn-primary ms-2 mr-2" name="delete"><a href="ad-delete.php?id=<?php echo $row_loaisp['loaisp_id']?>" class="text-light">Xóa</a></button></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-4 px-4"><button type="button" class="btn btn-primary ms-2 mr-2 name=" name="insert"><a href="ad-insert.php" class="text-light">Thêm</a></button></div>
            <!-- Recent Sales End -->


<?php
require_once("footer.php");
?>