<?php
if (!isset($_GET['id'])) return;
//收下資料
$id = $_GET['id'];

include('M_db.php');

//SQL 條件式  檢查 條件:拿到資料，帳號有重複 
$sql = "SELECT * FROM member WHERE id = '{$id}'";
$result = $conn->query($sql);
$rows = $result->fetch(PDO::FETCH_NUM);
//查出有幾筆資料?
echo $rows > 0 ? '帳號重複了，不能註冊' : '';
?>