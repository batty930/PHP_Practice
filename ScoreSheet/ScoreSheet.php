<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>成績表</title>
</head>
<body>
    <table border="1">
        <td>姓名<td>英文<td>國文<td>數學<td>總分<td>平均
        <?php
        function score($p,$en,$ch,$ma)
        {
            $total=$en+$ch+$ma;
            $avg=$total/3;
            echo "<tr>";
            echo "<td> $p";
            echo "<td>$en";
            echo "<td>$ch";
            echo "<td>$ma";
            echo "<td>$total";
            echo "<td>";
            printf("%0.1f",$avg);
        }
        $p=array("鯊鯊","象象","跑山豬","柴柴");
        $en=array("98","94","92","90");
        $ch=array("99","96","94","91");
        $ma=array("100","97","95","88");
        for($i=0;$i<count($p);$i++){
            score($p[$i],$en[$i],$ch[$i],$ma[$i]);
        }
        ?>
    </table>
</body>
</html>