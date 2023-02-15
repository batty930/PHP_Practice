<?php
include("Ex8Class.php");
$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["p3"];
$order=new cart;
$order->add("鯊鯊","1000",$p1);
$order->add("象象","800",$p2);
$order->add("柴柴","750",$p3);
$order->show();
?>