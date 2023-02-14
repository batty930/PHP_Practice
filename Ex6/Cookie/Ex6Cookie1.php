<?php
setcookie("A", "", time()-1800);
echo $_COOKIE["A"];
?>