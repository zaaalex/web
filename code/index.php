<?php
$mas=array(1,2,3,4,5,6,7,8,9,10);

$sum=0;$i=0;
while ($sum<10){
    $sum+=$mas[$i];
    $i++;
}

print_r($i);