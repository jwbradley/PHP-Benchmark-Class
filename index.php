<?php

require_once 'classes/Benchmark.php';

$bench = new Benchmark();

$x = 1;
while ($x <= 100) {
    echo "hay i'm $x<br>";
    echo "Iteration Run time {$bench->elapsedTime()}";
    $x++;
}

echo "Total Run time {$bench->elapsedTime()}";
