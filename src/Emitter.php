<?php

require_once('src/Logic.php');

class Emitter {

    private $divisorLogic;

    public function __construct() {
        $this->divisorLogic = [
            new Logic(3, "Fizz"),
            new Logic(5, "Buzz"),
            new Logic(7, "Woof")
        ];
    }

    public function output($input) {
        $stringOutput = "";

        foreach($this->divisorLogic as $logic)
            $stringOutput .= $logic->output($input);

        if ($stringOutput === "")
            $stringOutput .= $input;

        return $stringOutput;
    }

}
