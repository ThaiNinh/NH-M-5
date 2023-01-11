<?php
include 'config.php';
$_SESSION['name'];
$_SESSION['type'];
if($_SESSION['type'] == 1){
    echo 'Không làm admin đòi vào à?';
    die();
}
$id = $_GET['id'];
if(isset($_POST['tendm'])){

    $tendm = $_POST['tendm'];
    $sql = "UPDATE `tbl_dmtin` SET `tendm`='$tendm' WHERE dmtin_id='$id'";
    $query = mysqli_query($conn, $sql);
    if($query){
    header("location: lietkedmtin.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
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
    <div class="container-fluid pt-4 px-4">
        <form method="post">
            <div class="bg-light text-center rounded p-4">
                <input type="text" class="bg-light text-center rounded p-4" placeholder="Tên danh mục tin tức" name="tendm">
                <button type="submit" class="btn btn-primary ms-2 mr-2" id="submitBtn">Sửa</button></td>
            </div>
        </form>
    </div>
</body>