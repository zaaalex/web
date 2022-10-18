<?php

/*Напишите регулярку, которая найдет строки 'abba', 'adca',
'abea' по шаблону: буква 'a', два любых символа, буква 'b'.
Пример строки: $str = 'ahb acb aeb aeeb adcb axeb'*/

$str='ahb acb aeb aeeb adcb axeb';
$reg='#a.b#';
echo preg_replace($reg, '', $str);