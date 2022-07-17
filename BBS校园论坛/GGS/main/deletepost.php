<?php
header("Content-type:text/html;charset=utf-8");    //设置编码
// 创建连接
$conn = mysqli_connect("localhost", "root", "", "mybbs");
@$id=$_GET['id'];
$sql="delete from tiopic where id='$id'";
$que=mysqli_query($conn,$sql);
if($que){
	echo "<script>alert('删除成功')</script>";
	Header("Location:forums.php");
}else{
	echo "<script>alert('删除失败')</script>";
} 
  

?>