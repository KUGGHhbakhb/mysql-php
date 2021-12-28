<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
	include_once('../conn/conn.php');
	foreach($_POST as $key => $value){
	  $$key = $value;
	}
	?>
	<script type="text/javascript">
	    alert("注册成功！")
	    top.location='index.php';
	</script>

</body>
</html>
