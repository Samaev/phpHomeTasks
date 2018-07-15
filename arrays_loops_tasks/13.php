<?php

echo "13. Вывести таблицу умножения".'<br>'.'<br>';

$cols=9;
$rows=9;
$tr=1;

echo "<table border='1'>" ;

while($tr<=$rows){
    echo "<tr>" ;
    $td=1;
    while ($td<=$cols){
        echo "<td>".$tr*$td."</td>";
        $td++;
    }
    echo "</tr>";
    $tr++ ;
}
echo "</table>" ;
