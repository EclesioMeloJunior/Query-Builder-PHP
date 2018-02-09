<?php

namespace App\Builder;

abstract class DirectorAbstract implements DirectorInterface {

    protected $table    = null;
    protected $builder  = null;

    public function __construct(BuilderInterface $builder = null)
    {
        $this->builder = $builder;
        $this->setTableName();
    }

    public function all() : string {
        $this->builder->setTable($this->table);
        return $this->builder->all();
    }

    protected function setTableName() {
        if($this->table === null) {
            $table = explode('\\', get_called_class());
            $table = array_pop($table);

            $this->table = strtolower($table);
        }
    }
}
