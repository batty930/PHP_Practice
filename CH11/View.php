<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>列出所有留言</title>
</head>
<body>
    <a href="Board.php">來來來!踹共</a><p>
    <?php
    //計算資料筆數
    include("DB.php");
    $rows=$con->query("select * from guestbook");
    $total=mysqli_num_rows($rows);
    $show=ceil($total/5);   //每頁顯示5筆
    echo "共".$total."筆留言<p>";
    echo "請選擇頁數";
    for($i=1;$i<=$show;$i++)
    {
        echo "<a href=View.php?page=$i>$i</a>";
    }
    echo "<br>";
    //跳頁顯示
    echo "<a href=View.php?page=1>第一頁|</a>";
    if($page>1)
    {
        $pre=$page-1;
        echo "<a href=View.php?page=$pre>上一頁|</a>";
    }
    if($page<$show)
    {
        $next=$page+1;
        echo "<a href=View.php?page=$next>下一頁|</a>";
    }
    if($show>=3)
        echo "<a href=View.php?page=$show>最後一頁</a>";
    echo "目前在第".$page."頁";

    //查詢欄位資料
    $page=$_GET["page"];       //$_GET取得頁數
    if(empty($page)) $page=1;  //如果$page為空則設定為1
    $start=5*($page-1);        //讀取起點=讀取筆數*(頁數-1)
    $sql=$con->prepare("SELECT * FORM guestbook ORDER BY no DESC LIMIT $start,5"); //依no做遞減排序
    $sql->execute();
    $result=$con->query($sql);

    //顯示資料庫資料
    
    while (list($no,$name,$mail,$subject,$content,$putdate)=mysqli_fetch_row($result))
    {
        echo "留言主題:".$subject;
        echo "<br>訪客姓名:".$name;
        echo "<br>E-mail:<a href=mailto:mail>".$mail."</a>";
        echo "<br>留言內容:".nl2br($content);
        echo "<br>留言時間:".$putdate;
        echo "<hr>";
    }
    ?>
</body>
</html>
