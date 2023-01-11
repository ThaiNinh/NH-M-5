 <?php 
include 'index.php';
  ?>

            <!-- Sales Chart Start -->
            <!-- Sales Chart End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Dữ Liệu</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">Tên bài viết</th>
                                    <th scope="col">Tóm tắt</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">Ngày Đăng</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql="SELECT * FROM `tbl_baiviet` AS a JOIN `tbl_dmtin` AS b ON a.dmtin_id=b.dmtin_id ";
                                    $query= mysqli_query($conn, $sql);
                                
                                ?>
                                <?php while($row_baiviet = mysqli_fetch_array($query)){ ?>
                                <tr>
                                    <td><?php echo $row_baiviet['tenbaiviet']?></td>
                                    <td><?php echo $row_baiviet['tomtat']?></td>
                                    <td><img src="admin/img/<?=$row_baiviet['anh']?>" ></td>
                                    <td><?php echo $row_baiviet['tendm']?></td>
                                     <td><?php echo $row_baiviet['ngaydang']?></td>
                                    <td><button type="button" class="btn btn-primary ms-2" name="update"><a href="suabaiviet.php?id=<?php echo $row_baiviet['baiviet_id']?>" class="text-light">Sửa</a></button>
                                    <button type="button" class="btn btn-primary ms-2 mr-2" name="delete"><a href="xoabaiviet.php?id=<?php echo $row_baiviet['baiviet_id']?>" class="text-light">Xóa</a></button></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-4 px-4"><button type="button" class="btn btn-primary ms-2 mr-2 name=" name="them"><a href="thembaiviet.php" class="text-light">Thêm</a></button></div>
            <!-- Recent Sales End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>