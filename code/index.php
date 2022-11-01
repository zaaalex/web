<?php

/*Дана строка с целыми числами 'a1b2c3'. С помощью
регулярки преобразуйте строку так, чтобы вместо этих
чисел стояли их кубы.*/

function cube($seach)
{
    return $seach[0] ** 3;
}

echo preg_replace_callback('#(\d+)#', 'cube', 'a1b2c3');