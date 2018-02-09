<?php

namespace App;

use PDO;

class DbSingleton {

    protected static $config;
    protected static $instance;

    protected function __construct() { }

    protected function __clone() { }

    protected function __wakeup() { }

    public static function configure(array $config) {
        self::$config = $config;
    }

    public static function getInstance() {
        if(self::$instance == null) {
            $dsn = self::$config['dsn'] ?? '';
            $user = self::$config['user'] ?? '';
            $pass = self::$config['pass'] ?? '';
            $options = self::$config['options'] ?? [];

            $pdo = new PDO($dsn, $user, $pass, $options);
            self::$instance = new Db($pdo);
        }

        return self::$instance;
    }
}
