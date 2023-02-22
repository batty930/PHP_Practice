<?php
$id=$_POST["id"];
$password=$_POST["password"];
$email=$_POST["email"];
$sex=$_POST["sex"];
$address=$_POST["address"];
$tel=$_POST["tel"];

if(empty($id)||empty($password)||empty($email))
    exit("*欄位未填!");
?>