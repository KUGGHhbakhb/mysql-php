<?php
include_once('../conn/conn.php');
header('content-type:text/html;charset=utf-8');
if(isset($_POST['username']) && isset($_POST['password'])){
     $username = $_POST['username'];
	 $password = $_POST['password'];
}
$res = mysqli_query($link,"select * from user where username = '$username' and password ='$password'");
if(mysqli_fetch_array($res)){
	session_start();
	$_SESSION['username'] = $username;
    echo'<script>alert("登录成功");location.href="index.php";</script>';
}else{
    echo '<script>alert("登录失败 用户名或密码错误");location.href"login.php";</script>';
}
?>