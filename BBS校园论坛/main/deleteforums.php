

<?php
session_start();
header("Content-type:text/html;charset=utf-8");    //设置编码
if(empty($_SESSION['username']))
{
    echo "<script>alert('请先登录');location.href='login.php';</script>";
}

// 创建连接
$conn = mysqli_connect("localhost", "root", "", "mybbs");
@$id=$_GET['id'];
$sql="delete from forums where id='$id'";
$que=mysqli_query($conn,$sql);
if($que){
	echo "<script>alert('删除成功')</script>";
	Header("Location:index.php");
}else{
	echo "<script>alert('删除失败')</script>";
} 
  

?>