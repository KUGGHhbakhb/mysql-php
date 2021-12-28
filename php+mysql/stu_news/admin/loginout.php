<?php
session_start();
$_SESSION = [];
session_destroy();
echo'<script>alert("退出系统");location.href="login.php";</script>';
?>