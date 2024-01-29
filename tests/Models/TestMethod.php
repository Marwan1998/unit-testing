<?php

namespace Tests\Models;

use Tests\TestCase;



final class Methods
{
    public function factorial($n) {
        if ($n < 2) {
            return 1;
        } else {
            return $n * $this->factorial($n - 1);
        }
    }

    public function biggerNumber($a, $b) {
        if ($a > $b) {
            return $a;
        } else {
            return $b;
        }
    }

    public function sumArray($numbers) {
        $sum = 0;
        for ($i = 0; $i < count($numbers); $i++) {
            $sum += $numbers[$i];
        }
        return $sum;
    }
    
}














final class TestMethod extends TestCase
{

    public function testFactorial() {

        $methods = new Methods();

        $this->assertEquals(1, $methods->factorial(0));
        $this->assertEquals(1, $methods->factorial(1));
        $this->assertEquals(3628800, $methods->factorial(10));
        $this->assertEquals(6, $methods->factorial(3));
        $this->assertEquals(24, $methods->factorial(4));
        $this->assertEquals(120, $methods->factorial(5));
    }


    public function testBiggerNumber() {

        $methods = new Methods();

        $this->assertEquals(0, $methods->biggerNumber(0, 0));
        $this->assertEquals(5, $methods->biggerNumber(1, 5));
        $this->assertEquals(10, $methods->biggerNumber(10, 7));
    }


    public function testSumArray() {

        $methods = new Methods();

        $this->assertEquals(15, $methods->sumArray([0, 0, 3, 5, 7]));
        $this->assertEquals(10, $methods->sumArray([1, 5, 0, -2, -4, 10]));
        $this->assertEquals(27, $methods->sumArray([10, 7, 10]));
    }

}
