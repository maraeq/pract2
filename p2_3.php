<?php

function ch1($number_n){
    if ($number_n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number_n); $i++){
        if ($number_n % $i == 0) {
            return false;
        }
    }
    return true;
}
function ch2($input_n){
    $number_n = strval($input_n);
    $vz_num = str_split($number_n);
    sort($vz_num);
    $yb_num = $vz_num;
    rsort($yb_num);
    $vz_num = intval(implode($vz_num));
    $yb_num = intval(implode($yb_num));
    if ((ch1($vz_num)) && (ch1($yb_num))) {
        return "Yes";
    } else {
        return "No";
    }
}
$input_n = readline("Введите число : ");
$res = ch2($input_n);
echo "Простое ли число " . $input_n . " Ответ : " . $res;