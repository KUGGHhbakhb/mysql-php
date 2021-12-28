<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>登录页面</title>
      <style type="text/css">
        #good{
             display: flex;
            justify-content: center;
            align-items: center;

        }
        .bordered{
            border-style:double;
            width:600px;
            height:250px;
         };
		   #bg{
		       width:600px;
		       height:310px;
		       /*background: pink;*/
		     /* background:url(imgs/1.jpg);*/
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
 	   <?php
        session_start();
		if(isset($_SESSION['username'])){
		  echo'<script>alert("已登录 跳转到首页");location.href="index.php"</script>';
		  exit();
		}
      ?>
 	<div id="good">
    <body align="center" background="../imgs/3.jpg">
    <body style="color:white;"/>
    <br/><br/><br/><br/> &nbsp;&nbsp;&nbsp;&nbsp;
    <div id="bg">
	    <div class="bordered">
		    <fieldset>
		        <legend><h1 align="center" style="color:black;">登录页面</h1></legend>
		        <br/><br/>
					   <form name="login" method="post" action="loginchk.php">    
						   <p><strong >用户名:</strong>&nbsp;<input type="text" name="username" maxlength="12" size="18" placeholder="用户名">	</p>
			            <p><STRONG>密&nbsp;&nbsp;码:</STRONG>&nbsp;<input type="password" name="password" maxlength="18" size="18" placeholder="密码"></p>
			            <br/>
			            <!-- <input type="submit" name="submit" > -->
			            <p>
				            <input  type="submit" value="登录" onclick='location.href=("index.php")' style="width:70px;height:30px" />&nbsp;&nbsp;
				            <!-- <input type="submit" value="注册" onclick='location.href=("reg.php")' style="width:60px;height:30px"/> -->
			            
		        		</form> 
		        		没有账户？
		        		<input type="submit" value="注册" onclick='location.href=("reg.php")' style="width:60px;height:30px"/>  
		        		</P>    
		       <!--  <p>如果您<a href="login.php">登录</a>/<a href="reg.php">注册</a>则默认您同意<a href="treaty.html">用户隐私协议</a></p> -->
		       <p>如果您<span>登录</span>/<span>注册</span>则默认您同意<a href="treaty.html" style="color:red">用户隐私协议</a></p>
		    </fieldset>
	    </div>
    </div>
    </div>
 </body>
</html>
