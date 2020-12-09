<?php

namespace App\Tests\Util;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
	protected function setUp(){
		$this->data = range(1,100);
	}
	
	protected function setDown(){
		unset($this->data);
	}
	
	public function testFizz(){        
        $result = $this->data[2] % 3;
        $this->assertEquals(0,$result);
    }
	
	public function testBuzz(){        
        $result = $this->data[4] % 5;
        $this->assertEquals(0,$result);
    }
	
    public function testFizzBuzz(){        
        $result = $this->data[14] % 3 == 0 && $this->data[14] % 5 == 0;
        $this->assertEquals(true,$result);
    }

}