<?php

namespace App\Util;

class FizzBuzz
{

    public function getData($min, $max){
        return range($min, $max);
    }

    public function printData($number){
        switch($number){
            case $number % 5 == 0 && $number % 3 == 0:
                return "FizzBuzz";
                break;
            case $number % 3 == 0:
                return "Fizz";
                break;
            case $number % 5 == 0:
                return "Buzz";
                break;
            default:
                return $number;
                break;
        }
    }
	
    public function getRandomNumber($min, $max){
        $arrayData = $this->getData($min, $max);
        return $arrayData[rand(0,count($arrayData)-1)];
    }
}