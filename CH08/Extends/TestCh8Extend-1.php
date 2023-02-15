<?php
class transport
{
    var $name;
    function __construct()
    {
        $this->name="腳踏車";
    }
    function setName($n)
    {
        $this->name=$n;
    }    
    function getName()
    {
        return $this->name;
    }
}
    class bike extends transport
    {
        function show($s)
        {
            echo $s."個輪子";
        }
    }
?>