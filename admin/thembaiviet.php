<?php
include 'config.php';
$_SESSION['name'];
$_SESSION['type'];
if($_SESSION['type'] == 1){
    echo 'Không làm admin đòi vào à?';
    die();
}
if(isset($_POST['tenbaiviet'])){
    $tenbaiviet=$_POST['tenbaiviet'];
    $tomtat=$_POST['tomtat'];
    $noidung=$_POST['noidung'];
    $hinhanh=$_FILES['hinhanh']['name'];
    $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
    
    $hinhanh=time().'_'.$hinhanh;
    $danhmuc=$_POST['dmtin_id'];

    $sql = "INSERT INTO `tbl_baiviet`(`tenbaiviet`,`tomtat`,`noidung_bv`,`anh`,`dmtin_id`,`ngaydang`) VALUES ('$tenbaiviet','$tomtat','$noidung','$hinhanh','$danhmuc',current_timestamp())";
    $query = mysqli_query($conn, $sql);
    move_uploaded_file($hinhanh_tmp, 'admin/img/'.$hinhanh);
    if($query){
        header("location: lietkebaiviet.php");
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
    

    <table border="1" width="100%" style="border-collapse: collapse;">
        <form method="post"  enctype="multipart/form-data">
        <tr>
            <td>Tên bài viết:</td>
            <td><input type="text" placeholder="Tên bài viết" name="tenbaiviet"></td>
        </tr>
        <tr>
            <td>Tóm tắt:</td>
           <td><textarea type="row=10" style="resize: none" placeholder="Tóm tắt" name="tomtat"></textarea></td>
        </tr>
        <tr>
            <td>Nội Dung</td>
           <td><textarea type="row=10" style="resize: none" placeholder="Nội dung" name="noidung"></textarea></td>
        </tr>
        <tr>
            <td>Hình ảnh:</td>
           <td><input type="file" class="bg-light text-center rounded p-4" placeholder="Hình ảnh" name="hinhanh"></td>
        </tr>
        <tr>
            <td>Danh mục bài viết</td>
            <td>
                                             <?php
                                                $sql_danhmuctin = "SELECT * FROM tbl_dmtin";
                                                $danhmuctin = $conn -> query($sql_danhmuctin); 
                                            ?>
                                            

                                            <div class="form-floating mb-3">
                                                <b>Chọn danh mục tin</b>
                                                <br>
                                                <select name="dmtin_id">
                                                    <?php while ($row_danhmuctin=$danhmuctin->fetch_assoc()) {?>
                                                    <option value="<?php echo $row_danhmuctin['dmtin_id'];?>">

                                                        <?php echo $row_danhmuctin['tendm']; ?>
                                                        
                                                    </option>
                                                    <?php } ?>
                                                </select>   

                                                
                
            </td>
            <tr>

            </tr>

        </tr>
        <div class="container-fluid pt-4 px-4">
        
            <div class="bg-light text-center rounded p-4">
                
                <button type="submit" class="btn btn-primary ms-2 mr-2" id="submitBtn">Cập Nhật</button></td>
            </div>
      
    </div>


        </form>
    </table>

</body>
