<?php
include("M_db.php");

$id = $_POST["id"];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$email = $_POST["email"];
$sex = $_POST["sex"];
$address = isset($_POST["address"]) && !empty($_POST["address"]) ? $_POST["address"] : null;
$tel = isset($_POST["tel"]) && !empty($_POST["tel"]) ? $_POST["tel"] : null;

if (empty($id) || empty($password) || empty($email)) {
    exit("*欄位未填!");
}

$sql = "SELECT * FROM user WHERE id=?";
$result = $conn->prepare($sql);
$result->execute([$id]);
$num = $result->rowCount();
if ($num > 0) {
    header("refresh:3;URL=M_add.php");
    exit('帳號重複了，不能註冊');
}
try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $data = array('id' => $id, 'password' => $password, 'email' => $email, 'sex' => $sex, 'address' => $address, 'tel' => $tel);
    $sql = "INSERT INTO user (id, password, email, sex, address, tel) VALUES (:id, :password, :email, :sex, :address, :tel)";
    $stmt = $conn->prepare($sql);

    foreach ($data as $key => $value) {
        $stmt->bindParam(':' . $key, $data[$key], PDO::PARAM_STR);
    }
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $result = $conn->prepare("SELECT * FROM user WHERE id=?");
        $result->execute([$id]);
        $user = $result->fetch(PDO::FETCH_BOTH);

        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['sex'] = $user['sex'];
        $_SESSION['address'] = $user['address'];
        $_SESSION['tel'] = $user['tel'];
        header("refresh:3;URL=M_index.php");
        echo $_SESSION['id'] . $_SESSION['sex'] . "歡迎您的加入!3秒後為您跳轉至首頁...";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
