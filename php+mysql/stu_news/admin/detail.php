<!doctype html>
<?php
    header('content-type:text/html;charset=utf-8');
	include_once('../conn/conn.php');
	$id = isset($_GET['id']) ? $_GET['id'] : 1;
	$res = mysqli_query($link,'select * from news where news_id = ' . $id);
	$row = mysqli_fetch_assoc($res);
	if(!$row){
	    echo '查询不到该新闻信息';
		exit();
	}
 ?>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" type="text/css" href="../css/common.css">
  <style>
	   #news{
	       overflow:hidden;
	   }
  </style>
  <title><?=$row['news_title'];?></title>
 </head>
 <body>
  <div id="container">
  <?php
     include_once('../common/islogin.php');
	 include_once('../common/header.html');
	 include_once('../common/left.html');
  ?>
  <div id="centent">
       <div id ="news">
	        <table>
			    <tr>
				    <td><h2><?=$row['news_title'];?></h2></td>
				</tr>
				<tr>
				    <td>新闻发布者：<?=$row['username'];?>&nbsp;&nbsp;新闻发布时间：<?=$row['news_createtime']?></td>
				</tr>
				<tr>
				    <td><?=$row['news_content'];?></td>
				</tr>
			</table>
	   </div>
  </div>
  <?php
       include_once('../common/footer.html');
  ?>
  </div>
 </body>
</html>
