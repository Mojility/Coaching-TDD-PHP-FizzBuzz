<?php

require_once('src/Emitter.php');

$e = new Emitter();

for ($i = 75; $i <= 125; $i++) {
    echo $e->output($i) . "\n";
}
