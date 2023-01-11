<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    if (filter_var( $email, FILTER_VALIDATE_EMAIL)) {
        echo "E-mail válido!\n\n";
        var_dump($name, $email);
    } else {
        echo `"$email" não é um e-mail válido.`;
    }
}
