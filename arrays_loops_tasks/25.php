
<?php
echo '25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.';
$rand_array = array();
for ($j = 0; $j < 10; $j++) {
    $rand_array[]=rand(1,100);
}
echo implode(' ',$rand_array);
$max=max($rand_array);
$min=min($rand_array);
echo "<br>Минимальное значение для замены - ".$min."<hr>";
echo "<br>Максимальное значение для замены - ".$max."<hr>";

$arr_min=array_search($min, $rand_array);
$arr_max=array_search($max, $rand_array);

$rand_array[$arr_min]=$max;
$rand_array[$arr_max]=$min;


echo 'Результытивный массив - '.implode(' ',$rand_array);
