<?php

namespace App\Tests\Util;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    public function testFizzBuzz(){
        $data = range(1,100);
        $result = $data[2] % 3;
        $this->assertEquals(0,$result);
    }

}