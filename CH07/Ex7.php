<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex7</title>
</head>
<body>
    <form enctype="multipart/form-data" action="Ex7-1.php" method="POST">
    請選擇上傳檔案:<br>
    <input type="hidden" name="Max_FILE_SIZE" value="20000">  
    <input name="upload" type="file">
    <input type="submit" value="上傳">
    </form>
</body>
</html>