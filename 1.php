<?php

echo "1.Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.".'<br>'.'<br>';
$array=[
    'html',
    'css',
    'php',
    'js',
    'jq'
];
print_r($array);
echo '<br>'.'<br>';
foreach ($array as $key=>$item){
    echo $item.'<br>';
