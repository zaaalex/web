<?php

function print_array($mas, $current){
    if ($current!= count($mas)) {
        echo $mas[$current], " ";
        print_array($mas, $current + 1);
    }
}

$mas=array(1,2,5,4,5);
print_array($mas,0);





