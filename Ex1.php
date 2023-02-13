<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX1</title>
</head>
<body>
    <center>月曆</center>

    <table align="center" border="1" width="50%">
    <tr>
        <?php 
        $week = array ('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
        foreach($week as $value)
        {
            echo "<td>$value</td>";
        }
        ?>
    </tr>
    <?php        
            for($x=1;$x<=31;$x++)
            {   
                if($x%7==0||$x%7==1)
                echo "<td bgcolor=#93E3D0>$x.</td>";
                else
                echo "<td>$x.</td>";
                
                if($x%7==0)
                    echo "<tr>";
            }
    ?>

    </table>

</body>
</html>