<!doctype html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <title>首页</title>
  <link rel="stylesheet" type="text/css" href="../css/common.css">
  <style type="text/css">
  table,tr,td{
  border:solid #ddf 1px;
  text-align:center;
  }
  .good{
  	background: #ddddcc;
  	  clear:both;
  height:80px;
  }
  </style>
 </head>
 <body>
 <?php
include_once('../common/islogin.php');
date_default_timezone_set('PRC');
?>
<div id="container">
    <?php include_once('../common/header.html');?>
	<?php include_once('../common/left.html');?>
	<div id="content">
	<br><br>
	<table align="center" width="80%" border="0" cellpadding="0" cellspacing="1">
	<tr>
	<td widtn="23%">software version</td>
	<td>v1.0</td>
	</tr>
	<tr>
	<td>php edition</td>
	<td><?php echo "PHP".PHP_VERSION; ?></td>
	</tr>
	<tr>
	<td>server name</td>
	<td><?php echo $_SERVER['SERVER_NAME']; ?></td>
	</tr>
	<tr>
	<td>server IP</td>
	<td><?php echo $_SERVER["HTTP_HOST"]; ?></td>
	</tr>
	<tr>
	<td>server port</td>
	<td><?php echo $_SERVER["SERVER_PORT"]; ?></td>
	</tr>
	<tr>
	<td>server time</td>
	<td><?php echo $showtime=date("Y-m-d H:i:s");?></td>
	</tr>
	<tr>
	<td>server operating system</td>
	<td><?php echo PHP_OS; ?></td>
	</tr>
	<tr>
	<td>site physical path</td>
	<td><?php echo $_SERVER["DOCUMENT_ROOT"]; ?></td>
	</tr>
	<tr>
	</table>
	</div>
	<div class="good">
	<?php include_once('../common/footer.html');?>
	</div>
</div>
 </body>
</html>

