<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_FILES);
} else {
    echo 'Não há arquivo.';
}
