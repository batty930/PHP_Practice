
<?php
$id = $_POST["id"];
$password = $_POST["password"];

$_SESSION["user"];
$_SESSION["pw"];
$user = $id;
$pw = $password;
/*
if(isset($_POST['M_login'])) {
    $sql = mysqli_query($conn,
    "SELECT * FROM user WHERE id='"
    . $_POST["id"] . "' AND
    password='" . $_POST["password"] . "'    ");
   
    $num = mysqli_num_rows($sql);}
   
    if($num > 0) {
        $row = mysqli_fetch_array($sql);
        header("location:M_edit.php");
        exit();
    }
*/


include("M_db.php");
$sql = "SELECT * FROM user WHERE id='$id' AND password='$password'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$num = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (empty($num)) {
    exit("密碼錯誤或還沒加入會員");
}
?>

