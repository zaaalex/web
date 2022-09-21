<?php

function printStringReturnNumber(){
    echo "я пишу строку и возвращаю число ";
    return 5;
}

$n=printStringReturnNumber();
echo $n;