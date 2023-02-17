<?php header("location:View.php");?>
<?php
include("DB.php");
$name=$_POST["name"];
$mail=$_POST["mail"];
$subject=$_POST["subject"];
$content=$_POST["content"];
$sql=$pdo->prepare("INSERT guestbook(name,mail,subject,content,putdate)
VALUES('$name','$mail','$subject','$content',now())");
$sql->execute();
$pdo->prepare($con,$sql);
?>