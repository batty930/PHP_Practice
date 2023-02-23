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
    <link rel="stylesheet" href="./style.css">
    <title>資料更改</title>
</head>

<body>
    <p>您更改資料如下：
    <p>
    <main class="table">
        <table>
            <?php
            include("M_db.php");
            $result = $conn->prepare("SELECT * FROM user where id='$id'");
            $result->execute();
            list($id, $password, $email, $sex, $address, $tel) = $result->fetchAll(PDO::FETCH_ASSOC); ?>
            <tr>
                <th>Email</th>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <th>地址</th>
                <td><?php echo $address; ?></td>
            </tr>
            <tr>
                <th>電話</th>
                <td><?php echo $tel; ?></td>
            </tr>


        </table>
</body>

</html>