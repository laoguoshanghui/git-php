
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
        }
        .title{
            background-color: cornflowerblue;
            font-size: 17px;
            color: white;
        }
        .sub{
            text-align: center;
        }
        .but{
            background-color: cornflowerblue;
            width: 90px;
            height: 40px;
            font-size: 15px;
            color: white;
            border: none;
        }
        input{
            width: 250px;
            height: 25px;
           
        }
        .right{
            margin-left: 10px;
        }
    </style>
    <script type="text/javascript">
        function checkinput()
        {
            if(myform.reply_author.value=="")
            {
                alert("请输入你的昵称");
                myform.reply_author.focus();
                return false;
            }
            if (myform.reply.value=="")
            {
                alert("请输入你想回复的内容");
                myform.reply.focus();
                return false;
            }
        }
    </script>
       
        
  
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
   <h1>回复帖子</h1>

    <div class="news-list">
    <form method="post" action="reply_post.php?id=<?php echo $_GET['id']; ?>" onsubmit=" return checkinput();" name="myform">
    <table width="500px" border="2" cellpadding="8" cellspacing="0" align="center">
        <tr class="title">
            <td colspan="2">
                回复帖子<span class="right">[<a style="color: white" href="forums.php">返回</a> ]</span>
            </td>
        </tr>
        <tr>
            <td width="100px">回复人</td>
            <td><input type="text" name="reply_author"></td>
        </tr>
        <tr>
        <tr>
            <td width="100px">回复内容</td>
            <td><textarea cols="43" rows="10" name="reply">
        </textarea></td>
        </tr>
        <tr class="sub">
            <td colspan="2">
                <input type="submit" value="快速回复" class="but">
                <input type="reset" value="重置" class="but">
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