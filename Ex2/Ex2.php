<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2</title>
</head>
<body>
    1.
    <p>
        <table border="1" width="500">
        <?php
        $a=array(array("產品","成本","售價"),
		    	array("西瓜","60","68"),
		    	array("香蕉","50","55"),
		    	array("蘋果","12","18"));
                for($i=0;$i<=3;$i++)
            {   
                echo "<tr>";
                for($x=0;$x<=2;$x++)
                echo "<td>".$a[$i][$x];
            }
        ?>
        </table>
    </p>
    <br>
    2.
    <p>
        <table border="1" width="500">
        <tr>
        <td align="left" width="50%">
        <h2 align="center" >上半年度銷售統計表</h2>
        <?php
            $b=array(100,32,54,23,45,58);
            foreach($b as $k => $v)
            {
                echo ($k+1)."月";
                echo "<img src=line.png width=$v height=15>".$v."箱<p>";
            }
            echo "<p align=right>上半年度總銷售量為:".array_sum($b);
        ?>
        </td>
        </tr> 
        </table> 
    </p>
    <br>
    3.
    <p>
        <?php
            $c=array("This","is","a","book");
            echo "排序前:<br>";
            foreach($c as $v)
            echo $v."&nbsp";
            echo "<br>";
            sort($c);
            $r=array_search("book",$c)+1;
            echo "使用sort排序後<br>";
            foreach($c as $v)
            echo $v."&nbsp";
            echo "<br>";
            echo "<br>book在陣列的第".$r."的位置";
        ?>
    </p>

</body>
</html>