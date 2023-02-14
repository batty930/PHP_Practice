<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./4-1.css">
    <title>Ex4</title>
</head>
<body>
    <p></p>
    1.
    <p>
    <div class="space">
        <?php
        $suits=array("♣","♠","♥","♦" );
        $s1=rand(0,3);
        $s2=rand(0,3);
        $card1=rand(1,10);
        $card2=rand(1,10);
        echo "電腦:<div> $suits[$s1] $card1 </div><br> 參賽者:<div> $suits[$s2] $card2</div><br>";
        ?>
        <p>
        <a href="Ex4.php">再比一次</a>
    </div>
    </p>
    <br>
    2.
    <p>
    <?php
    function sum($n){
        $sum=0;
        for($i=1;$i<=$n;$i++){
            $sum=$sum+$i;
        }  
    echo "1+2+3+..+ $n =".$sum."<p>";
    }
    ?>
    <?php
    sum(10);
    sum(50);
    sum(100);
    ?>
    </p>
    <br>
    3.
    <p>
    <?php
    $t=getdate();
    echo "今年是".$t["year"]."年的第".date("z")."天<br>";
    $now=date("z");
    $end=365-$now;
    $left=$end-$now;
    $left=intval($left);
    echo "距離".$t["year"]."年的最後一天，還剩".$left."天";
    ?>
    </p>
    <br>
    4.
    <p>
    起床時，第一件事情是什麼?
    <p>
    <form method="post" action="Ex4-0.php">
        <input type="radio" name="up" value="Ex4-1.php">坐在床上，等待回神
        <br>
        <input type="radio" name="up" value="Ex4-2.php">繼續賴床
        </p>
        <p>
        <input type="submit" name="send" value="確定">
    </form>
    </p>
    <br>
    5.
    <p>
    <?php
    $X=array(array("50","51","52"),
             array("60","61","62"),
             array("70","71","72"),
             array("80","81","82"));
    $s=0;
    for($i=0;$i<=3;$i++){
         $s+=array_sum($X[$i]);
    }
    echo "$s"; 
    ?>
    </p>
</body>
</html>