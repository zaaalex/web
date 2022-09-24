<?php

function increaseEnthusiasm($s)
{
    return str_pad($s, strlen($s) + 1, "!");
}

function repeatThreeTimes ($s){
    return str_repeat($s,3);
}

function cut($s, $count=10){
return mb_strimwidth($s,0,$count);

}

$n=cut(increaseEnthusiasm(repeatThreeTimes("String")));
echo $n;