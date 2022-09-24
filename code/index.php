<?php

function suum($c)
{
    $sum = 0;
    while ($c > 0) {
        $sum += $c % 10;
        $c = intdiv($c,10);
    }
    return $sum;
}

$c=999;
while ($c>10){
    $c=suum($c);
}

echo $c;



