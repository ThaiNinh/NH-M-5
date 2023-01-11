<?php
require_once("./header.php");

require_once("./Config/Connectdb.php");
// require_once ("./Config/LinkAll.php");

$id = $_GET['id'];


// Sql lấy sản phẩm thông qua sanpham_id
$sql_get_product = "SELECT * FROM `tbl_sanpham` WHERE sanpham_id = $id";
$detail_product = executeQuery($sql_get_product, true);

foreach ($detail_product as $key => $value) {

    $id_category = $value['loaisp_id'];
}

// List product 
$sql_get_list_product = "SELECT * FROM `tbl_sanpham` WHERE loaisp_id = $id_category LIMIT 4";
$data_list_products = executeQuery($sql_get_list_product, true) ?: [];

// Sql lấy size theo sản phẩm
$sql_get_size = "SELECT * FROM `tbl_size` JOIN tbl_detail_san_pham ON tbl_detail_san_pham.id_size = tbl_size.size_id WHERE tbl_detail_san_pham.id_sp = $id";
$detail_size = executeQuery($sql_get_size, true) ?: [];

if (isset($_POST['btn_add_cart'])) {
    if (isset($_SESSION['id'])) {
        $count = $_POST['count_value'];
        $size = $_POST['size'];
        $id_user = $_SESSION['id'];
        $search_product = "SELECT * FROM `tbl_giohang` WHERE sanpham_id = $id AND size = $size AND nguoidung_id = $id_user";
        $product = executeQuery($search_product, false);

        if ($product) {
            $new_count = $product['so_luong_cart'] + $count;

            $sql_add_cart = "UPDATE `tbl_giohang` SET `so_luong_cart`='$new_count' WHERE `sanpham_id` = $id";
            executeQuery($sql_add_cart, true);
            echo ('
                <script>
                    alert("Thêm sản phẩm vào giỏ hàng thành công!")
                </script>
            ');
        } else {
            $sql_add_cart = "INSERT INTO `tbl_giohang`(`sanpham_id`, `so_luong_cart`, `nguoidung_id`, `size`) VALUES ('$id','$count', $id_user, '$size')";
            executeQuery($sql_add_cart, true);
            echo ('
                <script>
                    alert("Thêm sản phẩm vào giỏ hàng thành công!")
                </script>
            ');
        }
    } else if (!isset($_SESSION['id'])) {
        echo (' <Script>
        alert("Vui lòng đăng nhập trước khi mua hàng!")
        </Script>');
    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>

    <link rel="stylesheet" href="./publics/Css/detail_page.css">
</head>

<body>
    <div style="padding-top: 260px;" class="detail_page container">
        <div class="content">
            <div class="product">
                <?php foreach ($detail_product as $key => $value): ?>
                    <div class="img_product col-md-4 col-12">
                        <img src="./img/<?= $value['hinhanh'] ?>" width="100%" alt="">
                    </div>
                    <div class="desc_product col-md-7 col-12">
                        <title>Chi tiết sản phẩm</title>
                        <h4 class="name_product">
                            <?= $value['tensp'] ?>
                        </h4>
                        <p class="price_product"><?= product_price($value['dongia']) ?></p>
                        <div class="form">
                            <form action="" method="post">
                                <p>Size:</p>
                                <div class="size">
                                    <?php foreach ($detail_size as $key_size => $value_size): ?>
                                        <div class="item_size">
                                            <input checked value="<?= $value_size['size_id'] ?>" name="size" type="radio">
                                            <?= $value_size['so_size'] ?>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                                <div class="count">
                                    <p>Số lượng:</p>
                                    <input name="count_value" type="number" min="1" value="1">
                                </div>
                                <div class="list_button">
                                    <button name="btn_add_cart">Thêm vào giỏ hàng</button>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div style="padding: 10px 0px;" class="desc col-12">
                        <p style="font-weight: 700;margin: 5px 0px;">Mô tả:</p>
                        <p style="font-weight: 300;" class="desc">
                            <?= $value['mota'] ?>
                        </p>
                    </div>
                <?php endforeach ?>
            </div>

            <h5>Sản phẩm tương tự</h5>
            <!-- Sản phẩm tương tự -->
            <div class="list_product">
                <?php foreach ($data_list_products as $keylist => $valuelist): ?>
                    <div class="item_product col-md-3 col-6">
                        <div class="img_item">
                            <img src="./img/<?= $valuelist['hinhanh'] ?>" width="100%" alt="">
                        </div>
                        <div class="desc_item">
                            <b>
                                <a href="./Detail_product.php?id=<?= $value['sanpham_id'] ?>">
                                    <?= $valuelist['tensp'] ?>
                                </a>
                            </b>
                            <p class="price">
                                <?= product_price($valuelist['dongia']) ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>


</body>

</html>
<?php require_once("footer.php") ?>