<?php

// Numbers - Int, Float (double)

// 34 -> int
// 34.45 -> double

//echo gettype(34);  # -> int
//echo gettype(34.45);  # -> double (float)

// Ao contrário do JavaScript, uma ‘string’ com um número dentro pode
// ser usado para operações aritméticas, em vez de concatenar os valores.

//$number1 = '34';
//echo $number1 + 56;  # -> 90

// Mas se colocarmos um valor de texto, 'Edson', aí teremos o erro: non-numeric value

// Para verificarmos se um valor é numérico ou não, utilizamos a função is_numeric()

//$number1 = 34;
//$number2 = '44';

//if (is_numeric($number1) && is_numeric($number2)) {
//    echo 'São numéricos.';
//} else {
//    echo 'Não são numéricos.';
//}

// Mesmo o número estando em uma ‘string’, ele é identificado como numérico.

// Com a função ceil(), arredondamos pra cima

$number1 = 34.12737;
echo ceil($number1);
echo ' ';
echo floor($number1);