<?php

require_once "../Config/Connectdb.php";
require_once "../Config/LinkAll.php";
include 'index.php';
// Get all products
$sql_get_all_product = "SELECT * FROM `tbl_sanpham`";
$data_product = executeQuery($sql_get_all_product,true) ?: [];
$count_prdoduct = count($data_product);

// Get all categoris
$sql_get_all_categories = "SELECT * FROM `tbl_loaisp`";
$data_categories = executeQuery($sql_get_all_categories,true) ?: [];
$count_categories = count($data_categories);

// Get all user
$sql_get_all_user = "SELECT * FROM `tbl_nguoidung`";
$data_user = executeQuery($sql_get_all_user,true) ?: [];
$count_user = count($data_user);

// Get all news
$sql_get_all_news = "SELECT * FROM `tbl_baiviet`";
$data_news = executeQuery($sql_get_all_news,true) ?: [];
$count_news = count($data_news);

// Get all money
$sql_get_all_money = "SELECT * FROM `tbl_cthoadon`";
$data_money = executeQuery($sql_get_all_money,true) ?: [];

$grantotal = 0;
foreach($data_money as $item => $value){
    $grantotal += $value['thanhtien'];
}


// Sql get new products
$sql_get_new_products = "SELECT * FROM `tbl_sanpham` ORDER BY ngay_tao DESC LIMIT 4";
$data_new_products = executeQuery($sql_get_new_products, true) ?: [];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê</title>

    <link rel="stylesheet" href="../publics/Css/statistics.css">
</head>

<body>
    <div class="main container">
        <div class="dashboard_page">             
            <div class="main_dashboard">
                <!-- <div class="chart">
                    <div class="title_chart">
                        <i class="fas fa-chart-line"></i>
                        <b>Thống kê</b>
                    </div>
                    <div class="list_item_chart">
                        <div class="item_chart col-2">
                            <i class="fas fa-cart-plus"></i>
                            <p><b>
                                 
                                // $count_prdoduct 
                                ?></b> Sản phẩm</p>
                        </div>
                        <div class="item_chart col-2">
                            <i class="fas fa-chart-bar"></i>
                            <p><b> $count_categories ?></b> Danh mục</p>
                        </div>
                        <div class="item_chart col-2">
                            <i class="fas fa-users"></i>
                            <p><b> $count_user ?></b> Người dùng</p>
                        </div>
                        <div class="item_chart col-2">
                            <i class="fas fa-dollar-sign"></i>
                            <p><b> product_price($grantotal) ?></b> Hóa đơn</p>
                        </div>
                        <div class="item_chart col-2">
                            <i class="fas fa-newspaper"></i>
                            <p><b> $count_news ?></b> Bài viết</p>
                        </div>
                    </div>
                </div> -->
                <div class="new_products">
                    <div class="title_new_products">
                        <i class="fab fa-opencart"></i>
                        <b>Sản phẩm mới</b>
                    </div>
                    <div class="list_new_products">
                        <table>
                            <thead>
                                <tr>
                                    <th class="col-1">Hình ảnh</th>
                                    <th class="col-2">Tên sản phẩm</th>
                                    <th class="col-2">Giá bán</th>
                                    <th class="col-6">Mô tả</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_new_products as $key => $value):?>
                                <tr>
                                    <td style="padding: 5px 0px;">
                                        <img style="border-radius: 10px;"
                                            src="https://cf.shopee.vn/file/f2b998739d8d1ad5ef2fabbcc7f393f9"
                                            width="100%" alt="">
                                    </td>
                                    <td><?= $value['tensp']?></td>
                                    <td><?= product_price($value['dongia'])?></td>
                                    <td class="desc_product"><?= $value['mota']?></td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>