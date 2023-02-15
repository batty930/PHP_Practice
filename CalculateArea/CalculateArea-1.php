<?php
$length=$_POST["length"];
$width=$_POST["width"];
$show=new area;
$show->num($length,$width);
echo $show->count_area();
?>