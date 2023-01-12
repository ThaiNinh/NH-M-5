<?php
require 'config.php';
if(isset($_POST['update'])){
    $id = $_SESSION['id'];
    $name = $_POST['name'];
    $email = $_POST['email']; 
    $sdt = $_POST['phone'];
    $bday = $_POST['bday'];
    $diachi = $_POST['diachi'];
    $sql = "UPDATE `tbl_nguoidung` SET `ten_nd`='$name',`sdt`='$sdt',`diachi`='$diachi',`email`='$email',`ngaysinh`='$bday' WHERE `nguoidung_id` ='$id'";
    $query = mysqli_query($conn, $sql);
    header('location: userprofile.php');
}
if(isset($_POST['change_password'])){
    $id = $_SESSION['id'];
    $currentPassword=md5($_POST['currentPassword']); 
    $newPassword=md5($_POST['newPassword']);  
    $passwordConfirm=md5($_POST['passwordConfirm']); 
    $sql="SELECT `password` from `tbl_nguoidung` where `nguoidung_id`='$id'";
    $res = mysqli_query($conn,$sql);
    $res=mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
        if($currentPassword == $row['password']){
        if($passwordConfirm ==''){
            $error[] = 'Vui Lòng Nhập Mật Khẩu';
        }
        if($newPassword != $passwordConfirm){
            $error[] = 'Xác Nhận Mật Khẩu Sai';
        }
   if(!isset($error))
   {
        $result = mysqli_query($conn,"UPDATE `tbl_nguoidung` SET `password`='$newPassword' WHERE nguoidung_id='$id'");
        if($result){
            header("location: logout.php");
        }
        else {
            $error[]='Something went wrong';
        }
   }
   
    } 
    else{
        $error[]='Current password does not match.'; 
    }   
    }
    if(isset($error)){ 
   foreach($error as $error){ 
     echo '<p class="errmsg">'.$error.'</p>'; 
   }
   }   
?>