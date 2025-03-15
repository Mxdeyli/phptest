<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername='localhost';
        $username='root';
        $password='123456';
        $dbname='myTestPhpDB';

        // 创建连接
        $conn = new mysqli($servername, $username, $password, $dbname);
        // 检测连接
        if ($conn->connect_error) {
            die("连接失败: " . $conn->connect_error);
        } 
        echo "连接成功";

        // 使用 sql 创建数据表
        $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP
        )ENGINE=InnoDB DEFAULT CHARSET=utf8";
 
        if ($conn->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } 
        else {
        echo "创建数据表错误: " . $conn->error;
        }
 
        $conn->close();
    ?>
</body>
</html>