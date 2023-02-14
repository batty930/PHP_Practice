<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex5</title>
</head>
<body>
    訂購書籍
    <p>
    <form name="form1" method="POST" action="Ex5-1.php">
        姓名:<input type="text" name="name"><br>
        <table border="1" width=60%>
            <tr>
                <td>書名
                <td>售價
                <td>數量
            </tr>
            <tr>
                <td>鯊鯊與天線寶寶
                <td>500元
                <td><input type="number" name="shark_baby"">
            </tr>
            <tr>
                <td>跑山豬愛爬山
                <td>300元
                <td><input type="number" name="boar_mt"">
            </tr>
        </table>
        <br>
        <input type="submit" name="Submit" value="送出"> 
    </form>
    </p>