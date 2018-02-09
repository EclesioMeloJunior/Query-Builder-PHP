<?php

namespace App\QueryBuilder;

class MySqlTest extends \PHPUnit\Framework\TestCase {

    public function  testSelectQuery() {
        $sql = new MySql;
        $query = $sql->table('users')->select()->get();

        $this->assertEquals('SELECT * FROM `users` ;', $query);
    }

    public function testSelectColumnsTextQuery() {
        $sql = new MySql;
        $query = $sql->table('users')->select('name, email')->get();

        $this->assertEquals('SELECT `name`, `email` FROM `users` ;', $query);
    }

    public function testSelectColumnsArrayQuery() {
        $sql = new MySql;
        $query = $sql->table('users')->select(['name', 'email', 'id'])->get();

        $this->assertEquals('SELECT `name`, `email`, `id` FROM `users` ;', $query);
    }
}
