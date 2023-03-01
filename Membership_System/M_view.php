<?php
include("M_db.php");
session_start();
$id = $_SESSION["user"];
?>
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
            $stmt = $conn->prepare("SELECT * FROM user WHERE id = ?");
            $stmt->execute([$id]);
            $rows = $stmt->fetch(PDO::FETCH_ASSOC);
            
            ?>
            <tr>
                <th>Email</th>
                <td><?php echo $rows['email']; ?></td>
            </tr>
            <tr>
                <th>地址</th>
                <td><?php echo $rows['address']; ?></td>
            </tr>
            <tr>
                <th>電話</th>
                <td><?php echo $rows['tel']; ?></td>
            </tr>


        </table>
</body>

</html>