<?php
session_start();
$page=isset($_GET['page']) ?$_GET['page'] :1 ;//接收页码
$page=!empty($page) ? $page :1;
@$F=$_GET['F'];
// 创建连接
$conn = mysqli_connect("localhost", "root", "", "mybbs");
mysqli_query($conn,'set names utf8'); //设定字符集
$table_name="tiopic";//查取表名设置
$perpage=2;//每页显示的数据个数
//最大页数和总记录数
$total_sql="select count(*) from $table_name";
$total_result =mysqli_query($conn,$total_sql);
$total_row=mysqli_fetch_row($total_result);
$total = $total_row[0];//获取最大页码数
$total_page = ceil($total/$perpage);//向上整数
//临界点
$page=$page>$total_page ? $total_page:$page;//当下一页数大于最大页数时的情况
//分页设置初始化
$start=($page-1)*$perpage;
$sql="select * from tiopic order by id desc limit $start ,$perpage";
$que=mysqli_query($conn,$sql);
@$sum=mysqli_num_rows($que);
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
         .cen{
            border: none;
            width: 600px;
            margin: 0 auto;
            height: 40px;
            background-color: rgba(34, 35, 62, 0.08);
        }
        .left{
            width: 80%;
            float: left;
        }
        .right{
            width: 65px;
            height: 30px;
            /*background-color:#B10707 ;*/
            float: left;
            margin-top: 8px;
        }
        .title{
             background-color: cornflowerblue;
            font-size: 17px;
            color: white;
        }
        .list{
            margin-left: 12px;
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
   <h1>论坛详情列表</h1>

    <div class="news-list">
      <div class="cen">
    <div class="left">
        <?php
        $sql1="select forum_name from forums where id='$F'";
        $squ1=mysqli_query($conn,$sql1);
        $row=mysqli_fetch_array($squ1);
        $forum_name=$row['forum_name'];
        echo "<strong>当前论坛名称为：<a href=\"index.php\"></a>-->>$forum_name</strong>";
        ?>
    </div>
    <div class="right"><a class="a" style="color: deepskyblue" href="addnew.php"><strong>发布新帖</strong></a> </div>
</div>
<table width="600px" border="2" cellpadding="8" cellspacing="0" align="center">
    <tr class="title">
        <td colspan="3">帖子列表 </td>
    </tr>
    <tr>
        <td width="280px">主题列表</td>
        <td width="160px" >作者</td>
        <td width="160px">最后更新</td>
    </tr>
    <?php
    if($sum>0) {
    while($row=mysqli_fetch_array($que)) {
    ?>
    <tr>
        <td width="280px"><div><strong><a style="color:deepskyblue" href="thread.php?id=<?php echo $row['id']?>"</a></strong><?php echo $row['title']?></div> </td>
        <td width="160px"><?php echo $row['author'] ?></td>
        <td width="160px"><?php echo $row['last_post_time']?></td>
    </tr>
    <tr>
        <td colspan="3">
            <?php }
            }
            else{
                echo "<tr><td colspan='5'>本版块没有帖子.....</td></tr>";
            } ?>
        </td>
    </tr>
    <tr>
        <td colspan="5">
            <div id="baner" style="margin-top: 20px">
                <a href="<?php
                echo "$_SERVER[PHP_SELF]?page=1"
                ?>">首页</a>
                &nbsp;&nbsp;<a href="<?php
                echo "$_SERVER[PHP_SELF]?page=".($page-1)
                ?>">上一页</a>
                <!--        显示123456等页码按钮-->
                <?php
                for($i=1;$i<=$total_page;$i++){
                    if($i==$page){//当前页为显示页时加背景颜色
                        echo "<a  style='padding: 5px 5px;background: #000;color: #FFF' href='$_SERVER[PHP_SELF]?page=$i'>$i</a>";
                    }else{
                        echo "<a  style='padding: 5px 5px' href='$_SERVER[PHP_SELF]?page=$i'>$i</a>";
                    }
                }
                ?>
                &nbsp;&nbsp;<a href="<?php
                echo "$_SERVER[PHP_SELF]?page=".($page+1)
                ?>">下一页</a>
                &nbsp;&nbsp;<a href="<?php
                echo "$_SERVER[PHP_SELF]?page={$total_page}"
                ?>">末页</a>
                &nbsp;&nbsp;<span>共<?php echo $total?>条</span>
            </div>
        </td>
    </tr>
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