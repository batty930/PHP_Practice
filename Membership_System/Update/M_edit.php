<?php 
("..\Function\Echohtml.php");
?>
<link rel="stylesheet" href="../css/all.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../Login_out/style.css">
</head>
<?php
include("M_db.php");
$stmt = $conn->prepare("SELECT * FROM user WHERE id = ?");
$stmt->execute([$id]);
$rows = $stmt->fetch(PDO::FETCH_ASSOC);
require("CheckLogin.php");
check_login();
?>
<main class="form_">
    <form name="form1" method="post" action="M_modify.php">
        <h3>修改會員資料</h3>
        <p>
            Email: <nl2br> <input type="email" name="email" value=<?php echo $rows['email']; ?>><br>
                住址：<input type="text" name="address" value=<?php echo $rows['address']; ?>><br>
                電話：<input type="tel" name="tel" value=<?php echo $rows['tel']; ?>>
                <p>
                <p>
                    <input type="submit" class="w-100 btn btn-lg btn-primary" name="Submit" value="確定修改">
    </form>