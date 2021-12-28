<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/common.css">
  <style>
  		  .good{
	  background: #ddddcc;
	  clear:both;
	  height:80px;
	  /*width: auto;*/
	  }
	  		.ii{
    width: 500px;
    height: 100px;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
		}
  </style>
  <title>添加新闻</title>
 </head>
 <body>
  <div >
  <?php
     include_once('../common/islogin.php');
	 include_once('../common/header.html');
	 include_once('../common/left.html');
  ?>
    <div class="ii">
	     <form name="add" method="post" action="addchk.php" enctype="multipart/form-data">
		       <table class="ii">
			          <tr>
					      <td>新闻标题：</td><td><input type="text" name="news_title"></td>
					  </tr>
					  <tr>
					      <td>所属栏目：</td>
						  <td>
						      <select name="category">
							  <?php
							      include_once('../conn/conn.php');
								  $res = mysqli_query($link,"select * from category");
								  while($row = mysqli_fetch_assoc($res)){
								      $cate_id = $row['category_id'];
									  echo "<option value='$cate_id'>" . $row['category_name'] . "</option>";
								  }
							  ?>
							   </select>
						  </td>
					  </tr>
					  <tr>
					      <td>新闻缩略图：</td><td><input type="file" name="news_thumb"></td>
					  </tr>
					  <tr>
					      <td>新闻简介：</td><td><textarea name="news_intr" rows="5" cols="40"></textarea></td>
					  </tr>
					  <tr>
					      <td>新闻详情：</td><td><textarea name="news_content" rows="12" cols="40"></textarea></td>
					  </tr>
					  <tr>
					      <td><input type="submit" name="submit" value="添加"></td>
					  </tr>
			   </table>
		 </form>
	</div>
	<div class="good">
	<?php include_once('../common/footer.html');?>
	</div>
  </div>
 </body>
</html>