<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>初始化访客表</title>
</head>
<body>
    <?php
    require_once __DIR__ . '/database.php';

    try {
        $connection = openDatabase('myTestPhpDB');
        $connection->query("CREATE TABLE IF NOT EXISTS MyGuests (
            id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
        $connection->close();
        echo '初始化访客表成功。';
    } catch (mysqli_sql_exception $error) {
        error_log($error->getMessage());
        echo '初始化访客表失败，请检查数据库连接和权限。';
    }
    ?>
</body>
</html>
