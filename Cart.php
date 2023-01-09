<?php
require_once "../Config/Connectdb.php";
require_once "../Config/LinkAll.php";

$id_user = $_GET['user'];

// Sql get cart by user_Id
$sql_get_cart = "SELECT * FROM `tbl_giohang` JOIN tbl_sanpham ON tbl_sanpham.sanpham_id = tbl_giohang.sanpham_id  JOIN tbl_size ON tbl_giohang.size = tbl_size.size_id WHERE id_user = $id_user";
$data_cart = executeQuery($sql_get_cart, true) ?: [];


$grantotal = 0;
foreach($data_cart as $item => $value){
    $grantotal += $value['dongia'] * $value['so_luong'];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>

    <link rel="stylesheet" href="../publics/Css/cart_page.css">
</head>

<body>
    <div class="main container">
        <table>
            <thead>
                <th class="col-1">Hình ảnh</th>
                <th class="col-3">Tên sản phẩm</th>
                <th class="col-3">Giá tiền</th>
                <th class="col-1">Số lượng</th>
                <th class="col-1">Size</th>
                <th class="col-3">Thành tiền</th>
                <th></th>
            </thead>
            <tbody>
                <?php foreach($data_cart as $item_cart => $value_cart): ?>
                <tr>
                    <td>
                        <!-- <img src="../../image_upload/<?= $value_cart['image'] ?>" width="100%" alt=""> -->
                        <img style="border-radius: 10px;"
                            src="https://salt.tikicdn.com/cache/w1200/ts/product/9f/1e/dd/2dadaa50a6928d2146624ea92a3af13f.jpg"
                            width="100%" alt="">
                    </td>
                    <td>
                        <a
                            href="./Deatail_product.php?id=<?= $value_cart['sanpham_id'] ?>"><?= $value_cart['tensp'] ?></a>
                    </td>
                    <td>
                        <?= product_price($value_cart['dongia']) ?>
                    </td>
                    <td>
                        <?= $value_cart['so_luong'] ?>
                    </td>
                    <td>
                        <?= $value_cart['so_size'] ?>
                    </td>
                    <td>
                        <?= product_price($value_cart['dongia'] * $value_cart['so_luong']) ?>
                    </td>
                    <td>
                        <button>
                            <a
                                href="./Remove_pr_cart.php?id=<?= $value_cart['sanpham_id']?>&size=<?= $value_cart['size']?>">
                                <i class="fas fa-trash"></i>
                            </a>
                        </button>
                    </td>
                </tr>
                <?php endforeach ?>
                <tr style="border-top: 1px solid black;padding: 10px 0px;">
                    <td style="text-align: left;" colspan="4">Tổng thành tiền:</td>
                    <td style="text-align: center;" colspan=""><?= product_price($grantotal) ?></td>
                </tr>
            </tbody>
        </table>
        <button><a href="./check_out.php">Thanh toán</a></button>
    </div>
</body>

</html>