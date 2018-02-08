<?php

namespace App\QueryBuilder;

interface SqlContract {

    public function table(string $table) : SqlContract;
    public function select($collumns = '*') : SqlContract;
    public function get() : string;
}
