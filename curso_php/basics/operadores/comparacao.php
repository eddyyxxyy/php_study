<?php

// Operadores de comparação sempre retornam true ou false
// <, >, <=, >=, !=, !==,

//$result = 30 <= 50;

// Se for true, ele retornará 1, se for false, retornará NADA.
// Para pegarmos o valor boolean, devemos utilizar var_dump()

//var_dump($result);  // bool(true)

// Para trabalharmos com o operador de diferença fazemos:

//$result = 30 != '40';
//var_dump($result);

// != -> Verifica se o valor é diferente
// !== -> Verifica se o valor é diferente OU o tipo de dado é diferente

// Para trabalharmos com igualdade fazemos:

// == -> Verifica se o valor é igual
// === -> Verifica se o valor é igual E o tipo é igual

$result = 30 == '30';
var_dump($result);  # true

$result = 30 === '30';
var_dump($result);  # false