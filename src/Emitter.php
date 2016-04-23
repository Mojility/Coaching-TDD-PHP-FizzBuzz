<?php

class Emitter {

    public function output($input) {
        $stringOutput = "" + $input;

        if ($input % 3 == 0)
            $stringOutput = "Fizz";

        if ($input % 5 == 0)
            $stringOutput = "Buzz";

        return $stringOutput;
    }

}
