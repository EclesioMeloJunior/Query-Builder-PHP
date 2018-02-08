<?php

namespace App\QueryBuilder;

class MySql implements SqlContract {

    protected $sql      = null;
    protected $table    = null;

    public function table(string $table) : SqlContract {
        $this->table = spritnf(`%s`, $table);
        return $this;
    }

    public function select($collumns = '*') : SqlContract {
        if(is_array($collumns)) {
            $collumns = implode(', ', $collumns);
        }

        $this->sql = sprintf('SELECT %s FROM %s ;', $collumns, $this->table);
        return $this;
    }

    public function get() : string {
        return $this->sql;
    }
}
