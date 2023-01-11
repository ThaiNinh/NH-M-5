<?php

require_once "../Config/Connectdb.php";
require_once "../Config/LinkAll.php";
include 'index.php';
?>

    <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">Sản Phẩm ID</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Đơn giá</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Trạng thái sản phẩm</th>
                                    <th scope="col">Loại sản phẩm</th>
                                    <th scope="col">Ngày tạo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // var_dump($_GET);exit;
                                $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:4;
                                $current_page = !empty($_GET['page'])?$_GET['page']: 1;
                                $offset = ($current_page - 1) * $item_per_page;
                                
                                $products=mysqli_query($conn,"SELECT * FROM `tbl_sanpham` order by 'sanpham_id' asc limit ".$item_per_page." offset ".$offset." ");
                                $totalRecords = mysqli_query($conn, "SELECT * FROM `tbl_sanpham`");
                                $totalRecords = $totalRecords->num_rows;
                                // var_dump($totalRecords);exit;
                                $totalPages = ceil($totalRecords / $item_per_page);



                                // $query= mysqli_query($conn, $sql);
                                
                                ?>
                                <?php while($row_sp = mysqli_fetch_array($products)){ ?>
                                <tr>
                                    <td><?php echo $row_sp['sanpham_id']?></td>
                                    <td><?php echo $row_sp['tensp']?></td>
                                    <td><img src="../img/<?= $row_sp['hinhanh']?>" width="100%" alt=""></td>
                                    <td><?php echo $row_sp['mota']?></td>
                                    <td><?php echo $row_sp['dongia']?></td>
                                    <td><?php echo $row_sp['so_luong']?></td>
                                    <td><?php echo $row_sp['trangthaisp']?></td>
                                    <td><?php echo $row_sp['loaisp_id']?></td>
                                    <td><?php echo $row_sp['ngay_tao']?></td>
                                    <td>
                                    <button type="button" class="btn btn-primary ms-2 mr-2" name="update">
                                        <a href="suasp.php?id=<php echo $row_sp['sanpham_id']?>" class="text-light">Sửa</a>
                                    </button>
                                    <button type="button" class="btn btn-primary mt-2 ms-2 mr-2" name="delete">
                                        <a href="xoasp.php?id=<php echo $row_sp['sanpham_id']?>" class="text-light">Xóa</a>
                                    </button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <?php
                        include('page.php');
                        ?>
                    </div>
                </div>
            </div>
            <div class="container-fluid align-middle pt-4 px-4">
                <button type="button" class="btn btn-primary ms-2 mr-2 name=" name="insert">
                    <a href="themsp.php" class="text-light">Thêm</a>
                </button>
            </div>