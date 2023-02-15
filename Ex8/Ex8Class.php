<?php
class cart
{
    var $product;
    function add($name,$price,$count)
    {
        $this->product[]=$name;
        $this->product[]=$price;
        $this->product[]=$count;
    }
    function show()
    {   $sum=0;
        $c=count($this->product);
        for ($i=0;$i<$c;$i+=3)
        {
            echo "產品:".$this->product[$i]."=>";
            echo "定價:".$this->product[$i+1]."*".$this->product[$i+2]."個<br>"; 
            $sum+=$this->product[$i+1]*$this->product[$i+2];
        }
        echo "<hr>總金額:".$sum;
    }
}
?>