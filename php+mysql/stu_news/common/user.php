<?php
include_once('../conn/conn.php');
include_once('../common/islogin.php');
$res = mysqli_query($ink,"select * from user");
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
	echo '</tr>';
}
echo '</table>';
?>