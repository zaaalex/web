<?php

function increaseEnthusiasm($s){
    return str_pad($s,strlen($s)+1, "!");
}

$n=increaseEnthusiasm("String");
echo $n;