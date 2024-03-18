<?php

$n = 5;
$list = [];
$happy = 'Mamma mia!';
$satisfied = 'Mamma mia!!';
$angry = 'Mamma mia!!!';
for ($i = 0; $i < 1; $i++){
    $a = readline();
}
$list = explode(' ', $a);
$result = [];

foreach ($list as $item){
    $result[] = intval($item);
}


$counter = 0;

foreach ($result as $item) {
    if ($item >= 80){
        $counter += 1;
    }
}

if ($counter >= 3){
    echo $happy;
}elseif ($counter ==1 || $counter == 2){
    echo $satisfied;
}else{
    echo $angry;
}


