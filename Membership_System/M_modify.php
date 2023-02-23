<?php
session_start();
header("location:M_view.php");
include("M_db.php");

$email=$_POST["email"];
$address=$_POST["address"];
$tel=$_POST["tel"];
$id=$_SESSION["user"];

$sql="UPDATE user SET email='$email',address='$address',tel='$tel'where id='$id'";
$conn->query($sql);
?>