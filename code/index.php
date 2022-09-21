<?php
$mas=[];

$q=30;

for ($i=1;$i<=$q;++$i){
    if ($q%$i==0) array_push($mas,$i);
}

print_r($mas);