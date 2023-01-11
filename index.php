<?php
	require("header.php");
	require("./Config/Connectdb.php");

	// Get 8 products
	$sql_get_products = "SELECT * FROM `tbl_sanpham` LIMIT 8";
	$data_product = executeQuery($sql_get_products,true) ?: [];

	
?>

<section class="s1 row-fluid pb-0" id="s1">
    <div class="slide-container active">
        <div class="slide justify-content-center align-content-center">
            <div class="content col-5 ">
                <span>Giày Nam</span>
                <h3>Giày Nike</h3>
            </div>
            <div class="image col-6">
                <img src="img/slide/1.png" class="shoe" alt="">

            </div>
        </div>
    </div>

    <div class="slide-container ">
        <div class="slide justify-content-center align-content-center">
            <div class="content col-5">
                <span>Shoe 2</span>
                <h3>Shoessss</h3>
                <p>aaaaaaaaaaa </p>

            </div>
            <div class="image col-6">
                <img src="img/slide/2.png" class="shoe" alt="">

            </div>
        </div>
    </div>

    <div class="slide-container">
        <div class="slide justify-content-center align-content-center">
            <div class="content col-5">
                <span>Shoe 3</span>
                <h3>Shoessss</h3>
                <p>aaaaaaaaaaaaaaaaaaaaaa </p>

            </div>
            <div class="image col-6">
                <img src="img/slide/3.png" class="shoe" alt="">

            </div>
        </div>
    </div>

    <div class="slide-container">
        <div class="slide jjustify-content-center align-content-center">
            <div class="content col-5">
                <span>Shoe 4</span>
                <h3>Shoessss</h3>
                <p>aaaaaaaaaaaa </p>

            </div>
            <div class="image col-6">
                <img src="img/slide/4.png" class="shoe" alt="">

            </div>
        </div>
    </div>
    <div id="prev" class="fa-solid fa-chevron-left" onclick="prev();"></div>
    <div id="next" class="fa-solid fa-chevron-right" onclick="next();"></div>

</section>

<section id="loaisanpham">
    <h1 class="text-lg-center font-weight-light m-0 font-italic"
        style="font-size:3.5rem; color:#D19C97; letter-spacing: 1px;">LỰA CHỌN HÀNG ĐẦU CHO</h1>
    <div class="row px-xl-5">

        <div class="col-md-4 pb-4">
            <div class="cat-item d-flex flex-column border-1 mb-3">
                <a href="shop.php?loaisp_id=1" class="mx-auto d-block" style="text-decoration: none;">
                    <img src="https://i.pinimg.com/564x/4f/aa/f0/4faaf0790aa6e38a372cb57f5d731c6c.jpg" alt=""
                        class="img-fluid rounded" style="width:320px">
                    <h5 class="text-center font-weight-bold m-2" style="color:#D19C97;letter-spacing: 2px">NAM </h5>
                </a>
            </div>
        </div>

        <div class="col-md-4 pb-4">
            <div class="cat-item d-flex flex-column border-1 mb-3">
                <a href="shop.php?loaisp_id=2" class="mx-auto d-block" style="text-decoration: none;">
                    <img src="https://i.pinimg.com/564x/2e/27/30/2e2730667ec9f000187bd9bbcb073a7a.jpg" alt=""
                        class="img-fluid rounded" style="width:320px">
                    <h5 class="text-center font-weight-bold m-2" style="color:#D19C97; letter-spacing: 2px">NỮ </h5>
                </a>
            </div>
        </div>
        <div class="col-md-4 pb-4">
            <div class="cat-item d-flex flex-column border-1 mb-3">
                <a href="shop.php?loaisp_id=3" class="mx-auto d-block" style="text-decoration: none;">
                    <img src="https://i.pinimg.com/564x/9e/d0/18/9ed0180d96edbcd79e2f7ccca52a017f.jpg" alt=""
                        class="img-fluid rounded" style="width:360px">
                    <h5 class="text-center font-weight-bold m-2" style="color:#D19C97;letter-spacing: 2px">TRẺ EM </h5>
                </a>
            </div>
        </div>

    </div>
</section>

<section id="tintuc" class="m-0">
    <div class="row">
        <div class="col-12 col-xl-6">
            <div class="card-img">
                <a href="">
                    <img class="img-fluid" src="https://i.pinimg.com/564x/74/d7/66/74d7664f5fd9bad81e090c67848fd68e.jpg"
                        alt="">
                </a>
            </div>
            <div class="card-body">
                <a class="card-title" href="" style="font-family: futura-pt,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
				text-align: left; font-weight: 600; font-size: 20px; margin-top: 7px; color: #000;text-decoration:none">Xu hướng
                    mới: Những chiếc giày mùa đông</a>
                <p class="card-text" style="font-family: futura-pt,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
				text-align: left; font-size: 16px;">
                    <a class="" href="" style="text-decoration:none; color: #000">
                        Thể hiện sự năng động của bạn
                    </a>
                </p>
                <a class="card-link" href="" style="font-family: futura-pt,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
				text-align: left; font-weight: 600;text-decoration-line:underline"> SHOP NOW</a>
            </div>
        </div>
        <div class="col-12 col-xl-6">
            <div class="card-img">
                <a href="">
                    <img class="img-fluid" src="https://i.pinimg.com/564x/e4/d7/47/e4d7470d3ca19fedc9764c721bc4f2cd.jpg"
                        alt="">
                </a>
            </div>
            <div class="card-body">
                <a class="card-title" href="" style="font-family: futura-pt,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
				text-align: left; font-weight: 600; font-size: 20px; margin-top: 7px; color: #000;text-decoration:none">Xu hướng
                    mới: Những chiếc giày mùa đông</a>
                <p class="card-text" style="font-family: futura-pt,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
				text-align: left; font-size: 16px;">
                    <a class="" href="" style="text-decoration:none; color: #000">
                        Thể hiện sự năng động của bạn
                    </a>
                </p>
                <a class="card-link" href="" style="font-family: futura-pt,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;
				text-align: left; font-weight: 600;text-decoration-line:underline"> SHOP NOW</a>
            </div>
        </div>

    </div>
</section>
<section id="sanphammoi" class="m-0 pt-0">
    <hr class="line">
    <div>
        <h1 class="text-lg-center font-weight-light m-0 font-italic"
            style="font-size:3.5rem; color:#D19C97; letter-spacing: 1px;">SẢN PHẨM MỚI</h1>
    </div>
    <div class="row px-xl-5 pt-2 ">
        <!--  -->
        <?php foreach ($data_product as $key => $value):?>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="./img/<?= $value['hinhanh']?>" alt="">
                </div>
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3"><?= $value['tensp']?></h6>
                    <div class="d-flex justify-content-center">
                        <h6><?= product_price($value['dongia'])?></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center bg-light border">
                    <a href="./Detail_product.php?id=<?= $value['sanpham_id']?>" class="btn btn-sm text-dark p-0"><i
                            class="fas fa-eye text-primary mr-1"></i>Chi tiết</a>
                   
                </div>
            </div>
        </div>
        <?php endforeach ?>
        <!--  -->
    </div>
</section>
<?php
	require("footer.php");
?>