<?php

class Emitter {

    public function output($input) {
        $out = "" + $input;

        if ($input == 3)
            $out = "Fizz";

        return $out;
    }

}
