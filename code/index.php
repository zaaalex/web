<?php

$mas=[];


for ($i=0;$i<3;++$i){
    $temp_mass=[];
    for ($j=0;$j<3;++$j){
        $temp_mass[$j]=$i*3+$j;
    }
    $mas[$i]=$temp_mass;
}

print_r($mas);
