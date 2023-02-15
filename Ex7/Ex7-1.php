<?php
if($_FILES["upload"]["size"]>0)
    
{
    echo "上傳檔案名稱:".$_FILES["upload"]["name"][$i];
	echo "<br>";
	echo "檔案大小:".$_FILES["upload"]["size"][$i]."位元";
	echo "<br>";
	echo "檔案類型:".$_FILES["upload"]["type"][$i];
	echo "<br>";
	echo "暫存檔路徑:".$_FILES["upload"]["tmp_name"][$i];
	echo "<br> <hr>檔案結果:";
    if(copy($_FILES["upload"]["tmp_name"],$_FILES["upload"]["name"]))
        echo "上傳成功!";
    else
        echo "檔案超過20000位元或類型錯誤!";
}
?>