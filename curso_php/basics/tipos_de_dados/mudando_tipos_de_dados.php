<?php

// Mudando tipos de dados:

// Métodos:

// (string)
// (boolean)
// (float)
// (integer)
// (double)
// (object)
// (array)
// intVal
// floatVal
// doubleVal
// strVal
// boolVal

// String to bool

$name = 'Edson';

$change = (boolean) $name;
$change = boolval($name);

//var_dump($change);


// Number to string

$number = 34;

$change = (string) $number;
$change = strval($number);

//var_dump($change);


// Int to double

$number = 34.95;

$change = (integer) $number;
$change = intval($number);

//var_dump($change);


// Array to object

$person = ['name' => 'Edson', 'age' => 22];

$change = (object) $person;

//var_dump($change->name);


// Object to array

class Person
{
    private $name;
    public function teste()
    {
        return "teste";
    }
}

$person = new Person;

$change = (array) $person;

var_dump($change);