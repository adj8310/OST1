<?php
$a=(int)readline('Enter a number a:');
$b=(int)readline('Enter a number b:');
$c=(string)readline('Enter an operator:');

switch($c)
{
    case '+':
        echo $s=$a+$b;
    break;
    case '-':
        echo $s=$a-$b;
    break;
    case '*':
        echo $s=$a*$b;
    break;
    case '/':
        echo $s=$a/$b;
    break;
    default: 
    echo 'Please enter a valid operator.';
}
?>