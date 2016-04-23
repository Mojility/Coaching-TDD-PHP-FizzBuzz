<?php

class FizzBuzz {
    public function response($input) {
        if ($input % 3 == 0) return "Fizz";
        if ($input % 5 == 0) return "Buzz";
        if ($input % 3 == 0 && $input % 5 == 0) return "FizzBuzz";
        return $input;
    }
}

class FizzBuzzTest extends PHPUnit_Framework_TestCase {
    private $fb;

    public function __construct() {
        $this->fb = new FizzBuzz();
    }

    public function testOutput1As1() {
        $this->assertEquals(1, $this->fb->response(1));
    }

    public function testOutput2As2() {
        $this->assertEquals(2, $this->fb->response(2));
    }

    public function testOutput3AsFizz() {
        $this->assertEquals("Fizz", $this->fb->response(3));
    }

    public function testOutput5AsBuzz() {
        $this->assertEquals("Buzz", $this->fb->response(5));
    }
}
