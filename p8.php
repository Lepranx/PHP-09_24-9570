<?php

$servername = "localhost:3306";
$username = "root";
$password = "123456";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 

$sql = "INSERT INTO `schoolks`.`studentks` (`xh`,`xm`,`cj`) VALUES (00000003, '陶平', 70);";
 
if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();