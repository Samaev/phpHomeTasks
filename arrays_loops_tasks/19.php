<?php
echo '19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day.'.'<br>'.'<br>';
$week = ['Воскресенье','Понедельник', 'Вторник','Среда','Четверг','Пятница','Суббота',];
$day=$week[date("w")];
foreach ($week as $item) {
    if ($item == $day)
        echo "<strong> {$item} </strong>";
    else echo $item.' ';
}