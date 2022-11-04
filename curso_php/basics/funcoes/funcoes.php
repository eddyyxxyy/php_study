<?php

function connection(): PDO
{
    return new PDO(
        'mysql:host=localhost;dbname=test',
        'eddyxide',
        'leandoer'
    );
}

function get_data($table): bool|array
{
    $connection = connection();
    $query = $connection->query("SELECT * FROM $table");
    $query->execute();
    return $query->fetchAll();
}

var_dump(get_data('users'));