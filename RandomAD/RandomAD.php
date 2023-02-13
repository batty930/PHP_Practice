<?php header("refresh:10");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>隨機廣告</title>
</head>
<body>
    <?php
    $n=rand(1,3);
    if($n==1)
    $url="<a href=https://www.pinkoi.com/search?q=%4024-fast-delivery-tw&landing_page=24-fast-delivery-tw&ref=herobanner><img src=ad$n.jpg></a>";
    if($n==2)
    $url="<a href=https://www.pinkoi.com/search?q=%40crystalacc-25-off&ref=herobanner><img src=ad$n.jpg></a>";
    if($n==3)
    $url="<a href=https://www.pinkoi.com/search/?q=%40food-strawberry&ref=herobanner><img src=ad$n.jpg></a>";
    echo $url;
    ?>
</body>
</html>