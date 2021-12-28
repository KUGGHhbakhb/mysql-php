<?php
include_once('../conn/conn.php');
include_once('../common/islogin.php');
extract($_POST);
$res = mysqli_query($link,"update user set password = '$password' ,email = '$email' where username = '$username'");
if($res){
     echo'<script>alert("修改成功");location.href="update.php";</script>';
}else{
     echo'<script>alert("修改失败");location.href="update.php";</script>';
}
?>