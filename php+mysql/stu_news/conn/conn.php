<?php
$link = mysqli_connect('127.0.0.1','root','root','web','3306') or die ('数据库连接失败' . mysqli_error);
mysqli_query($link,'set names utf-8');
?>