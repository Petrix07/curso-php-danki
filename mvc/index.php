<?php

/**
 * Autoload utilizado para carregar as classes nem a necessidade de include
 */
$autoload = function ($class) {
    include($class . '.php');
};

spl_autoload_register($autoload);

$app = new Application();
$app->executar();


