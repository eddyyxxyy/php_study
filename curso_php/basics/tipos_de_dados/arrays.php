<?php

// Arrays - Containers

$names = array('Edson', 'Silvana', 'Isa');
$names = ['Edson', 'Silvana', 'Isa'];

$data = [1, 'Edson', 2, 'Silvana'];

// print_r($data);  # Array ( [0] => 1 [1] => Edson [2] => 2 [3] => Silvana )

// Retorna os valores do array, indicando seu index
// var_dump($data);  # array(4) { [0]=> int(1) [1]=> string(5) "Edson" [2]=> int(2) [3]=> string(7) "Silvana" }

// Para acessar um dado:
// var_dump($data[3]);

// Para adicionar um elemento no array:
$data[4] = 'Isabela';

// Para contar o número de elementos no array:
$lenght = count($data);

// Para adicionar então:
$data[$lenght] = 'Last';
//var_dump($data);

// E também podemos adicionar ao final do array:
array_push($data, 'Teste');
//var_dump($data);

// E para adicionar no começo e empurar para a direita os outros elementos:
array_unshift($data, 'First');
//var_dump($data);

// E se quisermos criar índices específicos?
$person = [
    'name' => 'Edson',
    'age' => 22,
    'documents' => [
        'cpf' => '123.456.789-10',
        'rg' => '21.345.543-2'
    ]
];
var_dump($person['documents']['cpf']);