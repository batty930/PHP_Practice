<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>不匿名留言板</title>
</head>
<body>
    <a href="View.php">奇文共賞區</a><p>
    <form name="form1" method="post" action="Add.php">
    姓名:<input type="text" name="name"><br>
    郵件:<input type="text" name="mail"><br>
    主題:<input type="text" name="subject"><br>
    內容:<textarea rows="5" name="content"></textarea><br>
    <input type="submit" name="Submit" value="送出">
    <input type="Reset" name="Reset" value="重新填寫">
    </form>
</body>
</html>