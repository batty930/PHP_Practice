<?php
// PDO 連線設定
$options = [
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_STRINGIFY_FETCHES => false,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4',
];

$host='localhost';
$dbName='member';
$user='root';
$pass='014966';
$dsn="mysql:host=$host;dbname=$dbName";
$conn = new PDO($dsn, $user, $pass); 

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "root", "014966","member");
mysqli_set_charset($link, "utf8mb4");
?>