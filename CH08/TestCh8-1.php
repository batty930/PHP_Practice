<?php
class cart
{
    var $product;
    function add($name,$price)
    {
        $this->product[]=$name;
        $this->product[]=$price;
    }
    function show()
    {
        $c=count($this->product);
        for($i=0;$i<$c;$i+=2)
        {
            echo "產品:".$this->product[$i];
            echo "=>定價:".$this->product[$i+1]."<br>";
        }
    }
}
$order=new cart;
$order->add("鯊鯊","1000");
$order->add("象象","800");
$order->add("柴柴","750");
$order->show();
?>