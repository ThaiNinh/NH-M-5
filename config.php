<!-- dùng trên web thường -->
<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'xustorem');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
?>
<!-- dùng trên 000webhost -->
<!-- <php
$conn = mysqli_connect("localhost","id19453870_root","sDG>Ape}77T_@)NZ","id19453870_nhom11_htnl");
?> -->