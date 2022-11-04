<?php

$_SESSION['name'] = 'Edson';

session_start();
//session_regenerate_id();
//session_destroy();

echo session_id();

echo $_SESSION['name'];