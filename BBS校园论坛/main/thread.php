<?php
header("Content-type:text/html;charset=utf-8");    //设置编码
// 创建连接
$conn = mysqli_connect("localhost", "root", "", "mybbs");
mysqli_query($conn,'set names utf8'); //设定字符集
@$id=$_GET['id'];
$sql="SELECT * from tiopic where id='$id'";
$que=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($que);
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
        }
        .title{
            background-color: cornflowerblue;
            font-size: 17px;
            color: white;
        }
          .left{
            width: 170px;
        }
        .bg{
           background-color: cornflowerblue;
            color: white;
        }
        .fh{
            margin-left: 18px;
        }
        .spa{
            margin-left: 25px;
        }
        .ind{
            text-indent:2em;
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
   <h1>单个帖子详情</h1>

    <div class="news-list">
   
  <table width="400px" border="2" cellpadding="12" cellspacing="0" align="center">
    <tr>
        <td colspan="2" class="bg"><?php echo $row['title'] ?>
            <span class="fh"><a style="color: white" href="forums.php">[返回]</a></span>
        </td>
    </tr>
    <tr>
        <td rowspan="2" class="left">
            发帖人：
            <?php
            echo $row['author']
            ?>
        </td>
        <td>
            发帖时间：<?php echo $row['last_post_time']?>
            <span class="spa"><a style="color: deepskyblue;" href="reply.php?id=<?php echo$row['id']?>">回复</a></span>
         
          <span class="spa"><a style="color: deepskyblue;" href="deletepost.php?id=<?php echo$row['id']?>">删除</a></span>
         
        </td>
    </tr>
    <tr class="ind">
        <td><?php echo $row['content']?></td>
    </tr>
    <?php
    if($row['reply']==""){
        echo "<tr>
                 <td colspan='2'>暂时还没有回复哦！！！</td>
             </tr>";
    }else{
        echo "<tr>
                <td>回复人:".$row['reply_author']. ".".$row['reply_time']."</td>
                <td>".$row['reply']."</td>
           </tr>";
    }
    ?>
</table>

      
       <!-- 底部开始 -->
        <footer class="copyright">论坛为广工商学子们畅所欲言，致力于为大家服务</footer>
        <!-- 底部结束 -->
    </div>
    </div>
    <!-- 新闻列表结束 -->
</div>
</body>
</html>