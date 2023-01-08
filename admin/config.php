<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'xustorem');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
?>