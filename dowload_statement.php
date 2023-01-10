<?php 
require_once "./Config/Connectdb.php";
require_once "./Config/LinkAll.php";
require_once "./PHPExcel-1.8/PHPExcel.php";

// Sql get product order by count Desc
$sql_get_product = "SELECT * FROM `tbl_cthoadon` JOIN tbl_sanpham ON tbl_cthoadon.sanpham_id = tbl_sanpham.sanpham_id ORDER BY tbl_cthoadon.soluong DESC LIMIT 20";
$data_product = executeQuery($sql_get_product,true) ?: [];


// Code đẩy vào excel
$excel = new PHPExcel();

$excel->setActiveSheetIndex(0);

$excel->getActiveSheet()->setTitle("Báo cáo doanh thu");

$excel->getActiveSheet()->setCellValue("A1","Tên sản phẩm");

$index = 2;

foreach ($data_product as  $value) {
	$excel->getActiveSheet()->setCellValue("A$index", "test");
	$index++;
}

header('Content-type:application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="bao_cao_doanh_thu'.time().'.xls"');
header("Pragma: no-cache");
header("Expires: 0");
PHPExcel_IOFactory::createWriter($excel,'Excel2007')->save('php://output');


?>