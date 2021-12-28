<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <link rel="stylesheet" type="text/css" href="../css/common.css">
  <style>
      table,tr,td,th{
	  border:solid #ddd 1px;
	  text-align:center;
	  border-collapse:collapse;
	  }
	  #news{
	  font-size:3pt;
	  text-align:center;
	  height:650px;
	  /*height: auto;*/
	  margin-top:30px;
	  }
	  .good{
	  background: #ddddcc;
	  clear:both;
	  height:80px;
	  }
	  .greed{
	  	color: green;
	  }
	  .size{
	  	font-size: 18px;
	  	color: pink;
	  	float: left;
	  	    margin: auto;
    position: relative;
    top: 0;
    left: 100px;
    right: 0;
    bottom: 0;
	  }
  </style>
  <title>新闻管理</title>
 </head>
 <body>
  <div >
  <?php
  include_once('../conn/conn.php');
  include_once('../common/islogin.php');
  include_once('../common/header.html');
  include_once('../common/left.html');
  ?>
  <div id="content">
  
      <div id="news">
	      <!--搜索框-->
		  <form name="search" method="get" action="">
		       <input type="text" name="searchword" maxlength="35" size="25">
			   <input type="submit" name="submit" value="搜索">
			   <a href="add.php"><span class="size">添加新闻</span></a>
		  </form><br>
	      <table align="center" width="80%">
		       <th>新闻id</th>
			   <th width="12.5%">新闻标题</th>
			   <th>缩略图</th>			   
			   <th>所属栏目</th>
			   <th width="20%">新闻简介</th>
			   <th>创建时间</th>
			   <th>修改时间</th>
			   <th>操作</th>
			   <?php
			   include_once('../conn/conn.php');
			   //对用户是否使用搜索的判断
			   $searchword = isset($_GET['searchword']) ? $_GET['searchword']: '';
			   $res = mysqli_query($link,"select * from news where news_title like '%$searchword%'");
			   while($row = mysqli_fetch_assoc($res)){
				   $cate = mysqli_query($link,"select * from category where category_id = " . $row['category_id']);
				   $cateres = mysqli_fetch_assoc($cate);
			       echo'<tr>';
				   echo'<td>'.$row['news_id'].'</td>';
				   $id = $row['news_id'];
				   echo '<td><a href="detail.php?id='.$id.'"><span class="greed">'.$row['news_title'].'</span></a></td>';
				   //echo'<td>'.$row['news_thumb'].'</td>';
				   $img = $row['news_thumb'];
				   echo "<td><img src='$img'></td>";
				   echo '<td>'.$cateres['category_name']. '</td>';
				   echo'<td>'.$row['news_intr'].'</td>';
				   echo'<td>'.$row['news_createtime'].'</td>';
				   echo'<td>'.$row['news_updatetime'].'</td>';
				   echo'<td>' . '<a href="edit.php?id='.$id.'"><span class="greed">修改</span></a>' . '/' . '<a href="del.php?id='.$id.'"><span class="greed">删除</span></a>'.'</td>';
				   echo'</tr>';
			   }
			   ?>
		  </table>
	  </div>

	<div class="good">
	<?php include_once('../common/footer.html');?>
	</div>
</div>
 </body>
</html>