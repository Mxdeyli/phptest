<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>初始化数据库</title>
</head>
<body>
    <?php
    require_once __DIR__ . '/database.php';

    try {
        $connection = openDatabase(null);
        $connection->query("CREATE DATABASE IF NOT EXISTS myTestPhpDB CHARACTER SET utf8mb4");
        $connection->close();
        echo '初始化数据库成功。';
    } catch (mysqli_sql_exception $error) {
        error_log($error->getMessage());
        echo '初始化数据库失败，请检查数据库连接和权限。';
    }
    ?>
</body>
</html>
