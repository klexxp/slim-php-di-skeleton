<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);

require APP_ROOT . '/../vendor/autoload.php';

// Init Slim with PHP-DI
$app = new App\App();

// Register middleware
require APP_ROOT . '/middleware.php';

// Register routes
require APP_ROOT . '/routes.php';
