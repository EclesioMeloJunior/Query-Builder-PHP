<?php

require __DIR__.'/vendor/autoload.php';
new App\Builder\MySqlBuilder;

$config = [
    'dsn'   => 'mysql:host=localhost;dbname=php_dp',
    'user'  => 'root',
    'pass'  => ''
];

App\DbSingleton::configure($config);
