<?php

function repeatThreeTimes ($s){
    return str_repeat($s,3);
}

$n=repeatThreeTimes("String");
echo $n;