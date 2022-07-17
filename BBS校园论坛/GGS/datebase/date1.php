<?php
header("Content-type:text/html;charset=utf-8");    //设置编码
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mybbs";
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_query($conn,'set names utf8'); //设定字符集
// 检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
// 使用 sql 创建数据表
$sql = "CREATE TABLE forums (
 id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 `forum_name` varchar(50) NOT NULL,
  `forum_description` varchar(200) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `last_post_time` datetime NOT NULL
 );";
if (mysqli_query($conn, $sql)) {
    echo "数据表 forums 创建成功";
} else {
    echo "创建数据表错误: " . mysqli_error($conn);
}
mysqli_close($conn);
?>