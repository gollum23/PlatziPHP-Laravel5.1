<?php
use Illuminate\Container\Container;
use PlatziPHP\Application;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Application(
    new Container()
);

$app->run();


