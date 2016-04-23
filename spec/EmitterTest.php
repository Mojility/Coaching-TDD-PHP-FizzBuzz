<?php

require_once('src/Emitter.php');

class EmitterTest extends PHPUnit_Framework_TestCase {

    function testShouldEmitSimpleNumbers() {
        $emitter = new Emitter();
        $this->assertEquals(1, $emitter->output(1));
        $this->assertEquals(2, $emitter->output(2));
    }

    function testShouldEmitFizzFor3() {
        $emitter = new Emitter();
        $this->assertEquals("Fizz", $emitter->output(3));
    }

    function testShouldEmitBuzzFor5() {
        $emitter = new Emitter();
        $this->assertEquals("Buzz", $emitter->output(5));
    }

}
