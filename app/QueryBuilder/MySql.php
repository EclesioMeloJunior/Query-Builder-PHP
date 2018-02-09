<?php

namespace App\QueryBuilder;

class MySql implements SqlContract {

    protected $sql      = null;
    protected $table    = null;

    public function table(string $table) : SqlContract {
        $this->table = '`' . $table . '`';
        return $this;
    }

    public function select($collumns = '*') : SqlContract {
        if($collumns != '*' && is_string($collumns)) {
            $collumns = explode(',', $collumns);
            $collumns =  array_map('trim', $collumns);
        }

        if(is_array($collumns)) {
            $collumns = implode('`, `', $collumns);
            $collumns = '`' . $collumns . '`';
        }

        $this->sql = sprintf('SELECT %s FROM %s ;', $collumns, $this->table);
        return $this;
    }

    public function get() : string {
        return $this->sql;
    }
}
