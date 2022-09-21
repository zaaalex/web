<?php
$a=4;
$b=58;
echo abs($b-$a);

$mas=array(1,2,-1,-2);
for ($i=0;$i<count($mas);++$i){
    $mas[$i]=abs($mas[$i]);
}

print_r($mas);