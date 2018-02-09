<?php

namespace App\Builder;

interface BuilderInterface {

    public function setTable(string $table);
    public function all() : string;
}
