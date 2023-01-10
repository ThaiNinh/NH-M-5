<?php 
require_once "./header.php";
require_once "./Config/Connectdb.php";
require_once "./Config/LinkAll.php";

// Sql get product order by count Desc
$sql_get_product = "SELECT * FROM `tbl_cthoadon` JOIN tbl_sanpham ON tbl_cthoadon.sanpham_id = tbl_sanpham.sanpham_id ORDER BY tbl_cthoadon.soluong DESC LIMIT 20";
$data_product = executeQuery($sql_get_product,true) ?: [];

$grantotal = 0;
foreach($data_product as $item => $value){
    $grantotal += $value['dongia']*$value['soluong'];
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Báo cáo chi tiết</title>
    <link rel="stylesheet" href="../publics/Css/statement.css">
</head>

<body>

</body>
<div class="container statement" style="padding-top: 200px;">
    <h3 style="text-align: center;padding: 15px 0px">Báo cáo hàng tháng về sản phẩm bán chạy</h3>

    <table id="tblData" style="text-align: center;">
        <thead>
            <tr>
                <th class="col-2"><i>Tên sản phẩm</i></th>
                <th class="col-2"><i>Số lượng bán</i></th>
                <th class="col-2"><i>Tổng số lượng</i></th>
                <th class="col-2"><i>Đơn giá</i></th>
                <th class="col-2"><i>Doanh thu</i></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_product as $key => $value):?>
            <tr>
                <td style="text-align: left;"><?= $value['tensp'] ?></td>
                <td><?= $value['soluong'] ?></td>
                <td><?= $value['so_luong']  ?></td>
                <td style=" text-align: left;"><?= product_price($value['dongia']) ?></td>
                <td style="text-align: left;"><?= product_price($value['dongia']*$value['soluong']) ?></td>
            </tr>
            <?php endforeach ?>
            <tr>
                <td class="col-2"><b>Tổng doanh thu:</b></td>
                <td style="text-align: right;" class="col-2" colspan=" 5"><?= product_price($grantotal) ?></td>
            </tr>
        </tbody>
    </table>

    <button style="border: none;
    border-radius: 5px;
    padding: 2px 10px;
    background-color: #b7b7b7;
    color: black;" onclick="exportTableToExcel('tblData', 'Báo cáo doanh thu tháng')">Tải báo cáo</button>

    <script>
    function exportTableToExcel(tableID, filename = '') {
        var downloadLink;
        var dataType = 'application/vnd.ms-excel';
        var tableSelect = document.getElementById(tableID);
        var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

        // Specify file name
        filename = filename ? filename + '.xls' : 'excel_data.xls';

        // Create download link element
        downloadLink = document.createElement("a");

        document.body.appendChild(downloadLink);

        if (navigator.msSaveOrOpenBlob) {
            var blob = new Blob(['\ufeff', tableHTML], {
                type: dataType
            });
            navigator.msSaveOrOpenBlob(blob, filename);
        } else {
            // Create a link to the file
            downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

            // Setting the file name
            downloadLink.download = filename;

            //triggering the function
            downloadLink.click();
        }
    }
    </script>
</div>

</html>