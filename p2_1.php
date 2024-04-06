<?php 

$number_a = readline("Введите число a : ");
$number_b = readline("Введите число b : ");
function NOK( $number_a, $number_b ) {
    $NOD = $number_a;
    while ($NOD % $number_b != 0 ) {
        $NOD += $number_a;
    }
    return $NOD;
}
$nok = NOK( $number_a, $number_b );
echo "НОК чисел " . $number_a . " и " . $number_b . " = " . $nok;