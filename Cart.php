<?php
require_once ("./header.php");
require_once "./Config/Connectdb.php";
require_once "./Config/LinkAll.php";

$id_user = $_GET['user'];

// Sql get cart by user_Id
$sql_get_cart = "SELECT * FROM `tbl_giohang` JOIN tbl_sanpham ON tbl_sanpham.sanpham_id = tbl_giohang.sanpham_id  JOIN tbl_size ON tbl_giohang.size = tbl_size.size_id WHERE nguoidung_id = $id_user";
$data_cart = executeQuery($sql_get_cart, true) ?: [];



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>

    <link rel="stylesheet" href="./publics/Css/cart_page.css">
</head>

<body>
    <div class="main container" style="padding-top: 250px;" id="app">
        <table>
            <thead>
                <th class="col-1">Hình ảnh</th>
                <th class="col-3">Tên sản phẩm</th>
                <th class="col-3">Giá tiền</th>
                <th class="col-1">Số lượng</th>
                <th class="col-1">Size</th>
                <th class="col-3">Thành tiền</th>
                <th></th>
            </thead>
            <tbody>
                <tr v-for="item in data_carts">
                    <td>
                        <img style="border-radius: 10px;"
                            src="https://salt.tikicdn.com/cache/w1200/ts/product/9f/1e/dd/2dadaa50a6928d2146624ea92a3af13f.jpg"
                            width="100%" alt="">
                    </td>
                    <td>
                        <a>{{ item.tensp }}</a>
                    </td>
                    <td class="price">{{ formatCash(item.dongia) }}</td>
                    <td>
                        <input style=" width: 60px;height: 25px; outline: none;" name="count_value" class="count"
                            type="number" min="1"
                            @input="syncCart(item.giohang_id, item.sanpham_id, item.so_luong_cart)"
                            v-model="item.so_luong_cart">
                    </td>
                    <td>
                        {{ item.so_size }}
                    </td>
                    <td class="amount_all">
                        {{ formatCash(item.dongia * item.so_luong_cart) }}
                    </td>
                    <td>
                        <button>
                            <a :href='"./Remove_pr_cart.php?id=" + item.sanpham_id + "&size=" + item.size'>
                                <i class="fas fa-trash"></i>
                            </a>
                        </button>
                    </td>
                </tr>
                <tr style="border-top: 1px solid black;padding: 10px 0px;">
                    <td style="text-align: left;" colspan="4">Tổng thành tiền:</td>
                    <td style="text-align: center;" colspan="">{{ formatCash(totalCart) }}</td>
                </tr>
            </tbody>
        </table>
        <button @click="handlePayment()">Thanh toán</button>
    </div>


    <script src="./eshopper-1.0.0/js/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.2/axios.min.js"
        integrity="sha512-QTnb9BQkG4fBYIt9JGvYmxPpd6TBeKp6lsUrtiVQsrJ9sb33Bn9s0wMQO9qVBFbPX3xHRAsBHvXlcsrnJjExjg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    const DATA_RENDER = <?php echo json_encode($data_cart); ?>;
    let app = new Vue({
        el: "#app",
        data: {
            data_carts: DATA_RENDER,
            totalCart: DATA_RENDER.reduce(function(sum, item) {
                return sum += (item.dongia * item.so_luong_cart);
            }, 0),
        },
        watch: {
            data_carts: {
                handler(val) {
                    let total = app.data_carts.reduce(function(sum, item) {
                        return sum += (item.dongia * item.so_luong_cart);
                    }, 0);
                    app.totalCart = total;
                },
                deep: true
            }
        },
        methods: {
            formatCash(str) {
                return str.toLocaleString('vn', {
                    currency: 'VND',
                });
            },
            handlePayment() {
                localStorage.setItem('cart', JSON.stringify(app.data_carts));
            },
            syncCart(giohang_id, idSP, qty) {
                axios.get('./UpdateCart.php', {
                    params: {
                        giohang_id,
                        idSP,
                        qty,
                        update_cart: true
                    }
                });
            }
        }
    })
    </script>
</body>

</html>