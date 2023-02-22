<?php
$id=$_POST["$id"];
$password=$_POST["$password"];

$_SESSION["user"];
$_SESSION["pw"];
$user=$id;
$pw=$password;

include("M_db.php");
$sql="SELECT * from user where id='$id' and password='password'";
$result=$conn->query($sql);
$num=$result->fetch(PDO::FETCH_NUM)[0];
if($num==0)
{
    exit ("密碼錯誤或還沒加入會員");
}
?>