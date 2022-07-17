<?php
header("Content-type:text/html;charset=utf-8");    //设置编码
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mybbs";
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_query($conn,'set names utf8'); //设定字符集
$author=$_POST['author'];
$title=$_POST['title'];
$content=$_POST['content'];
$last_post_time=date("Y-m-d H:i:s");
$sql="insert into tiopic(author,title,content,last_post_time) values('$author','$title','$content','$last_post_time')";
$que=mysqli_query($conn,$sql);
if($que){
    echo "<script>alert('发布成功');location.href='forums.php';</script>";
}else{
    echo "<script>alert('好像有点小问题......');location.href='addnew.php';</script>";
}
?>
