<?php

require __DIR__ . '/vendor/autoload.php';

use AOC\DayOne\DayOne;

echo "Day 1:" . PHP_EOL;
$input = file_get_contents(__DIR__ . '/input/day_1.txt');

echo "Part 1: " . DayOne::part_one($input) . PHP_EOL;
echo "Part 2: " . DayOne::part_two($input) . PHP_EOL;