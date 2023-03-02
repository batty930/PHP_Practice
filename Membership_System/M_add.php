<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style.css">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>加入會員</title>
</head>
<body>
    <main class="form_">
    <div class="form_add">
    <form name="form1" method="post" action="M_insert.php">
        <h1 class="h3 mb-3 fw-normal">加入會員</h1>
        <p>*必填</p>
        
        <label>*帳號</label><br>
        <input type="text" name="id" placeholder="請輸入英文或數字"><br>
        <label>*密碼</label><br>
        <input type="password" name="password" placeholder="請輸入英文或數字">
        <i id="checkEye" class="fas fa-eye"></i>
        <br>
        <label>*E-MAIL</label><br>
        <input type="email" name="email" placeholder="name@example.com"><br>
        <label>性別</label><br>
        <input type="radio" name="sex" value="先生" checked>男
        <input type="radio" name="sex" value="小姐">女<br>
        <label>電話</label><br>
        <input type="text" name="tel" placeholder="09xxxxxxxx"><br>
        <label>住址</label><br>
        <input type="text" name="address" placeholder="請輸入地址">
        <input type="submit" class="w-100 btn btn-lg btn-primary" name="Submit" value="加入會員">
    </form>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="/sample/Membership_System/move.js"></script>

</html>