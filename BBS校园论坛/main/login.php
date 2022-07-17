<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登陆界面</title>
    <script type="text/javascript">
        function foo(){
            if(myform.username.value=="")
            {
                alert("请输入用户名");
                myform.username.focus();
                return false;
            }
            if (myform.password.value=="")
            {
                alert("请输入密码");
                myform.password.focus();
                return false;
            }
        }
    </script>
    <style type="text/css">
    	body{
				background:url(../img/login_bj.jpg);
				
			}
        table{
        	margin-top: 100px;
            height: 300px;
            border-color: white;
        }
        input{
            width: 190px;
            height: 25px;
        }
        tr{
        	 border-color: white;
        
        }
           td{
        	color: white;
        	 text-align: center;
        	
        }
        .title{
           /* background-color:#B10707 ;*/
            color: white;
            border: none;
            text-align: center;
        }
     
        .but{
            width: 140px;
            height: 43px;
        }
        .spa{
            margin-left: 10px;
        }
    </style>
</head>
<body>
<form action="login_check.php"  method="post" onsubmit="return foo();" name="myform" >
    <table width="400px" border="2" cellpadding="12" cellspacing="1" align="center">
        <tr >
             <td  colspan="2" class="title">登录页面<span class="spa">[<a style="color: white"  href="index.php">返回首页]</a></span></td>
        </tr>
        <tr>
            <td width="110px" >账号</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td width="110px" >密码</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button class="but" style="text-align: center">立即登录</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>