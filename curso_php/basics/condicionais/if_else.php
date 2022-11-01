<?php

// if e else

$is_admin = true;

//if ($is_admin) {
//    echo 'Is admin!';
//}

$number0 = 50;
$number1 = 40;

//if ($number0 < $number1) {
//    echo $number0 . ' is lesser than ' . $number1;
//} else {
//    echo $number0 . ' is greater than ' . $number1;
//}

// Porém, desta forma o código pode ficar sujo.
// Podemos refatorar da seguinte forma:

//if ($number0 > $number1) {
//    echo $number0 . ' is lesser than ' . $number1;
//    return;
//}
//echo $number0 . ' is greater than ' . $number1;

// Ou, ainda podemos utilizar operadores ternários:

echo ($number0 > $number1) ? $number0 . ' is lesser than ' . $number1 : $number0 . ' is greater than ' . $number1;