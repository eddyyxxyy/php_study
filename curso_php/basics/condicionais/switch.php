<?php

// Diferente dos if/else, o switch verifica os valores

//$name = 'Edson';
//$name = 'Isa';
//$name = 'João';
$name = 'Silvana';

switch ($name) {
    case 'Edson':
        echo 'É Edson';
        break;
    case 'Isa':
        echo 'É Isa';
        break;
    case 'João':
        echo 'É João';
        break;
    default:
        echo 'Não é nenhum';
        break;
}
