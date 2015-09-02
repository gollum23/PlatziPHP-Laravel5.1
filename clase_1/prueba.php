<?php
require_once 'vendor/autoload.php';

$user = new \PlatziPHP\Author('test@test.com', 1234);

$user->setName('Diego', 'Forero');

echo $user->getFirstName();
echo $user->getLastName();
echo PHP_EOL; // Salto de linea en consola

// Muestra en pantalla la variable
//var_dump($user);