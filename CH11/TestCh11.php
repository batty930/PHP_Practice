<?php
$link = mysqli_connect("localhost", "root", "014966") 
or die("無法開啟MySQL資料庫連接!<br/>");

$dbname = "book";
// 開啟指定的資料庫
if ( !mysqli_select_db($link, $dbname) )
die("無法開啟 $dbname 資料庫!<br/>");
else
echo "資料庫: $dbname 開啟成功!<br/>";
$sql = "INSERT INTO data (no,name,author,price)
VALUES ('B008', '嚕嚕啦', '巴奈', '500元')";
echo "SQL字串: $sql <br/>";
//送出UTF8編碼的MySQL指令
mysqli_query($link, 'SET NAMES utf8'); 
mysqli_query($link, $sql);
mysqli_close($link);  // 關閉資料庫連接

?>