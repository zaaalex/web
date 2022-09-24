<?php

function arrayfill($s, $count){
    $mas=[];
    for ($i=0;$i<$count;++$i){
    $mas[$i]=$s;
    }

    return $mas;
}

print_r(arrayfill("#",5));



