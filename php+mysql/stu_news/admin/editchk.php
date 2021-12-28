<?php
 header('content-type:text/html;charset=utf-8');
 include_once('../conn/conn.php');
 include_once('../common/function.php');
 date_default_timezone_set('PRC');
 extract($_POST);
 $news = mysqli_query($link,"select * from news where news_id = '$news_id'");
 $news_res = mysqli_fetch_assoc($news);
 $old_title = $news_res['news_title'];
 if($old_title != $news_title){
   $res = mysqli_query($link,"select * from news where news_title = '$news_title'");
   if(mysqli_fetch_assoc($res)){
      echo '<script>alert("当前标题已经存在");location.href="edit.php";</script>';
   }
 }
 $news_updatetime = date('Y-m-d H:i:s');
 if($_FILES['news_thumb']['name']){
   $img = $news_res['news_thumb'];
   if(file_exists($img)){
      unlink($img);
   }
   $save = '../upload/thumb/' . $_FILES['news_thumb']['name'];
   uploadimg($_FILES['news_thumb'],$save);
   thumb($save,$save,100);
   $news_thumb = $save;
 }else{
     $news_thumb = $news_res['news_thumb'];
 }
 $result = mysqli_query($link,"update news set news_title='$news_title',category_id='$category',news_thumb='$news_thumb',news_intr='$news_intr',news_content='$news_content',news_updatetime='$news_updatetime' where news_id='$news_id'");
 if($result){
    echo'<script>alert("修改成功");location.href="list.php"</script>';
 }else{
    echo'<script>alert("修改失败 . '.mysqli_error($link).'");location.href="edit.php"</script>';
 }
?>