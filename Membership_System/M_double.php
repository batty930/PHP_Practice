<?php
if (!isset($_GET['id'])) return;
$id = $_GET['id'];
include('M_db.php');

$sql = "SELECT * FROM member WHERE id = '$id'";
$result = $conn->query($sql);
$sql="SELECT * from user where id='$id'";
$result=$conn->query($sql);
$num=$result->fetch(PDO::FETCH_NUM);
/*foreach ($result as $row){
    if( $row["id"]==$id);
    exit ($row > 0 ? '帳號重複了，不能註冊' : '');
}*/
?>