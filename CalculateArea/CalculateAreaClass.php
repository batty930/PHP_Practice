<?php
class area
{
    var $A;
    function num($length,$width)
    {
        $this->A[]=$length;
        $this->A[]=$width;
    }

    function count_area()
    {
        $i=0;
        $v=$this->A[$i]*$this->A[$i+1];
        echo "面積為 $v";
    }
}
?>