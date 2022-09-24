<?php

$mas=[[1,2,3],[4],[5,6]];
$sum=0;

foreach ($mas as $m) {
foreach ($m as $element){
    $sum+=$element;
}
}

echo $sum;


