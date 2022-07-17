 <?php
session_start();
if(@$_GET['act']=="loginout"){
    $_SESSION['username']='';
    ?>
    <script>
        location.href="?";
    </script>
    <?php
    exit;
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mybbs";
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_query($conn,'set names utf8'); //设定字符集
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
        .right{
            margin-left: 120px;
        }
    </style>
</head>
<body>
<!-- 导航开始 -->
<nav class="navbar">
    <div class="container navbar-content">
        <a href="index.php">首页</a>
        <a href="add_forum.php">添加论坛</a>
           <?php
    if(@$_SESSION['username']){
        ?>
        <a href="?act=loginout" style="margin-left: 60%;">退出</a>
    <?php }
    else{
        ?>
        <a href="login.php" style="margin-left: 50%;">会员登录</a><a href="reg.php">注册</a>
        <?php
    }
    ?>
    </div>
</nav>
<!-- 导航结束 -->

<!-- 图片 -->
<!--<img src="images/bg.jpg" class="index-bg">-->
<img src="img/bg.jpg" class="index-bg">
<!-- 具体内容 -->
<div class="container">
   <h1>GGS校园论坛</h1>

    <div class="news-list">
      
 
<table border="1px" cellspacing="0" cellpadding="8"align="center">
    <tr class="title">
        <td COLSPAN="4">
            论坛列表<span class="right"></span>
        </td>
    </tr>
    <tr>
        <td width="15%"><strong>主题</strong></td>
        <td width="50"><strong>论坛</strong></td>
        <td width="12"><strong>最后更新</strong></td>
        <td width="8"><strong>删除按钮</strong></td>
    </tr>
    <?php
    $sql="select * from forums";
    $que=mysqli_query($conn,$sql);
    $sum=mysqli_num_rows($que);
    if($sum>0) {
        while ($row = mysqli_fetch_array($que)) {
            ?>
            <tr>
                <td><?php echo $row['subject'] ?></td>
                <td><?php echo "<div class=\"bold\"><strong><a class=\"forum\" href=\"forums.php?F=" . $row['id'] . "\">" . $row["forum_name"] . "</a></strong></div>"
                        . $row["forum_description"] ?></td>
                <td>
                    <div><?php echo $row["last_post_time"]?></div>
                </td>
                 <td>
                    <div><a style="color: deepskyblue;" href="deleteforums.php?id=<?php echo$row['id']?>">删除</a></div>
                    
                </td>
            </tr>
            <?php
        }
    }else{
        echo "<tr><td colspan='3'>对不起，论坛正在建设中，感谢你的关注......</td></tr>";
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