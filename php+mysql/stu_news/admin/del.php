<?php
include_once('../conn/conn.php');
$id = $_GET['id'];
$res = mysqli_query($link,"select * from news where news_id = '$id'");
$row = mysqli_fetch_assoc($res);
$img = $row['news_thumb'];
if(file_exists($img)){
   unlink($img);
}
$del = mysqli_query($link,"delete from news where news_id = '$id'");
if($del){
     echo '<script>alert("删除成功");location.href="list.php";</script>';
}else{
     echo '<script>alert("删除失败.'.mysqli_error($link).'");location.href="list.php";</script>';
}
?>