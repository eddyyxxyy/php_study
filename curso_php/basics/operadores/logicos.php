<?php

// &&(and), ||(or), !
// Sempre retornam boolean, mas precisam comparar valores boolean também.

$can_access = true;
$is_older = false;

$result = $can_access && $is_older; # true AND false
var_dump($result); # false

$result = $can_access || $is_older; # true OR false
var_dump($result); # true

var_dump(!$can_access); # Transforma true em false
var_dump(!$is_older); # Transforma false em true

// A dupla exclamação torna os valores em Truthy e Falsy
// Que são valores que se comportam como boolean, mas não são

$name = 'Edson';
var_dump(!!$name); # true
$name = '';
var_dump(!!$name); # false