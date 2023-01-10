<?php 
require_once "./Config/Connectdb.php";
require_once "./Config/LinkAll.php";

// Sql get product order by count Desc
$sql_get_product = "SELECT * FROM `tbl_cthoadon` JOIN tbl_sanpham ON tbl_cthoadon.sanpham_id = tbl_sanpham.sanpham_id ORDER BY tbl_cthoadon.soluong DESC LIMIT 20";
$data_product = executeQuery($sql_get_product,true) ?: [];

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Báo cáo chi tiết</title>
    <link rel="stylesheet" href="../publics/Css/statement.css">
</head>

<body>

</body>
<div class="container statement">
    <h5>Báo cáo hàng tháng về sản phẩm bán chạy</h5>

    <table>
        <thead>
            <tr>
                <th class="col-2"><i>Tên sản phẩm</i></th>
                <th class="col-1"><i>Hình ảnh</i></th>
                <th class="col-2"><i>Số lượng bán ra</i></th>
                <th class="col-2"><i>Số lượng còn lại</i></th>
                <th class="col-2"><i>Đơn giá</i></th>
                <th class="col-3"><i>Thành tiền</i></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_product as $key => $value):?>
            <tr>
                <td><?= $value['tensp'] ?></td>
                <td><img src="https://cf.shopee.vn/file/af21a72af277c6a11e1a35995e07b505" width="100%" alt=""></td>
                <td><?= $value['soluong'] ?></td>
                <td><?= $value['so_luong'] - $value['soluong'] ?></td>
                <td><?= product_price($value['dongia']) ?></td>
                <td><?= product_price($value['dongia']*$value['soluong']) ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <a href="./dowload_statement.php">Tải báo cáo</a>
</div>

</html>