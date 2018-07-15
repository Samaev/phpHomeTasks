<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<p>24. Вам нужно разработать программу, которая считала бы количество вхождений
    какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
    442158755745 встречается 4 раза.</p>
<form action="" name="checking" method="POST">
    <label>Для проверки вхождения цифры</label>
        <p><input name="check" type="number" pattern="\d [0-9]"><br>
в число</p>
    <p><input name="digit" type="tel"  placeholder="Число будет проверено"></p>
    <p> <input name="send" type="submit"  value="Проверить"/></p>

</form>

</body>

</html>
<?php
$digit= $_POST['digit'];
$arr_check=str_split($digit);
$check= $_POST['check'];
$i=0;

foreach ($arr_check as $item){
    if ($check===$item)
        $i++;
}echo '<br>Цифра '.$check.' в числе '.$digit.' встречается '.$i.' раз (а) ';