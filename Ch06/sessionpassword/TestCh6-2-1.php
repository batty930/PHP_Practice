<?php
session_start();
$name=$_POST["name"];
$password=$_POST["password"];
if($name !="test" || $password !="1234")
{
    echo "帳號或密碼輸入錯誤";
    exit;
}
$_SESSION["password"]=$password;
$_SESSION["name"]=$name;
?>
