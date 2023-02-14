<!DOCTYPE html>

<html lang="en">
<head>
		<?php
		setcookie("A","Test",time()+1800);
		?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>儲存Cookie</title>
</head>
<body>
    <?php
    echo $_COOKIE["A"]."<br>";
    
    echo "<a href=Ex6Cookie1.php>清除Cookie</a>";
    ?>

</body>
</html>