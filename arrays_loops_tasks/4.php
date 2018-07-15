<?php

echo "4. Дан массив \$arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
помощью второго — столбец элементов.
\$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой')?".'<br>'.'<br>';

$arr=array('green'=>'зеленый',
    'red'=>'красный',
    'blue'=>'голубой'
);

print_r($arr);

echo '<br>'.'<br>';
foreach ($arr as $key=>$value){
    echo $key.'<br>';}
foreach ($arr as $key=>$value){
    echo $value.'<br>';}