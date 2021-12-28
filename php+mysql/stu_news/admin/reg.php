<!doctype html>
<html lang="en">
 <head>
  <title>Document</title>
  <style type="text/css">
        #good{
             display: flex;
            justify-content: center;
            align-items: center;

        }
        .bordered{
            border-style:double;
            width:600px;
            height:300px;
         };
           #bg{
               width:600px;
               height:310px;
           };
           span{
            font-size: 16px;
            color: blue;
           };
           a{
            text-decoration: none;
            color: white;
            };
        </style>
 </head>
 <body>
    <div id="good">
     <?php
        session_start();
        if(isset($_SESSION['username'])){
          echo'<script>alert("已登录 跳转到首页");location.href="index.php"</script>';
          exit();
        }
      ?>
    <body align="center" background="../imgs/3.jpg">
    <body style="color:white;"/>
    <br/><br/><br/><br/> &nbsp;&nbsp;&nbsp;&nbsp;
    <div id="bg">
        <div class="bordered">
            <fieldset>
                <legend><h1 align="center" style="color:black;">注册页面</h1></legend>
                <br/>
                    <form name="regform" method="post" action="regchk.php">    
                     <p><strong >用户名&nbsp;&nbsp;:</strong>&nbsp;<input type="text" name="username" maxlength="12" size="18" placeholder="用户名">  </p>
                     <p><STRONG>密&nbsp;&nbsp;&nbsp;&nbsp;码:</STRONG>&nbsp;<input type="password" name="password" maxlength="18" size="18" placeholder="密码"></p>
                     <p><STRONG>确认密码:</STRONG>&nbsp;<input type="password" name="password" maxlength="18" size="18" placeholder="密码"></p>
                     <p><STRONG>邮&nbsp;&nbsp;&nbsp;&nbsp;箱:</STRONG>
                        <input type="password" name="password" maxlength="18" size="18" placeholder="密码"><br><br><br>
                        <input type="submit" name="submit" value="注册" onclick='location.href=("login.php")' style="width:60px;height:30px">
                    </P>
                </form>       
               <p>如果您<span>登录</span>/<span>注册</span>则默认您同意<a href="treaty.html" style="color:red">用户隐私协议</a></p>
            </fieldset>
        </div>
    </div>
    </div>
 </body>
</html>
