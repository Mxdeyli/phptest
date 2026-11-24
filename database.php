<?php
function openDatabase(?string $database = null): mysqli
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connection = new mysqli(
        getenv('MYSQL_HOST') ?: 'localhost',
        getenv('MYSQL_USER') ?: 'root',
        getenv('MYSQL_PASSWORD') === false ? '' : getenv('MYSQL_PASSWORD'),
        $database
    );
    $connection->set_charset('utf8mb4');

    return $connection;
}
