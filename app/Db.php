<?php

namespace App;

use PDO;
use App\Builder\DirectorInterface;

class Db {

    private $pdo        = null;
    private $sql        = null;
    private $director   = null;

    /**
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function setDirector(DirectorInterface $director) {
        $this->director = $director;
        return $this;
    }

    public function get() {
        $this->sql = $this->director->all();
        return $this;
    }

    public function execute() {
        return $this->pdo->query($this->sql);
    }

    public function pdo() {
        return $this->pdo;
    }


}
