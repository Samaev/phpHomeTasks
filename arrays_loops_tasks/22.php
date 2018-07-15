<?php
echo '22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx</p>'.'<br>'.'<br>';
echo 'Решение'.'<br>';

$x="XX";
$i=0;
$b = "";
while($i<5){
    echo $x.$b."<br>";
    $b=$x.$b;
    $i++;
}