<?php

namespace App\Builder;

use App\QueryBuilder\MySql;

class MySqlBuilder implements BuilderInterface {

    protected $query = null;

    public function __construct() {
        $this->query = new MySql;
    }

    public function setTable(string $table) {
        $this->query->table($table);
    }

    public function all() : string  {
        return $this->query->select()->get();
    }
}
