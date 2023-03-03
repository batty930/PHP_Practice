<?php
session_start();
$id = $_SESSION["id"];

require("SelectUser.php");
$stmt = select_user($id);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

$email = isset($_POST["email"]) && !empty($_POST["email"]) ? $_POST["email"] : $user['email'];
$address = isset($_POST["address"]) && !empty($_POST["address"]) ?  $_POST["address"] : $user['address'];
$tel = isset($_POST["tel"]) && !empty($_POST["tel"]) ? $_POST["tel"] : $user['tel'];
$sql = "UPDATE user SET email=:email, address=:address, tel=:tel WHERE id=:id";
$update = $conn->prepare($sql);
$data = array('id' => $id, 'email' => $email, 'address' => $address, 'tel' => $tel);
foreach ($data as $key => $value) {
    $update->bindParam(':' . $key, $data[$key], PDO::PARAM_STR);
}
$update->execute();

if ($update->rowCount() > 0) {
    header("location:M_view.php");
    exit;
} else {
    echo "更新失敗";
    exit;
}
?>