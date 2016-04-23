<?php

class Logic {

    private $divisor, $output;

    public function __construct($divisor, $output) {
        $this->divisor = $divisor;
        $this->output = $output;
    }

    public function output($input) {
        if ($input % $this->divisor == 0) {
            return $this->output;
        } else {
            return "";
        }
    }

}
