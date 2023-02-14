<?php
$name=$_POST["name"];
$password=$_POST["password"];
if($name !="test" || $password !="12356")
{
    echo "帳號或密碼輸入錯誤";
    exit;
}
?>
嗨囉~登入成功啦啦啦!<br>