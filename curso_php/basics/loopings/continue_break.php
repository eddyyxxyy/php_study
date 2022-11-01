<?php

$names = ['Edson', 'Isabela', 'Silvana', 'Roberto'];

for ($i = 0; $i < count($names); $i++) {
    if ($i == 3) {
        continue;
    }
    echo $names[$i] . "<br/>";
}

for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . "<br/>";
    if ($i == 2) {
        break;
    }
}