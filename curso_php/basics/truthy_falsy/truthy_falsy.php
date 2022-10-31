<?php

// Falsy
// null............// null
// 0...............// integer
// 0.0.............// float
// "0".............// string
// ""..............// empty string
// array().........// empty array

// Falsy são valores que se comportam como false, mas não são boolean.
// E Truthy, é tod0 o resto

var_dump(!!null);  # bool(false)
var_dump(!!0);  # bool(false)
var_dump(!!0.0);  # bool(false)
var_dump(!!"0");  # bool(false)
var_dump(!!"");  # bool(false)
var_dump(!!array());  # bool(false)

if (!!0) {
    echo 'Isso memo.';
}