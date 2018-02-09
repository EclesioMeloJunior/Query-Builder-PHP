<?php

namespace App\Builder;

interface DirectorInterface {

    public function __construct(BuilderInterface $builder = null);
    public function all() : string;
}
