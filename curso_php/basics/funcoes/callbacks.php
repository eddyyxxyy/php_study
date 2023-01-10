<?php

/*
 * Callbacks são funções passadas como parâmetro para outras
 * funções. Podem ser comparadas com HOFs, porém tem suas
 * diferenças.
 */

function teste($name)
{
    return "Olá, meu nome é $name";
}


function teste2($callback, $name)
{
    if (is_callable($callback))
    {
        return $callback($name);
    } else {
        return "$callback não é uma função callback";
    }
}

/*
 * Para Utilizarmos o callback precisamos informar o nome
 * da função como uma string.
 */

//echo teste2('teste', 'Edson');

//echo call_user_func('teste', 'Edson');

class User
{
    public static function teste($name, $age)
    {
        return "Olá, meu nome é $name e tenho $age anos.";
    }
}

$user = new User;

//echo call_user_func([$user, 'teste'], 'Edson', 22);

/*
 * Quando estamos trabalhando com objetos e queremos usar o
 * call_user_func() e queremos trabalhar com um método desse
 * objeto, chamamos um array como primeiro parâmetro do
 * call_user_func(), onde o primeiro valor é o objeto e o segundo
 * é o método, então, depois da vírgula, colocamos os argumentos do
 * método utilizado.
 */

/*
 * E claro, se o método for estático só precisamos chamar a classe,
 * não sua é necessária instânciar o objeto e depois chama-lo.
 */

function teste3($name)
{
    return "Olá, meu nome é $name.";
}

function teste4($callback, $name)
{
    return call_user_func($callback, $name);
}

echo teste4('teste', 'Edson');