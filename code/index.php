<?php

/*Пусть в переменной $age хранится число. Если это число меньше 10 или
больше 99, то выведите на экран сообщение об этом. Если же число
попадает в указанный диапазон, то найдите сумму цифр этого числа.
Если полученная сумма меньше или равна 9, то выведите на экран
сообщение о том, что сумма цифр однозначна, в противном случае
выведите сообщение о том, что сумма цифр двузначна.*/

function sum($c){
    $s=0;
    while ($c>0){
        $s+=$c%10;
        $c=intdiv($c, 10);
    }
    return $s;
}

$age=58;

if ($age<10 || $age>99) echo "<10 || >99";
else {
    $ss=sum($age);
    if ($ss<=9) echo "Однозначна";
    else echo "Неодозначна";
}

