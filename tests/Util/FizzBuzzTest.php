<?php

namespace App\Tests\Util;

use App\Util\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{	
    public function testFizz(){
        $min = 1;
        $max = 100;
        $fizzBuzz = new FizzBuzz();
        $number = $fizzBuzz->getRandomNumber($min, $max);
        $result = $number % 3 == 0 ? "Fizz" : "";
        $this->assertEquals("Fizz",$result);
    }
	
    public function testBuzz(){
        $min = 1;
        $max = 100;
        $fizzBuzz = new FizzBuzz();
        $number = $fizzBuzz->getRandomNumber($min, $max);
        $result = $number % 5 == 0 ? "Buzz" : "";;
        $this->assertEquals("Buzz",$result);
    }
	
    public function testFizzBuzz(){
        $min = 1;
        $max = 100;
        $fizzBuzz = new FizzBuzz();
        $number = $fizzBuzz->getRandomNumber($min, $max);
        $result = $number % 3 == 0 && $number % 5 == 0 ? "FizzBuzz" : "";
        $this->assertEquals("FizzBuzz",$result);
    }
	
    public function testNone(){
        $min = 1;
        $max = 100;
        $fizzBuzz = new FizzBuzz();
        $number = $fizzBuzz->getRandomNumber($min, $max);
        $result = $number % 5 != 0 && $number % 3 != 0 ? $number : 0;
        $this->assertEquals($number,$result);
    }

}