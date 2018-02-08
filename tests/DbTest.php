<?php

namespace App;

class DbTest extends \PHPUnit\Framework\TestCase {

    public function testDbNewInstance() {
        $this->assertInstanceOf('App\Db', new Db);
    }
}
