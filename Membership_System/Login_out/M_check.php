
<?php
$id = $_POST["id"];
$password = $_POST['password'];
session_start();

require("..\Function\SelectUser.php");
$stmt = select_user($id);
$member = $stmt->fetch(PDO::FETCH_ASSOC);

if (empty($member)) {
    header("refresh:0.01;URL=M_login.php");
    echo "<script>alert('還沒加入會員')</script>";
} else if (!password_verify($password, $member['password'])) {
    header("refresh:0.01;URL=M_login.php");
    echo "<script>alert('密碼錯誤')</script>";
}
$_SESSION['id'] = $member['id'];
$_SESSION['email'] = $member['email'];
$_SESSION['sex'] = $member['sex'];
$_SESSION['address'] = $member['address'];
$_SESSION['tel'] = $member['tel'];
header('Location: ..\M_index.php');

?>

