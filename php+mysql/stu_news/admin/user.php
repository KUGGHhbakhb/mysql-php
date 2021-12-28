<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>user</title>
	<style type="text/css">
		.ee{
    width: 350px;
    height: 350px;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
		}
		a{
			text-decoration: none;
			color: red;
		};
	</style>
</head>
<body bgcolor="#ddddcc">
	<div class="ee">
		<?php
			include_once('../conn/conn.php');
			header('content-type:text/html;charset=utf-8');
			include_once('../common/islogin.php');
			$res = mysqli_query($link,"select * from user");
			echo '<table border="1" cellpadding="0" width="500">';
			echo '<caption aling="center"><h2>管理员信息管理</h2></caption>';
			while($row = mysqli_fetch_assoc($res)){
			    echo '<tr align="center">';
				if($row['username'] !== $username){
				echo '<td>' . $row['user_id'] . '</td>';
				echo '<td>' . $row['username'] . '</td>';
				echo '<td>' . $row['password'] . '</td>';
				echo '<td>' . $row['email'] . '</td>';
			    echo '<td><a href="userchk.php?id='.$row['user_id'].'">撤销管理员身份</a></td>';
				}
				echo'</td>';
			}
			echo'</table>';
		?>
	</div>
</body>
</html>
