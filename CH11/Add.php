<?php header("location:View.php");?>
<?php
include("DB.php");
$name=$_POST["name"];
$mail=$_POST["mail"];
$subject=$_POST["subject"];
$content=$_POST["content"];
$insert=$con->exec("INSERT guestbook(name,mail,subject,content,putdate)
VALUES('$name','$mail','$subject','$content',now())");
$con->query($insert);
?>