<?php
include 'config.php';
require_once "../Config/Connectdb.php";
require_once "../Config/LinkAll.php";
$admin = $_SESSION['name'];
$type = $_SESSION['type'];
if ($_SESSION['type'] == 1) {
    echo 'Không làm admin đòi vào à?';
    die();
}

// Get all products
$sql_get_all_product = "SELECT * FROM `tbl_sanpham`";
$data_product = executeQuery($sql_get_all_product, true) ?: [];
$count_prdoduct = count($data_product);

// Get all categoris
$sql_get_all_categories = "SELECT * FROM `tbl_loaisp`";
$data_categories = executeQuery($sql_get_all_categories, true) ?: [];
$count_categories = count($data_categories);

// Get all user
$sql_get_all_user = "SELECT * FROM `tbl_nguoidung`";
$data_user = executeQuery($sql_get_all_user, true) ?: [];
$count_user = count($data_user);

// Get all news
$sql_get_all_news = "SELECT * FROM `tbl_baiviet`";
$data_news = executeQuery($sql_get_all_news, true) ?: [];
$count_news = count($data_news);

// Get all money
$sql_get_all_money = "SELECT * FROM `tbl_cthoadon`";
$data_money = executeQuery($sql_get_all_money, true) ?: [];

$grantotal = 0;
foreach ($data_money as $item => $value) {
    $grantotal += $value['thanhtien'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="http://localhost/nhom5/admin/admin.php?">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <span>Admin</span>
                    </div>
                </div>

                <div class="navbar-nav w-100">
                    <a href="loaisp.php" class="nav-item nav-link "><i class="fa fa-laptop me-2"></i>Loại sản phẩm </a>
                    <a href="dssanpham.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Quản lý
                        sản phẩm </a>



                    <a href="statistics.php" class="nav-item nav-link "><i class="fa fa-th me-2"></i>Sản phẩm mới </a>
                    <a href="user.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Quản lý người
                        dùng </a>

                    <a href="Statement.php" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Báo cáo
                        chi tiết </a>
                    <a href="orderhis.php" class="nav-item nav-link "><i class="far fa-file-alt me-2"></i>Đơn đã thanh
                        toán </a>


                    <a href="lietkedmtin.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Danh mục bài
                        viết</a>

                    <a href="lietkebaiviet.php" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>Bài
                        viết</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p><b>
                                        <?= $count_user ?>
                                    </b> Người dùng</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p><b><?= $count_prdoduct ?></b> Sản phẩm</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p><b>
                                        <?= $count_categories ?>
                                    </b> Loại sản phẩm</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p><b>
                                        <?= product_price($grantotal) ?>
                                    </b> Doanh thu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Sale & Revenue End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Dữ Liệu</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên Người Dùng</th>
                                    <th scope="col">Số Điện Thoại</th>
                                    <th scope="col">Địa Chỉ</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Ngày Sinh</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($admin == 'admin') {
                                    $sql = "SELECT * FROM `tbl_nguoidung` WHERE `ten_nd` != 'admin' ";
                                    $query = mysqli_query($conn, $sql);
                                } else {
                                    $sql = "SELECT * FROM `tbl_nguoidung` WHERE `phanquyen` = 1 ";
                                    $query = mysqli_query($conn, $sql);

                                }
                                ?>
                                <?php while ($row_nguoidung = mysqli_fetch_array($query)) { ?>
                                    <tr>
                                        <th scope="col">
                                            <?php echo $row_nguoidung['nguoidung_id'] ?>
                                        </th>
                                        <th scope="col"><?php echo $row_nguoidung['ten_nd'] ?></th>
                                        <th scope="col">
                                            <?php echo $row_nguoidung['sdt'] ?>
                                        </th>
                                        <th scope="col"><?php echo $row_nguoidung['diachi'] ?></th>
                                        <th scope="col">
                                            <?php echo $row_nguoidung['email'] ?>
                                        </th>
                                        <th scope="col"><?php echo $row_nguoidung['ngaysinh'] ?></th>
                                        <?php if ($row_nguoidung['phanquyen'] == 0) { ?>
                                            <td><button type="button" class="btn btn-primary ms-2" name="delete"><a
                                                        href="del-user.php?id=<?php echo $row_nguoidung['nguoidung_id'] ?>"
                                                        class="text-light">Xóa</a></button>
                                                <button type="button" class="btn btn-primary ms-2 mr-2 mt-2" name="delete"><a
                                                        href="down-user.php?id=<?php echo $row_nguoidung['nguoidung_id'] ?>"
                                                        class="text-light">Tước Quyền</a></button>
                                            </td>
                                        <?php } ?>
                                        <?php if ($row_nguoidung['phanquyen'] == 1) { ?>
                                            <td><button type="button" class="btn btn-primary ms-2" name="delete"><a
                                                        href="del-user.php?id=<?php echo $row_nguoidung['nguoidung_id'] ?>"
                                                        class="text-light">Xóa</a></button>
                                                <button type="button" class="btn btn-primary ms-2 mr-2 mt-2" name="delete"><a
                                                        href="up-user.php?id=<?php echo $row_nguoidung['nguoidung_id'] ?>"
                                                        class="text-light">Trao Quyền</a></button>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            © <a href="#">XuStore</a>, Quản lý của Admin.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end ">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <a href="#">Nhóm 5</a>
                        </div>
                    </div>
                </div>
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