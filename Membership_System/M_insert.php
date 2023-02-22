<?php
include("M_db.php");
include("M_checkform.php");
include("M_double.php");
?>
<?php
$sql="INSERT user(id,password,email,sex,address,tel) VALUES('$id.','$password','$email','$sex','$address','$tel')";

$result=$conn->query("SELECT * from user order by no desc limit 0,1");
$rows = $result->fetch(PDO::FETCH_NUM)[0];
if(list($no,$id,$password,$email,$sex)=$rows)
{
echo $id.$sex."歡迎您的加入!";

$subject=$id."歡迎您的加入";
$body="您好：\n
       您的帳號是 $id \n
       密碼是$password\n歡迎您的加入";
$from="FROM:liaojs014966@gmail.com";
mail($email,$subject,$body,$from);
}
?>