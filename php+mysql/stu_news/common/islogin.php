<?php
session_start();
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}else{
    echo'<script>alert("请先登陆");location.href="login.php"</script>';
    exit();
}
?>