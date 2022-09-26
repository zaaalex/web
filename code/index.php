<?php

function str($count){
    $s="x";
    return str_repeat($s,$count);
}

for ($i=0;$i<10;++$i){
    $vivod=str($i);
    echo $vivod, "\n";
}


