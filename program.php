<?php

require_once('src/Emitter.php');

$e = new Emitter();

for ($i = 1; $i <= 25; $i++) {
    echo $e->output($i) . "\n";
}
