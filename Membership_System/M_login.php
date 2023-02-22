<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start();?>
    <?php session_destroy();?>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入</title>
</head>
<body>
<main class="form_">
    <div class="form_add">
    <form name="form1" method="post" action="M_edit.php">
        <h1 class="h3 mb-3 fw-normal">登入會員系統</h1>
        
        <label>*帳號</label><br>
        <input type="text" name="id" placeholder="請輸入帳號"><br>
        <label>*密碼</label><br>
        <input type="password" name="password" id="floatingPassword" placeholder="請輸入密碼">
        <i id="checkEye" class="fas fa-eye"></i>
        
        <input type="submit" class="w-100 btn btn-lg btn-primary" name="Submit" value="登入會員"><p>
        <a href="M_add.php">加入會員</a>
    </form>
</body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="/sample/Membership_System/move.js"></script>
</html>