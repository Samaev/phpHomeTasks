<?php

echo "11. Выведите столбец четных чисел в промежутке от нуля до 100.".'<br>'.'<br>';

for ($i=0; $i<=100; $i++)
echo($i ? $i%2=0 : false).'<br>';