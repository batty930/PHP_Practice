
<?php
$id = $_POST["id"];
$password = $_POST['password'];
session_start();
$_SESSION["user"];
$_SESSION["pw"];
$user = $id;
$pw = $password;

require("M_db.php");

$sql = "SELECT * FROM user WHERE id=:id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();
$num = $stmt->fetch(PDO::FETCH_ASSOC);

if (empty($num)) {
    header("refresh:0.01;URL=M_login.php");
    echo "<script>alert('還沒加入會員')</script>";
} else if (password_verify($password, $num['password']) === false) {
    header("refresh:0.01;URL=M_login.php");
    echo "<script>alert('密碼錯誤')</script>";
} else {
    $_SESSION['id'] = $num['id'];
    $_SESSION['password'] = $num['password'];
    $_SESSION['email'] = $num['email'];
    $_SESSION['sex'] = $num['sex'];
    $_SESSION['address'] = $num['address'];
    $_SESSION['tel'] = $num['tel'];
    header('Location: M_index.php');
}
?>

