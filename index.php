<?php

require_once 'classes/Benchmark.php';

$bench = new Benchmark();

$x = 1;
while ($x <= 100) {
    sleep(15);
    echo "Iteration Run time for cycle {$x}: {$bench->elapsedTime()}<br />\n";
    $x++;
}

echo "Total Run time {$bench->elapsedTime()}";
