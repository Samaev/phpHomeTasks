<?php

echo "15. Дан массив \$arr. С помощью цикла foreach и переменной \$count подсчитайте количество
элементов этого массива. Проверьте работу скрипта на примере массива с элементами 4, 2,
5, 19, 13, 0, 10.".'<br>'.'<br>';

$arr=[4, 2, 5, 19, 13, 0, 10];
print_r($arr);
$count=0;
foreach ($arr as $item){
    $count++;
}
echo '<br>'.'Количество элементов в массиве - '.$count;
$count=count($arr);
echo '<br>'.'Проверка с помощью функции - '.$count;