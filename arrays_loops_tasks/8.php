<?php

echo "8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку.
-­1-2-­3-­4-­5-­6-­7-­8-­9-­".'<br>'.'<br>';

$array = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9
];

print_r($array);
echo '<br>'.'<br>';

foreach ($array as $item){
           echo '-'.$item;
};echo '-';