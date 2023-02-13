<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
</head>
<body>
    1.
    <p>
        <?php
        function num2($n){
            return $n*$n;
        }
        function num3($n){
            return $n*$n*$n;
        }
        echo "5的二次方是:".num2(5)."&nbsp三次方是:".num3(5);
        ?>
    </p>
    <br>
    2.
    <p>
        <?php
        $class=array("A班","B班","C班","D班");
        $list=array(56,78,90,55);
        function pass($n,$score){
            if($score>=60)
                echo $n."合格!<br>";
            else
                echo $n."不合格，有待加強!<br>";
        }
        for($i=0;$i<count($class);$i++)
            pass($class[$i],$list[$i]);
        ?>
    </p>
</body>
</html>