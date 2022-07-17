<?php
session_start();
header("content-type:text/html;charset=utf8");
if(empty($_SESSION['username']))
{
    echo "<script>alert('请先登录');location.href='login.php';</script>";
}
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GGS论坛</title>  
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/index.css">
  
    <style>
      table{
            width: 70%;
            margin-top: 10px;
            text-align:center;
            margin-left: 120px;
            border: 1px solid black;
        }
       td,tr{
            border: 1px solid black;
             text-align:center;
        }
        .btn{
            background-color: cornflowerblue;
            width: 90px;
            height: 40px;
            font-size: 15px;
            color: white;
            border: none;
        }
        #title{
            color: White;
            
        }
        .title{
        	background-color: cornflowerblue;
        }
        .input{
            border: 1px solid black;
            width: 200px;
            height: 20px;
        }
        a{
            color: White;
        }
        .right{
            margin-left: 10px;
        }
    </style>
</head>
<body>
<!-- 导航开始 -->
<nav class="navbar">
    <div class="container navbar-content">
        <a href="index.php">首页</a>
       
     
    </div>
</nav>
<!-- 导航结束 -->

<!-- 图片 -->
<!--<img src="images/bg.jpg" class="index-bg">-->
<img src="img/bg.jpg" class="index-bg">
<!-- 具体内容 -->
<div class="container">
   <h1>添加论坛页面</h1>

    <div class="news-list">
      
 
<form action="save_forum.php" method="post">
    <table width="600px" border="1" cellpadding="8" align="center">
        <tr  id="title" class="title">
            <td colspan="2" >
                论坛管理
            </td>
        </tr>
        <tr>
            <td width="23%"><strong>论坛名称</strong></td>
            <td width="77%"><input name="forum_name" type="text" class="input"></td>
        </tr>
        <tr>
            <td width="23%"><strong>论坛主题</strong></td>
            <td width="77%"><input name="Subject" type="text"  class="input"></td>
        </tr>
        <tr>
            <td><strong>论坛简介</strong></td>
            <td><textarea name="forum_description" cols="30" rows="5"></textarea></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="submit" class="btn" value="添加">
                <input type="reset" name="submit2" class="btn" value="重置">
            </td>
        </tr>
    </table>
</form>
      
       <!-- 底部开始 -->
        <footer class="copyright">论坛为广工商学子们畅所欲言，致力于为大家服务</footer>
        <!-- 底部结束 -->
    </div>
    </div>
    <!-- 新闻列表结束 -->
</div>
</body>
</html>