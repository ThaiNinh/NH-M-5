<!-- viết sql để thực hiện thanh toán - Đặt hàng -->
<?php
require("header.php");

// require_once "./Config/Connectdb.php";
// require_once "./Config/LinkAll.php";

// $id_user = $_GET['user'];


?>
<?php
ob_start();
if (!$_SESSION['name']) //??
{
    echo "
                <script type='text/javascript'>
                     alert('Bạn phải đăng nhập tài khoản để thanh toán !');
                </script>";

    echo "
                <script type='text/javascript'>
                     window.location.href='index.php?';
                   //   location.reload();
                </script>";
    exit();
}
?>

<section class="container-fluid bg-secondary">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px;">
        <h1 class="font-weight-semi-bold text-uppercase mt-5">Đơn hàng của bạn</h1>

    </div>
</section>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        table {
            width: 80%;
            margin-left: 60px;
            margin-right: 40px;
            margin-top: 50px;
            border: 1px solid;
        }

        th {
            background-color: #FA8072;
        }

        tr,
        td {
            border: 1px solid;
            text-align: center;
            color: ;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        ;

        .top-section {
            display: flex;
            justify-content: space-between;
            /* width: 80%; */
            max-width: unset !important;
        }

        .bottom-section {
            display: flex;
            /* width: 74%; */
            justify-content: space-between;
            max-width: unset !important;
        }

        .checkout-btn {
            text-align: center;
            padding-left: 0 !important;
        }

        .payment-methods {
            margin-bottom: 30px;
            padding: 30px;
            background: #ffffff;
            border-radius: 10px;
            margin-left: 3%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .shipping-methods {
            margin-left: 3%;
            margin-bottom: 30px;
            padding: 30px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .receiver-info input {
            /* width: 90%; */
        }

        .col-md-6,
        .col-md-12 {
            margin-bottom: 20px
        }

        .oder-info {
            border-radius: 10px;
            width: 100%;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .receiver-info-section {
            width: 70%;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

        }

        .checkout-btn input {
            background-color: #3e8eff;
            color: #FFF;
            padding: 11px 50px;
            border: 1px solid #3e8eff;
            border-radius: 15px;
            cursor: pointer;
            font-size: 18px;
            transition: ease-in-out 0.5s;

        }

        .checkout-btn input:hover {
            border: 1px solid #b29ddd;
            color: #FFF;
            background-color: #b29ddd;

        }

        h2 {
            text-transform: uppercase;
            font-size: 25px;
        }

        /* .checkout-btn input::placeholder{
           font-size: 18px
       } */
    </style>
</head>

<body>

    <div class="container py-xl-4 py-lg-2">
        <div class="checkout-right">
            <?php
            $id_user = $_SESSION['id'];
            //echo($id_user);
            //$id_user = $_GET['user']; JOIN tbl_size AS c ON a.size = c.size_id WHERE id_user = $id_user 
            // $sql_gh="SELECT b.hinhanh,b.tensp,b.dongia,a.so_luong_cart,a.size FROM `tbl_giohang` AS a 
            // JOIN `tbl_sanpham` AS b  ON a.sanpham_id=b.sanpham_id 
            // ORDER BY giohang_id DESC";
            $sql_gh = "SELECT * FROM `tbl_giohang` JOIN tbl_sanpham ON tbl_sanpham.sanpham_id = tbl_giohang.sanpham_id  
                        JOIN tbl_size ON tbl_giohang.size = tbl_size.size_id WHERE nguoidung_id = $id_user";
            $sql_lay_giohang = mysqli_query($conn, $sql_gh);
            ?>
            <div class="table-responsive">
                <form action="" method="POST">

                    <table class="timetable_sub" style="border-left: 1px solid black;">
                        <thead>
                            <tr>
                                <th>Thứ tự</th>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá tiền</th>
                                <th>Size</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 0;
                            $tongtien = 0;
                            while ($row = mysqli_fetch_array($sql_lay_giohang)) {
                                $thanhtien = $row['so_luong_cart'] * $row['dongia'];
                                $tongtien += $thanhtien;
                                $i++;
                                ?>
                                <tr class="rem1">
                                    <td class="invert">
                                        <?php echo $i ?>
                                    </td>
                                    <!-- <td class="invert-image">
                                                        <img src="images/<?php echo $row['hinhanh'] ?>" alt=" " class="img-responsive" style="height: 110px;object-fit: contain;">
                                                    </td> -->
                                    <td>
                                    <img class="img-fluid w-100" src="./img/<?php echo $row['sanpham_id']?>.jpg" alt="">
                                            
                                    </td>
                                    <td class="invert">
                                        <input type="number" min="1" name="so_luong_cart[]"
                                            value="<?php echo $row['so_luong_cart'] ?>" readonly="true">
                                    </td>
                                    <td class="invert">
                                        <?php echo $row['tensp'] ?>
                                    </td>
                                    <td class="invert"><?php echo number_format($row['dongia']) . 'vnd' ?></td>
                                    <td class="invert">
                                        <?php echo $row['size'] ?>
                                    </td>
                                    <td class="invert">
                                        <?php echo number_format($thanhtien) . 'vnd' ?>
                                    </td>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                            <tr>
                                <td class="total-price" style="text-align: center" colspan="7">Tổng tiền : <?php echo number_format($tongtien) . 'vnd' ?></td>

                            </tr>
                            <tr>
                                <td class="total-price" style="text-align: center;" colspan="7"><a href="Cart.php">Chỉnh
                                        sửa đơn hàng </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <body>
        <div class="contact-form d-flex justify-content-center mt-5">
            <div class="checkout-left checkout-inner receiver-info-section">
                <form method="POST" action="payup.php" enctype="multipart/form-data"
                    onsubmit="return kiem_tra_nhap_tt();">
                    <!-- <div name="sentMessage" id="contactForm" novalidate="novalidate" > -->
                    <div class="address_form_agile  ">
                        <div class="receiver-info">
                            <div class="billing-address">
                                <h2>Thông tin người nhận</h2>
                                <div class="control-group">
                                    <label for="hoten">Tên người nhận: </label>
                                    <input type="text" class="form-control" id="txtHovaten" name="txtHovaten"
                                        placeholder="Nhập tên" required="required"
                                        data-validation-required-message="Please enter your name" />

                                </div>
                                <div class="control-group">
                                    <label for="sdt">Số điện thoại: </label>
                                    <input type="text" class="form-control" id="txtSodienthoai" name="txtSodienthoai"
                                        placeholder="Số điện thoại" required="required"
                                        data-validation-required-message="Please enter your name" />

                                </div>
                                <div class="control-group">
                                    <label for="diachi">Địa chỉ: </label>
                                    <input type="text" class="form-control" id="txtDiachi" name="txtDiachi"
                                        placeholder="Số nhà - Phường/Xã - Quận/Huyện - Tỉnh/Thành phố"
                                        required="required" data-validation-required-message="Please enter your name" />

                                </div>
                                <!-- <div class="control-group">
                                <label for="vanchuyen">Hình thức vận chuyển: </label>
                                     //<input type="text" class="form-control" id="vanchuyen" placeholder="Hình thức vận chuyển"
                                    //required="required" data-validation-required-message="Please enter your name" />
                                <php
                                    $sql="SELECT giaohang_id, hinhthuc_gh,giacuoc FROM tbl_giaohang ORDER BY giaohang_id ASC";
                                    $giao_hang=mysqli_query($conn,$sql);
                                    $x=0;
                                    # Hiển thị ra CSDL mà bạn vừa lấy được
                                    while($row=mysqli_fetch_array($giao_hang)){
                                        $x++;
                                    
                                    ?>
                                    <div class="ship-method">  
                                        <div class="custom-group custom-radio">
                                            <input type="radio" class="ship-method-input" id="<php echo $row['giaohang_id'] ;?>" name="giaohang_id" value="<php echo $x ;?>" checked ="checked">
                                            <label class="ship-method-label" for="<hp echo $row['giaohang_id'] ;?>"><php echo $row['hinhthuc_gh'] ;?></label>
                                        </div>
                                        <div class="ship-content" id="<hp echo $row['giaohang_id'] ;?>">
                                            <p>Giá cước: <php echo $row['giacuoc'] ;?> VNĐ</p>
                                        </div>
                                    </div>
                                    <php 
                                    }
                                    
                                ?>
                                
                            </div> -->

                                <div class="control-group">
                                    <label for="ptthanhtoan">Hình thức giao hàng </label>
                                    <!-- //<input type="" class="form-control" id="ptthanhtoan" placeholder="Hình thức thanh toán"
                                    //required="required" data-validation-required-message="Please enter your name" />  -->
                                    <?php
                                    $sql_giaohang = "SELECT * FROM tbl_loaigh ORDER BY loaigh_id ASC";
                                    $giaohang = mysqli_query($conn, $sql_giaohang);
                                    $x = 0;
                                    while ($row = mysqli_fetch_array($giaohang)) {
                                        $x++;
                                        ?>
                                        <div class="ship-method">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="ship-method-input"
                                                    id="<?php echo $row['loaigh_id']; ?>" name="loaigh_id"
                                                    value="<?php echo $x; ?>" checked="checked">
                                                <label class="pay-method-label">
                                                    <?php echo $row['hinhthuc_gh']; ?>
                                                </label>
                                            </div>
                                            <div class="ship-content" id="<hp echo $row['loaigh_id'] ;?>">
                                                <p>Giá cước: <?php echo $row['giacuoc']; ?> VNĐ</p>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                </div>
                                <div class="control-group">
                                    <label for="ptthanhtoan">Hình thức thanh toán: </label>
                                    <!-- //<input type="" class="form-control" id="ptthanhtoan" placeholder="Hình thức thanh toán"
                                    //required="required" data-validation-required-message="Please enter your name" />  -->
                                    <?php
                                    $sql1 = "SELECT * FROM tbl_thanhtoan ORDER BY thanhtoan_id ASC";
                                    $thanh_toan = mysqli_query($conn, $sql1);
                                    $y = 0;
                                    while ($row = mysqli_fetch_array($thanh_toan)) {
                                        $y++;
                                        ?>
                                        <div class="payment-method">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="pay-method-input"
                                                    id="<?php echo $row['thanhtoan_id']; ?>" name="thanhtoan_id"
                                                    value="<?php echo $y; ?>" checked="checked">
                                                <label class="pay-method-label">
                                                    <?php echo $row['hinhthuc_tt']; ?>
                                                </label>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    # Đóng kết nối với CSDL
                                    mysqli_close($conn);
                                    ?>


                                </div>
                                <div class="control-group">
                                    <label for="ghichu">Ghi chú: </label><br>
                                    <textarea class="form-control" rows="4" id="txtGhichu" name="txtGhichu"
                                        placeholder="Ghi chú"
                                        data-validation-required-message="Please enter your message"></textarea>

                                </div>
                                <div>
                                    <button class="btn btn-primary py-2 px-4" type="submit">Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>



        <!-- Checkout End -->
        <script type="text/javascript">
            function kiem_tra_nhap_tt() {
                var hovaten = document.getElementById('txtHovaten').value;
                var sodienthoai = document.getElementById('txtSodienthoai').value;
                var diachi = document.getElementById('txtDiachi').value;
                var ghichu = document.getElementById('txtGhichu').value;
                var thanhtoan = document.getElementsByName('thanhtoan_id')

                // Kiểm tra nhập họ tên
                if (hovaten == '') {
                    alert('Bạn chưa nhập họ tên người nhận');
                    return false;
                }
                //Kiểm tra nhập sđt
                if (sodienthoai == '') {
                    alert('Bạn chưa nhập số điện thoại người nhận');
                    return false;
                }
                //Kiểm tra nhập địa chỉ
                if (diachi == '') {
                    alert('Bạn chưa nhập địa chỉ người nhận');
                    return false;
                }

                //Khi nhập đủ thông tin thì người dùng sẽ được chuyển đến trang thuc_hien_thanh_toan.php
                else {
                    return true;
                }
            }
        </script>
    </body>

</html>
<?php
require("footer.php");
?>