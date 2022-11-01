<?php

// Booleans - true, false

$logged = false;

// code...

$name = !!'Edson';
$age = 22;
$logged = false;

if ($logged) {
    // code...
    echo 'É verdadeiro';
}

for ($i = 0; $i < 10; $i++) {
    echo $i;
}

if (!$logged && $name && $age) {
    echo 'O usuário está logado.';
} else {
    echo 'O usuário anos, não está logado.';
}