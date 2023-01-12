
<?php
    include 'index.php';
    // $id_nd =$_GET['nguoidung_id'];

    $sql="SELECT b.hoadon_id, a.ten_nd,a.diachi, a.email, a.sdt
	FROM tbl_nguoidung as a, tbl_hoadon as b
    WHERE  b.nguoidung_id=a.nguoidung_id and a.phanquyen=1 
    ORDER BY b.hoadon_id ";


// sql dưới lấy 1nguoidung
	// $sql_lietke_dh="SELECT c.giohang_id, b.ten_nd, b.diachi,b.email,b.sdt,a.ngaynhap FROM `tbl_hoadon` AS a JOIN `tbl_nguoidung` AS b 
	// ON a.nguoidung_id=b.nguoidung_id JOIN `tbl_giohang` AS c ON a.giaohang_id=c.giohang_id 
	// WHERE b.phanquyen=1 IN (SELECT DISTINCT giohang_id FROM `tbl_giohang`)"; 
    $query = mysqli_query($conn, $sql);

?>
    
<table class="mt-5 table-bordered" style="width: 100%" style="border-collapse: collapse;">
    <tr>
        <th>STT</th>
        <th>Mã hóa đơn</th>
        <th>Tên khách hàng</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Số điện thoại</th>
		<th>Quản lý</th>
        
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($query)){
        $i++;
    ?>
  
    <tr>
        <td><?php echo $i ?></td>
        <td name="hoadon_id"><?php echo $row['hoadon_id'] ?></td>
        <td><?php echo $row['ten_nd'] ?></td>
        <td><?php echo $row['diachi'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['sdt'] ?></td>
		<td>
			<a href="xemdonhang.php?hoadon_id=<?php echo $row['hoadon_id']?>"> Xem đơn hàng </a>
			<!--  echo $row['giohang_id'] -->
		</td>
        
    </tr>
    <?php
    } 
?>
</table>

<script>
	const dropdown =  document.querySelector('.dropdown-toggle');
	// dropdown.classList.toggle('active');

	dropdown.addEventListener('click',handleClick)

	function handleClick(){
		document.querySelector('.dropdown-menu').classList.toggle('active');
	}
let slides = document.querySelectorAll('.slide-container');
let index = 0;

function next(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}
</script>
</html>

<?php
require_once("footer.php");
?>