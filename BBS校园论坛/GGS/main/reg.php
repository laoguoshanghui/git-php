<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户注册</title>
    <style type="text/css">
    	body{
				background:url(../img/login_bj.jpg);
				
			}
        table{
           	margin-top: 100px;
            height: 300px;
            border-color: white;
        }
        
         tr{
        	 border-color: white;
        }
        input{
            width: 190px;
            height: 25px;
        }
        .title{
           /* background-color:#B10707 ;*/
            color: white;
            border: none;
             text-align: center;
        }
         td{
        	color: white;
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
    <script>
        function checkinput()
        {
            if(myform.username.value=="")
            {
                alert("请输入你的账号");
                myform.username.focus();
                return false;
            }
            if (myform.password.value=="")
            {
                alert("请输入密码");
                myform.password.focus();
                return false;
            }
            if(myform.password.value != myform.password1.value){
                alert("你输入的两次密码不一致，请重新输入！");
                myform.password.focus();
                return false;
            }
        }
    </script>
</head>
<body>
<form method="post" action="reg_check.php"  onsubmit=" return checkinput();" name="myform">
    <table width="400px" border="2" cellpadding="12" cellspacing="1" align="center">
        <tr>
            <td colspan="2" class="title">用户注册<span class="spa">[<a style="color: white"  href="index.php">返回首页]</a></span></td>
        </tr>
        <tr>
            <td width="110px">会  员  账号</td>
            <td><input type="text" name="username" autocomplete="off"></td>
        </tr>
        <tr>
            <td width="110px">密　　码</td>
            <td><input type="password" name="password" autocomplete="off"></td>
        </tr>
        <tr>
            <td width="110px">确认密码</td>
            <td><input type="password" name="password1"></td>
        </tr>
        <tr>
            <td width="110px">邮　　箱</td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button class="but" style="text-align: center">立即注册</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>