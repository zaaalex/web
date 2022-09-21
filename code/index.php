<?php
$st=pow(2,10);
$st=sqrt(245);
$arr=array(4,2,5,19,13,0,10);
$sum=0;
foreach ($arr as $value)
{
 $sum+=$value;
}
unset($value);

echo sqrt($sum);