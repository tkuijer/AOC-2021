<?php

$input = file_get_contents(__DIR__.'/../input/day_1.txt');

$lines = explode(PHP_EOL, $input);
$lines = array_map('trim', $lines);

$larger = 0;
$last = (int)array_shift($lines);
while ($line = (int)array_shift($lines)) {
    if($line > $last) {
        $larger++;
    }
    $last = $line;
}

echo $larger;