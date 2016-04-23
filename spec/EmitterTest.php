<?php

require_once('src/Emitter.php');

class EmitterTest extends PHPUnit_Framework_TestCase {

    function setUp() {
        $this->emitter = new Emitter();
    }

    function testShouldEmitSimpleNumbers() {
        $this->assertEquals(1, $this->emitter->output(1));
        $this->assertEquals(2, $this->emitter->output(2));
    }

    function testShouldEmitFizzFor3() {
        $this->assertEquals("Fizz", $this->emitter->output(3));
    }

    function testShouldEmitBuzzFor5() {
        $this->assertEquals("Buzz", $this->emitter->output(5));
    }

    function testShouldEmitFizzBuzzFor15() {
        $this->assertEquals("FizzBuzz", $this->emitter->output(15));
    }

}
