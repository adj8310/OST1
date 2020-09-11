<?php
$a=(int)readline('Enter a number a:');
$b=(int)readline('Enter a number b:');
$c=(string)readline('Enter an operator');
echo "Entered integer a is ".$a
    ."Entered integer b is ".$b
    ."Entered operator c is ".$c;
if($c=="+")
{
    $s=$a+$b;
    echo "The sum is ".$s;
}
?>