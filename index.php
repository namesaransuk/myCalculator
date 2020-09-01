<?php
include "calculator.php";

$cal = new Calculator();
echo "4*1 = ".$cal->mutiply(4,1)."<br>";
echo "4*1 = ".$cal->add(4,1)."<br>";
echo "4*1 = ".$cal->subtract(4,1)."<br>";
echo "4*1 = ".$cal->divide(4,1)."<br>";
?>