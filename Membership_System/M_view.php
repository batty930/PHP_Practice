<?php
session_start();
$id = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資料更改</title>
</head>

<body>
    您更改資料如下：<p>
    <table width="80%" border="1">
        <?php
        include("M_db.php");
        $result = $conn->prepare("SELECT * FROM user where id='$id'");
        $result->execute();

        list($id, $password, $email, $sex, $address, $tel) = $result->fetchAll(PDO::FETCH_ASSOC);
        echo "<tr><td>Email<td>" . $email;
        echo "<tr><td>地址<td>" . $address;
        echo "<tr><td>電話<td>" . $tel;
        ?>
    </table>
</body>

</html>