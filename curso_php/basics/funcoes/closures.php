<?php

/*
O que está ocorrendo abaixo é a atribuição de uma função
anônima, uma função sem nome, à variável $person.
Quando implementamos funções anônimas, precisamos colocar ';'
no final da declaração. Uma função anônima, sem nome, é uma Closure.
*/

//$person = function() {
//
//};

//var_dump($person());

//class Person
//{
//    public function __invoke()
//    {
//        return 'teste';
//    }
//}
//
//$person = new Person;

/*
Agora, podemos chamar a var $person com (), pois a classe
que ele herda tem o método mágico __invoke().

Por isso que, no primeiro exemplo onde implementamos uma
Closure, podemos dar $person(), pois toda Closure possui
o método __invoke().
*/

//$person = function($name)
//{
//    return $name;
//};
//
//var_dump($person('Edson'));

function teste($name): Closure
{
    $person = function () use($name): string
    {
        return $name;
    };

    return $person;
}

var_dump(teste('Edson')());

/*
Para passar o valor do parâmetro para a Closure,
precisamos utilizar a função use().
*/