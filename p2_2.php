<?php

$k = readline("Введите количество дней : ");
if ($k % 3 == 0) {
    echo "Местоположение : GCV";
} else if ($k % 3 == 1) {
    echo "Местоположение : VGC";
} else if ($k % 3 == 2) {
    echo "Местоположение : CVG";
}