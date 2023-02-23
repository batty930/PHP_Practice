<?php
session_start();
header("location:M_view.php");
include("M_db.php");

$email = $_POST["email"];
$address = $_POST["address"];
$tel = $_POST["tel"];
$id = $_SESSION["user"];
$data = ["$email", "$address", "$tel"];
$sql = "UPDATE user SET (email,address,tel) =(?,?,?)WHERE id='$id'";
$update = $conn->prepare($sql);
$update->execute();
