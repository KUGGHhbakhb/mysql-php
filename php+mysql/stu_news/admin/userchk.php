<?php
include_once('../conn/conn.php');
if(isset($_GET['id'])){
   $id = $_GET['id'];
   $res = mysqli_query($link,"delete from user where user_id=" . $id);
   if($res){
      echo '<script>alert("撤销管理员身份成功");location.href="user.php";</script>';
   }else{
      echo'<script>alert("撤销管理员身份失败");location.href="user.php";</script>'
   }
}
?>