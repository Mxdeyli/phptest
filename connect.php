<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
        //PHP连接mysql四步
        //第一步连接登录mysql数据库
    $servername = "localhost";
    $username = "root";
    $password = "123456";
 
        // 创建连接
    $conn = new mysqli($servername, $username, $password);
        // Check connection
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
    echo "连接成功";
 
        //第二步创建数据库myTestPhpDB
    $sql = "CREATE DATABASE myTestPhpDB";
    if ($conn->query($sql) === TRUE) {
        echo "数据库创建成功";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    $conn->close();
   ?> 
</body>
</html>