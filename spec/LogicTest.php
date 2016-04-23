<?php

require_once('src/Logic.php');

class LogicTest extends PHPUnit_Framework_TestCase {

    function check($divisor, $output) {
        $l = new Logic($divisor, $output);
        $this->assertEquals($output, $l->output($divisor));
        $this->assertEquals("", $l->output($divisor+1));
        $this->assertEquals("", $l->output($divisor-1));
        $this->assertEquals($output, $l->output($divisor*2));
    }

    function testShouldRespondForFizz() {
        $this->check(3, "Fizz");
    }

    function testShouldRespondForBuzz() {
        $this->check(5, "Buzz");
    }

}
