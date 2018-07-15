<?php

echo "2. Дан массив с элементами 1, 20, 15, 17, 24, 35. 
С помощью цикла foreach найдите сумму элементов этого массива. 
Запишите ее в переменную \$result.".'<br>'.'<br>';

$array=[
    1,
    20,
    15,
    17,
    24,
    35
];
print_r($array);
$result=0;
echo '<br>'.'<br>';
foreach ($array as $item){
     $result=$item+$result;}
echo 'Сумма элементов масиива: '.$result.'<br>';