<?php

use App\DbSingleton;

require __DIR__.'/vendor/autoload.php';

/*
$director = new App\Builder\UsersDirector($builder);
$sql = $director->all();

$bank = new App\Models\Bank($builder);
$sql = $bank->all();

var_dump($sql);*/

$builder = new App\Builder\MySqlBuilder;
$bank = new App\Models\Bank($builder);

// $pdo = new \PDO('mysql:host=localhost;dbname=php_dp', 'root', '');
// $db = new  App\Db($pdo);

// $db->setDirector($bank);
// $data = $db->get()->execute();

$config = [
    'dsn'   => 'mysql:host=localhost;dbname=php_dp',
    'user'  => 'root',
    'pass'  => ''
];

App\DbSingleton::configure($config);
$db = App\DbSingleton::getInstance();

$db->setDirector($bank);
$data = $db->get()->execute();

var_dump($data->fetchAll());
