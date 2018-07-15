
<?php
echo "27. Создать генератор случайных таблиц. Есть переменные: \$row - кол-во строк в таблице, 
\$cols - кол-во столбцов в таблице. Есть список цветов, в массиве: 
\$colors = array('red','yellow','blue','gray','maroon','brown','green'). 
Необходимо создать скрипт, который по заданным условиям выведет таблицу размера \$rows на \$cols, 
в которой все ячейки будут иметь цвета, выбранные случайным образом из массива \$colors. 
В каждой ячейке должно находиться случайное число. 

Пример результата";
$rows=rand(5,11);
$cols=rand(5,11);
$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo '<table border="2">';
for($tr=1;$tr<=$rows;$tr++){
    echo '<tr>';
    for($td=1;$td<=$cols;$td++){
        $number=rand();
        $i=$colors[rand(0,count($colors)-1)];
        echo "<td style='background-color:{$i}'>".$number.'</td>';
    }
    echo '</tr>';
}
echo '</table>';
