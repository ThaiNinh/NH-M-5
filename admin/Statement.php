<?php

require_once "../Config/Connectdb.php";
require_once "../Config/LinkAll.php";
include 'index.php';

// Sql get product order by count Desc
$sql_get_product = "SELECT sum(a.soluong),b.tensp,b.dongia FROM tbl_cthoadon a JOIN tbl_sanpham b ON a.sanpham_id = b.sanpham_id group BY a.sanpham_id order by count(a.soluong) DESC";
$data_product = executeQuery($sql_get_product, true) ?: [];

$grantotal = 0;
foreach ($data_product as $item => $value) {
    $grantotal += $value['dongia'] * $value['sum(a.soluong)'];
}


?>

    <style>
        table,
        th,
        td {
            border: 1px solid;
        }
    </style>

<div class="container statement" >
    <h3 style="text-align: center;padding: 15px 0px">Báo cáo hàng tháng về sản phẩm bán chạy</h3>

    <table id="tblData" style="text-align: center;">
        <thead>
            <tr>
                <th class="col-2"><i>Tên sản phẩm</i></th>
                <th class="col-2"><i>Số lượng sản phẩm bán ra</i></th>
                <th class="col-2"><i>Đơn giá</i></th>
                <th class="col-2"><i>Doanh thu</i></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_product as $key => $value): ?>
                <tr>
                    <td style="text-align: left;"><?= $value['tensp'] ?></td>
                    <td>
                        <?= $value['sum(a.soluong)'] ?>
                    </td>
                    <td style=" text-align: left;">
                        <?= product_price($value['dongia']) ?>
                    </td>
                    <td style="text-align: left;"><?= product_price($value['dongia'] * $value['sum(a.soluong)']) ?></td>
                </tr>
            <?php endforeach ?>
            <tr>
                <td class="col-2"><b>Tổng doanh thu:</b></td>
                <td style="text-align: right;" class="col-2" colspan=" 5"><b>
                        <?= product_price($grantotal) ?>
                    </b></td>
            </tr>
        </tbody>
    </table>

    <button style="border: none;
    border-radius: 5px;
    padding: 2px 10px;
    background-color: #b7b7b7;
    color: black;margin-top: 25px;" onclick="exportTableToExcel('tblData', 'Báo cáo doanh thu tháng')">Tải báo
        cáo</button>

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


<?php
require_once("footer.php");
?>