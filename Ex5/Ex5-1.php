<?php
$name=$_POST["name"];
$shark_baby=$_POST["shark_baby"];
$boar_mt=$_POST["boar_mt"];
$sum=$shark_baby=$_POST["shark_baby"]*500+$boar_mt=$_POST["boar_mt"]*300;
echo $_POST["name"]."您好:<br>您的訂購清單為:<p>鯊鯊與天線寶寶 <nl2br> X".$_POST["shark_baby"]."<br>跑山豬愛爬山 <nl2br> X".$_POST["boar_mt"]."<br>總共<br><hr>".$sum."元";

?>
