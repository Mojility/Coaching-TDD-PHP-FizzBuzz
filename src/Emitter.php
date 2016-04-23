<?php

class Emitter {

    public function output($input) {
        $stringOutput = "";

        if ($input % 3 == 0)
            $stringOutput .= "Fizz";

        if ($input % 5 == 0)
            $stringOutput .= "Buzz";

        if ($input % 7 == 0)
            $stringOutput .= "Woof";

        if ($stringOutput == "")
            $stringOutput .= $input;

        return $stringOutput;
    }

}
