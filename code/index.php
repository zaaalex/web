<?php

function increaseEnthusiasm($s)
{
    return str_pad($s, strlen($s) + 1, "!");
}

function repeatThreeTimes ($s){
    return str_repeat($s,3);
}

$n=increaseEnthusiasm(repeatThreeTimes("String"));
echo $n;