<?php
$forum_name=$_POST["forum_name"];
$forum_description=$_POST["forum_description"];
$Subject=$_POST['Subject'];
$time=date("Y-m-d H:i:s");
$conn=mysqli_connect("localhost","root","","mybbs");
mysqli_query($conn,'set names utf8'); //设定字符集
$sql="insert into  forums (forum_name,forum_description,subject,last_post_time) VALUES ('$forum_name','$forum_description','$Subject','$time')";
$que=mysqli_query($conn,$sql);
if($que){
    echo "<script>alert('添加成功');location.href='index.php';</script>";
}else{
    echo "<script>alert('添加失败，请稍后再试');location.href='add_forum.php';</script>";
}
?>
