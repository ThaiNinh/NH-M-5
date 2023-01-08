<?php 
require_once "../Config/Connectdb.php";
require_once "../Config/LinkAll.php";
require_once "../PHPExcel-1.8/Classes/PHPExcel/IOFactory.php";

// Loại file cần ghi là file excel phiên bản 2007 trở đi
$fileType = 'Excel2007';
// Tên file cần ghi
$fileName = 'product_import.xlsx';

// Load file product_import.xlsx lên để tiến hành ghi file
$objPHPExcel = PHPExcel_IOFactory::load("product_import.xlsx");

// Giả sử chúng ta có mảng dữ liệu cần ghi như sau
$array_data = array(
					0 => array('name' => 'Hieu', 'email' => 'hieu@gmail.com', 'phone' => '0123456789', 'address' => 'address 1'),
					1 => array('name' => 'Nam', 'email' => 'nam@gmail.com', 'phone' => '0124567892', 'address' => 'address 2'),
					2 => array('name' => 'Tuan', 'email' => 'tuan@gmail.com', 'phone' => '09764346789', 'address' => 'address 3'),
					3 => array('name' => 'Mai', 'email' => 'mai@gmail.com', 'phone' => '09876543356', 'address' => 'address 4'),
					4 => array('name' => 'Thao', 'email' => 'thao@gmail.com', 'phone' => '0975458979', 'address' => 'address 5'),
				);

// Thiết lập tên các cột dữ liệu
$objPHPExcel->setActiveSheetIndex(0)
                            ->setCellValue('A1', "STT")
                            ->setCellValue('B1', "Name")
                            ->setCellValue('C1', "Email")
                            ->setCellValue('D1', "Phone")
                            ->setCellValue('E1', "Address");

// Lặp qua các dòng dữ liệu trong mảng $array_data và tiến hành ghi dữ liệu vào file excel
$i = 2;
foreach ($array_data as $value) {
	$objPHPExcel->setActiveSheetIndex(0)
								->setCellValue("A$i", "$i")
								->setCellValue("B$i", $value['name'])
	                            ->setCellValue("C$i", $value['email'])
	                            ->setCellValue("D$i", $value['phone'])
	                            ->setCellValue("E$i", $value['address']);
	$i++;
}
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $fileType);
// Tiến hành ghi file
$objWriter->save($fileName);

// $fileType = 'Excel2007';
// $fileName = 'bao_cao_doanh_thu.xlsx';

// $objPHPExcel = PHPExcel_IOFactory::load("bao_cao_doanh_thu.xlsx");

// // Sql get product order by count Desc
// $sql_get_product = "SELECT * FROM `tbl_cthoadon` JOIN tbl_sanpham ON tbl_cthoadon.sanpham_id = tbl_sanpham.sanpham_id ORDER BY tbl_cthoadon.soluong DESC LIMIT 20";
// $data_product = executeQuery($sql_get_product,true) ?: [];

// $objPHPExcel->setActiveSheetIndex(0)
//                             ->setCellValue('A1', "STT")
//                             ->setCellValue('B1', "Tên sản phẩm")
//                             ->setCellValue('C1', "Sản lượng bán ra")
//                             ->setCellValue('D1', "Số lượng còn lại")
//                             ->setCellValue('E1', "Đơn giá")
//                             ->setCellValue('F1', "Doanh thu");

// $key = 2;
// foreach ($data_product as $key => $value) {
// 	$objPHPExcel->setActiveSheetIndex(0)
// 		->setCellValue("A$key", "$key")
// 		->setCellValue("B$key", $value['tensp'])
// 	    ->setCellValue("C$key", $value['soluong'])
// 	    ->setCellValue("D$key", $value['so_luong'] - $value['soluong'])
// 	    ->setCellValue("E$key", $value['dongia'])
// 	    ->setCellValue("F$key", $value['dongia']*$value['soluong']);
// 	    $key++;
// }

// $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, $fileType);
// $objWriter->save($fileName);

?>