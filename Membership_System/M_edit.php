<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" />
<?php
include("M_db.php");
include("M_check.php");

list($id, $password, $email, $sex, $address, $tel) = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<main class="form_">
    <form name="form1" method="post" action="M_modify.php">
        <h3>修改會員資料</h3>
        <p>
            Email: <nl2br> <input type=email name=email value=<?php echo $email; ?>><br>
            住址：<input type=text name=address value=<?php echo $address; ?>><br>
            電話：<input type=tel name=tel value=<?php echo $tel; ?>>
        <p>
        <p>
            <input type="submit" class="w-100 btn btn-lg btn-primary" name="Submit" value="確定修改">
    </form>