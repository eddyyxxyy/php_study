<?php

$names = ['Edson', 'Isabela', 'Silvana', 'Roberto'];

foreach ($names as $name) {
    echo "{$name}<br/>";
}

foreach ($names as $key => $name) {
    echo "{$key} -> {$name}<br/>";
    if ($key == count($names) - 1) {
        echo "<br/>";
    }
}
