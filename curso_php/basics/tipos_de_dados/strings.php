<?php

// Strings - Tudo que está entre aspas simples ou duplas

$age = 22;
$name = "Edson {$age}";

// Utilizando aspas duplas podemos pegar os valores de uma variável
// Com aspas simples, não.

echo $name;

// Retorna o tamanho da string
echo strlen($name);

// Retorna um slice da string
echo substr($name, 0, 6);

// Retorna se a string contém determinado elemento -> PHP 8+
echo str_contains($name, 'Edson');