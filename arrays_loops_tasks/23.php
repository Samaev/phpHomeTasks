<?php
echo '23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6.'.'<br>'.'<br>';

$summa=$_POST['summa'];
for ($i=0;$i<=strlen($summa); $i++){
    $answer[]=substr($summa, $i,1);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" title="Посчитать сумму">
</head>
<body>
<form action="" name="sum" method="POST">
    <p style="color: blue">Для суммы цифр введите число</p><br>
    <input name="summa" type="number" value="Введите число" placeholder="Число будет просуммировано"/><br>
    <input name="send" type="submit"  value="Отправить"/>

</form>

</body>

</html>
<?php
echo 'Вы вводили - '.$_POST['summa'].'<br>';
$a=array_sum($answer);
echo 'Сумма цифр введенного числа - '.$a;