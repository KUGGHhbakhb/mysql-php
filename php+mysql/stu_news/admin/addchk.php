<?php
header('content-type:text/html;charset=utf-8');
 include_once('../conn/conn.php');
 include_once('../common/islogin.php');
 include_once('../common/function.php');
 date_default_timezone_set('PRC');
 extract($_POST);
 $title = mysqli_query($link,"select * from news where news_title = '$news_title'");
 if(mysqli_fetch_assoc($title)){
     echo '<script>alert("新闻标题已经存在");location.href="add.php";</script>';
	 exit();
 }
 $news_createtime = $news_updatetime = date('Y-m-d H:i:s');
 if(isset($_FILES['news_thumb'])){
   $save = '../upload/thumb/' . $_FILES['news_thumb']['name'];
   //move_uploaded_file($_FILES['news_thumb']['tmp_name'],$save);
   uploadimg($_FILES['news_thumb'],$save);
   thumb($save,$save,100);
   $news_thumb = $save;
 }$res = mysqli_query($link,"insert into news values('null','$category','$news_title','$news_thumb','$news_intr','$news_content','$news_createtime','$news_updatetime','$username')");
 if($res){
     echo '<script>alert("添加新闻成功");location.href="add.php";</script>';
 }else{
     echo '<script>alert("添加新闻失败'.mysqli_error($link).'");location.href="add.php";</script>';
 }
?>