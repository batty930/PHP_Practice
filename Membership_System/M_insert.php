<?php
include("M_db.php");
include("M_checkform.php");
include("M_double.php");
?>
<?php
$sql="INSERT user(id,password,email,sex,address,tel) VALUES('$id','$password','$email','$sex','$address','$tel')";

if($conn->query($sql)===true)
{
echo $id.$sex."歡迎您的加入!";
}
?>
<link rel="stylesheet" href="./style.css">
<p>
<a href="M_login.php">回到登入頁面</a>