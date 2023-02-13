<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./DiceGame.css"
    <title>DiceGame</title>
</head>
<body>
    <div class="space">
        <?php
        $dice=array("·","⁚","⁖","⁘","⁙","⁝⁝" );
        $d1=rand(0,5);
        $d2=rand(0,5);
        $d3=rand(0,5);
        $total=$d1+$d2+$d3+3;
        echo "<div>$dice[$d1]</div><br><div>$dice[$d2]</div><br><div>$dice[$d3]</div><br>";
        echo "=".$total."點";
        ?>
        <p>
        <a href="DiceGame.php">再來一次</a>
    </div>
</body>
</html>