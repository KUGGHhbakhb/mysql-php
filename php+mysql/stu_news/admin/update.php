<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>update</title>
        <style type="text/css">
        .rr{
    width: 350px;
    height: 350px;
    margin: auto;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
        }
    </style>
 </head>
 <body bgcolor="#ddddcc">
    <div class="rr">
  <?php
  include_once('../conn/conn.php');
  include_once('../common/islogin.php');
  //session_start();
  //$username = $_SESSION['username'];
  $res = mysqli_query($link,"select * from user where username = '$username'");
  $user = mysqli_fetch_assoc($res);
  extract($user);
  ?>
  <table border="1">
    <tr>
      <td>
          <h3 style="text-align:center;">用户<?=$username;?>的信息</h3>
      </td>
    </tr>
      <td>
           <form name="update" method="post" action="updatechk.php">
  修改密码：
  <input type="text" name="password" value="<?=$password;?>">
      </td>
    </tr>
        <tr>
      <td>
           修改邮箱：
  <input type="text" name="email" value="<?=$email;?>">
      </td>
    </tr>
        <tr>
      <td align="center">
          <input type="submit" nam="submit" style="width:100px;height:30px;border-radius: 100px;">
      </td>
    </tr>
  </table>
<!--   <form name="update" method="post" action="updatechk.php">
  修改密码：
  <input type="text" name="password" value="<?=$password;?>"><br>
  修改邮箱：
  <input type="text" name="email" value="<?=$email;?>"><br> -->

 <!--  <input type="submit" nam="submit" style="width:265px;height:30px"> -->
  </form>
</div>
 </body>
</html>
