<?php
if(file_exists("counter.txt"))
{
    $fp=fopen("counter.txt","r+");
    $counter=fgets($fp);
    $counter++;             //計數器加一
    fseek($fp,0);           //從最前面讀取
    fputs($fp,$counter);    //將$counter值寫入檔案
    fclose($fp);
}
else
{
    $fp=fopen("counter","w");   //檔案不再建立新檔
    $counter=1;                 //設定初始值1
    fputs($fp,$counter);
    fclose($fp);
}
?>
您是第<?php echo $counter;?>位訪客