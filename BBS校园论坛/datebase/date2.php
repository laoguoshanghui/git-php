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
$sql = "CREATE TABLE member (
 id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
 `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `log_time` datetime NOT NULL
);";
if (mysqli_query($conn, $sql)) {
    echo "数据表 member 创建成功";
} else {
    echo "创建数据表错误: " . mysqli_error($conn);
}
mysqli_close($conn);
?>